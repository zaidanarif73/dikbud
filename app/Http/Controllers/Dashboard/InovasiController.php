<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Inovasi;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\Inovasi\StoreRequest;
use App\Http\Requests\Inovasi\UpdateRequest;
use App\Helpers\UploadHelper;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Auth;

class InovasiController extends Controller
{
    protected $inovasi;
    protected $route = 'dashboard.pages.inovasi.';
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->route = "dashboard.inovasi.";
        $this->view = "dashboard.pages.inovasi.";
        $this->inovasi = new inovasi();
        Paginator::useBootstrap();
    }

    public function index(Request $request)
    {
        $search = $request->search;

        $table = $this->inovasi;

        if(!empty($search)){
            $table = $table->where(function($query2) use($search){
                $query2->where("title","like","%".$search."%");
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->view."create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        try {
            $title = $request->title;
            $image = $request->file("image");
            $date = $request->date;
            

            if($image){
                $upload = UploadHelper::upload_file($image,'images',['jpeg','jpg','png','gif']);

                if($upload["IsError"] == TRUE){
                    throw new Error($upload["Message"]);
                }

                $image = $upload["Path"];
                $create = $this->inovasi->create([
                    'title' => $title,
                    'inovasi-trixFields' => $request->input('inovasi-trixFields'),
                    'image' => $image,
                    'date'=> $date,
                    'creator' => Auth::user()->name,
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
        $result = $this->inovasi;
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
        $result = $this->inovasi;
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
            $result = $this->inovasi;
            $result = $result->where('id',$id);
            $result = $result->first();

            if(!$result){
                throw new Error("Data tidak ditemukan");
            }

            $title = $request->title;
            $image = $request->file("image");
            $date = $request->date;

            if($image){
                $upload = UploadHelper::upload_file($image,'inovasi',['jpeg','jpg','png','gif']);

                if($upload["IsError"] == TRUE){
                    throw new Error($upload["Message"]);
                }

                $image = $upload["Path"];
            }
            else{
                $image = $result->image;
            }

            $result->update([
                'title' => $title,
                'inovasi-trixFields' => $request->input('inovasi-trixFields'),
                'image' => $image,
                'date'=> $date
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $result = $this->inovasi;
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
