<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function __construct(){
        $this->view = "home.pages.profil.";
    }

    public function index(){
        return view($this->view."index");
    }
}
