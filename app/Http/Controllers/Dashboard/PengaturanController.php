<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Models\Pengaturan;
use Illuminate\Http\Request;
use App\Http\Requests\Pengaturan\UpdateRequest;
use App\Helpers\UploadHelper;
use Error;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->route = "dashboard.pengaturan.";
        $this->view = "dashboard.pages.pengaturan.";
        $this->pengaturan = new Pengaturan();
    }

    public function index()
    {
        $result = $this->pengaturan; 
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

            $update  = $this->pengaturan;
            $update = $update->first();

            $website_name = $request->website_name;
            $website_maps = $request->website_maps;
            $website_motto = $request->website_motto;
            $website_phone = $request->website_phone;
            $website_address = $request->website_address;
            $website_email = $request->website_email;
            $website_logo = $request->file("website_logo");

            if($website_logo){
                $upload = UploadHelper::upload_file($website_logo,'settings',['jpeg','jpg','png','gif']);

                if($upload["IsError"] == TRUE){
                    throw new Error($upload["Message"]);
                }

                $website_logo = $upload["Path"];
            }else{
                $website_logo = $update->website_logo;
            }

            $update->update([
                'website_name' => $website_name,
                'website_maps' => $website_maps,
                'website_motto' => $website_motto,
                'website_phone' => $website_phone,
                'website_address' => $website_address,
                'website_email' => $website_email,
                'website_logo' => $website_logo,
            ]);
            
            alert()->html('Berhasil','Pengaturan website berhasil diperbarui','success'); 

            return redirect()->route($this->route.'index');
        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal',$e->getMessage());
            return redirect()->route($this->route."index")->withInput();
        }
    }
}
