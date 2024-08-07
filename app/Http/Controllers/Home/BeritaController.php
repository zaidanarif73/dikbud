<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Pengaturan;
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
        $table_pengaturan = Pengaturan::first();
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
            'table_pengaturan' => $table_pengaturan,
        ];

        return view($this->view."index",$data);
    }
    public function show($id){
        $table_pengaturan = Pengaturan::first();

        $result = $this->berita;
        $result = $result->where('id',$id);
        $result = $result->first();

        $except_result = $this->berita;
        $except_result = $except_result->where('id','!=',$id);
        $except_result = $except_result->orderBy("date","DESC");      //sort descending by time created data
        $except_result = $except_result->paginate(3);   //limit paginate only 10 data appears per load

        if(!$result){
            alert()->error('Gagal',"Data tidak ditemukan");
            return redirect()->route($this->route."index");
        }

        $data = [
            'result' => $result,
            'except_result' => $except_result,
            'table_pengaturan' => $table_pengaturan,
        ];

        return view($this->view."show",$data);
    }
}
