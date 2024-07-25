
@extends('home.layouts.master')
@section('css')
    <link href="{{ URL::to('/') }}/assets/css/galery/style.css" rel="stylesheet">
@endsection
@section('content')

    <div class="container">
        <header>
            <h1>DOKUMENTASI KEGIATAN</h1>
        </header>
        <main>
            <div class="gallery">
                @forelse ($table as $index => $row)
                    <div class="gallery-item">
                        <a class="" data-bs-toggle="modal" href="#userShowModal" id="show-user"
                            data-url="{{ route('home.galeri.show', $row->id) }}" alt="">
                            <img src="{{ asset('storage/' . $row->image) }}" alt="">
                        </a>
                        <p>{{ Carbon\Carbon::parse($row->created_at)->translatedFormat('l,d F Y') }}</p>
                        <h3>{{ $row->title }}</h3>


                    </div>
                @empty
                    <p>no data</p>
                @endforelse
             
        </main>
        <div class="pagination">
            <button>&laquo;</button>
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button>&raquo;</button>
        </div>
    </div>
   
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
