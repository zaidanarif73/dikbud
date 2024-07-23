@extends('home.layouts.master')
    @section("css")
        <link  href="{{URL::to('/')}}/assets/css/pembelajaran/stylesd.css" rel="stylesheet">
        
    @endsection
@section("content")
<div class="container mt-5">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h1 data-aos="fade-up">Pembelajaran Sekolah Dasar</h1>
    </div>
    <div class="row mt-5">
        <div class="btn-group col-2">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kelas</button>
            <ul id="produkHukumList" class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Kelas 1</a></li>
                <li><a class="dropdown-item" href="#">Kelas 2</a></li>
                <li><a class="dropdown-item" href="#">Kelas 3</a></li>
                <li><a class="dropdown-item" href="#">Kelas 4</a></li>
                <li><a class="dropdown-item" href="#">Kelas 5</a></li>
                <li><a class="dropdown-item" href="#">Kelas 6</a></li
            </ul>
        </div>
    <div class="row mt-5">
        <div class="video-section">
            <h2>Video Pembelajaran</h2>
            <div class="video-container">
                <iframe width="600" height="400" src="https://www.youtube.com/embed/KZgClsXtCyo?autoplay=1&controls=1" frameborder="0" allow="accelerometer; controls; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    <div class="d-flex justify-content-center mt-5" >
        <div class="kisi-section">
            <h2>Kisi-kisi</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia voluptatem non, necessitatibus aliquid facere qui cupiditate nisi corporis ratione corrupti nostrum deserunt esse tempora quaerat doloribus vel quam iusto adipisci!</p>
        </div>
    </div>
        <div class="card d-flex justify-content-center mt-5 ">
        <h2>Latihan Soal</h2>
        <p>Anda bisa menekan tombol "Mulai Latihan" dibawah ini untuk mengerjakan latihan soal.</p>
        <h6>-Selemat Mengerjakan-</h6>
        <a href="https://quizizz.com/admin/quiz/669880e30fd97f26d61d3501?source=quiz_share" class="btn">Mulai Latihan</a>
    </div>
</div>
@endsection