@extends('dashboard.layouts.master')
@section("title","Dashboard")
@section('css')
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/clock.css">
@endsection
@section("breadcumb","Dashboard")
@section("content")
<div class="row m-5">
    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
        <!--clock-->    
        <div class="d-flex justify-content-center mb-3">
            @include('dashboard.components.clock')
        </div> 
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
        <div class="d-flex justify-content-center small-box bg-success p-3">
            <span class="wellcome mt-3 mb-3">Selamat datang di Dashboard <b>{{ Auth::user()->name }}</b></span>
            
        </div>
        <span class="h5" id="date"></span>            
        <span class="h5 text-primary" id="clock"></span>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-6">   
    <!-- small box -->
    @if(Auth::user()->hasRole([
                \App\Enums\RoleEnum::SuperAdmin,
                \App\Enums\RoleEnum::Admin,
    ]))
    <div class="small-box bg-info">
        <div class="inner">
        <h3>{{ $count_banner }}</h3>

        <p>Banner</p>
        </div>
        <div class="icon">
            <i class='bx bx-file'></i>
        </div>
        <a href="{{ route('dashboard.banner.index') }}" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
        <div class="inner">
            <h3>{{ $count_berita }}</h3>

        <p>Berita</p>
        </div>
        <div class="icon">
            <i class='bx bxs-news' ></i>
        </div>
        <a href="{{ route('dashboard.berita.index') }}" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
        <div class="inner">
        <h3>{{ $count_menu }}</h3>

        <p>Menu</p>
        </div>
        <div class="icon">
            <i class='bx bx-door-open'></i>
        </div>
        <a href="{{ route('dashboard.menu.index') }}" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
        <div class="inner">
        <h3>{{ $count_galeri }}</h3>
        <p>Galeri</p>
        </div>
        <div class="icon">
            <i class='bx bx-image-alt'></i>
        </div>
        <a href="{{ route('dashboard.galeri.index') }}" class="small-box-footer">Detail<i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    <!-- ./col -->
    @endif

</div>
@endsection

@section('script')
    <script src="{{URL::to('/')}}/assets/js/dashboard/plugins/clock/clock.js"></script>

    <script>
        function displayCurrentTime() {
            let currentTime = new Date();
            let hours = currentTime.getHours();
            let minutes = currentTime.getMinutes();
            let seconds = currentTime.getSeconds();
            hours = addZero(hours);
            minutes = addZero(minutes);
            seconds = addZero(seconds);
            document.getElementById("clock").innerText = `${hours} : ${minutes} : ${seconds}`;
            setTimeout(displayCurrentTime, 1000);
        }
        function addZero(component) {
            return component < 10 ? "0" + component : component;
        }
        function displayCurrentDate() {
            let currentDate = new Date();
            let day = currentDate.getDay();
            let date = currentDate.getDate();
            let month = currentDate.getMonth();
            let year = currentDate.getFullYear();
            document.getElementById("date").innerText = `${getIndonesianDay(day)}, ${date} ${getIndonesianMonth(month)} ${year}`;
            setTimeout(displayCurrentDate, 1000);
        }
        function getIndonesianDay(day) {
            switch (day) {
                case 0:
                    return "Minggu";
                case 1:
                    return "Senin";
                case 2:
                    return "Selasa";
                case 3:
                    return "Rabu";
                case 4:
                    return "Kamis";
                case 5:
                    return "Jumat";
                case 6:
                    return "Sabtu";
            }
        }
        function getIndonesianMonth(month) {
            switch (month) {
                case 0:
                    return "Januari";
                case 1:
                    return "Februari";
                case 2:
                    return "Maret";
                case 3:
                    return "April";
                case 4:
                    return "Mei";
                case 5:
                    return "Juni";
                case 6:
                    return "Juli";
                case 7:
                    return "Agustus";
                case 8:
                    return "September";
                case 9:
                    return "Oktober";
                case 10:
                    return "November";
                case 11:
                    return "Desember";
            }
        }
        displayCurrentTime();
        displayCurrentDate();
    </script>
@endsection