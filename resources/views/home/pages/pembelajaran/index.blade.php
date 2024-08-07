@extends('home.layouts.master')
@section("title","Pembelajaran | DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section("css")
    <link  href="{{URL::to('/')}}/assets/css/pembelajaran/style.css" rel="stylesheet">
@endsection

@section("content")
    <div class="container">
        <header>
            <br>
            <h1>LAMAN PEMBELAJARAN</h1>
        </header>
        <main>
            <div class="d-flex justify-content-center">
                <div class="pembelajaran">
                    <div class="pembelajaran-item">
                        <a href="{{ route('home.pembelajaran.showsd') }}">
                            <img src="assets/img/pembelajaran/PAUD.png" alt="">
                            <h3>PAUD</h3>
                        </a>
                    </div>
                    <div class="pembelajaran-item">
                        <a href="{{ route('home.pembelajaran.showsd') }}">
                            <img src="assets/img/pembelajaran/1.png" alt="">
                            <h3>Sekolah Dasar</h3>
                        </a>
                    </div>
                    <div class="pembelajaran-item">
                        <a href="{{ route('home.pembelajaran.showsmp') }}">
                            <img src="assets/img/pembelajaran/2.png" alt="">
                            <h3>Sekolah Menengah Pertama</h3>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection