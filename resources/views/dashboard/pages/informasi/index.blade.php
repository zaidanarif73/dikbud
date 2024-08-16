@extends('dashboard.layouts.master')
@section("title","Informasi ~ DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section("title_breadcumb","Informasi")
@section('css')

@endsection
@section("breadcumb","Informasi")
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
                                        <th style="width:5%" class="text-center">No</th>
                                        <th style="width:50%;" class="text-center">Nama File</th>
                                        <th style="width:10%" class="text-center">Tipe</th>
                                        <th style="width:35%" class="text-center">Aksi</th>
                                    </thead>
                                    <tbody>
                                        @forelse ($table as $index => $row)
                                        <tr>
                                            <td>{{ $table->firstItem() + $index }}</td>
                                            <td>{{ $row->title }}</td>               
                                            @if($row->type == 'link')
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <span class="badge bg-success">{{ $row->type }}</span>
                                                    </div>
                                                </td>
                                            @elseif($row->type == 'file')
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <span class="badge bg-warning text-dark">{{ $row->type }}</span>
                                                    </div>
                                                </td>
                                            @endif
                                            <td>
                                                <div class="mb-1 d-flex justify-content-center">
                                                    @if ($row->file_path != null)
                                                        <a href="{{ asset('storage/'.$row->file_path) }}" target="_blank" class="btn btn-success btn-sm mr-1"><i class="fa fa-address-card"></i> Detail</a>
                                                    @elseif($row->file_link != null)
                                                        <a href="{{ URL::to($row->file_link) }}" target="_blank" class="btn btn-success btn-sm mr-1"><i class="fa fa-address-card"></i> Detail</a>
                                                    @endif
                                                        <a href="{{ route('dashboard.informasi.edit',$row->id) }}" class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i> Edit</a>
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
                $("#frmDelete").attr("action", "{{ route('dashboard.informasi.destroy', '_id_') }}".replace("_id_", id));
                $("#frmDelete").find('input[name="id"]').val(id);
                $("#frmDelete").submit();
            }
        })
    })
</script>
@endsection