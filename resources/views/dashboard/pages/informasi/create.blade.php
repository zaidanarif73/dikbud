@extends('dashboard.layouts.master')
@section("title","Informasi")
@section('css')
        <!-- css yudo-->
    <link href="{{URL::to('/')}}/assets/css/dashboard/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{URL::to('/')}}/assets/css/dashboard/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{URL::to('/')}}/assets/css/dashboard/assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{URL::to('/')}}/templates/dashboard/assets/plugins/bootstrap-select2/select2.min.css" />
    <link rel="stylesheet" href="{{URL::to('/')}}/templates/dashboard/assets/plugins/bootstrap-select2/select2-bootstrap.min.css">
    <!--end css yudo-->
@endsection
@section('breadcumb')
    Informasi
@endsection
@section("content")
<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <form id="myForm" action="{{ route('dashboard.informasi.store') }}" method="post" autocomplete="off" onsubmit="confirm('Apakah anda yakin ingin mengirim data ini?')" enctype="multipart/form-data">
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
                                <label class="col-md-2 col-form-label">Tipe <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="type" value="link">
                                        <label class="form-check-label" for="flexRadioDefault1">Link</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="type" value="file" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">File</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">File <span class="text-danger">*</span></label>
                                <div class="col-md-10" id="file_path">
                                    
                                    <input class="form-control" id="file_input" type="file" name="file_path">
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

@section("script")
    <script>
        $(function(){
            $('input[name="type"]').on('change', function() {
                const val = $(this).filter(":checked").val();
                //alert(val);
                if(val == 'link'){
                    $("#file_path").html('<input class="form-control" id="link_input" type="text" name="file_path" placeholder="Link File"  value="" required>');
                }else if(val == 'file'){
                    $("#file_path").html('<input class="form-control" id="file_input" type="file" name="file_path">');
                }
            });
        });
    </script>
@endsection