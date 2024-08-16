<?php


use Illuminate\Support\Facades\Route;
use App\Enums\RoleEnum;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//PAGE NOT FOUND
Route::fallback(function () {
    return view("home.pages.error.index");
});

//MIDDLEWARE
Route::group(["middleware" => ["dashboard.access"], "namespace" => "App\Http\Controllers\Dashboard", "as" => "dashboard.", "prefix" => "dashboard"], function () {
    Route::get("/", "DashboardController@index")->name('dashboard.index');

    //PROFILE PAGE
    Route::group(["as" => "profile.", "prefix" => "profile"], function () {
        Route::get('/', 'ProfileController@index')->name("index");
        Route::put('/', 'ProfileController@update')->name("update");
    });

    Route::group(["as" => "menu.", "prefix" => "menu"], function () {
        Route::get('/', 'MenuController@index')->name("index")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/create', 'MenuController@create')->name("create")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::post('/', 'MenuController@store')->name("store")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/{id}', 'MenuController@show')->name("show")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/{id}/edit', 'MenuController@edit')->name("edit")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::put('/{id}', 'MenuController@update')->name("update")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::delete('/{id}', 'MenuController@destroy')->name("destroy")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
    });

    Route::group(["as" => "informasi.", "prefix" => "informasi"], function () {
        Route::get("/", "InformasiController@index")->name("index")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get("/create", "InformasiController@create")->name("create")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::post("/", "InformasiController@store")->name("store")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/{id}/edit', 'InformasiController@edit')->name("edit")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::put('/{id}', 'InformasiController@update')->name("update")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::delete('/{id}', 'InformasiController@destroy')->name("destroy")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
    });

    Route::group(["as" => "berita.", "prefix" => "berita"], function () {
        Route::get('/', 'BeritaController@index')->name("index");
        Route::get('/create', 'BeritaController@create')->name("create");
        Route::post('/', 'BeritaController@store')->name("store");
        Route::get('/{id}', 'BeritaController@show')->name("show");
        Route::get('/{id}/edit', 'BeritaController@edit')->name("edit");
        Route::put('/{id}', 'BeritaController@update')->name("update");
        Route::delete('/{id}', 'BeritaController@destroy')->name("destroy");
    });

    Route::group(["as" => "inovasi.", "prefix" => "inovasi"], function () {
        Route::get('/', 'InovasiController@index')->name("index");
        Route::get('/create', 'InovasiController@create')->name("create");
        Route::post('/', 'InovasiController@store')->name("store");
        Route::get('/{id}', 'InovasiController@show')->name("show");
        Route::get('/{id}/edit', 'InovasiController@edit')->name("edit");
        Route::put('/{id}', 'InovasiController@update')->name("update");
        Route::delete('/{id}', 'InovasiController@destroy')->name("destroy");
    });

    Route::group(["as" => "banner.", "prefix" => "banner"], function () {
        Route::get('/', 'BannerController@index')->name("index")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/create', 'BannerController@create')->name("create")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::post('/', 'BannerController@store')->name("store")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/{id}', 'BannerController@show')->name("show")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/{id}/edit', 'BannerController@edit')->name("edit")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::put('/{id}', 'BannerController@update')->name("update")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::delete('/{id}', 'BannerController@destroy')->name("destroy")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
    });

    Route::group(["as" => "galeri.", "prefix" => "galeri"], function () {
        Route::get("/", "GaleriController@index")->name("index")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get("/create", "GaleriController@create")->name("create")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::post("/", "GaleriController@store")->name("store")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/{id}', 'GaleriController@show')->name("show")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/{id}/edit', 'GaleriController@edit')->name("edit")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::put('/{id}', 'GaleriController@update')->name("update")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::delete('/{id}', 'GaleriController@destroy')->name("destroy")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
    });

    Route::group(["as" => "kalender.", "prefix" => "kalender"], function () {
        Route::get("/", "KalenderController@index")->name("index")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get("/create", "KalenderController@create")->name("create")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::post("/", "KalenderController@store")->name("store")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/{id}', 'KalenderController@show')->name("show")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/{id}/edit', 'KalenderController@edit')->name("edit")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::put('/{id}', 'KalenderController@update')->name("update")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::delete('/{id}', 'KalenderController@destroy')->name("destroy")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
    });

    Route::group(["as" => "kontak.", "prefix" => "kontak"], function () {
        Route::get("/", "KontakController@index")->name("index")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/{id}', 'KontakController@show')->name("show")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::delete('/{id}', 'KontakController@destroy')->name("destroy")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
    });

    Route::group(["as" => "layanan.", "prefix" => "layanan"], function () {
        Route::get('/', 'LayananController@index')->name("index")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/create', 'LayananController@create')->name("create")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::post('/', 'LayananController@store')->name("store")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/{id}', 'LayananController@show')->name("show")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/{id}/edit', 'LayananController@edit')->name("edit")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::put('/{id}', 'LayananController@update')->name("update")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::delete('/{id}', 'LayananController@destroy')->name("destroy")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
    });

    Route::group(["as" => "tautan.", "prefix" => "tautan"], function () {
        Route::get("/", "TautanController@index")->name("index")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get("/create", "TautanController@create")->name("create")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::post("/", "TautanController@store")->name("store")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/{id}', 'TautanController@show')->name("show")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/{id}/edit', 'TautanController@edit')->name("edit")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::put('/{id}', 'TautanController@update')->name("update")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::delete('/{id}', 'TautanController@destroy')->name("destroy")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
    });

    Route::group(["as" => "so.", "prefix" => "so"], function () {
        Route::get('/', 'SOController@index')->name("index")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::put('/', 'SOController@update')->name("update")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
    });

    Route::group(["as" => "vm.", "prefix" => "vm"], function () {
        Route::get('/', 'VMController@index')->name("index")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::put('/', 'VMController@update')->name("update")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
    });

    Route::group(["as" => "pejabat.", "prefix" => "pejabat"], function () {
        Route::get('/', 'PejabatController@index')->name("index")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/create', 'PejabatController@create')->name("create")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::post('/', 'PejabatController@store')->name("store")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/{id}', 'PejabatController@show')->name("show")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::get('/{id}/edit', 'PejabatController@edit')->name("edit")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::put('/{id}', 'PejabatController@update')->name("update")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
        Route::delete('/{id}', 'PejabatController@destroy')->name("destroy")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin, RoleEnum::Admin]));
    });

    Route::group(["as" => "pengaturan.", "prefix" => "pengaturan"], function () {
        Route::get("/", "PengaturanController@index")->name("index")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin]));
        Route::put('/', 'PengaturanController@update')->name("update")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin]));
    });

    Route::group(["as" => "log.", "prefix" => "log"], function () {
        Route::get("/", "LogController@index")->name("index")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin]));
    });

    Route::group(["as" => "users.", "prefix" => "users"], function () {
        Route::get("/", "UserController@index")->name("index")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin]));
        Route::get('/create', 'UserController@create')->name("create")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin]));
        Route::post('/', 'UserController@store')->name("store")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin]));
        Route::get('/{id}', 'UserController@show')->name("show")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin]));
        Route::get('/{id}/edit', 'UserController@edit')->name("edit")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin]));
        Route::put('/{id}', 'UserController@update')->name("update")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin]));
        Route::delete('/{id}', 'UserController@destroy')->name("destroy")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin]));
        Route::patch('/{id}', 'UserController@restore')->name("restore")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin]));
        Route::get('/{id}/impersonate', 'UserController@impersonate')->name("impersonate")->middleware('role:' . implode('|', [RoleEnum::SuperAdmin]));
    });
});

