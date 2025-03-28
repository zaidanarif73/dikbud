<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Pejabat;

use Illuminate\Support\Facades\Log;
use App\Http\Requests\Pejabat\StoreRequest;
use App\Http\Requests\Pejabat\UpdateRequest;
use App\Helpers\UploadHelper;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class PejabatController extends Controller
{
    protected $pejabat;
   
    protected $route = 'dashboard.pages.pejabat.';
    /**
     * Display a listing of the repejabaturce.
     */
    public function __construct(){
        $this->route = "dashboard.pejabat.";
        $this->view = "dashboard.pages.pejabat.";
        $this->pejabat = new Pejabat();
        
        Paginator::useBootstrap();
    }

    public function index(Request $request)
    {
        $search = $request->search;

        $table = $this->pejabat;
      

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
     * Show the form for creating a new repejabaturce.
     */
    public function create()
    {
        return view($this->view."create");
    }

    /**
     * Store a newly created repejabaturce in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        try {
            $nama = $request->nama;
            $jabatan = $request->jabatan;
            $image = $request->file("image");
            

            if($image){
                $upload = UploadHelper::upload_file($image,'images',['jpeg','jpg','png','gif']);

                if($upload["IsError"] == TRUE){
                    throw new Error($upload["Message"]);
                }

                $image = $upload["Path"];
                $create = $this->pejabat->create([
                    'nama' => $nama,
                    'jabatan' => $jabatan,
                    'image' => $image,
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
        $result = $this->pejabat;
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
        $result = $this->pejabat;
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
            $result = $this->pejabat;
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
                $upload = UploadHelper::upload_file($image,'pejabat',['jpeg','jpg','png','gif']);

                if($upload["IsError"] == TRUE){
                    throw new Error($upload["Message"]);
                }

                $image = $upload["Path"];
            }
            else{
                $image = $result->image;
            }

            $result->update([
                'nama' => $nama,
                'jabatan' => $jabatan,
                'image' => $image,
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
     * Remove the specified repejabaturce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $result = $this->pejabat;
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
