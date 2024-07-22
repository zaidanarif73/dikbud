@extends('dashboard.layouts.master')
@section("title","Layanan")
@section('css')

@endsection
@section("breadcumb","Layanan")
@section("breadcumb_child","Create")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form action="{{route('dashboard.layanan.store')}}" method="POST" autocomplete="off" onsubmit="confirm('Apakah anda yakin ingin mengirim data ini?')" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Judul <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="title" placeholder="Judul"  value="{{old('title')}}" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-5" >
                                    <label class="col-md-2 col-form-label" for="description">Deskripsi <span class="text-danger">*</span></label>
                                    <div class="col-md-10"   >       


                                        {{-- <div id="toolbar">
                                            <input type="text" id="description"  name="description" >
                                        </div> --}}
                                        @trix(\App\Models\Layanan::class, 'content')
                                        
                                    </div>
                                </div>
                                <div class="form-group row mt-5">
                                    <label class="col-md-2 col-form-label">Image <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="image" accept="image/*" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{route('dashboard.layanan.index')}}" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
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
{{-- @section ('script')
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

    const quill = new Quill('#description-editor', {
        modules: {
            toolbar: {
                container: toolbarOptions
            }
        },
        theme: 'snow' // You can also choose 'bubble'
    });
    // Handle form submission
    var form = document.querySelector('form');
    form.onsubmit = function() {
        var description = document.querySelector('input[name=description]');
        description.value = quill.root.innerHTML;
    };
</script>
@endsection --}}
