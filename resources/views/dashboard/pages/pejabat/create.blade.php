@extends('dashboard.layouts.master')
@section("title","Pejabat ~ DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section("title_breadcumb","Pejabat")
@section('css')

@endsection
@section("breadcumb","Pejabat")
@section("breadcumb_child","Create")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form action="{{route('dashboard.pejabat.store')}}" method="POST" autocomplete="off" onsubmit="confirm('Apakah anda yakin ingin mengirim data ini?')" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Nama <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama"  value="{{old('title')}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Jabatan <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="jabatan" placeholder="Jabatan"  value="{{old('title')}}" required>
                                    </div>
                                </div>
                                <div class="form-group row mt-5">
                                    <label class="col-md-2 col-form-label">Image <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="image" accept="image/*" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{route('dashboard.pejabat.index')}}" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
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
