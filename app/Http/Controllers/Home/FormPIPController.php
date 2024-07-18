<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormPIPController extends Controller
{
    public function __construct(){
        $this->view = "home.pages.form_PIP.";
    }

    public function index(){
        return view($this->view."index"); 
    }
}