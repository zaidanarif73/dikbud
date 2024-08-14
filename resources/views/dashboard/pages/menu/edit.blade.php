@extends('dashboard.layouts.master')
@section("title","Menu")
@section("breadcumb","Menu")
@section("breadcumb_child","Edit")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form action="{{route('dashboard.menu.update',$result->id)}}" method="post" autocomplete="off" onsubmit="confirm('Apakah anda yakin ingin mengirim data ini?')" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Judul <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ old('title', $result->title) }}" required>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="parent">Parent</label>
                                    <div class="col-md-10">
                                        <select name="parent" id="parent" class="form-control">
                                            <option value="">Pilih Parent</option>
                                            @foreach ($menu as $item)
                                                <option value="{{ $item->id }}" {{ $item->id == $result->parent ? 'selected' : '' }}>{{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row mb-5" >
                                    <label class="col-md-2 col-form-label" for="description">Deskripsi <span class="text-danger">*</span></label>
                                    <div class="col-md-10"   >  
                                        @trix($result, 'content')
                                        {{-- @trix(\App\Models\menu::class, 'content', ['value' => $result->content])      --}}
                                        {{-- @trix(\App\Models\menu::class, $result->renderTrix("content")) --}}
                                        {{-- <input id="menu-trixFields" type="hidden" name="menu-trixFields" value="{!! $result->renderTrix("content") !!}" > --}}
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{route('dashboard.menu.index')}}" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
