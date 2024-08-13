@extends('dashboard.layouts.master')
@section("title","VM")
@section('css')

@endsection
@section("breadcumb","VM")
@section("breadcumb_child","Create")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form action="{{route('dashboard.vm.store')}}" method="POST" autocomplete="off" onsubmit="confirm('Apakah anda yakin ingin mengirim data ini?')" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                
                                <div class="form-group row mb-5" >
                                    <label class="col-md-2 col-form-label" for="description">Deskripsi <span class="text-danger">*</span></label>
                                    <div class="col-md-10"   >       
                                        @trix(\App\Models\VM::class, 'content') 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{route('dashboard.vm.index')}}" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
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
        theme: 'snow' // You can alvm choose 'bubble'
    });
    // Handle form submission
    var form = document.querySelector('form');
    form.onsubmit = function() {
        var description = document.querySelector('input[name=description]');
        description.value = quill.root.innerHTML;
    };
</script>
@endsection --}}
