<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Menu\StoreRequest;
use App\Http\Requests\Menu\UpdateRequest;
use App\Helpers\UploadHelper;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class MenuController extends Controller
{
    protected $menu;
    protected $route = 'dashboard.pages.menu.';
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->route = "dashboard.menu.";
        $this->view = "dashboard.pages.menu.";
        $this->menu = new menu();
        Paginator::useBootstrap();
    }

    public function index(Request $request)
    {
        $search = $request->search;

        $table = $this->menu;

        if (!empty($search)) {
            $table = $table->where(function ($query2) use ($search) {
                $query2->where("title", "like", "%" . $search . "%");
            });
        }
        $table = $table->orderBy("created_at", "DESC");
        $table = $table->paginate(10)->withQueryString();

        $data = [
            'table' => $table,
        ];
        // dd($data);
        return view($this->view . "index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //query for grouping the parent_main
        $table = $this->menu;

        $data = [
            'table' => $table,
            'menu' => Menu::whereNull('parent')->orderBy('title')->get()
        ];
        return view($this->view . "create", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        try {
            $title = $request->title;

            $create = $this->menu->create([
                'title' => $title,
                'parent' => $request->parent ?? null,
                'menu-trixFields' => $request->input('menu-trixFields'),
            ]);

            alert()->html('Berhasil', 'Data berhasil ditambahkan', 'success');
            return redirect()->route($this->route . "index");
        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal', $e->getMessage());

            return redirect()->route($this->route . "create")->withInput();
        }
    }

    public function show($id)
    {
        $result = $this->menu;
        $result = $result->where('id', $id);
        $result = $result->first();

        if (!$result) {
            alert()->error('Gagal', "Data tidak ditemukan");
            return redirect()->route($this->route);
        }

        $data = [
            'result' => $result,
        ];

        return view($this->view . "show", $data);
    }

    public function edit($id)
    {
        $result = $this->menu->find($id);
    
        if (!$result) {
            alert()->error('Gagal', "Data tidak ditemukan");
            return redirect()->route($this->route . "index");
        }
    
        $data = [
            'result' => $result,
            'menu' => Menu::whereNull('parent')->where('id', '!=', $id)->orderBy('title')->get(),
        ];
    
        return view($this->view . "edit", $data);
    }
    
    // public function edit($id)
    // {
    //     $result = $this->menu;
    //     $result = $result->where('id', $id);
    //     $result = $result->first();

    //     if (!$result) {
    //         alert()->error('Gagal', "Data tidak ditemukan");
    //         return redirect()->route($this->route . "index");
    //     }

    //     $data = [
    //         'result' => $result,
    //     ];

    //     return view($this->view . "edit", $data);
    // }

    public function update(UpdateRequest $request, $id)
{
    try {
        $result = $this->menu->find($id);

        if (!$result) {
            throw new \Exception("Data tidak ditemukan");
        }

        $title = $request->title;
        $parent = $request->parent ?? null; // Bisa null jika tidak memiliki parent

        $result->update([
            'title' => $title,
            'parent' => $parent,
            'menu-trixFields' => $request->input('menu-trixFields'),
        ]);

        alert()->html('Berhasil', 'Data berhasil diubah', 'success');
        return redirect()->route($this->route . "index");
    } catch (\Throwable $e) {
        Log::emergency($e->getMessage());

        alert()->error('Gagal', $e->getMessage());
        return redirect()->route($this->route . "edit", $id)->withInput();
    }
}

    // public function update(UpdateRequest $request, $id)
    // {
    //     try {
    //         $result = $this->menu;
    //         $result = $result->where('id', $id);
    //         $result = $result->first();

    //         if (!$result) {
    //             throw new Error("Data tidak ditemukan");
    //         }

    //         $title = $request->title;
    //         $parent = $request->parent;

    //         $result->update([
    //             'title' => $title,
    //             'menu-trixFields' => $request->input('menu-trixFields'),
    //         ]);


    //         alert()->html('Berhasil', 'Data berhasil diubah', 'success');
    //         return redirect()->route($this->route . "index");
    //     } catch (\Throwable $e) {
    //         Log::emergency($e->getMessage());

    //         alert()->error('Gagal', $e->getMessage());
    //         return redirect()->route($this->route . "edit", $id)->withInput();
    //     }
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $result = $this->menu;
            $result = $result->where('id', $id);
            $result = $result->first();

            $result->delete();

            alert()->html('Berhasil', 'Data berhasil dihapus', 'success');
            return redirect()->route($this->route . "index");
        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal', $e->getMessage());
            return redirect()->route($this->route . "index");
        }
    }
}
