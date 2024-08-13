<?php


namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SO;
use App\Models\Pengaturan;
use Illuminate\Pagination\Paginator;
use App\Models\Menu;

class SOController extends Controller
{
    protected $so;
    protected $route = 'home.pages.so.';
    public function __construct(){
        $this->route = "home.so.";
        $this->view = "home.pages.so.";
        $this->so = new SO();
        Paginator::useBootstrap();
    }
   
    public function index(Request $request)
    {   
        $table_pengaturan = Pengaturan::first();
        $table_menu = Menu::all();

        $result = $this->so;
        $result = $result->first();

        $data = [
            'result' => $result,
            'table_pengaturan' => $table_pengaturan,
            'table_menu' => $table_menu,
        ];

        return view($this->view."index",$data);
    }
}