<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kalender;
use App\Models\Tautan;
use App\Models\Berita;
use App\Models\Banner;
use App\Models\Pengaturan;

class HomeController extends Controller
{
    // protected $tautan;
    
    public function __construct(){
        $this->view = "home.pages.home.";
        $this->tautan = new Tautan();
    }

    public function index(Request $request)
    {
        $table_tautan = Tautan::all();
        $table_berita = Berita::all();
        $table_banner = Banner::all();
        $table_pengaturan = Pengaturan::first();
        // $table = $table->orderBy("created_at","DESC");      //sort descending by time created data
        // // // $table = $table->paginate(10);   //limit paginate only 10 data appears per load
        $data = [
            'table_tautan' => $table_tautan,
            'table_berita' => $table_berita,
            'table_banner' => $table_banner,
            'table_pengaturan' => $table_pengaturan,
        ];

        return view($this->view."welcome",$data);
        // return dd($data );

    }
   
    //function for calendar handler in json
    public function events(){
        $events = Kalender::all();
        return response()->json($events);
    }   
}
