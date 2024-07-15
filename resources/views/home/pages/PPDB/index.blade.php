@extends('home.layouts.master')

@section("css")
    <link  href="assets/css/PPDB/style.css" rel="stylesheet">
@section("content")

<div class="container mt-5">
    <div class="d-flex flex-column justify-content-center align-items-center">
      <h1 data-aos="fade-up">PPDB</h1>
    </div>

    <div class="row">
        <section class="highlight col-12">
            <div class="news-item">
                <h1>Petunjuk PPDB</h1>
                <img class="mt-5" alt src="assets/img/berita/Berita1.jpg">
                <p class="mt-5">Link Kegiatan PPDB SMP Se-Kota Malang</p>
                <button type="button" class="btn btn-primary btn-sm">Link PPDB</button>
            </div>
        </section>
    </div>
</div>

@endsection