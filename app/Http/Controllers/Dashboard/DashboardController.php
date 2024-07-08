<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $view;

    public function __construct(){
        $this->view = "dashboard.pages.dashboard.";
    }

    public function index(){
        return view($this->view."index");
    }
}