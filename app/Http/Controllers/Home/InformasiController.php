<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Informasi;

class InformasiController extends Controller
{
    public function __construct(){
        $this->view = "home.pages.informasi.";
        $this->route = "home.informasi.";
        $this->informasi = new Informasi();
    }

    public function index(){

        $table = $this->informasi;
        $table = $table->orderBy("created_at","DESC");      //sort descending by time created data
        $table = $table->paginate();   //limit paginate only 10 data appears per load
        $data = [
            'table' => $table,                              
        ];
        return view($this->view."index",$data);
    }
}
