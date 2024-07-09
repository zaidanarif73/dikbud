<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth; 


class LogoutController extends Controller
{
    public function logout(){
        if(FacadesAuth::check()){
            Auth::logout();
            alert()->html('Berhasil','Logout Berhasil','success');
        }
            return redirect()->route('auth.login.index');
        } 
}
