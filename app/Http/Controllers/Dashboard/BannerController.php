<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\Banner\StoreRequest;
use App\Http\Requests\Banner\UpdateRequest;
use App\Helpers\UploadHelper;
use Illuminate\Pagination\Paginator;

class BannerController extends Controller
{
    protected $banner;
    protected $route = 'dashboard.pages.banner.';
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->route = "dashboard.banner.";
        $this->view = "dashboard.pages.banner.";
        $this->banner = new Banner();
        Paginator::useBootstrap();
    }

    public function index(Request $request)
    {
        $search = $request->search;

        $table = $this->banner;

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

       public function create()
    {
        return view($this->view."create");
    }

        public function store(StoreRequest $request)
    {
               
        try {
            $title = $request->title;
            $image = $request->file("image");
            

            if($image){
                $upload = UploadHelper::upload_file($image,'image',['jpeg','jpg','png','gif']);

                if($upload["IsError"] == TRUE){
                    throw new Error($upload["Message"]);
                }

                $image = $upload["Path"];
                $create = $this->banner->create([
                    'title' => $title,
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
        $result = $this->banner;
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
        $result = $this->banner;
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
            $result = $this->banner;
            $result = $result->where('id',$id);
            $result = $result->first();

            if(!$result){
                throw new Error("Data tidak ditemukan");
            }

            $title = $request->title;
            $image = $request->file("image");

            if($image){
                $upload = UploadHelper::upload_file($image,'banner',['jpeg','jpg','png','gif']);

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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $result = $this->banner;
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
