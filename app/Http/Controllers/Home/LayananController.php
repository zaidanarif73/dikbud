<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Pengaturan;
use Illuminate\Pagination\Paginator;

class LayananController extends Controller
{
    protected $layanan;
    protected $route = 'home.pages.layanan.';
    public function __construct(){
        $this->route = "home.layanan.";
        $this->view = "home.pages.layanan.";
        $this->layanan = new Layanan();
        Paginator::useBootstrap();
    }
   
    public function index(Request $request)
    {   
        $table_pengaturan = Pengaturan::first();
        $search = $request->search;

        $table = $this->layanan;

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

        $result = $this->layanan;
        $result = $result->where('id',$id);
        $result = $result->first();

        $except_result = $this->layanan;
        $except_result = $except_result->where('id','!=',$id);
       

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
