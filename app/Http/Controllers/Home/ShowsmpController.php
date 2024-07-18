<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class   ShowsmpController extends Controller
{
    public function __construct(){
        $this->view = "home.pages.pembelajaran.";
    }

    public function index(){
        return view($this->view."showsmp");
    }
}