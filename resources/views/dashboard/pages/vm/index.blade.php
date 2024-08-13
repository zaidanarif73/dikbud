@extends('dashboard.layouts.master')
@section("title","Visi Misi")
@section("breadcumb","Visi Misi")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form action="{{ route('dashboard.vm.update') }}" method="post" autocomplete="off" onsubmit="confirm('Apakah anda yakin ingin mengirim data ini?')" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="form-group row mb-5" >
                                    <label class="col-md-2 col-form-label" for="description">Deskripsi <span class="text-danger">*</span></label>
                                    <div class="col-md-10"   >  
                                        <img src="{{ asset('storage/'.$result->image) }}" style="width: 100%;height:auto;">
                                        <input class="form-control mt-5" type="file" name="image" accept="image/*">
                                        <p class="text-info" style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;"><small><i>Kovmngkan jika tidak diubah</i></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{route('dashboard.vm.index')}}" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
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
