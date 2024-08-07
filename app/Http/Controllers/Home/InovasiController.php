<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inovasi;
use App\Models\Pengaturan;
use Illuminate\Pagination\Paginator;

class InovasiController extends Controller
{
    protected $inovasi;
    protected $route = 'home.pages.inovasi.';
    public function __construct(){
        $this->route = "home.inovasi.";
        $this->view = "home.pages.inovasi.";
        $this->inovasi = new inovasi();
        Paginator::useBootstrap();
    }
   
    public function index(Request $request)
    {
        $table_pengaturan = Pengaturan::first();

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
            'table_pengaturan' => $table_pengaturan,
        ];

        return view($this->view."index",$data);
    }
    public function show($id){
        $table_pengaturan = Pengaturan::first();

        $result = $this->inovasi;
        $result = $result->where('id',$id);
        $result = $result->first();

        $except_result = $this->inovasi;
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
