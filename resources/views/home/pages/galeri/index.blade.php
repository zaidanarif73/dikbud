
@extends('home.layouts.master')
@section("title","Galeri | DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section('css')
    <link href="{{ URL::to('/') }}/assets/css/galery/style.css" rel="stylesheet">
    <style>

        figure img {
            width: 100%;
            display: block;
            aspect-ratio: 1 / 1;
            object-fit: cover;
            transition: transform 1000ms;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            gap: 0.5rem;
            grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
            max-width: 100%;
            
        }

        figure {
            margin: 0;
            position: relative;
            overflow: hidden;
        }

        figure::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 200%;
            height: 200%;
            background: rgba(0, 0, 0, 0.5);
            transform-origin: center;
            opacity: 0;
            transform: scale(2);
            transition: opacity 300ms;
        }

        figcaption {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            place-items: center;
            text-align: center;
            padding: 1rem;
            color: white;
            font-size: 1.2rem;
            z-index: 1;
            opacity: 0;
            transition: opacity 600ms, transform 600ms;
        }

        a:is(:hover, :focus) figure::after {
            opacity: 1;
        }

        a:is(:hover, :focus) figcaption {
            opacity: 1;
            transition: opacity 600ms;
        }

        @media (prefers-reduced-motion: no-preference) {
            figcaption {
                transform: translate3d(0, 2rem, 0);
            }
            
            figure::after {
                border-radius: 50%;
                opacity: 1;
                transform: scale(0);
                transition: transform 900ms;
            }
            
            a:is(:hover, :focus) figure::after {
                transform: scale(2.5);
            }

            a:is(:hover, :focus) figcaption {
                opacity: 1;
                transform: translate3d(0, 0, 0);
                transition: opacity 600ms 400ms, transform 600ms 400ms;
            }

            a:is(:hover, :focus) img {
                transform: scale(1.2);
            }
        }
    </style>
@endsection
@section('content')

    <div class="container p-5">
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