//AUTH
Route::group(["namespace" => "App\Http\Controllers\Auth", "as" => "auth.", "prefix" => "auth"], function () {
    Route::group(["as" => "login.", "prefix" => "login"], function () {
        Route::get("/", "LoginController@index")->name("index");
        Route::post("/", "LoginController@post")->name("post");
    });

    Route::get("/logout", "LogoutController@logout")->name('logout');

    Route::group(["as" => "forgot_pw.", "prefix" => "forgot_pw"], function () {
        Route::get("/", "ForgotPasswordController@index")->name("index");
        Route::post("/", "ForgotPasswordController@store")->name("store");
    });

    Route::group(["as" => "reset_pw.", "prefix" => "reset_pw"], function () {
        Route::get('/{token}', 'ResetPasswordController@index')->name('index');
        Route::post('/', 'ResetPasswordController@post')->name('post');
    });
});


// //DASHBOARD ADMIN
// Route::group(["namespace"=>"App\Http\Controllers\Dashboard", "as"=>"dashboard.", "prefix"=>"dashboard"], function(){
//     Route::get("/", "DashboardController@index")->name('dashboard.index');

// });

//HOME
Route::group(["namespace" => "App\Http\Controllers\Home", "as" => "home."], function () {
    Route::get("/", "HomeController@index")->name('home.index');
    Route::get("/events", "HomeController@events")->name("events");
    
    Route::get("/{title}/show", "MenuController@show");


    Route::group(["as" => "kontak.", "prefix" => "kontak"], function () {
        Route::post("/", "KontakController@store")->name("store");
    });


    Route::group(["as" => "layanan.", "prefix" => "layanan"], function () {
        Route::get("/{id}", "LayananController@show")->name("show");
    });

    Route::group(["as" => "profil.", "prefix" => "profil"], function () {
        Route::get("/", "ProfilController@index")->name("index");
    });

    Route::group(["as" => "berita.", "prefix" => "berita"], function () {
        Route::get("/", "BeritaController@index")->name("index");
        Route::get("/{id}", "BeritaController@show")->name("show");
    });

    Route::group(["as" => "inovasi.", "prefix" => "inovasi"], function () {
        Route::get("/", "InovasiController@index")->name("index");
        Route::get("/{id}", "InovasiController@show")->name("show");
    });

    Route::group(["as" => "galeri.", "prefix" => "galeri"], function () {
        Route::get("/", "GaleriController@index")->name("index");
        Route::get('/{id}', 'GaleriController@show')->name("show");
    });

    Route::group(["as" => "informasi.", "prefix" => "informasi"], function () {
        Route::get("/", "InformasiController@index")->name("index");
    });

    Route::group(["as" => "kontak.", "prefix" => "kontak"], function () {
        Route::get("/", "KontakController@index")->name("index");
    });

    Route::group(["as" => "SO.", "prefix" => "SO"], function () {
        Route::get("/", "SOController@index")->name("index");
        Route::get("/{id}", "SOController@show")->name("show");
    });

    Route::group(["as" => "pejabat.", "prefix" => "pejabat"], function () {
        Route::get("/", "PejabatController@index")->name("index");
        Route::get("/{id}", "PejabatController@show")->name("show");
    });

    Route::group(["as" => "VM.", "prefix" => "VM"], function () {
        Route::get("/", "VMController@index")->name("index");
    });
});
