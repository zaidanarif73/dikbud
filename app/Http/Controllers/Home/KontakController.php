<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Kontak\StoreRequest;
use App\Helpers\UploadHelper;
use App\Models\Kontak;
use Illuminate\Support\Facades\Log;

class KontakController extends Controller
{
    public function __construct(){
        $this->view = "home.pages.kontak.";
        $this->route = "home.home.";
        $this->kontak = new Kontak();
    }

    public function index(){
        return view($this->view."index");
    }

    public function store(StoreRequest $request){
        try {
            $name = $request->name;
            $image = $request->file("image");
            $email = $request->email;
            $subject = $request->subject;
            $message = $request->message;

            if($image){
                $upload = UploadHelper::upload_file($image,'images-kontak',['jpeg','jpg','png','gif']);

                if($upload["IsError"] == TRUE){
                    throw new Error($upload["Message"]);
                }

                $image = $upload["Path"];
                $create = $this->kontak->create([
                    'name' => $name,
                    'image' => $image,
                    'email'=> $email,
                    'subject'=> $subject,
                    'message' => $message,
                ]);
            }else{
                $create = $this->kontak->create([
                    'name' => $name,
                    'email'=> $email,
                    'subject'=> $subject,
                    'message' => $message,
                ]);
            }
            alert()->html('Berhasil','Pesan Berhasil dikirim!','success'); 
            return redirect()->route($this->route."index");

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal',$e->getMessage());

            return redirect()->route($this->route."create")->withInput();
        }
    }
}
