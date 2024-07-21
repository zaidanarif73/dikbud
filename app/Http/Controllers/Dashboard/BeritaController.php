<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\Berita\StoreRequest;
use App\Http\Requests\Berita\UpdateRequest;
use App\Helpers\UploadHelper;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class BeritaController extends Controller
{
    protected $berita;
    protected $route = 'dashboard.pages.berita.';
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->route = "dashboard.berita.";
        $this->view = "dashboard.pages.berita.";
        $this->berita = new Berita();
        Paginator::useBootstrap();
    }

    public function index(Request $request)
    {
        $search = $request->search;

        $table = $this->berita;

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
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
        // ]);

        // try {
        //     $title = $request->input('title');
        //     $description = $request->input('description');
        //     $image = $request->file('image');

        //     if ($image) {
        //         $upload = UploadHelper::upload_file($image, 'image', ['jpeg', 'jpg', 'png', 'gif']);

        //         if ($upload["IsError"] == true) {
        //             throw new \Exception($upload["Message"]);
        //         }

        //         $imagePath = $upload["Path"];
        //         Berita::create([
        //             'title' => $title,
        //             'description' => $description,
        //             'image' => $imagePath,
        //         ]);
        //     }

        //     return redirect()->route('beritas.index')->with('success', 'Berita created successfully.');
        // } catch (\Throwable $e) {
        //     Log::emergency($e->getMessage());

        //     return redirect()->route('beritas.create')->with('error', $e->getMessage())->withInput();
        // }
       
        try {
            $title = $request->title;
            // $description = $request->description;
            $image = $request->file("image");
            

            if($image){
                $upload = UploadHelper::upload_file($image,'images',['jpeg','jpg','png','gif']);

                if($upload["IsError"] == TRUE){
                    throw new Error($upload["Message"]);
                }

                $image = $upload["Path"];
                $create = $this->berita->create([
                    'title' => $title,
                    'berita-trixFields' => $request->input('berita-trixFields'),
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
        $result = $this->berita;
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
        $result = $this->berita;
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
            $result = $this->berita;
            $result = $result->where('id',$id);
            $result = $result->first();

            if(!$result){
                throw new Error("Data tidak ditemukan");
            }

            $title = $request->title;
            $description = $request->description;
            $image = $request->file("image");

            if($image){
                $upload = UploadHelper::upload_file($image,'berita',['jpeg','jpg','png','gif']);

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
                'description'=> $description,
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
            $result = $this->berita;
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
