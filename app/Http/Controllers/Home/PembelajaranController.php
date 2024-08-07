<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

class PembelajaranController extends Controller
{
    public function __construct(){
        $this->view = "home.pages.pembelajaran.";
    }

    public function index(){
        $table_pengaturan = Pengaturan::first(); //for footer handler

        $data = [

            'table_pengaturan' => $table_pengaturan,                             
        ];
        return view($this->view."index", $data);
    }
}
