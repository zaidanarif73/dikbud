@extends('home.layouts.master')
@section("title","". $result->title ." | DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section('css')
    
@endsection
@section('content')
<br>
<br>
<div class="container" style="padding-top :60px">
    <div class="row">
        <div class="col-12">

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
    
@endsection