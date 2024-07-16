<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Http\Requests\Galeri\StoreRequest;
use App\Http\Requests\Galeri\UpdateRequest;
use App\Helpers\UploadHelper;
use Illuminate\Pagination\Paginator;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->route = "dashboard.galeri.";
        $this->view = "dashboard.pages.galeri.";
        $this->galeri = new Galeri();
        Paginator::useBootstrap();
    }

     public function index(Request $request)
    {
        $table = $this->galeri;  //declaration of model databases
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

    public function create()
    {
        return view($this->view."create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request){
        try {
            $title = $request->title;
            $description = $request->description;
            $image = $request->file('image');
            
            if($image){
                $upload = UploadHelper::upload_file($image,'image_galeri',['jpg','img','png']);

                if($upload["IsError"] == TRUE){
                    throw new Error($upload["Message"]);
                }

                $image = $upload["Path"];
            }
            //store on db
            $create = $this->galeri->create([
                'title' => $title,
                'description' => $description,
                'image' => $image,
            ]);
            
            alert()->html('Berhasil','Data berhasil ditambahkan','success'); 
            return redirect()->route($this->route."index");
        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());
            alert()->error('Gagal',$e->getMessage());
            return redirect()->route($this->route."create")->withInput();
        } 
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        //
    }
}
