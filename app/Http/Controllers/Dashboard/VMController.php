<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\VM;

use Illuminate\Support\Facades\Log;
use App\Http\Requests\VM\StoreRequest;
use App\Http\Requests\VM\UpdateRequest;
use App\Helpers\UploadHelper;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class VMController extends Controller
{
    protected $vm;
   
    protected $route = 'dashboard.pages.vm.';
    /**
     * Display a listing of the revmurce.
     */
    public function __construct(){
        $this->route = "dashboard.vm.";
        $this->view = "dashboard.pages.vm.";
        $this->vm = new vm();
    }
    public function index()
    {
        $result = $this->vm; 
        $result = $result->first();
        $data = [
            'result' => $result,
        ];
        // return dd($data);
        return view($this->view.'index', $data);
    }

    public function update(UpdateRequest $request)
    {
        try {

            $update  = $this->vm;
            $update = $update->first();

            $image = $request->file("image");

            if ($image) {
                $upload = UploadHelper::upload_file($image, 'galeri', ['jpeg', 'jpg', 'png', 'gif']);

                if ($upload["IsError"] == TRUE) {
                    throw new Error($upload["Message"]);
                }

                $image = $upload["Path"];
            } else {
                $image = $update->image;
            }

            $update->update([
                'image' => $image,
            ]);
            
            alert()->html('Berhasil','Perubahan berhasil diperbarui','success'); 

            return redirect()->route($this->route.'index');
        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal',$e->getMessage());
            return redirect()->route($this->route."index")->withInput();
        }
    }
}
