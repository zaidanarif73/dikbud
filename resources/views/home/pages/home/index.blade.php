@extends('home.layouts.master')
@section("title","Home | DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section('css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    </style>
    <!-- font css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Titillium+Web&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/home/swiper/style.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/home/kalender.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/home/navbar.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/home/tautan.css">
@endsection


@section('content')
    <!-- Swiper-->

    <section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true"
        data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade" style="text-align: left">
        <div class="swiper-wrapper text-sm-left">
            @forelse ($table_banner as $index => $row)
                <div class="swiper-slide context-dark" id="swipper" data-slide-bg="{{ asset('storage/' . $row->image) }}"
                    alt="">
                    <div class="swiper-slide-caption section-md">
                        <div class="container" id="swipper_tittle">
                            <div class="row">
                                <div class="col-sm-9 col-md-8 col-lg-7 col-xxl-7 offset-lg-1 offset-xxl-0">
                                    <h1 class="oh swiper-title kanit-black">
                                        <span class="d-inline-block" data-caption-animate="slideInUp"
                                            data-caption-delay="0">{{ $row->title }}</span>
                                    </h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            <div class="swiper-slide context-dark" id="swipper" data-slide-bg="https://dikbud.malangkota.go.id/uploads/images/news_1722931804.jpg"
                alt="">
                <div class="swiper-slide-caption section-md">
                    <div class="container" id="swipper_tittle">
                        <div class="row">
                            <div class="col-sm-9 col-md-8 col-lg-7 col-xxl-7 offset-lg-1 offset-xxl-0">
                                <h1 class="oh swiper-title kanit-black">
                                    <span class="d-inline-block" data-caption-animate="slideInUp"
                                        data-caption-delay="0">Dikbud</span>
                                </h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Swiper Pagination-->
        <div class="swiper-pagination" data-bullet-custom="true"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev">
            <div class="preview">
                <div class="preview__img"></div>
            </div>
            <div class="swiper-button-arrow">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        <div class="swiper-button-next">
            <div class="swiper-button-arrow">
                <i class='bx bx-right-arrow-alt'></i>
            </div>
            <div class="preview">
                <div class="preview__img"></div>
            </div>
        </div>
    </section>

    </section><!-- /Hero Section -->

    <!-- Layanan Section -->
    <section id="layanan" class="featured-services section light-background">
        <div class="container section-title " data-aos="fade-up ">
            <h2 class=" p-5">Layanan</h2>
        </div>

        <div class="card-container container">
            @forelse ($table_layanan as $index => $row)
            <div class="card-layanan">
                <a href="{{ route('home.layanan.show', $row->id) }}"> <img src="{{ asset('storage/' . $row->image) }}" alt="Legalisir"></a>
                <p><a href="{{ route('home.layanan.show', $row->id) }}" class="">{{$row ->title}}</a></p>
            </div>
            @empty
            <p>kosong</p>
            @endforelse
            
        </div>




        <!-- Features Details Section -->
        <section id="features-details" class="features-details section text-center">
            <div class="container section-title" data-aos="fade-up">
                <h2>Berita Terpopuler</h2>
            </div>
            <div class="container">
                <!-- <h3 class="d-flex justify-content-start">Berita Utama</h3> -->
                @if($table_view != null)
                <div class="row gy-4 justify-content-between features-item">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('storage/' . $table_view->image) }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <p>
                                {{ Carbon\Carbon::parse($table_view->date)->translatedFormat('l,d F Y') }}
                            </p>
                            <small><i class='bx bx-show'></i> Dilihat {{ $count_view->total }} kali</small>
                            <h4>{{ $table_view->title }}</h4>
                            <p>
                                {!! Str::limit(strip_tags($table_view->renderTrix('content')), 120) !!}
                            </p>
                            <a href="{{ route('home.berita.show', $table_view->id) }}" class="btn more-btn">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @else
                    <p>No Data</p>
                @endif
                {{-- berita --}}
                <div class="berita py-5">
                    <div class="py-5">
                        <div class="row g-4 justify-content-center">
                            @forelse ($table_berita->sortByDesc('date')->slice(0, 3) as $index => $row)
                                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-aos="zoom-in" data-wow-delay="0.3s">
                                    <div class="berita-item rounded">
                                        <div class="berita-img rounded-top">
                                            <a href="{{ route('home.berita.show', $row->id) }}"><img
                                                    src="{{ asset('storage/' . $row->image) }}"
                                                    class="img-fluid rounded-top w-100" alt=""></a>
                                        </div>
                                        <div class="berita-content rounded-bottom bg-light p-4">
                                            <div class="berita-content-inner">
                                                <p class="card-text">
                                                    {{ Carbon\Carbon::parse($row->date)->translatedFormat('l,d F Y') }}</p>
                                                <a href="{{ route('home.berita.show', $row->id) }}"><h5 class="mb-4">{{ $row->title }}</h5></a>
                                                <p class="mb-3">{!! Str::limit(strip_tags($row->renderTrix('content')), 100) !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>tidak ada data</p>
                            @endforelse
                        </div>
                        <div>
                            <a href="{{ route('home.berita.index') }}" class="btn mt-3 mb-5">Semua Berita</a>
                        </div>
                    </div>
                </div>
        </section><!-- /Features Details Section -->

        <!-- Calender -->
        <section name="calendar">
            @include('home.component.kalender')
        </section>

        <!--end Calendar-->


        <div class="container section-title" data-aos="fade-up">
            <h2 class="p-5">Link</h2>
        </div>
        <div class="container">
          <div class="row mt-2 justify-content-center">
              @forelse ($table_tautan->chunk(5) as $chunk)
                  <div class="col-md-4 d-flex justify-content-center mt-5">
                      <div class="card list" data-aos="fade-up" style="width: 18rem;">
                          <ul>
                            @foreach ($chunk as $row)
                                <li><a href="{{ URL::to($row->url) }}" class="card-link" target="_blank">{{ $row->title }}</a></li>
                            @endforeach
                          </ul>
                      </div>
                  </div>
              @empty
                  <p>tidak ada data</p>
              @endforelse
          </div>
      </div>
      

        <!-- Contact Section -->
        <section id="kontak" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>

            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <p>{{ $table_pengaturan->website_address }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>{{ $table_pengaturan->website_phone }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>{{ $table_pengaturan->website_email }}</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="row gy-4 mt-1">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        {{-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d688.1506512226823!2d112.61389434101307!3d-7.956754435114845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827beffc2665%3A0x9dd38763e9a56b77!2sDinas%20Pendidikan%20dan%20Kebudayaan%20Kota%20Malang!5e0!3m2!1sen!2sid!4v1720151847698!5m2!1sen!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                            <iframe id="maps_big" src="" frameborder="0"></iframe>
                    </div><!-- End Google Maps -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="custom-content card">
                            <form action="{{ route('home.kontak.store') }}" method="post" autocomplete="off"
                                onsubmit="confirm('Apakah anda yakin ingin mengirim pesan ini?')"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row p-3">
                                    <div class="form-group col-md-6">
                                        <label for="username">Nama</label>
                                        <input type="text" class="form-control border border-dark" id="username"
                                            placeholder="Masukan Nama Anda" name="name" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email2">Email</label>
                                        <input type="email" class="form-control border border-dark" id="email"
                                            placeholder="Masukan Email Anda" name="email" />
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="username">Gambar</label>
                                        <input type="file" class="form-control border border-dark" accept="image/*"
                                            id="image" name="image" />
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="username">Subject</label>
                                        <input type="text" class="form-control border border-dark" id="subject"
                                            placeholder="Masukan Judul" name="subject" />
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="comment">Pesan Anda</label>
                                        <textarea class="form-control border border-dark" id="comment" rows="5" name="message"></textarea>
                                    </div>
                                    <div class="card-action">
                                        <button class="btn" type="submit"
                                            style="background: #2a2f5b; color:white">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->
    @endsection

    @section('script')
        <!--kalender-->
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/home/kalender.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/home/swiper/core.min.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/home/swiper/script.js"></script>
        <script src="{{URL::to('/')}}/assets/js/home/navbar.js"></script>

    @endsection
