@extends('home.layouts.master')
@section("title","Galeri | DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section('css')
    <link href="{{ URL::to('/') }}/assets/css/galery/style.css" rel="stylesheet">
@endsection
@section('content')

    <div class="container p-5" id="galeri_pict" style="padding-top: 100px !important">
        <div class="title-galeri">
            <h3>Galeri</h3>
        </div>
        <ul>
            @forelse($table as $index => $row)
            <li>
                <a class="" data-bs-toggle="modal" href="#userShowModal" id="show-user"
                data-url="{{ route('home.galeri.show', $row->id) }}" alt="">
                    <figure>
                        @if (in_array(pathinfo($row->image, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']))
                            <img src="{{ asset('storage/' . $row->image) }}" alt="{{ $row->title }}">
                        @elseif (in_array(pathinfo($row->image, PATHINFO_EXTENSION), ['wmv', 'mkv', 'mp4', 'avi']))
                            <video width="" height="" controls>
                                <source src="{{ asset('storage/' . $row->image) }}" type="video/{{ pathinfo($row->image, PATHINFO_EXTENSION) }}">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                        <figcaption>{{ $row->title }}</figcaption>
                    </figure>
                </a>
            </li>
            @empty
                <li>No gallery items found.</li>
            @endforelse
        </ul>
        @include('home.pages.galeri.modal.index')
    </div>
    <div class="container d-flex justify-content-center">
        {!!$table->links()!!}
    </div>
    
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            /* When click show user */
            $('body').on('click', '#show-user', function() {
                var userURL = $(this).data('url');

                $.get(userURL, function(data) {
                    var data_image = data.image;
                    var data_date = new Date(data.date);

                    $('#userShowModal').modal('show');
                    $('#title').text(data.title);

                    var options = {
                        weekday: 'long',
                        year: 'numeric',
                        month: '2-digit',
                        day: '2-digit'
                    };
                    var formattedDate = data_date.toLocaleDateString('id-ID', options);
                    $('#date').text(formattedDate);

                    // Display image or video in modal
                    var fileExtension = data.image.split('.').pop().toLowerCase();
                    if (['jpg', 'jpeg', 'png', 'gif'].includes(fileExtension)) {
                        $('#modal-content').html('<img src="{{ asset('storage/') }}/' + data_image + '" alt="' + data.title + '">');
                    } else if (['wmv', 'mkv', 'mp4', 'avi'].includes(fileExtension)) {
                        $('#modal-content').html('<video width="100%" height="100%" controls><source src="{{ asset('storage/') }}/' + data_image + '" type="video/' + fileExtension + '">Your browser does not support the video tag.</video>');
                    }
                    
                    $('#description').text(data.description);
                });
            });
        });
    </script>
@endsection
