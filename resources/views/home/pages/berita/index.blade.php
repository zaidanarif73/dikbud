@extends('home.layouts.master')

@section('css')
    <link href="assets/css/berita/style.css" rel="stylesheet">
    <link href="assets/css/berita/card.css" rel="stylesheet">
@endsection
@section('content')

    <div class="banner-bg">
        <img src="{{ URL::to('/') }}/assets/img/berita/bgberita.png" alt="">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
              @forelse ($table as $index => $row)
                  <div class="card">
                    <a href="{{route('home.berita.show', $row->id)}}"> <img src="{{ asset('storage/' . $row->image) }}" class="card-img-top" alt=""></a>
                          <span class="tanggal">
                              {{ Carbon\Carbon::parse($row->created_at)->translatedFormat('l,d F Y') }}
                          </span>
                          <div class="card-body">
                             <a href="{{route('home.berita.show', $row->id)}}"><h5 class="card-title">{{ $row->title }}</h5></a> 
                             <p> {!! Str::limit(strip_tags($row->renderTrix('content')), 40) !!}</p>
                          </div>
                  </div>
                  @empty
                          <p>tidak ada data</p>
                      @endforelse

            </div>
        </div>
    </div>
    
@endsection
