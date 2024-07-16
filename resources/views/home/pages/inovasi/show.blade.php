@extends('home.layouts.master')
@section("css")
        <link  href="{{URL::to('/')}}/assets/css/inovasi/style.css" rel="stylesheet">
    @endsection
@section("content")
<div class="container mt-5">
    <div class="d-flex flex-column justify-content-center align-items-center">
      <h1 data-aos="fade-up">FINALIS TOP 10 TINGKAT KOTA</h1>
    </div>
  <div class="inovasi-structure">
    <img src="{{URL::to('/')}}/assets/img/News.jpg" alt="Inovasi Structure">
  </div>
</div>
@endsection
