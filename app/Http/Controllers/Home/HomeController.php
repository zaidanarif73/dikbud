<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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


        // Fetch the most viewed berita id
        $count_view = DB::table('views')
        ->select('viewable_id', DB::raw('COUNT(*) as total'))
        ->groupBy('viewable_id')
        ->orderBy('total', 'DESC')
        ->first();

        if($count_view == null){
            $data = [
                'table_tautan' => $table_tautan,
                'table_berita' => $table_berita,
                'table_banner' => $table_banner,
                'table_pengaturan' => $table_pengaturan,
                'table_view' => null,
            ];
    
            return view($this->view."welcome",$data);
        }else{
            // Get the id of the most viewed berita
            $id_count = $count_view->viewable_id;
            // Fetch the berita record with the most views
            $table_view = $table_berita->where('id', $id_count)->first();


            $data = [
                'table_tautan' => $table_tautan,
                'table_berita' => $table_berita,
                'table_banner' => $table_banner,
                'table_pengaturan' => $table_pengaturan,
                'table_view' => $table_view,
                'count_view' => $count_view,
            ];

            return view($this->view."welcome",$data);
        }
        // return dd($data );

    }
   
    //function for calendar handler in json
    public function events(){
        $events = Kalender::all();
        return response()->json($events);
    }   
}
