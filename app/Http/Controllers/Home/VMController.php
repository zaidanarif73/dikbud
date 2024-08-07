<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaturan;

class VMController extends Controller
{
    public function __construct(){
        $this->view = "home.pages.VM.";
        }
    
        public function index(){
            $table_pengaturan = Pengaturan::first();
            $data = [
                'table_pengaturan' => $table_pengaturan,
            ];
            return view($this->view . "index", $data);
        }
}
