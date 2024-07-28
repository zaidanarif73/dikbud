<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{

    public function __construct() {
        $this->view = "auth.";
        $this->user = new User();
    } 

    public function index(){
        return view($this->view."forgot_pw");
    }

    public function store(Request $request){
        //check if email was exist in database
        $result = $this->user;
        $result = $result->where('email',$request->email);
        $result = $result->first();

        if($result){
            // Generate a password reset token
            $token = Str::random(60);
            $result = DB::table('password_reset_tokens')->updateOrInsert(
                ['email' => $request->email],
                ['token' => $token, 'created_at' => now()]
            );

            //smtp mailer
            $mail_data = [
                'recipient' =>$request->email,
                'fromEmail' =>'dikbud@malangkota.go.id',
                'fromName'  =>'DIKBUD',
                'subject'   =>'Jangan Bagikan Pesan Ini Kepada Siapapun!!',
                'body'      =>'Konfirmasi Lupa Password',
                'token'     =>$token,
                // 'resetLink' => url("/auth//reset_pw/{$token}?email=" . urlencode($request->email)),
                // 'resetLink' => url("/auth/reset_pw/{$token}/{$request->email}"),
            ];
            
            \Mail::send('auth.message',$mail_data, function($message) use($mail_data){
                $message->to($mail_data['recipient'])
                        ->from($mail_data['fromEmail'], $mail_data['fromName'])
                        ->subject($mail_data['subject']);
            });
            alert()->html('','Link reset password telah terkirim, silahkan buka email anda!','success');
            return view($this->view."login");
        }else{
            alert()->html('','Email tidak ditemukan!, Silahkan coba lagi','danger');
            return view($this->view."forgot_pw");
        }
    }
}
