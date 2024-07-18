@extends('dashboard.layouts.master')
@section("title","Kalender")
@section('css')

@endsection
@section("breadcumb","Kalender")
@section("breadcumb_child","Edit")
@section("content")
<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <form id="myForm" action="{{ route('dashboard.kalender.update',$result->id) }}" method="post" autocomplete="off" onsubmit="confirm('Apakah anda yakin ingin mengirim data ini?')" enctype="multipart/form-data">
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
                                <label class="col-md-2 col-form-label">Tanggal Mulai <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input type="date" class="form-control"name="date_mulai" value="{{old('date_mulai',$result->date_mulai)}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Tanggal Selesai <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input type="date" class="form-control"name="date_selesai" value="{{old('date_selesai',$result->date_selesai)}}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{route('dashboard.kalender.index')}}" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
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
@endsection