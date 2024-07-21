<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Profile\UpdateRequest;
use App\Helpers\UploadHelper;
use App\Enums\UserEnum;
use Auth;
use Error;

class ProfileController extends Controller
{
    public function __construct(){
        $this->route = "dashboard.profile.";
        $this->view = "dashboard.pages.profile.";
    }

    public function index(){

        $user = Auth::user();

        $data = [
            'user' => $user
        ];

        return view($this->view."index",$data);
    }

    public function update(UpdateRequest $request)
    {
        try {
            $result = Auth::user();

            $name = $request->name;
            $email = $request->email;
            $phone = $request->phone;
            $password = $request->password;
            $avatar = $request->file("avatar");

            if($avatar){
                $upload = UploadHelper::upload_file($avatar,'user-avatar',UserEnum::AVATAR_EXT);

                if($upload["IsError"] == TRUE){
                    throw new Error($upload["Message"]);
                }

                $avatar = $upload["Path"];
            }
            else{
                $avatar = $result->avatar;
            }

            if($password){
                $password = bcrypt($password);
            }
            else{
                $password = $result->password;
            }

            $result->update([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'password' => $password,
                'avatar' => $avatar,
            ]);

            alert()->html('Berhasil','Data berhasil diubah','success'); 
            return redirect()->route($this->route."index");

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal',$e->getMessage());
            return redirect()->route($this->route."index")->withInput();
        }
    }
}
