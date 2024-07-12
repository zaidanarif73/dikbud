<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Informasi;
use App\Http\Requests\Informasi\StoreRequest;


class InformasiController extends Controller
{
    public function __construct(){
        $this->route = "dashboard.informasi.";
        $this->view = "dashboard.pages.informasi.";
        $this->informasi = new Informasi();
    }

    public function index(Request $request){

        $table = $this->informasi;

        $table = $table->orderBy("created_at","DESC");
        $table = $table->paginate(10)->withQueryString();

        $data = [
            'table' => $table,
        ];
        return view($this->view."index",$data);
    }

    public function create(){
        return view($this->view."create");
    }

    public function store(StoreRequest $request){

        try {
            $title = $request->title;
            $file_path = $request->file("file_path");
            $file_path->store('file_path');

            $create = $this->informasi->create([
                'title' => $title,
                'file_path' => $file_path,
            ]);

            alert()->html('Berhasil','Data berhasil ditambahkan','success'); 
            return redirect()->route($this->route."index");

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal',$e->getMessage());
            return redirect()->route($this->route."create")->withInput();
        } 
    }
}
