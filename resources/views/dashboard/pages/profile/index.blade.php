@extends('dashboard.layouts.master')
@section("title","Profil ~ DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section("title_breadcumb","Profil")
@section('css')

@endsection
@section('breadcumb','Profile')

@section("content")
<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <form action="{{route('dashboard.profile.update')}}" method="post" autocomplete="off" onsubmit="confirm('Apakah anda yakin ingin mengirim data ini?')" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            @if(!empty($user->avatar))
                            <div class="row mb-2">
                                <div class="col-12 text-center">
                                    <img src="{{asset('storage/'.$user->avatar)}}" style="width: 150px;height:150px;">
                                </div>
                            </div>
                            @endif
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" value="{{old('name',$user->name)}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Email <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email',$user->email)}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">No.HP <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="phone" placeholder="No.HP" value="{{old('phone',$user->phone)}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Foto</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="file" name="avatar" accept="image/*">
                                    <p class="text-info" style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;"><small><i>Kosongkan jika tidak diubah</i></small></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Password Baru</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <p class="text-info" style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;"><small><i>Kosongkan jika tidak diubah</i></small></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Konfirmasi Password Baru</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Password Konfirmasi">
                                    <p class="text-info" style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;"><small><i>Kosongkan jika tidak diubah</i></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{route('dashboard.profile.index')}}" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection