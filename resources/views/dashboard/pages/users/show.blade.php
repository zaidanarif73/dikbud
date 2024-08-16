@extends('dashboard.layouts.master')
@section("title","Users ~ DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section("title_breadcumb","Users")
@section("breadcumb","Users")
@section("breadcumb_child","Show")
@section("content")
<div class="row pb-5">
    <div class="col-md-4 col-12">
        <div class="card">
            <div class="card-body">
                <div class="text-center d-flex flex-column h-100">
                    <div>
                        <img src="{{ $result->avatar ? asset('storage/' . $result->avatar) : 'https://avatars.dicebear.com/api/initials/'. $result->name .'.png?background=blue' }}" alt="" class="avatar-lg mx-auto img-thumbnail rounded-circle">
                    </div>

                    <div class="mt-3 d-flex justify-content-between flex-column flex-1">
                        <div class="mx-auto">
                            <h6>{{ $result->name }}</h6>
                            <p class="text-body mt-1 mb-1">
                                <b>{{$result->getRoleNames()->implode(', ') }}</b>
                            </p>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <a href="{{route('dashboard.users.index')}}" class="btn btn-warning btn-sm" style="margin-right: 10px;"><i class="fa fa-arrow-left"></i> Kembali</a>
                            <a href="{{route('dashboard.users.edit',$result->id)}}" class="btn btn-primary btn-sm" style="margin-right: 10px;"><i class="fa fa-edit"></i> Edit</a>
                            @if(Auth::user()->id != $result->id)
                                @if(!$result->trashed())
                                <a href="#" class="btn btn-danger btn-sm btn-delete"><i class="fa fa-trash"></i> Hapus</a>
                                @else
                                <a href="#" class="btn btn-warning btn-sm mr-1 btn-restore"><i class="fa fa-undo"></i> Restore</a>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-3">Informasi Personal</h5>
                <br>
                <div class="mt-3">
                    <p class="font-size-12 text-muted mb-1">Nama Lengkap</p>
                    <h6 class="">{{ $result->name }}</h6>
                </div>

                <div class="mt-3">
                    <p class="font-size-12 text-muted mb-1">Telepon</p>
                    <h6 class="">{{ $result->phone ? $result->phone : '-' }}</h6>
                </div>

                <div class="mt-3">
                    <p class="font-size-12 text-muted mb-1">Email</p>
                    <h6 class="">{{ $result->email }}</h6>
                </div>

                <div class="mt-3">
                    <p class="font-size-12 text-muted mb-1">Tanggal Dibuat</p>
                    <h6 class="">{{ date('d-m-Y H:i:s',strtotime($result->created_at)) }}</h6>
                </div>

                <div class="mt-3">
                    <p class="font-size-12 text-muted mb-1">Tanggal Diperbarui</p>
                    <h6 class="">{{ date('d-m-Y H:i:s',strtotime($result->updated_at)) }}</h6>
                </div>

                @if(!empty($result->deleted_at))
                <div class="mt-3">
                    <p class="font-size-12 text-muted mb-1">Tanggal Dihapus</p>
                    <h6 class="">{{ date('d-m-Y H:i:s',strtotime($result->deleted_at)) }}</h6>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<form id="frmDelete" method="POST">
    @csrf
    @method('DELETE')
    <input type="hidden" name="id"/>
</form>

<form id="frmRestore" method="POST">
    @csrf
    @method('PATCH')
    <input type="hidden" name="id"/>
</form>
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
<script>
    $(function(){

        $(document).on("click",".btn-delete",function(){
            if(confirm("Apakah anda yakin ingin menghapus data ini ?")){
                $("#frmDelete").attr("action", "{{ route('dashboard.users.destroy', '_id_') }}".replace("_id_", '{{$result->id}}'));
                $("#frmDelete").submit();
            }
        })

        $(document).on("click",".btn-restore",function(){
            if(confirm("Apakah anda yakin ingin mengembalikan data ini ?")){
                $("#frmRestore").attr("action", "{{ route('dashboard.users.restore', '_id_') }}".replace("_id_", '{{$result->id}}'));
                $("#frmRestore").submit();
            }
        })
    })
</script>
@endsection