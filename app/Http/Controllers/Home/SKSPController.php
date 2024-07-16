<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SKSPController extends Controller
{
    public function __construct(){
        $this->view = "home.pages.SKSP.";
    }

    public function index(){
        return view($this->view."index"); 
    }
}
