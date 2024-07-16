@extends('home.layouts.master')

@section("css")
    <link  href="{{URL::to('/')}}/assets/css/PPDB/style.css" rel="stylesheet">
@section("content")
<div class="so-bg">
        <img src="{{URL::to('/')}}/assets/img/banner-ppdb3.png" alt="">
</div>
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <section class="highlight">
                <div class="news-item">
                    <h1>Petunjuk PPDB</h1>
                    <img class="mt-5" alt src="{{URL::to('/')}}/assets/img/PPDB/PPDB.jpg">
                    <p class="mt-5">Link Kegiatan PPDB SMP Se-Kota Malang</p>
                    <button type="button" class="btn btn-primary btn-sm">Link PPDB</button>
                </div>
            </section>
        </div>   
    </div>
</div>

@endsection