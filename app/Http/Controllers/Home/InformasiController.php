<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Informasi;
use App\Models\Pengaturan;

class InformasiController extends Controller
{
    public function __construct(){
        $this->view = "home.pages.informasi.";
        $this->route = "home.informasi.";
        $this->informasi = new Informasi();
    }

    public function index(Request $request){
        $table_pengaturan = Pengaturan::first(); //for footer handler

        $table = $this->informasi;

        $year = $request->year; //for year filter in modal
        $produkHukum = $request->produkHukum;
        if(!empty($year)){
            $table = $table->where(function($query2) use($year){
                $query2->where("title","like","%".$year."%");
            });
            
        }
        if(!empty($produkHukum)){
            $table = $table->where(function($query2) use($produkHukum){
                $query2->where("title","like","%".$produkHukum."%");
            });
            
        }
        $table = $table->orderBy("created_at","DESC");      //sort descending by time created data
        $table = $table->paginate();   //limit paginate only 10 data appears per load
        $data = [
            'table' => $table,  
            'table_pengaturan' => $table_pengaturan,                             
        ];
        return view($this->view."index",$data);
    }
}
