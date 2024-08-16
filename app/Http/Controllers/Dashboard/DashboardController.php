<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Banner;
use App\Models\Menu;
use App\Models\Berita;
use App\Models\Layanan;
use App\Models\Tautan;
use App\Models\Inovasi;
use App\Models\Informasi;

class DashboardController extends Controller
{
    protected $view;

    public function __construct(){
        $this->view = "dashboard.pages.dashboard.";
        $this->galeri = new Galeri();
        $this->banner = new Banner();
        $this->menu = new Menu();
        $this->berita = new Berita();
        $this->layanan = new Layanan();
        $this->tautan = new Tautan();
        $this->inovasi = new Inovasi();
        $this->informasi = new Informasi();
    }

    public function index(){
        $count_galeri = $this->galeri;
        $count_banner = $this->banner;
        $count_menu = $this->menu;
        $count_berita = $this->berita;
        $count_layanan = $this->layanan;
        $count_tautan = $this->tautan;
        $count_inovasi = $this->inovasi;
        $count_informasi = $this->informasi;

        $count_galeri = $count_galeri->count('id');
        $count_banner = $count_banner->count('id');
        $count_menu = $count_menu->count('id');
        $count_berita = $count_berita->count('id');
        $count_layanan = $count_layanan->count('id');
        $count_tautan = $count_tautan->count('id');
        $count_inovasi = $count_inovasi->count('id');
        $count_informasi = $count_informasi->count('id');

        $data = [
            'count_galeri' => $count_galeri,
            'count_banner' => $count_banner,
            'count_menu' => $count_menu,
            'count_berita' => $count_berita,
            'count_layanan' => $count_layanan,
            'count_tautan' => $count_tautan,
            'count_inovasi' => $count_inovasi,
            'count_informasi' => $count_informasi,
        ];
        return view($this->view."index", $data);
    }
}