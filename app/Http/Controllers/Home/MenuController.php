<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Pengaturan;
use Illuminate\Pagination\Paginator;

class menuController extends Controller
{
    protected $menu;

    public function __construct(){
        $this->view = "home.pages.menu.";
        $this->error = "home.pages.error.";
        $this->menu = new Menu();
        Paginator::useBootstrap();
    }
    
    public function show($title){
        $table_pengaturan = Pengaturan::first();
        $table_menu = Menu::all();

        $result = $this->menu;
        $result = $result->where('title',$title);
        $result = $result->first();

        //if data show fail
        if(!$result){
            return view($this->error."index");
        }
        
        $data = [
            'result' => $result,
            'table_pengaturan' => $table_pengaturan,
            'table_menu' => $table_menu,
        ];


        return view($this->view."show",$data);
    }
}
