@extends('home.layouts.master')
@section('css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
@endsection
@section('content')
<br>
<br>
<div class="container text-justify" style="margin-top: 80px">
    <div class="row">
        <div class="col-12 col-lg-12">
            <img src="{{ asset('storage/' . $result->image) }}" class="card-img-top mb-3" alt="">
            <h1 class=""><b>{{ $result->title }}</b></h1>
            <div class="">
                <p>{{ Carbon\Carbon::parse($result->date)->translatedFormat('l,d F Y') }}</p>
                <p></p>
            </div>
            <style>
                img {
                    max-width: 100%;
                    height: auto;
                }
                .attachment__caption {
                    display: none !important;
                }
            </style>
            <p >{!! $result->renderTrix("content") !!}</p>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
@endsection