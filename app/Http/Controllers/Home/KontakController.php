<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function __construct(){
        $this->view = "home.pages.kontak.";
    }

    public function index(){
        return view($this->view."index");
    }
}
