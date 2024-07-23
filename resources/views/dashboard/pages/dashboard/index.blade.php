@extends('dashboard.layouts.master')
@section("title","Dashboard")
@section('css')
    
@endsection
@section("breadcumb","Dashboard")
@section("content")
<div class="row">
    <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
        <h3>150</h3>

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
            <h3>44</h3>

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
        <h3>44</h3>

        <p>Page</p>
        </div>
        <div class="icon">
            <i class='bx bx-door-open'></i>
        </div>
        <a href="{{ route('dashboard.page.index') }}" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
        <div class="inner">
        <h3>65</h3>
        <p>Galeri</p>
        </div>
        <div class="icon">
            <i class='bx bx-image-alt'></i>
        </div>
        <a href="{{ route('dashboard.galeri.index') }}" class="small-box-footer">Detail<i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    <!-- ./col -->
</div>
@endsection