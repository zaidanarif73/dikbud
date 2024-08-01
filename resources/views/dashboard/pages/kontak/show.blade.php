@extends('dashboard.layouts.master')
@section("title","Kontak")
@section("breadcumb","Kontak")
@section("breadcumb_child","Show")
@section("content")
<div class="container">
<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                

                <div class="row mb-2">
                    <div class="col-md-3">
                        Nama
                    </div>
                    <div class="col-md-8">
                        : {{$result->name}}
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3">
                        Email
                    </div>
                    <div class="col-md-8">
                        : {{$result->email}}
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-3">
                        Tanggal
                    </div>
                    <div class="col-md-8">
                        : {{ Carbon\Carbon::parse($result->created_at)->translatedFormat('l,d F Y') }}
                    </div>
                </div>
                @if($result->image == null)
                    <div></div>
                @else
                <div class="row mb-2">
                    <div class="col-md-3">
                        Image
                    </div>
                    <div class="col-md-8">
                        : <img src="{{ asset('storage/'.$result->image) }}" style="width: 200px;height:200px;">
                    </div>
                </div>
                @endif

                

                <div class="mt-5">
                    <a href="{{route('dashboard.kontak.index')}}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
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
                $("#frmDelete").attr("action", "{{ route('dashboard.kontak.destroy', '_id_') }}".replace("_id_", '{{$result->id}}'));
                $("#frmDelete").submit();
            }
        })
    })
</script>
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