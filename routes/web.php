<?php

use Illuminate\Support\Facades\Route;

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
    return 'Halaman Tidak Ditemukan';
});

//MIDDLEWARE
Route::group(["middleware"=>["dashboard.access"], "namespace"=>"App\Http\Controllers\Dashboard", "as"=>"dashboard.", "prefix"=>"dashboard"], function(){
    Route::get("/", "DashboardController@index")->name('dashboard.index');

    Route::group(["as"=>"menu.", "prefix"=>"menu"], function(){
        Route::get("/", "MenuController@index")->name("index");
    });

    Route::group(["as"=>"informasi.", "prefix"=>"informasi"], function(){
        Route::get("/", "InformasiController@index")->name("index");
    });

    Route::group(["as"=>"banner.", "prefix"=>"banner"], function(){
        Route::get("/", "BannerController@index")->name("index");
    });

    Route::group(["as"=>"page.", "prefix"=>"page"], function(){
        Route::get("/", "PageController@index")->name("index");
    });

    Route::group(["as"=>"berita.", "prefix"=>"berita"], function(){
        Route::get("/", "BeritaController@index")->name("index");
    });

    Route::group(["as"=>"galeri.", "prefix"=>"galeri"], function(){
        Route::get("/", "GaleriController@index")->name("index");
    });

    Route::group(["as"=>"kalender.", "prefix"=>"kalender"], function(){
        Route::get("/", "KalenderController@index")->name("index");
    });

    Route::group(["as"=>"kontak.", "prefix"=>"kontak"], function(){
        Route::get("/", "KontakController@index")->name("index");
    });

    Route::group(["as"=>"layanan.", "prefix"=>"layanan"], function(){
        Route::get("/", "LayananController@index")->name("index");
    });

    Route::group(["as"=>"tautan.", "prefix"=>"tautan"], function(){
        Route::get("/", "TautanController@index")->name("index");
    });

    Route::group(["as"=>"pengaturan.", "prefix"=>"pengaturan"], function(){
        Route::get("/", "PengaturanController@index")->name("index");
    });

    Route::group(["as"=>"log.", "prefix"=>"log"], function(){
        Route::get("/", "LogController@index")->name("index");
    });
});

//AUTH
Route::group(["namespace"=>"App\Http\Controllers\Auth", "as"=>"auth.", "prefix"=>"auth"], function(){
    Route::group(["as"=>"login.", "prefix"=>"login"], function(){
        Route::get("/", "LoginController@index")->name("index");
        Route::post("/", "LoginController@post")->name("post");
    });

    Route::get("/logout","LogoutController@logout")->name('logout');
});


// //DASHBOARD ADMIN
// Route::group(["namespace"=>"App\Http\Controllers\Dashboard", "as"=>"dashboard.", "prefix"=>"dashboard"], function(){
//     Route::get("/", "DashboardController@index")->name('dashboard.index');

// });

//HOME
Route::group(["namespace"=>"App\Http\Controllers\Home", "as"=>"home."], function(){
    Route::get("/", "HomeController@index")->name('home.index');

    Route::group(["as"=>"layanan.", "prefix"=>"layanan"], function(){
        Route::get("/", "LayananController@index")->name("index");
    });

    Route::group(["as"=>"profil.", "prefix"=>"profil"], function(){
        Route::get("/", "ProfilController@index")->name("index");
    });

    Route::group(["as"=>"berita.", "prefix"=>"berita"], function(){
        Route::get("/", "BeritaController@index")->name("index");
    });

    Route::group(["as"=>"inovasi.", "prefix"=>"inovasi"], function(){
        Route::get("/", "InovasiController@index")->name("index");
    });

    Route::group(["as"=>"galeri.", "prefix"=>"galeri"], function(){
        Route::get("/", "GaleriController@index")->name("index");
    });

    Route::group(["as"=>"pembelajaran.", "prefix"=>"pembelajaran"], function(){
        Route::get("/", "PembelajaranController@index")->name("index");
    });

    Route::group(["as"=>"informasi.", "prefix"=>"informasi"], function(){
        Route::get("/", "InformasiController@index")->name("index");
    });
    
    Route::group(["as"=>"kontak.", "prefix"=>"kontak"], function(){
        Route::get("/", "KontakController@index")->name("index");
    });
    
    Route::group(["as"=>"SO.", "prefix"=>"SO"], function(){
        Route::get("/", "SOController@index")->name("index");
    });

    Route::group(["as"=>"VM.", "prefix"=>"VM"], function(){
        Route::get("/", "VMController@index")->name("index");
    });
    
});