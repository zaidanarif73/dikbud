@extends('dashboard.layouts.master')
@section("title","Menu")
@section('css')
    <style>
        .form-select {
            border-left: 0;
            border-top: 0;
            border-right: 0;
            border-radius: 0;
            padding-left: 0;
            background: 0 0 !important;
        }
    </style>
@endsection
@section("breadcumb","Menu")
@section("breadcumb_child","Create")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form action="{{route('dashboard.menu.store')}}" method="POST" autocomplete="off" onsubmit="confirm('Apakah anda yakin ingin mengirim data ini?')" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Judul <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="title" placeholder="Judul"  value="{{old('title')}}" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-5" >
                                    <label class="col-md-2 col-form-label" for="description">Konten <span class="text-danger">*</span></label>
                                    <div class="col-md-10"   >       


                                        {{-- <div id="toolbar">
                                            <input type="text" id="description"  name="description" >
                                        </div> --}}
                                        @trix(\App\Models\Menu::class, 'content')
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{route('dashboard.menu.index')}}" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

@endsection
