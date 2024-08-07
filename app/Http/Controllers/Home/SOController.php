<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaturan;

class SOController extends Controller
{   
    public function __construct(){
    $this->view = "home.pages.SO.";
    }

    public function index(){
        $table_pengaturan = Pengaturan::first();

        $data = [
            'table_pengaturan' => $table_pengaturan,
        ];
        return view($this->view . "index", $data);
    }
}
