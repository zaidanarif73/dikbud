@extends('home.layouts.master')
@section("title","". $result->title ." | DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section('css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
@endsection
@section('content')
<br>
<br>
<div class="container text-justify" >
    <div class="row mx-1">
        <div class="col-12 col-lg-9">
            <img src="{{ asset('storage/' . $result->image) }}" class="card-img-top mb-3" alt="">
            <h1 class=""><b>{{ $result->title }}</b></h1>
            <div class="text-black-50">
                <p>{{ Carbon\Carbon::parse($result->date)->translatedFormat('l,d F Y') }} by {{ $result->creator }}</p>
                {{-- <small><i class='bx bx-show'></i> Dilihat {{ $count_view->total }} kali</small> --}}
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
            <p class="demo">
                <p>Bagikan Juga</p>
                <button type="button" class="btn btn-icon btn-round btn-primary" id="share-facebook">
                    <i class='bx bxl-facebook'></i>
                </button>
                <button type="button" class="btn btn-icon btn-round btn-success" id="share-whatsapp">
                    <i class='bx bxl-whatsapp'></i>
                </button>
                <button type="button" class="btn btn-icon btn-round btn-info" id="share-twitter">
                    <i class='bx bxl-twitter'></i>
                </button>
            </p>
        </div>
        <div class="col-12 col-lg-3">
            <h2><b>Berita Lainnya</b></h2>
            @forelse($except_result as $index => $row)
            {{-- <div class="card">
                <div class="card-body">
                    <a href="" class=""><h5><b>{{ $row->title }}</b></h5></a href="">
                    <span class="text-muted">{{ Carbon\Carbon::parse($row->date)->diffForHumans(Carbon\Carbon::now());}}</span>
                </div>
            </div> --}}
            <div class="card-body">
                <div class="">
                    <div class="">
                        <img src="{{ asset('storage/' . $row->image) }}" class="card-img-top" alt="">
                    </div>
                    <div class="flex-1 ms-3 pt-1">
                        <a href="{{ route('home.berita.show', $row->id) }}"><h6 class="text-uppercase fw-bold mb-1">{{ $row->title }}</h6></a>
                    </div>
                    <div class="float-end pt-1">
                        <small class="text-muted">{{ Carbon\Carbon::parse($row->date)->diffForHumans(null, true).' yang lalu';}}</small>
                    </div>
                </div>
            </div>
            <div class="card-footer m-2">
            </div>
            @empty
                        
            @endforelse
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    // Facebook Share
    document.getElementById('share-facebook').onclick = function() {
        let url = encodeURIComponent(window.location.href);
        let facebookShareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
        window.open(facebookShareUrl, '_blank');
    };

    // WhatsApp Share
    document.getElementById('share-whatsapp').onclick = function() {
        let text = encodeURIComponent(document.title + " " + window.location.href);
        let whatsappShareUrl = `https://api.whatsapp.com/send?text=${text}`;
        window.open(whatsappShareUrl, '_blank');
    };

    // Twitter Share
    document.getElementById('share-twitter').onclick = function() {
        let text = encodeURIComponent(document.title);
        let url = encodeURIComponent(window.location.href);
        let twitterShareUrl = `https://twitter.com/intent/tweet?text=${text}&url=${url}`;
        window.open(twitterShareUrl, '_blank');
    };
</script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
@endsection