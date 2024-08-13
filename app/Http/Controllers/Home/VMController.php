<?php


namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VM;
use App\Models\Pengaturan;
use Illuminate\Pagination\Paginator;

class VMController extends Controller
{
    protected $vm;
    protected $route = 'home.pages.vm.';
    
    public function __construct(){
        $this->route = "home.vm.";
        $this->view = "home.pages.vm.";
        $this->vm = new VM();
        Paginator::useBootstrap();
    }
   
    public function index(Request $request)
    {   
        $table_pengaturan = Pengaturan::first();
        $search = $request->search;

        $table = $this->vm;

        if (!empty($search)) {
            $table = $table->where('title', 'like', "%{$search}%");
        }
        
        $table = $table->orderBy("created_at", "DESC")->paginate(10)->withQueryString();

        $data = [
            'table' => $table,
            'table_pengaturan' => $table_pengaturan,
        ];

        return view($this->view . "show", $data);
    }

    public function show($id)
    {
        $table_pengaturan = Pengaturan::first();
        $result = $this->vm->find($id);

        if (!$result) {
            alert()->error('Gagal', "Data tidak ditemukan");
            return redirect()->route($this->route . "index");
        }

        $except_result = $this->vm
            ->where('id', '!=', $id)
            ->orderBy("date", "DESC")
            ->paginate(3);

        $data = [
            'result' => $result,
            'except_result' => $except_result,
            'table_pengaturan' => $table_pengaturan,
        ];

        // Record the view count
        views($result)->cooldown($minutes = 3)->record();

        return view($this->view . "show", $data);
    }
}
