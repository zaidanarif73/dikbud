<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use App\Enums\RoleEnum;
use App\Enums\UserEnum;
use App\Helpers\UploadHelper;
use Auth;

class UserController extends Controller
{
    public function __construct(){
        $this->route = "dashboard.users.";
        $this->view = "dashboard.pages.users.";
        $this->user = new User();
    }

    public function index(Request $request){
        $search = $request->search;
        $role = $request->role;
        $status = $request->status;
        $table = $this->user;

        if(!empty($search)){
            $table = $table->where(function($query2) use($search){
                $query2->where("name","like","%".$search."%");
                $query2->orWhere("phone","like","%".$search."%");
                $query2->orWhere("email","like","%".$search."%");
            });
        }

        if(isset($status)){
            $table = $table->where('status',$status);
        }

        if(!empty($role)){
            $table = $table->role($role);
        }

        // if(!Auth::user()->isSuperAdmin()){
        //     $table = $table->role([RoleEnum::Moderator]);
        // }
        if(Auth::user()->isSuperAdmin()){
            $table = $table->withTrashed();
        }

        $table = $table->orderBy("created_at","DESC");
        $table = $table->paginate(10)->withQueryString();

        $status = UserEnum::status();
        $roles = RoleEnum::roles();

        $data = [
            'table' => $table,
            'status' => $status,
            'roles' => $roles,
        ];

        return view($this->view."index",$data);
    }

    public function create(){
        $status = UserEnum::status();
        $roles = RoleEnum::roles();

        $data = [
            'status' => $status,
            'roles' => $roles,
        ];

        return view($this->view."create",$data);
    }

    public function store(StoreRequest $request)
    {
        try {
            $name = $request->name;
            $email = $request->email;
            $phone = $request->phone;
            $password = $request->password;
            $email_verified_at = $request->email_verified_at;
            $roles = $request->roles;
            $avatar = $request->file("avatar");

            if($avatar){
                $upload = UploadHelper::upload_file($avatar,'user-avatar',UserEnum::AVATAR_EXT);

                if($upload["IsError"] == TRUE){
                    throw new Error($upload["Message"]);
                }

                $avatar = $upload["Path"];
            }

            $create = $this->user->create([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'password' => bcrypt($password),
                'avatar' => $avatar,
                'email_verified_at' => $email_verified_at,
            ]);

            $create->assignRole($roles);

            alert()->html('Berhasil','Data berhasil ditambahkan','success'); 
            return redirect()->route($this->route."index");

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal',$e->getMessage());
            return redirect()->route($this->route."create")->withInput();
        }
    }
    
}
