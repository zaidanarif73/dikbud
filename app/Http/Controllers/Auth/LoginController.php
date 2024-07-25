<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;
use App\Enums\RoleEnum;
use App\Http\Requests\LoginRequest;
use Auth;
use Error; 

class LoginController extends Controller
{
    public function __construct() {
        $this->view = "auth.";
    } 
    
    public function index(){

        if(Auth::check()){
            return redirect()->route('dashboard.dashboard.index');
        }
        return view($this->view."login");
    } 
    
    public function post(LoginRequest $request){
        try {
            $email = $request->email;
            $password = $request->password;

            $rememberme = (empty($request->rememberme)) ? false : true;

            $field = [
                'email' => $email,
                'password' => $password
            ];
             
            if(Auth::attempt($field,$rememberme)){
                if(!Auth::user()->hasRole([
                        RoleEnum::SuperAdmin,
                        RoleEnum::Admin,
                        RoleEnum::Moderator,
                        
                ])){
                    Auth::logout();
                    throw new Error("Anda tidak diperbolehkan mengakses menu ini");
                } 
            
                if(Auth::user()->hasRole([
                    RoleEnum::SuperAdmin,
                    RoleEnum::Admin,
                    RoleEnum::Moderator,
                ])){
                    alert()->html('Berhasil','Login berhasil','success'); 
                    return redirect()->intended(route('dashboard.dashboard.index'));
                }
            }
            else{
                //throw new Error("Email / password tidak sesuai"); 
                alert()->html('Gagal','Email/Password Salah','error');
                return redirect()->intended(route('auth.login.index'));
            }

        }catch(\Throwable $e){
            Log::emergency($e->getMessage());
            alert()->html('Gagal',$e->getMessage(),'error');
            return redirect()->back()->withInput(); 
        }
    }
}
