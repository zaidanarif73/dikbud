<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Banner;
use App\Models\Menu;
use App\Models\Berita;

class DashboardController extends Controller
{
    protected $view;

    public function __construct(){
        $this->view = "dashboard.pages.dashboard.";
        $this->galeri = new Galeri();
        $this->banner = new Banner();
        $this->menu = new Menu();
        $this->berita = new Berita();
    }

    public function index(){
        $count_galeri = $this->galeri;
        $count_banner = $this->banner;
        $count_menu = $this->menu;
        $count_berita = $this->berita;

        $count_galeri = $count_galeri->count('id');
        $count_banner = $count_banner->count('id');
        $count_menu = $count_menu->count('id');
        $count_berita = $count_berita->count('id');

        $data = [
            'count_galeri' => $count_galeri,
            'count_banner' => $count_banner,
            'count_menu' => $count_menu,
            'count_berita' => $count_berita,
        ];
        return view($this->view."index", $data);
    }
}