@extends('dashboard.layouts.master')
@section("title","Dashboard")
@section('breadcumb')
    Pengaturan
@endsection
@section("content")
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form action="{{route('dashboard.pengaturan.update')}}" method="post" autocomplete="off" onsubmit="confirm('Apakah anda yakin ingin mengirim data ini?')" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Nama Website <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="website_name" placeholder="Nama Website" value="{{old('website_name',$result->website_name)}}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Maps Website <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="website_maps" placeholder="Kata Kunci Website" value="{{old('website_maps',$result->website_maps)}}" required>
                                        <p class="text-info" style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;"><small><i>Copy-an iframe html dari gmaps</i></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Motto Website <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <textarea rows="3" class="form-control" name="website_motto">{{old('website_motto',$result->website_motto)}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">No.HP Website <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="website_phone" placeholder="No.HP Website" value="{{old('website_phone',$result->website_phone)}}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Alamat Website <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="website_address" placeholder="Alamat Website" value="{{old('website_address',$result->website_address)}}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Email Website <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="website_email" placeholder="Email Website" value="{{old('website_email',$result->website_email)}}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Logo Website</label>
                                    <div class="col-md-10">
                                        @if(!empty($result->website_logo))
                                        <div class="mb-2">
                                            <img src="{{asset('storage/'.$result->website_logo)}}" style="width: 80px;height:80px;">
                                        </div>
                                        @endif
                                        <input type="file" class="form-control" name="website_logo">
                                        <p class="text-info" style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;"><small><i>Kosongkan jika tidak diubah</i></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{route('dashboard.pengaturan.index')}}" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
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