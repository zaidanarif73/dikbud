<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SolikinController extends Controller
{
    public function __construct(){
        $this->view = "home.pages.solikin.";
    }

    public function index(){
        return view($this->view."index"); 
    }
}
