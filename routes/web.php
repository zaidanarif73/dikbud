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
        Route::get("/create", "InformasiController@create")->name("create");
        Route::post("/","InformasiController@store")->name("store");
        Route::get('/{id}/edit', 'InformasiController@edit')->name("edit");
        Route::put('/{id}', 'InformasiController@update')->name("update");
        Route::delete('/{id}', 'InformasiController@destroy')->name("destroy");
    });

    Route::group(["as" => "berita.","prefix" => "berita"], function () {
		Route::get('/', 'BeritaController@index')->name("index");
		Route::get('/create', 'BeritaController@create')->name("create");
        Route::post('/', 'BeritaController@store')->name("store");
		Route::get('/{id}', 'BeritaController@show')->name("show");
		Route::get('/{id}/edit', 'BeritaController@edit')->name("edit");
		Route::put('/{id}', 'BeritaController@update')->name("update");
		Route::delete('/{id}', 'BeritaController@destroy')->name("destroy");
	});

    Route::group(["as" => "banner.","prefix" => "banner"], function () {
		Route::get('/', 'BannerController@index')->name("index");
		Route::get('/create', 'BannerController@create')->name("create");
        Route::post('/', 'BannerController@store')->name("store");
		Route::get('/{id}', 'BannerController@show')->name("show");
		Route::get('/{id}/edit', 'BannerController@edit')->name("edit");
		Route::put('/{id}', 'BannerController@update')->name("update");
		Route::delete('/{id}', 'BannerController@destroy')->name("destroy");
	});

    Route::group(["as"=>"page.", "prefix"=>"page"], function(){
        Route::get("/", "PageController@index")->name("index");
    });

    Route::group(["as"=>"berita.", "prefix"=>"berita"], function(){
        Route::get("/", "BeritaController@index")->name("index");
    });

    Route::group(["as"=>"galeri.", "prefix"=>"galeri"], function(){
        Route::get("/", "GaleriController@index")->name("index");
        Route::get("/create", "GaleriController@create")->name("create");
        Route::post("/","GaleriController@store")->name("store");
        Route::get('/{id}', 'GaleriController@show')->name("show");
        Route::get('/{id}/edit', 'GaleriController@edit')->name("edit");
        Route::put('/{id}', 'GaleriController@update')->name("update");
        Route::delete('/{id}', 'GaleriController@destroy')->name("destroy");
    });

    Route::group(["as"=>"kalender.", "prefix"=>"kalender"], function(){
        Route::get("/", "KalenderController@index")->name("index");
        Route::get("/create", "KalenderController@create")->name("create");
        Route::post("/","KalenderController@store")->name("store");
        Route::get('/{id}', 'KalenderController@show')->name("show");
        Route::get('/{id}/edit', 'KalenderController@edit')->name("edit");
        Route::put('/{id}', 'KalenderController@update')->name("update");
        Route::delete('/{id}', 'KalenderController@destroy')->name("destroy");
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
        Route::get("/show", "ShowController@index")->name("show");
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

    Route::group(["as"=>"legalisir.", "prefix"=>"legalisir"], function(){
        Route::get("/", "LegalisirController@index")->name("index");
    });
    
    Route::group(["as"=>"mutasi.", "prefix"=>"mutasi"], function(){
        Route::get("/", "MutasiController@index")->name("index");
    });

    Route::group(["as"=>"ijazah_rusak.", "prefix"=>"ijazah_rusak"], function(){
    Route::get("/", "IjazahrusakController@index")->name("index");
    });

    Route::group(["as"=>"pengganti_ijazah.", "prefix"=>"pengganti_ijazah"], function(){
    Route::get("/", "PengantiijazahController@index")->name("index");
    });

    Route::group(["as"=>"rekomendasi_penelitian.", "prefix"=>"rekomendasi_penelitian"], function(){
    Route::get("/", "RekomendasipenelitianController@index")->name("index");
    });

    Route::group(["as"=>"pengaduan.", "prefix"=>"pengaduan"], function(){
        Route::get("/", "PengaduanController@index")->name("index");
    });

    Route::group(["as"=>"maklumat.", "prefix"=>"maklumat"], function(){
        Route::get("/", "MaklumatController@index")->name("index");
    });
    
    Route::group(["as"=>"SKSP.", "prefix"=>"SKSP"], function(){
        Route::get("/", "SKSPController@index")->name("index");
    });

    Route::group(["as"=>"PPDB.", "prefix"=>"PPDB"], function(){
    Route::get("/", "PPDBController@index")->name("index");
    });

    Route::group(["as"=>"solikin.", "prefix"=>"solikin"], function(){
    Route::get("/", "SolikinController@index")->name("index");
    });

    Route::group(["as"=>"ombudsman.", "prefix"=>"ombudsman"], function(){
    Route::get("/", "OmbudsmanController@index")->name("index");
    });

});

