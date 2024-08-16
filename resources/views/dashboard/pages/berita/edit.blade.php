@extends('dashboard.layouts.master')
@section("title","Berita ~ DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section("title_breadcumb","Berita")
@section('breadcumb', 'Berita')
@section('breadcumb_child', 'Edit')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <form action="{{ route('dashboard.berita.update', $result->id) }}" method="post" autocomplete="off"
                            onsubmit="confirm('Apakah anda yakin ingin mengirim data ini?')" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Judul <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="title" placeholder="Judul"
                                                value="{{ old('title', $result->title) }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-5">
                                        <label class="col-md-2 col-form-label" for="description">Deskripsi <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-10">
                                            @trix($result, 'content')
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Tanggal<span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-10">
                                            <input type="date" class="form-control" name="date" placeholder="Tanggal"
                                                value="{{ old('date', $result->date) }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Image <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="file" name="image" accept="image/*">
                                            <p class="text-info"
                                                style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;">
                                                <small><i>Kosongkan jika tidak diubah</i></small></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="{{ route('dashboard.berita.index') }}" class="btn btn-warning"><i
                                            class="fa fa-arrow-left"></i> Kembali</a>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                                        Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- @section('script')
<script>
    const toolbarOptions = [ 
    [{ 'font': [] }],
    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
    ['bold', 'italic'], 
    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
    [{ 'indent': '-1'}, { 'indent': '+1' }],
    ['link', 'image'],
    ['blockquote', 'code-block']
    ];

    const quill = new Quill('#editor', {
        modules: {
            toolbar: {
                container: toolbarOptions
            }
        },
        theme: 'snow' // You can also choose 'bubble'
    });
</script>
@endsection --}}
