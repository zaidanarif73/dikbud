<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kalender;
use App\Models\Tautan;
use App\Models\Berita;

class HomeController extends Controller
{
    // protected $tautan;
    
    public function __construct(){
        $this->view = "home.pages.home.";
        $this->tautan = new Tautan();
    }

    public function index(Request $request)
    {
        $table = Tautan::all();
        $table = Berita::all();
        // $table = $table->orderBy("created_at","DESC");      //sort descending by time created data
        // // // $table = $table->paginate(10);   //limit paginate only 10 data appears per load
        $data = [
            'table' => $table,
        ];

        return view($this->view."welcome",$data);

    }
   
    //function for calendar handler in json
    public function events(){
        $events = Kalender::all();
        return response()->json($events);
    }   
}
