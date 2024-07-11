<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct(){
        $this->view = "dashboard.pages.menu.";
    }

    public function index(){
        return view($this->view."index");
    }
}
