@extends('home.layouts.master')

@section("css")
<link  href="assets/css/layanan/style.css" rel="stylesheet">
@section("content")
<div class="banner">
    <img src="assets/img/layanan/zip.png" alt="Banner Image">
    <div class="banner-text">
        <h1>SOLIKIN | Sistem Online Kartu Induk Kesenian</h1><br>
        <p>DINAS PENDIDIKAN & KEBUDAYAAN KOTA MALANG</p>
    </div>
</div>

<section>
    <div class="d-flex flex-column text-center">
        <p>LINK SOLIKIN</p>
        <a href="https://solikin.web.id/" target="_blank" class="link">klik disini</a>
    </div>
    <div class="gambar d-flex justify-content-center">
            <img src="assets/img/layanan/solikin.png" alt="">
    </div>
</section>

@endsection