@extends('home.layouts.master')
@section('css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
@endsection
@section('content')
<br>
<br>
<div class="container text-justify" >
    <div class="row mx-1">
        <div class="col-12 col-lg-12">
           
            <h1 class=""><b>{{ $result->title }}</b></h1>
            
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