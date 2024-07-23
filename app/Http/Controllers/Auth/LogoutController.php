<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth; 


class LogoutController extends Controller
{   
    public function logout(){

        $manager = app('impersonate');

        if($manager->isImpersonating()){
            Auth::user()->leaveImpersonation();
            return redirect()->route('dashboard.dashboard.index');
        }
        else{
            if(!Auth::check()){
                return redirect()->route("auth.login.index");
            }
            
            Auth::logout();
            alert()->html('Berhasil', 'Berhasil Logout', 'success');
            return redirect()->route("auth.login.index");
        }
    }

    // public function logout(){
    //     if(FacadesAuth::check()){
    //         Auth::logout();
    //         alert()->html('Berhasil','Logout Berhasil','success');
    //     }
    //         return redirect()->route('auth.login.index');
    // } 
}
