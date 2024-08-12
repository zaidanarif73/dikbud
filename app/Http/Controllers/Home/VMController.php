<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaturan;
use App\Models\Menu;

class VMController extends Controller
{
    public function __construct(){
        $this->view = "home.pages.VM.";
        }
    
        public function index(){
            $table_pengaturan = Pengaturan::first();
            $table_menu = Menu::all();

            $data = [
                'table_pengaturan' => $table_pengaturan,
                'table_menu' => $table_menu,
            ];
            return view($this->view . "index", $data);
        }
}
