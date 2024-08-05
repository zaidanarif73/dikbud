<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Log;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->view = "dashboard.pages.kontak.";
        $this->route = "dashboard.kontak.";
        $this->kontak = new kontak();
        Paginator::useBootstrap();
    }

    public function index(Request $request)
    {
        $search = $request->search;

        $table = $this->kontak;

        if(!empty($search)){
            $table = $table->where(function($query2) use($search){
                $query2->where("name","like","%".$search."%");
            });
        }
        $table = $table->orderBy("created_at","DESC");
        $table = $table->paginate(10)->withQueryString();

        $data = [
            'table' => $table,
        ];

        return view($this->view."index",$data);
    }

    public function show($id)
    {
        $result = $this->kontak;
        $result = $result->where('id',$id);
        $result = $result->first();


        if(!$result){
            alert()->error('Gagal',"Data tidak ditemukan");
            return redirect()->route($this->route."index");
        }

        $data = [
            'result' => $result,
        ];

        return view($this->view."show",$data);
    }

    public function destroy($id)
    {
        try {
            $result = $this->kontak;
            $result = $result->where('id',$id);
            $result = $result->first();

            $result->delete();

            alert()->html('Berhasil','Data berhasil dihapus','success'); 
            return redirect()->route($this->route."index");

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal',$e->getMessage());
            return redirect()->route($this->route."index");
        }
    }
}
