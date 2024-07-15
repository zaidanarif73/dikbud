<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function __construct(){
        $this->view = "dashboard.pages.banner.";
    }

     public function index()
    {
        return view($this->view."index");
    }
}
