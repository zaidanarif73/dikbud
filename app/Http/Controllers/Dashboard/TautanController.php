<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Tautan;
use Illuminate\Http\Request;
use App\Http\Requests\Tautan\StoreRequest;
use App\Http\Requests\Tautan\UpdateRequest;
use Illuminate\Pagination\Paginator;

class TautanController extends Controller
{
    protected $tautan;
    protected $route = 'dashboard.pages.tautan.';
    public function __construct()
    {
        $this->route = "dashboard.tautan.";
        $this->view = "dashboard.pages.tautan.";
        $this->tautan = new Tautan();
        Paginator::useBootstrap();
    }

    public function index(Request $request)
    {
        $table = $this->tautan;  //declaration of model databases
        $search = $request->search; //for search filter in modal
        if (!empty($search)) {
            $table = $table->where(function ($query2) use ($search) {
                $query2->where("title", "like", "%" . $search . "%");
            });
        }

        $table = $table->orderBy("created_at", "DESC");      //sort descending by time created data
        $table = $table->paginate(10);   //limit paginate only 10 data appears per load
        $data = [
            'table' => $table,
        ];
        return view($this->view . "index", $data);
    }

    public function create()
    {
        return view($this->view . "create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try {
            $title = $request->title;
            $url = $request->url;
          

          
            //store on db
            $create = $this->tautan->create([
                'title' => $title,
                'url' => $url,
               
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
        $result = $this->tautan;
        $result = $result->where('id', $id);
        $result = $result->first();

        if (!$result) {
            alert()->error('Gagal', "Data tidak ditemukan");
            return redirect()->route($this->route . "index");
        }

        $data = [
            'result' => $result,
        ];

        return view($this->view . "show", $data);
    }


    public function edit($id)
    {
        $result = $this->tautan;
        $result = $result->where('id', $id);
        $result = $result->first();

        if (!$result) {
            alert()->error('Gagal', "Data tidak ditemukan");
            return redirect()->route($this->route . "index");
        }

        $data = [
            'result' => $result,
        ];

        return view($this->view . "edit", $data);
    }

    public function update(UpdateRequest $request, $id)
    {
        try {
            $result = $this->tautan;
            $result = $result->where('id', $id);
            $result = $result->first();

            if (!$result) {
                throw new Error("Data tidak ditemukan");
            }

            $title = $request->title;
            $url = $request->url;
            $image = $request->file("image");

           

            $result->update([
                'title' => $title,
                'url' => $url,
               
            ]);

            alert()->html('Berhasil', 'Data berhasil diubah', 'success');
            return redirect()->route($this->route . "index");
        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal', $e->getMessage());
            return redirect()->route($this->route . "edit", $id)->withInput();
        }
    }

   
    public function destroy($id)
    {
        try {
            $result = $this->tautan;
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
