@extends('home.layouts.master')

@section('css')
    <style>
        /* :root {
              --fc-border-color: black;
              --fc-daygrid-event-dot-width: 5px;
              } */
        .fc-button-group button {
            font-size: 1.5em;
            vertical-align: middle;
            background-color: #495057 !important;
        }

        .fc-today-button {
            background-color: #495057 !important;
        }

        #calendars {
            height: auto;
            width: auto;
            margin-top: 15%
        }

        @media only screen and (min-width: 600px) {
            #calendars {
                height: 500px;
                width: 500px;
            }

            .kalender {
                display: flex;
                justify-content: center;
            }

            #my_kalender {
                background-image: url("assets/img/bgcale.png");
                background-size: cover;
                background-repeat: no-repeat;
            }
        }
    </style>
@endsection


@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="hero-bg">
            <img src="assets/img/cobabud.jpg" alt="">
        </div>
        <div class="container text-center">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1>Selamat Datang</h1>
                <h1 data-aos="fade-up">Di Dinas Pendidikan dan Kebudayaan</h1>
                <h1> <span>Kota Malang</span></h1>
                <!-- <p data-aos="fade-up" data-aos-delay="100">Quickly start your project now and set the stage for success<br></p> -->
                <!-- <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#about" class="btn-get-started">Get Started</a>
                      </div> -->
                <img src="assets/img/coba1.png" class="img-fluid hero-img" alt="" data-aos="zoom-out"
                    data-aos-delay="300">
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>Layanan</h2>
        </div>
        <div class="container">

            <div class="row gy-3">
                <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex justify-content-center align-items-center">
                        <img src="assets/img/icon/legalisir.png" alt="">
                    </div>
                    <p>
                    <h6 class="text-center"><a href="{{ route('home.legalisir.index') }}"
                            class="stretched-link">Legalisir</a></h6>
                    </p>
                </div>

                <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item d-flex justify-content-center align-items-center">
                        <img src="assets/img/icon/mutasi.png" alt="">
                    </div>
                    <p>
                    <h6 class="text-center"><a href="{{ route('home.mutasi.index') }}" class="stretched-link">Mutasi
                            Siswa</a></h6>
                    </p>
                </div>
                <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item d-flex justify-content-center align-items-center">
                        <img src="assets/img/icon/suratijazah.png" alt="">
                    </div>
                    <p>
                    <h6 class="text-center"><a href="{{ route('home.ijazah_rusak.index') }}" class="stretched-link">Surat
                            Keterangan Ijazah Rusak atau Kesalahan Penulisan Ijazah</a></h6>
                    </p>
                </div>

                <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex justify-content-center align-items-center">
                        <img src="assets/img/icon/pengganti ijazah.png" alt="">
                    </div>
                    <p>
                    <h6 class="text-center"><a href="{{ route('home.pengganti_ijazah.index') }}"
                            class="stretched-link">Pelayanan Surat Pengganti Ijazah SD atau SMP</a></h6>
                    </p>
                </div>

                <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex justify-content-center align-items-center">
                        <img src="assets/img/icon/rekom.png" alt="">
                    </div>
                    <p>
                    <h6 class="text-center"><a href="{{ route('home.rekomendasi_penelitian.index') }}"
                            class="stretched-link">Surat Rekomendasi penelitian & magang</a></h6>
                    </p>
                </div>

                <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item d-flex justify-content-center align-items-center">
                        <img src="assets/img/icon/maklumat.png" alt="">
                    </div>
                    <p>
                    <h6 class="text-center"><a href="{{ route('home.maklumat.index') }}" class="stretched-link">Maklumat
                            Layanan</a></h6>
                    </p>
                </div>

                <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex justify-content-center align-items-center">
                        <img src="assets/img/icon/standar.png" alt="">
                    </div>
                    <p>
                    <h6 class="text-center"><a href="{{ route('home.SKSP.index') }}" class="stretched-link">Struktur
                            Organisasi Pelayanan Dan SK Standar Pelayanan</a></h6>
                    </p>
                </div>

                <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item d-flex justify-content-center align-items-center">
                        <img src="assets/img/icon/pengaduan.png" alt="">
                    </div>
                    <p>
                    <h6 class="text-center"><a href="{{ route('home.pengaduan.index') }}" class="stretched-link">Layanan
                            Pengaduan</a></h6>
                    </p>
                </div>

                <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="00">
                    <div class="service-item d-flex justify-content-center align-items-center">
                        <img src="assets/img/icon/ppdb.png" alt="">
                    </div>
                    <p>
                    <h6 class="text-center"><a href="{{ route('home.PPDB.index') }}" class="stretched-link">PPDB</a></h6>
                    </p>
                </div>

                <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex justify-content-center align-items-center">
                        <img src="assets/img/icon/solikin.jpeg" alt="">
                    </div>
                    <p>
                    <h6 class="text-center"><a href="{{ route('home.solikin.index') }}" class="stretched-link">SOLIKIN |
                            Sistem Online Kartu Induk Kesenian</a></h6>
                    </p>
                </div>

                <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item d-flex justify-content-center align-items-center">
                        <img src="assets/img/icon/ombudd.jpeg" alt="">
                    </div>
                    <p>
                    <h6 class="text-center"><a href="{{ route('home.ombudsman.index') }}" class="stretched-link">Info
                            Ombudsman</a></h6>
                    </p>
                </div>

                <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex justify-content-center align-items-center">
                        <img src="assets/img/icon/mpp1.jpg" alt="">
                    </div>
                    <p>
                    <h6 class="text-center"><a href="{{ route('home.mpp.index') }}" class="stretched-link">Layanan di
                            MPP Merdeka Kota Malang</a></h6>
                    </p>
                </div>

                <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex justify-content-center align-items-center">
                        <img src="assets/img/icon/form_PIP.png" alt="">
                    </div>
                    <p>
                    <h6 class="text-center"><a href="{{ route('home.formpip.index') }}" class="stretched-link">Form
                            Permohonan Informasi Publik</a></h6>
                    </p>
                </div>

            </div>

        </div>

        <!-- Features Details Section -->
        <section id="features-details" class="features-details section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Berita Utama</h2>
            </div>
            <div class="container">
                <!-- <h3 class="d-flex justify-content-start">Berita Utama</h3> -->

                <div class="row gy-4 justify-content-between features-item">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ URL::to('/') }}/assets/img/News.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <p>
                                Jumat, 21 Juni 2024 09:25 WIB
                            </p>
                            <h4>Jadi Narsum Worhshop, Mas Kadin Ucapkan Terima Kasih pada PTK SMPN 12 Malang</h4>
                            <p>
                                Malang - Jajaran SMP Negeri 12 Malang yang kini dikepalai oleh M. Shodiq., M.Pd
                                selenggarakan Workshop (WS) bertajuk Peningkatan Kompetensi Guru Berbasis Literasi dan
                                Numerasi. Kegiatan yang diselengg...
                            </p>
                            <a href="#" class="btn more-btn">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                {{-- berita --}}
               
                <div class="container-fluid berita py-5">
                  <div class="container py-5">
                      <div class="row g-4 justify-content-center">
                          @forelse ($table->slice(0, 3) as $index => $row)
                          <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                              <div class="berita-item rounded">
                                  <div class="berita-img rounded-top">
                                      <a href="{{route('home.berita.show', $row->id)}}"><img src="{{ asset('storage/' . $row->image) }}" class="img-fluid rounded-top w-100" alt=""></a>
                                  </div>
                                  <div class="berita-content rounded-bottom bg-light p-4">
                                      <div class="berita-content-inner">
                                          <p class="card-text"> {{ Carbon\Carbon::parse($row->date)->translatedFormat('l,d F Y') }}</p>
                                          <h5 class="mb-4">{{ $row->title }}</h5>
                                          <p class="mb-3">{!! Str::limit(strip_tags($row->renderTrix('content')), 40) !!}</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          @empty
                          <p>tidak ada data</p>
                          @endforelse
                      </div>
                  </div>
              </div>
              
                            {{-- <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="berita-item rounded">
                                    <div class="berita-img rounded-top">
                                        <img src="assets/img/cobabud.jpg" class="img-fluid rounded-top w-100"
                                            alt="">
                                    </div>
                                    <div class="berita-content rounded-bottom bg-light p-4">
                                        <div class="berita-content-inner">
                                            <p class="card-text">Kamis, 20 Juni 2024 22:36 WIB</p>
                                            <h5 class="mb-4">Mas Kadin: Lulusan SKB itu Mbois, Jangan Minder. Kalian
                                                Setara Dengan Lulusan Formal</h5>
                                            <p class="mb-3">Malang - Didampingi Kepala Bidang Pembinaan Ketenagaan
                                                Sekaligus Plh. Kepala bidang PAUD P...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="berita-item rounded">
                                    <div class="berita-img rounded-top">
                                        <img src="assets/img/cobabud.jpg" class="img-fluid rounded-top w-100"
                                            alt="">
                                    </div>
                                    <div class="berita-content rounded-bottom bg-light p-4">
                                        <div class="berita-content-inner">
                                            <p class="card-text">Kamis, 20 Juni 2024 22:36 WIB</p>
                                            <h5 class="mb-4">Mas Kadin: Lulusan SKB itu Mbois, Jangan Minder. Kalian
                                                Setara Dengan Lulusan Formal</h5>
                                            <p class="mb-3">Malang - Didampingi Kepala Bidang Pembinaan Ketenagaan
                                                Sekaligus Plh. Kepala bidang PAUD P...</p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div>
                                <a href="{{ route('home.berita.index') }}" class="btn btn-primary mt-5">Semua Berita</a>
                            </div>
        </section><!-- /Features Details Section -->

        <!-- Calender -->
        <section name="calendar">
            @include('home.component.kalender')
        </section>

        <!--end Calendar-->


        <div class="container section-title" data-aos="fade-up">
            <h2>Link</h2>
        </div>

        <div class="container">
            <div class="row ">

                <div class="d-flex justify-content-center col-4 mt-5">
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            @forelse ($table as $index => $row)
                            {{-- @forelse ($table->slice(0, 5) as $index => $row) --}}
                                {{-- <li class="list-group-item"><a
                                        href="{{ URL::to($row->url) }}"class="card-link">{{ $row->title }}</a></li>
                               --}}
                                @if ($index < 5)
                                    <li class="list-group-item"><a href="{{ URL::to($row->url) }}"
                                            class="card-link">{{ $row->title }}</a></li>
                                @else
                                @break
                            @endif
                        @empty
                            <p>tidak ada data</p>
                        @endforelse

                    </ul>
                </div>
            </div>

            {{-- <div class="d-flex justify-content-center col-4 mt-5">
                        <div class="card" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="#" class="card-link">Card link</a></li>
                                <li class="list-group-item"><a href="#" class="card-link">Card link</a></li>
                                <li class="list-group-item"><a href="#" class="card-link">Card link</a></li>
                                <li class="list-group-item"><a href="#" class="card-link">Card link</a></li>
                                <li class="list-group-item"><a href="#" class="card-link">Card link</a></li>
                                <li class="list-group-item"><a href="#" class="card-link">Card link</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center col-4 mt-5">
                        <div class="card" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="#" class="card-link">Card link</a></li>
                                <li class="list-group-item"><a href="#" class="card-link">Card link</a></li>
                                <li class="list-group-item"><a href="#" class="card-link">Card link</a></li>
                                <li class="list-group-item"><a href="#" class="card-link">Card link</a></li>
                                <li class="list-group-item"><a href="#" class="card-link">Card link</a></li>
                                <li class="list-group-item"><a href="#" class="card-link">Card link</a></li>
                            </ul>
                        </div>
                    </div> --}}
        </div>
    </div>


    <!-- Contact Section -->
    <section id="contact" class="contact section">

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
                        <p>Jl. Veteran No. 19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p>(0341)-551333</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p>dikbud@malangkota.go.id</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="row gy-4 mt-1">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d688.1506512226823!2d112.61389434101307!3d-7.956754435114845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827beffc2665%3A0x9dd38763e9a56b77!2sDinas%20Pendidikan%20dan%20Kebudayaan%20Kota%20Malang!5e0!3m2!1sen!2sid!4v1720151847698!5m2!1sen!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap"
                                    required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="No HP"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Pesan Anda" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection

@section('script')
    <!--kalender-->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/home/kalender.js"></script>
    <script src="{{URL::to('/')}}/assets/js/home/swiper/core.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/home/swiper/script.js"></script>
@endsection
