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
        $search = $request->search;

        $table = $this->so;

        if(!empty($search)){
            $table = $table->where(function($query2) use($search){
                $query2->where("title","like","%".$search."%");
            });
        }
        $table = $table->orderBy("created_at","DESC");
        $table = $table->paginate(10)->withQueryString();

        $data = [
            'table' => $table,
            'table_pengaturan' => $table_pengaturan,
        ];

        return view($this->view."index",$data);
    }
    public function show($id){
        $table_pengaturan = Pengaturan::first();
        $table_menu = Menu::all();

        $result = $this->so;
        $result = $result->where('id',$id);
        $result = $result->first();

        $except_result = $this->so;
        $except_result = $except_result->where('id','!=',$id);
        $except_result = $except_result->orderBy("date","DESC");      //sort descending by time created data
        $except_result = $except_result->paginate(3);   //limit paginate only 10 data appears per load

        if(!$result){
            alert()->error('Gagal',"Data tidak ditemukan");
            return redirect()->route($this->route."index");
        }

        $data = [
            'result' => $result,
            'except_result' => $except_result,
            'table_pengaturan' => $table_pengaturan,
            'table_menu' => $table_menu, 
        ];
        //view count in show so
        views($result)->cooldown($minutes = 3)->record();

        return view($this->view."show",$data);
    }
}


// namespace App\Http\Controllers\Home;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Models\Pengaturan;

// class SOController extends Controller
// {   
//     public function __construct(){
//     $this->view = "home.pages.SO.";
//     }

//     public function index(){
//         $table_pengaturan = Pengaturan::first();

//         $data = [
//             'table_pengaturan' => $table_pengaturan,
//         ];
//         return view($this->view . "index", $data);
//     }
// }
