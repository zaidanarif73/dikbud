<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\User;
use Error;

class ResetPasswordController extends Controller
{
    public function __construct(){
        $this->view = "auth.";
        $this->target = collect(DB::select('select * from password_reset_tokens'));  //colect method to avoid array error handle
        $this->user = new User();
    }

    public function index(Request $request){

        // $target = DB::select('select * from password_reset_tokens where token = :token', ['token' => $request->token]);
        $target = $this->target;
        $target = $target->where('token',$request->token);
        $target = $target->first();
        if ($target) {
            $data = [
                'target' => $target,
            ];
    
            return view($this->view."reset_pw",$data);
        } else {
            return "null data";
        } 
    }

    public function post(Request $request){

        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'token' => 'required',
        ]);

        $target = $this->target;
        $target = $target->where('token',$request->token);
        $target = $target->first();

        $result = $this->user;
        $result = $result->where('email',$target->email);
        $result = $result->first();

        $remember_token = Str::random(60);

        if($request->email == $result->email){  //if input password passed then change update password
            $result->update([
                'password' => bcrypt($request->password),
                'remember_token' => $remember_token,
            ]);
            alert()->html('Berhasil','Password berhasil diubah','success'); 
            return view($this->view."login");
        }else{
            alert()->html('Gagal','Terjadi Kesalahan Saat Update Password!','danger'); 
            return redirect()->back();
        }

    }
}
