@extends('dashboard.layouts.master')
@section("title","Users ~ DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section("title_breadcumb","Users")
@section("css")
<!-- Datetime picker -->
<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/dashboard/assets/plugins/datetimepicker/jquery.datetimepicker.css">
@endsection
@section("breadcumb","Users")
@section("breadcumb_child","Edit")
@section("content")
<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <form action="{{route('dashboard.users.update',$result->id)}}" method="post" autocomplete="off" onsubmit="confirm('Apakah anda yakin ingin mengirim data ini?')" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" value="{{old('name',$result->name)}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Email <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email',$result->email)}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">No.HP <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="phone" placeholder="No.HP" value="{{old('phone',$result->phone)}}" required>
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
                                <label class="col-md-2 col-form-label">Password</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <p class="text-info" style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;"><small><i>Kosongkan jika tidak diubah</i></small></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Konfirmasi Password</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Password Konfirmasi">
                                    <p class="text-info" style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;"><small><i>Kosongkan jika tidak diubah</i></small></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Email Verified At</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control datetimepicker" name="email_verified_at" placeholder="Email Verified At" value="{{old('email_verified_at',$result->email_verified_at)}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Role<span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <select name="roles" class="form-control select2" name="roles" required>
                                        <option value="">==Pilih Role==</option>
                                        @foreach ($roles as $index => $row)
                                        <option value="{{$row}}"  @if(in_array($row,$result->roles->pluck('name')->toArray())) selected @endif>{{$row}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Status<span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <select class="form-control select2 " name="status" style="width: 100%;" required>
                                        <option value="">==Pilih Status==</option>
                                        @foreach ($status as $index => $row)
                                        <option value="{{$index}}" @if($index == $result->status) selected @endif>{{$row}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{route('dashboard.users.index')}}" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section("script")
    {{-- breadcumb navigate --}}
    <script>
        $(function(){
            $status = $("#breadcumb_child").val();
            if($status != null){
                $("#breadcumb").removeClass("active");
            }
        });
    </script>

    <!-- Datetimepicker -->
    <script src="{{URL::to('/')}}/assets/js/dashboard/plugins/moment/moment.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/dashboard/plugins/datetimepicker/jquery.datetimepicker.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/dashboard/plugins/axios/axios.min.jss"></script>
    <script>
        $(function(){

            $.datetimepicker.setDateFormatter('moment');
            $.datetimepicker.setLocale('id');
            
            $('.datetimepicker').datetimepicker({
                format:'YYYY-MM-DD HH:mm:ss',
                formatTime:'HH:mm:ss',
                formatDate:'YYYY-MM-DD'
            });
        })
    </script>
@endsection