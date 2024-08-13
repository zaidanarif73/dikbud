<?php


namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VM;
use App\Models\Pengaturan;
use Illuminate\Pagination\Paginator;
use App\Models\Menu;

class VMController extends Controller
{
    protected $vm;
    protected $route = 'home.pages.vm.';
    public function __construct(){
        $this->route = "home.vm.";
        $this->view = "home.pages.vm.";
        $this->vm = new VM();
        Paginator::useBootstrap();
    }
   
    public function index(Request $request)
    {   
        $table_pengaturan = Pengaturan::first();
        $table_menu = Menu::all();

        $result = $this->vm;
        $result = $result->first();

        $data = [
            'result' => $result,
            'table_pengaturan' => $table_pengaturan,
            'table_menu' => $table_menu,
        ];

        return view($this->view."index",$data);
    }
}