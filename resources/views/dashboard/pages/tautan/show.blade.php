@extends('dashboard.layouts.master')
@section("title","Tautan ~ DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section("title_breadcumb","Tautan")
@section('breadcumb')
    
@endsection
@section("content")
<div class="container">
<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h5 class="card-title mb-3">Tautan</h5>

                <div class="row mb-2">
                    <div class="col-md-3">
                        Judul
                    </div>
                    <div class="col-md-8">
                        : {{$result->title}}
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3">
                       URL
                    </div>
                    <div class="col-md-8">
                        : {{$result->url}}
                    </div>
                </div>

                
                

                <div class="mt-5">
                    <a href="{{route('dashboard.tautan.index')}}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <a href="{{route('dashboard.tautan.edit',$result->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                    <a href="#" class="btn btn-danger btn-sm btn-delete"><i class="fa fa-trash"></i> Hapus</a>
                </div>

            </div>
        </div>
    </div>
</div>

<form id="frmDelete" method="POST">
    @csrf
    @method('DELETE')
</form>
@endsection

@section("script")
<script>
    $(function(){

        $(document).on("click",".btn-delete",function(){
            if(confirm("Apakah anda yakin ingin menghapus data ini ?")){
                $("#frmDelete").attr("action", "{{ route('dashboard.tautan.destroy', '_id_') }}".replace("_id_", '{{$result->id}}'));
                $("#frmDelete").submit();
            }
        })
    })
</script>
</div>
@endsection