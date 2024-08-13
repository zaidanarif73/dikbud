<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\VM;

use Illuminate\Support\Facades\Log;
use App\Http\Requests\VM\StoreRequest;
use App\Http\Requests\VM\UpdateRequest;
use App\Helpers\UploadHelper;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class VMController extends Controller
{
    protected $vm;
   
    protected $route = 'dashboard.pages.vm.';
    /**
     * Display a listing of the revmurce.
     */
    public function __construct(){
        $this->route = "dashboard.vm.";
        $this->view = "dashboard.pages.vm.";
        $this->vm = new vm();
        
        Paginator::useBootstrap();
    }

    public function index(Request $request)
    {
        $search = $request->search;

        $table = $this->vm;
      

        if(!empty($search)){
            $table = $table->where(function($query2) use($search){
                $query2->where("nama","like","%".$search."%");
                
            });
        }
        $table = $table->orderBy("created_at","DESC");
        $table = $table->paginate(10)->withQueryString();

        $data = [
            'table' => $table,
            
        ];

        return view($this->view."index",$data);
    }

    /**
     * Show the form for creating a new revmurce.
     */
    public function create()
    {
        return view($this->view."create");
    }

    /**
     * Store a newly created revmurce in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        try {
            $nama = $request->nama;
            $jabatan = $request->jabatan;
            // $description = $request->description;
            $image = $request->file("image");
            

            if($image){
                $upload = UploadHelper::upload_file($image,'images',['jpeg','jpg','png','gif']);

                if($upload["IsError"] == TRUE){
                    throw new Error($upload["Message"]);
                }

                $image = $upload["Path"];
                $create = $this->vm->create([
                    'vm-trixFields' => $request->input('vm-trixFields'),
                    
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

    public function show($id)
    {
        $result = $this->vm;
        $result = $result->where('id',$id);
        $result = $result->first();

        if(!$result){
            alert()->error('Gagal',"Data tidak ditemukan");
            return redirect()->route($this->route."index");
        }

        $data = [
            'result' => $result,
        ];

        return view($this->view."show",$data);
    }

    
    public function edit($id)
    {
        $result = $this->vm;
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

    public function update(UpdateRequest $request, $id)
    {
        try {
            $result = $this->vm;
            $result = $result->where('id',$id);
            $result = $result->first();

            if(!$result){
                throw new Error("Data tidak ditemukan");
            }

            $nama = $request->nama;
            $jabatan = $request->jabatan;
            // $description = $request->description;
            $image = $request->file("image");

            if($image){
                $upload = UploadHelper::upload_file($image,'vm',['jpeg','jpg','png','gif']);

                if($upload["IsError"] == TRUE){
                    throw new Error($upload["Message"]);
                }

                $image = $upload["Path"];
            }
            else{
                $image = $result->image;
            }

            $result->update([
                'vm-trixFields' => $request->input('vm-trixFields'),
            ]);


            alert()->html('Berhasil','Data berhasil diubah','success'); 
            return redirect()->route($this->route."index");

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal',$e->getMessage());
            return redirect()->route($this->route."edit",$id)->withInput();
        }
    }

    /**
     * Remove the specified revmurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $result = $this->vm;
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
