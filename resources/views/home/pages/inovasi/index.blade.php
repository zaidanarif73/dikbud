@extends('home.layouts.master')
@section("title","Inovasi | DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section("css")
<link  href="assets/css/inovasi/style.css" rel="stylesheet">
@endsection
@section("content")
<div class="inov-bg">
    <img src="{{URL::to('/')}}/assets/img/c.png" alt="">
</div>
<div class="container mt-4" style="margin-top: 80px">
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