<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Pagination\Paginator;

class BeritaController extends Controller
{
    protected $berita;
    protected $route = 'home.pages.berita.';
    public function __construct(){
        $this->route = "home.berita.";
        $this->view = "home.pages.berita.";
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
    public function show($id){
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
}
