@extends('dashboard.layouts.master')
@section("title","Galeri")
@section('css')

@endsection
@section("breadcumb","Galeri")
@section("breadcumb_child","Edit")
@section("content")
<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <form id="myForm" action="{{ route('dashboard.galeri.update',$result->id) }}" method="post" autocomplete="off" onsubmit="confirm('Apakah anda yakin ingin mengirim data ini?')" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Judul <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="title" placeholder="Judul"  value="{{old('title',$result->title)}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Deskripsi <span class="text-danger">*</span></label>
                                
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="description" placeholder="Deskripsi"  value="{{old('description',$result->description)}}" required>
                                    {{-- <textarea class="form-control" aria-label="With textarea" name="description" value="{{old('description',$result->description)}}"></textarea> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Tanggal<span class="text-danger">*</span></label>
                                
                                <div class="col-md-10">
                                    <input type="date" class="form-control" name="date" placeholder="Tanggal" value="{{old('date',$result->date)}}" required>
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label class="col-md-2 col-form-label">Gambar <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input class="form-control" type="file" name="image" accept="image/*">
                                    <p class="text-info" style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;"><small><i>Kosongkan jika tidak diubah</i></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{route('dashboard.galeri.index')}}" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
