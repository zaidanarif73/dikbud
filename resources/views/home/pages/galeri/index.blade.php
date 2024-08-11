@extends('home.layouts.master')
@section("title","Galeri | DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section('css')
    <link href="{{ URL::to('/') }}/assets/css/galery/style.css" rel="stylesheet">
@endsection
@section('content')

    <div class="container p-5" id="galeri_pict"  style="padding-top :150px !important">
        <ul>
            @forelse($table as $index => $row)
            <li>
                <a class="" data-bs-toggle="modal" href="#userShowModal" id="show-user"
                data-url="{{ route('home.galeri.show', $row->id) }}" alt="">
                    <figure>
                        <img src="{{ asset('storage/' . $row->image) }}">
                        <figcaption>{{ $row->title }}</figcaption>
                    </figure>
                </a>
            </li>
            @empty

            @endforelse
        </ul>
        @include('home.pages.galeri.modal.index')
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            /* When click show user */
            $('body').on('click', '#show-user', function() {
                var userURL = $(this).data('url');
                // 
                $.get(userURL, function(data) {
                    $data_image = data.image;
                    var data_date = new Date(data.date);
                    // $data_date = data.date;
                    // $data_date = $data_date.getDay(); 
                    $('#userShowModal').modal('show');
                    $('#title').text(data.title);
                    var options = {
                        weekday: 'long',
                        year: 'numeric',
                        month: '2-digit',
                        day: '2-digit'
                        
                    };
                    var formattedDate = data_date.toLocaleDateString('id-ID',
                    options); // Ubah format sesuai kebutuhan Anda
                    $('#date').text(formattedDate);
                    // $('#date').text(data.date);


                    $('#image').attr("src", "{{ asset('storage/_id_') }}".replace("_id_",
                        $data_image));
                    $('#description').text(data.description);
                })
            });
        });
    </script>
@endsection
