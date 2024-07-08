<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function __construct(){
        $this->view = "home.pages.";
    }

    public function index(){
        return view($this->view."profil.index");
    }

    public function index_SO(){
        return view($this->view."SO.index");
    }

    public function index_VM(){
        return view($this->view."VM.index");
    }
}
