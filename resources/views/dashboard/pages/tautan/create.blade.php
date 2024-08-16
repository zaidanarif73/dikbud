@extends('dashboard.layouts.master')
@section("title","Tautan ~ DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section("title_breadcumb","Tautan")
@section('css')

@endsection
@section("breadcumb","Tautan")
@section("breadcumb_child","Create")
@section("content")
<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <form id="myForm" action="{{ route('dashboard.tautan.store') }}" method="post" autocomplete="off" onsubmit="confirm('Apakah anda yakin ingin mengirim data ini?')" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Judul <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="title" placeholder="Judul"  value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">URL <span class="text-danger">*</span></label>
                                
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="url" placeholder="URL"  value="" required>
                                    {{-- <textarea class="form-control" aria-label="With textarea" name="url"></textarea> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
