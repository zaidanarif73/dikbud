<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function __construct(){
        $this->route = "home.galeri.";
        $this->view = "home.pages.galeri.";
        $this->galeri = new Galeri();
    }

    public function index(){
        $table = $this->galeri;  //declaration of model databases
        
        $table = $table->orderBy("created_at","DESC");      //sort descending by time created data
        $table = $table->paginate();   //limit paginate only 10 data appears per load
        $data = [
            'table' => $table,                              
        ];
        return view($this->view."index",$data);
    }

    public function show($id)
    {
        $user = Galeri::find($id);

        return response()->json($user);
    }
}
