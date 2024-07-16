<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengantiijazahController extends Controller
{
    public function __construct(){
        $this->view = "home.pages.pengganti_ijazah.";
    }

    public function index(){
        return view($this->view."index"); 
    }
}