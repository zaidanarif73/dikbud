<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kalender;

class HomeController extends Controller
{
    public function __construct(){
        $this->view = "home.pages.home.";
    }

    public function index(){
        return view($this->view."welcome");
    }
    //function for calendar handler in json
    public function events(){
        $events = Kalender::all();
        return response()->json($events);
    }   
}
