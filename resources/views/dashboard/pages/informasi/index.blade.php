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
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <a href="{{ route('dashboard.informasi.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                            <a href="#" class="btn btn-success btn-filter"><i class="fa fa-filter"></i> Fiter</a>
                            <a href="" class="btn btn-warning"><i class="fa fa-refresh"></i> Refresh</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <th style="width:5%">No</th>
                                        <th style="width:50%">Nama File</th>
                                        <th style="width:20%">Aksi</th>
                                    </thead>
                                    <tbody>
                                        @forelse ($table as $index => $row)
                                        <tr>
                                            <td>{{ $table->firstItem() + $index }}</td>
                                            <td>{{ $row->title }}</td>
                                            <td>
                                                <div class="d-flex mb-1">
                                                    <a href="" class="btn btn-success btn-sm mr-1"><i class="fa fa-address-card"></i> Detail</a>
                                                    <a href="" class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="#" class="btn btn-danger btn-sm mr-1 btn-delete" data-id=""><i class="fa fa-trash"></i> Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="10" class="text-center">Data tidak ditemukan</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            {!!$table->links()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include("dashboard.pages.galeri.modal.index")

<form id="frmDelete" method="POST">
    @csrf
    @method('DELETE')
    <input type="hidden" name="id"/>
</form>
@endsection

@section("script")
<script>
    $(function(){
        $(document).on("click",".btn-filter",function(e){
            e.preventDefault();

            $("#modalFilter").modal("show");
        });

        $(document).on("click",".btn-delete",function(){
            let id = $(this).data("id");
            if(confirm("Apakah anda yakin ingin menghapus data ini ?")){
                $("#frmDelete").attr("action", "".replace("_id_", id));
                $("#frmDelete").find('input[name="id"]').val(id);
                $("#frmDelete").submit();
            }
        })
    })
</script>
@endsection