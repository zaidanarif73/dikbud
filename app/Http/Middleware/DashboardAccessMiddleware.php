<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Enums\RoleEnum;
use Auth;

class DashboardAccessMiddleware
{

    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user(); 
        if (empty($user) || !$user->hasRole([RoleEnum::SuperAdmin, RoleEnum::Moderator])) {
            alert()->html('Gagal',"Anda tidak diperbolehkan mengakses halaman ini",'error');
            
            if($user){
                Auth::logout();
            } 
            return redirect()->route('auth.login.index');   
        } 
        return $next($request); 
    }
}
