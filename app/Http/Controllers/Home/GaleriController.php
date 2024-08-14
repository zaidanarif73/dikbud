<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Menu;
use App\Models\Pengaturan;
use Illuminate\Pagination\Paginator;


class GaleriController extends Controller
{
    public function __construct(){
        $this->route = "home.galeri.";
        $this->view = "home.pages.galeri.";
        $this->galeri = new Galeri();
        Paginator::useBootstrap();
    }

    public function index(){
        $table_pengaturan = Pengaturan::first(); //for footer handler
        $table_menu = Menu::all();
        
        $table = $this->galeri;  //declaration of model databases
        
        $table = $table->orderBy("created_at","DESC");      //sort descending by time created data
        $table = $table->paginate(12);   //limit paginate only 10 data appears per load
        $data = [
            'table' => $table, 
            'table_pengaturan' => $table_pengaturan,  
            'table_menu' => $table_menu,                           
        ];
        return view($this->view."index",$data);
    }

    public function show($id)
    {
        $user = Galeri::find($id);

        return response()->json($user);
    }
}
