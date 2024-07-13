<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Informasi;
use App\Http\Requests\Informasi\StoreRequest;
use App\Http\Requests\Informasi\UpdateRequest;
use App\Helpers\UploadHelper;
use Illuminate\Pagination\Paginator;


class InformasiController extends Controller
{
    public function __construct(){
        $this->route = "dashboard.informasi.";
        $this->view = "dashboard.pages.informasi.";
        $this->informasi = new Informasi();
        Paginator::useBootstrap();
    }

    public function index(Request $request){
        $table = $this->informasi;  //declaration of model databases
        $search = $request->search; //for search filter in modal
        if(!empty($search)){
            $table = $table->where(function($query2) use($search){
                $query2->where("title","like","%".$search."%");
            });
        }
        
        $table = $table->orderBy("created_at","DESC");      //sort descending by time created data
        $table = $table->paginate(10);   //limit paginate only 10 data appears per load
        $data = [
            'table' => $table,                              
        ];
        return view($this->view."index",$data);
    }

    public function create(){
        return view($this->view."create");
    }

    public function store(StoreRequest $request){
        try {
            $title = $request->title;
            $file_link = $request->file_link;
            $file_path = $request->file('file_path');
            
            if($file_path != null){
                //if admin post file
                if($file_path){
                    $upload = UploadHelper::upload_file($file_path,'file_path',[]);
    
                    if($upload["IsError"] == TRUE){
                        throw new Error($upload["Message"]);
                    }
    
                    $file_path = $upload["Path"];
                }
                //store on db
                $create = $this->informasi->create([
                    'title' => $title,
                    'type' => 'file',
                    'file_path' => $file_path,
                ]);
            }else if($file_link != null){
                //if admin post link
                $create = $this->informasi->create([
                    'title' => $title,
                    'type' => 'link',
                    'file_link' => $file_link,
                ]);
            }
            
            alert()->html('Berhasil','Data berhasil ditambahkan','success'); 
            return redirect()->route($this->route."index");
        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());
            alert()->error('Gagal',$e->getMessage());
            return redirect()->route($this->route."create")->withInput();
        } 
    }

    public function edit($id){
        $result = $this->informasi;
        $result = $result->where('id',$id);
        $result = $result->first();

        if(!$result){
            alert()->error('Gagal',"Data tidak ditemukan");
            return redirect()->route($this->route."index");
        }

        $data = [
            'result' => $result,
        ];

        return view($this->view."edit",$data);
    }

    public function update(UpdateRequest $request, $id){
        try {
            $result = $this->informasi;
            $result = $result->where('id',$id);
            $result = $result->first();

            if(!$result){
                throw new Error("Data tidak ditemukan");
            }

            $title = $request->title;
            $file_link = $request->file_link;
            $file_path = $request->file('file_path');

            if($file_path != null){
                //if admin post file
                if($file_path){
                    $upload = UploadHelper::upload_file($file_path,'file_path',[]);
    
                    if($upload["IsError"] == TRUE){
                        throw new Error($upload["Message"]);
                    }
    
                    $file_path = $upload["Path"];
                }else{
                    $file_path = $result->file_path;    //set file as same as before if there nothing on update
                }
                //update on db
                $result->update([
                    'title' => $title,
                    'type' => 'file',
                    'file_path' => $file_path,
                    'file_link' => null,
                ]);
            }else if($file_link != null){
                //if admin post link
                $result->update([
                    'title' => $title,
                    'type' => 'link',
                    'file_link' => $file_link,
                    'file_path' => null,
                ]);
            }

            alert()->html('Berhasil','Data berhasil diubah','success'); 
            return redirect()->route($this->route."index");

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal',$e->getMessage());
            return redirect()->route($this->route."edit",$id)->withInput();
        }
    }

    public function destroy($id){
        try {
            $result = $this->informasi;
            $result = $result->where('id',$id);
            $result = $result->first();

            $result->delete();

            alert()->html('Berhasil','Data berhasil dihapus','success'); 
            return redirect()->route($this->route."index");

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal',$e->getMessage());
            return redirect()->route($this->route."index");
        }
    }
}
