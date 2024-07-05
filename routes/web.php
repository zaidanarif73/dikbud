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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(["namespace"=>"App\Http\Controllers\Home", "as"=>"home."], function(){
    Route::get("/", "HomeController@index")->name('home.index');

    Route::group(["as"=>"layanan.", "prefix"=>"layanan"], function(){
        Route::get("/", "LayananController@index")->name("index");
    });

    Route::group(["as"=>"profil.", "prefix"=>"profil"], function(){
        Route::get("/", "ProfilController@index")->name("index");
    });

});