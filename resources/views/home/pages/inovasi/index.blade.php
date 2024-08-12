@extends('home.layouts.master')
@section("title","Inovasi | DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section("css")
<link  href="assets/css/inovasi/style.css" rel="stylesheet">
@endsection
@section("content")
<div class="inov-bg">
    <img src="{{URL::to('/')}}/assets/img/bg-inov1.png" alt="">
</div>
<div class="container" style="margin-top: 80px">
    
    {{-- <div class="row">
        <div class="btn-group col-2">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Tahun</button>
            <ul id="tahunList" class="dropdown-menu" style="max-height: 200px; overflow-y: scroll;">
                <li><a class="dropdown-item" href="#">2019</a></li>
                <li><a class="dropdown-item" href="#">2020</a></li>
                <li><a class="dropdown-item" href="#">2021</a></li>
                <li><a class="dropdown-item" href="#">2022</a></li>
                <li><a class="dropdown-item" href="#">2023</a></li>
                <li><a class="dropdown-item" href="#">2024</a></li>
                <li><a class="dropdown-item" href="#">2025</a></li>
                <li><a class="dropdown-item" href="#">2026</a></li>
                <li><a class="dropdown-item" href="#">2027</a></li>
                <li><a class="dropdown-item" href="#">2028</a></li>
                <li><a class="dropdown-item" href="#">2029</a></li>
                <li><a class="dropdown-item" href="#">2030</a></li>
                <li><a class="dropdown-item" href="#">2019</a></li>
                <li><a class="dropdown-item" href="#">2020</a></li>
                <li><a class="dropdown-item" href="#">2021</a></li>
                <li><a class="dropdown-item" href="#">2022</a></li>
                <li><a class="dropdown-item" href="#">2023</a></li>
                <li><a class="dropdown-item" href="#">2024</a></li>
                <li><a class="dropdown-item" href="#">2025</a></li>
                <li><a class="dropdown-item" href="#">2026</a></li>
                <li><a class="dropdown-item" href="#">2027</a></li>
                <li><a class="dropdown-item" href="#">2028</a></li>
                <li><a class="dropdown-item" href="#">2029</a></li>
                <li><a class="dropdown-item" href="#">2030</a></li>
            </ul>
        </div>
        <div class="box col-10 d-flex justify-content-end">
            <input type="text" placeholder="search...">
            <a href="#"></a>
            <i class="fas fa-search"></i>
        </div>
    </div> --}}
    <main>
        <h1 class="text-center">Inovasi</h1>
        <div class="gallery">
            @forelse ($table as $index => $row)
            <div class="gallery-item">
                <a href="{{route('home.inovasi.show', $row->id)}}"> <img src="{{ asset('storage/' . $row->image) }}"></a>
                <span class="tanggal">
                    {{ Carbon\Carbon::parse($row->date)->translatedFormat('l,d F Y') }}
                </span>
                <a href="{{route('home.inovasi.show', $row->id)}}"><h5 >{{ $row->title }}</h5></a> 
                <p> {!! Str::limit(strip_tags($row->renderTrix('content')), 100) !!}</p>
            </div>
            @empty
            <p>tidak ada data</p>
            @endforelse
    </main>
</div>
{{-- <form id="frmTahun" method="get">
    @csrf
    <input type="hidden" name="year"/>
</form> --}}
@endsection
@section("script")
{{-- <script>
$(document).ready(function () {
    $('#tahunList li a').on('click', function () {
        var year= ($(this).text());
        //alert("Your Favourite Sports is "+txt);
        $("#frmTahun").attr("action", "{{ route('home.inovasi.index') }}");
        $("#frmTahun").find('input[name="year"]').val(year);
        $("#frmTahun").submit();
        //$("#tahun").val() = txt;
        });
    });
    </script> --}}
    @endsection