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

//DASHBOARD ADMIN
Route::group(["namespace"=>"App\Http\Controllers\Dashboard", "as"=>"dashboard.", "prefix"=>"dashboard"], function(){
    Route::get("/", "DashboardController@index")->name('dashboard.index');

});

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
    
    Route::get('/banner', 'BannerController@index');
    Route::post('/banner/move-left', 'BannerController@moveLeft');
    Route::post('/banner/move-right', 'BannerController@moveRight');

});