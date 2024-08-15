<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Informasi;
use App\Models\Pengaturan;
use App\Models\Menu;
use Illuminate\Pagination\Paginator;

class InformasiController extends Controller
{
    public function __construct(){
        $this->view = "home.pages.informasi.";
        $this->route = "home.informasi.";
        $this->informasi = new Informasi();
        Paginator::useBootstrap();
    }

    public function index(Request $request) {
        $table_pengaturan = Pengaturan::first(); // for footer handler
        $table_menu = Menu::all();
    
        $table = $this->informasi;
    
        $year = $request->year; // for year filter in modal
        $produkHukum = $request->produkHukum;
        $search = $request->search; // get the search query
    
        if (!empty($year)) {
            $table = $table->where("title", "like", "%" . $year . "%");
        }
    
        if (!empty($produkHukum)) {
            $table = $table->where("title", "like", "%" . $produkHukum . "%");
        }
    
        if (!empty($search)) {
            $table = $table->where("title", "like", "%" . $search . "%");
                        //    ->orWhere("created_at", "like", "%" . $search . "%"); // Adjust fields as needed
        }
    
        $table = $table->orderBy("created_at", "DESC");
        $table = $table->paginate(10); // limit paginate only 10 data appears per load
    
        $data = [
            'table' => $table,
            'table_pengaturan' => $table_pengaturan,
            'table_menu' => $table_menu,
        ];
    
        return view($this->view . "index", $data);
    }
    
}
