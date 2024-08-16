@extends('dashboard.layouts.master')
@section("title","Kontak ~ DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section("title_breadcumb","Kontak")
@section('breadcumb')
    Kontak
@endsection
@section("content")
<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <a href="#" class="btn btn-success btn-filter"><i class="fa fa-filter"></i> Fiter</a>
                        <a href="" class="btn btn-warning"><i class="fa fa-refresh"></i> Refresh</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <th style="width:5%" class="text-center">No</th>
                                    <th style="width:15%;" class="text-center">Nama</th>
                                    <th style="width:20%" class="text-center">Email</th>
                                    <th style="width:40%" class="text-center">Subjek</th>
                                    <th style="width:20%" class="text-center">Aksi</th>
                                </thead>
                                <tbody>
                                    @forelse ($table as $index => $row)
                                    <tr>
                                        <td>{{$table->firstItem() + $index}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->subject}} ~ <p class="text-success">{{ Carbon\Carbon::parse($row->created_at)->diffForHumans(null, true).' yang lalu';}}<p></td>
                                        <td>
                                            <div class="d-flex mb-1">
                                                <a href="{{route('dashboard.kontak.show',$row->id)}}" class="btn btn-success btn-sm mr-1"><i class="fa fa-address-card"></i> Detail</a>
                                                <a href="#" class="btn btn-danger btn-sm mr-1 btn-delete" data-id="{{$row->id}}"><i class="fa fa-trash"></i> Hapus</a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include("dashboard.pages.kontak.modal.index")

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
                $("#frmDelete").attr("action", "{{ route('dashboard.kontak.destroy', '_id_') }}".replace("_id_", id));
                $("#frmDelete").find('input[name="id"]').val(id);
                $("#frmDelete").submit();
            }
        })
    })
</script>
@endsection