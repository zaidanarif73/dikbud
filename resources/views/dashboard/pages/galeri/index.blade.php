@extends('dashboard.layouts.master')
@section("title","Galeri ~ DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section("title_breadcumb","Galeri")
@section('css')

@endsection
@section('breadcumb','Galeri')

@section("content")
    <div class="row">
        <div class="col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <a href="{{ route('dashboard.galeri.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                            <a href="#" class="btn btn-success btn-filter"><i class="fa fa-filter"></i> Fiter</a>
                            <a href="{{route('dashboard.galeri.index')}}" class="btn btn-warning"><i class="fa fa-refresh"></i> Refresh</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <th style="width:5%">No</th>
                                        <th style="width:30%">Judul</th>
                                        <th style="width:30%">Deskripsi</th>
                                        <th style="width:30%">Tanggal</th>
                                        <th style="width:15%">Gambar</th>
                                        <th style="width:20%">Aksi</th>
                                    </thead>
                                    <tbody>
                                        @forelse ($table as $index => $row)
                                        <tr>
                                            <td>{{ $table->firstItem() + $index }}</td>
                                            <td>{{ $row->title }}</td>
                                            <td>{{ $row->description }}</td>
                                            <td>{{ Carbon\Carbon::parse($row->date)->translatedFormat('l,d F Y') }}</td>
                                            <td class="d-flex justify-content-center">
                                                @if (in_array(pathinfo($row->image, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']))
                                                    <img width="100px" src="{{ asset('storage/' . $row->image) }}" alt="{{ $row->title }}">
                                                @elseif (in_array(pathinfo($row->image, PATHINFO_EXTENSION), ['wmv', 'mkv', 'mp4', 'avi']))
                                                    <video width="100px" height="100%" controls>
                                                        <source src="{{ asset('storage/' . $row->image) }}" type="video/{{ pathinfo($row->image, PATHINFO_EXTENSION) }}">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex mb-1">
                                                    <a href="{{route('dashboard.galeri.show',$row->id)}}" class="btn btn-success btn-sm mr-1"><i class="fa fa-address-card"></i> Detail</a>
                                                    <a href="{{ route('dashboard.galeri.edit',$row->id) }}" class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i> Edit</a>
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
                    $("#frmDelete").attr("action", "{{ route('dashboard.galeri.destroy', '_id_') }}".replace("_id_", id));
                    $("#frmDelete").find('input[name="id"]').val(id);
                    $("#frmDelete").submit();
                }
            })
        })
    </script>
    
    @endsection