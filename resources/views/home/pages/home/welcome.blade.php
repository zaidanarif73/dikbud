@extends('home.layouts.master')
@section("css")
<!-- <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css'> -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.3.0/main.min.css'>
<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/home/kalender.css">
@endsection


@section("content")
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
          <img src="assets/img/coba1.png" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
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
            <h6 class="service-item d-flex justify-content-center align-items-center"><a href="{{ route('home.legalisir.index') }}" class="stretched-link">Legalisir</a></h6>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/mutasi.png" alt="">
            </div>
            <h6 class="service-item d-flex justify-content-center align-items-center"><a href="{{ route('home.mutasi.index') }}" class="stretched-link">Mutasi Siswa</a></h6>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/suratijazah.png" alt="">
            </div>
            <p>
              <h6 class="text-center"><a href="{{ route('home.ijazah_rusak.index') }}" class="stretched-link">Surat Keterangan Ijazah Rusak atau Kesalahan Penulisan Ijazah</a></h6>
            </p>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/pengganti ijazah.png" alt="">
            </div>
            <p>
              <h6 class="text-center"><a href="{{ route('home.pengganti_ijazah.index') }}" class="stretched-link" >Pelayanan Surat Pengganti Ijazah SD atau SMP</a></h6>
            </p>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/rekom.png" alt="">
            </div>
            <p>
              <h6 class="text-center"><a href="{{ route('home.rekomendasi_penelitian.index') }}" class="stretched-link">Surat Rekomendasi penelitian & magang</a></h6  >
            </p>   
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/maklumat.png" alt="">
            </div>
            <h6 class="service-item d-flex justify-content-center align-items-center"><a href="{{ route('home.maklumat.index') }}" class="stretched-link">Maklumat Layanan</a></h6>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/standar.png" alt="">
            </div>
            <h6 class="service-item d-flex justify-content-center align-items-center"><a href="{{ route('home.SKSP.index') }}" class="stretched-link">SK Standar Pelayanan</a></h6>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/pengaduan.png" alt="">
            </div>
            <h6 class="service-item d-flex justify-content-center align-items-center"><a href="{{ route('home.pengaduan.index') }}" class="stretched-link">Layanan Pengaduan</a></h6>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="00">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/ppdb.png" alt="">
            </div>
            <h6 class="service-item d-flex justify-content-center align-items-center"><a href="{{ route('home.PPDB.index') }}" class="stretched-link">PPDB</a></h6>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/solikin.jpeg" alt="">
            </div>
            <p>
              <h6 class="text-center"><a href="{{ route('home.solikin.index') }}" class="stretched-link">SOLIKIN | Sistem Online Kartu Induk Kesenian</a></h6>
            </p>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex justify-content-center align-items-center">

              <img src="assets/img/icon/ombudd.jpeg" alt="">
            </div>
            <h6 class="service-item d-flex justify-content-center align-items-center"><a href="{{ route('home.ombudsman.index') }}" class="stretched-link">Info Ombudsman</a></h6>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/mpp1.jpg" alt="">
            </div>
            <p>
              <h6 class="text-center"><a href="{{ route('home.mpp.index') }}" class="stretched-link">Layanan di MPP Merdeka Kota Malang</a></h6>
            </p>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/form_PIP.png" alt="">
            </div>
            <p>
              <h6 class="text-center"><a href="{{ route('home.formpip.index') }}" class="stretched-link">Form Permohonan Informasi Publik</a></h6>
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
          <img src="{{URL::to('/')}}/assets/img/News.jpg" class="img-fluid" alt="">
        </div>

        <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <p>
              Jumat, 21 Juni 2024 09:25 WIB
            </p>
            <h4>Jadi Narsum Worhshop, Mas Kadin Ucapkan Terima Kasih pada PTK SMPN 12 Malang</h4>
            <p>
            Malang - Jajaran SMP Negeri 12 Malang yang kini dikepalai oleh M. Shodiq., M.Pd selenggarakan Workshop (WS) bertajuk Peningkatan Kompetensi Guru Berbasis Literasi dan Numerasi. Kegiatan yang diselengg...
            </p>
            <a href="#" class="btn more-btn">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mt-5">
              <div class="card">
                <div class="card-body">
                  <img src="{{URL::to('/')}}/assets/img/berita/Berita2.jpg" class="img-fluid mt-3" alt="">
                  <p class="card-text mt-3">Kamis, 20 Juni 2024 22:36 WIB</p>
                  <h5 class="card-title">Mas Kadin : Lulusan SKB itu Mbois, Jangan Minder. Kalian Setara dengan Lulusan Formal</h5>
                  <p class="card-text mt-3">Malang - Didampingi Kepala Bidang Pembinaan Ketenagaan sekaligus Plh. Kepala Bidang Pembinaan PAUD P...</p>
                </div>
              </div>
          </div>
          <div class="col-lg-4 mt-5">
              <div class="card">
                <div class="card-body">
                  <img src="{{URL::to('/')}}/assets/img/berita/Berita5.jpg" class="img-fluid mt-3" alt="">
                  <p class="card-text mt-3">Senin, 17 Juni 2024 18:35 WIB</p>
                  <h5 class="card-title">Keluarga Besar Disdikbud Laksanakan Sholat Idhul Adha 1445 H di Masjid Tarbiyatul Hidayah</h5>
                  <p class="card-text mt-3">Malang - Senin, 17 Juni 2024 atau bertepatan dengan 10 Dzulhijjah 1445 H, Keluarga Besar Dinas...</p>
                </div>
              </div>
          </div>
          <div class="col-sm-4 mt-5">
              <div class="card">
                <div class="card-body">
                  <img src="{{URL::to('/')}}/assets/img/berita/Berita4.jpg" class="img-fluid mt-3" alt="">  
                  <p class="card-text mt-3">Senin, 17 Juni 2024 18:42 WIB</p>
                  <h5 class="card-title">Pj Walikota Malang Tinjau Penyembelihan Hewan Qurban Disdikbud</h5>
                  <p class="card-text mt-3">Malang - Pj Walikota Malang Dr. Ir. Wahyu Hidayat, MM didampingi Kepala Dinas Pendidikan dan Kebuday...</p>
                </div>
              </div>
          </div>
        </div>
        <a href="#" class="btn btn-primary">Semua Berita</a>
      </div>
    </section><!-- /Features Details Section -->

    <div id="calendar">
        <div class="modal fade edit-form" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title" id="modal-title">Add Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="myForm">
                        <div class="modal-body">
                            <div class="alert alert-danger " role="alert" id="danger-alert" style="display: none;">
                                End date should be greater than start date.
                              </div>
                            <div class="form-group">
                                <label for="event-title">Event name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="event-title" placeholder="Enter event name" required>
                            </div>
                            <div class="form-group">
                                <label for="start-date">Start date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="start-date" placeholder="start-date" required>
                            </div>
                            <div class="form-group">
                                <label for="end-date">End date - <small class="text-muted">Optional</small></label>
                                <input type="date" class="form-control" id="end-date" placeholder="end-date">
                            </div>
                            <div class="form-group">
                                <label for="event-color">Color</label>
                                <input type="color" class="form-control" id="event-color" value="#3788d8">
                              </div>
                        </div>
                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success" id="submit-button">Submit</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Delete Modal -->
        <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="delete-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="delete-modal-title">Confirm Deletion</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center" id="delete-modal-body">
                  Are you sure you want to delete the event?
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary rounded-sm" data-dismiss="modal" id="cancel-button">Cancel</button>
                  <button type="button" class="btn btn-danger rounded-lg" id="delete-button">Delete</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  
    <div class="container section-title" data-aos="fade-up">
      <h2>Link</h2>
    </div>

    <div class="container">
      <div class="row">
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
        </div>
      </div>
    </div>
    
    

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Komentar</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <h3>Berkomentar Di, PPDB Tahun 2024</h3><br>
                <p>
                  Berita yang sangat menarik. Memberikan informasi terkait jadwal PPDB dan bagaimana prosedur PPDB.
                </p>
                <div class="profile mt-auto">
                  <h3>Budiono Siregar</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <h3>Berkomentar Di, Jadi Narsum Worhshop...</h3><br><br>
                <p>
                  Mantap!!! 
                </p>
                <div class="profile mt-auto">
                  <h3>Pak Vincent</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <h3>Berkomentar Di,Narsum Workshop di SMPN 20 Malang.... </h3><br>
                <p>
                  Good Job!
                </p>
                <div class="profile mt-auto">
                  <h3>Helmy</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <H3>Berkomentar Di, Keluarga Besar Disdikbud Laksanakan Sholat Idhul Adha...</H3><br>
                <p>
                  Berita yang sangat Menarik dan informatif
                </p>
                <div class="profile mt-auto">
                  <h3>Lizikri</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <h3>Berkomentar Di, PPDB tahun 2024</h3><br>
                <p>
                  Berita yang informatif!!
                </p>
                <div class="profile mt-auto">
                  <h3>Adinda</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>

      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>Jl. Veteran No. 19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>(0341)-551333</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>dikbud@malangkota.go.id</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d688.1506512226823!2d112.61389434101307!3d-7.956754435114845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827beffc2665%3A0x9dd38763e9a56b77!2sDinas%20Pendidikan%20dan%20Kebudayaan%20Kota%20Malang!5e0!3m2!1sen!2sid!4v1720151847698!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="No HP" required="">
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

@section("script")
<!-- <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js'></script> -->
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.2.0/main.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.2.0/main.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/uuid@8.3.2/dist/umd/uuidv4.min.js'></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
  const calendarEl = document.getElementById('calendar');
  const myModal = new bootstrap.Modal(document.getElementById('form'));
  const dangerAlert = document.getElementById('danger-alert');
  const close = document.querySelector('.btn-close');
  


  
const myEvents = JSON.parse(localStorage.getItem('events')) || [
    {
      id: uuidv4(),
      title: `Edit Me`, 
      start: '2023-04-11',
      backgroundColor: 'red',
      allDay: false, 
      editable: false,
    },
    {
      id: uuidv4(),
      title: `Delete me`,
      start: '2023-04-17',
      end: '2023-04-21',

      allDay: false, 
      editable: false,
    },
  ];


  const calendar = new FullCalendar.Calendar(calendarEl, {
    // customButtons: {
    //   customButton: {
    //     text: 'Add Event',
    //     click: function () {
    //       myModal.show();
    //       const modalTitle = document.getElementById('modal-title');
    //       const submitButton = document.getElementById('submit-button');
    //       modalTitle.innerHTML = 'Add Event'
    //       submitButton.innerHTML = 'Add Event'
    //       submitButton.classList.remove('btn-primary');
    //       submitButton.classList.add('btn-success');

          

    //       close.addEventListener('click', () => {
    //         myModal.hide()
    //       })

          

    //     }
    //   }
    // },
    header: {
      center: 'customButton', // add your custom button here
      right: 'today, prev,next '
    },
    plugins: ['dayGrid', 'interaction'],
    allDay: false,
    editable: true,
    selectable: true,
    unselectAuto: false,
    displayEventTime: false,
    events: myEvents,
    eventRender: function(info) {
      info.el.addEventListener('contextmenu', function(e) {
        // e.preventDefault();
        // let existingMenu = document.querySelector('.context-menu');
        // existingMenu && existingMenu.remove();
        // let menu = document.createElement('div');
        // menu.className = 'context-menu';
        // menu.innerHTML = `<ul>
        // <li><i class="fas fa-edit"></i>Edit</li>
        // <li><i class="fas fa-trash-alt"></i>Delete</li>
        // </ul>`;

        const eventIndex = myEvents.findIndex(event => event.id === info.event.id);
        
        
        document.body.appendChild(menu);
        menu.style.top = e.pageY + 'px';
        menu.style.left = e.pageX + 'px';

        // Edit context menu

        menu.querySelector('li:first-child').addEventListener('click', function() {
          menu.remove();

          const editModal = new bootstrap.Modal(document.getElementById('form'));
          const modalTitle = document.getElementById('modal-title');
          const titleInput = document.getElementById('event-title');
          const startDateInput = document.getElementById('start-date');
          const endDateInput = document.getElementById('end-date');
          const colorInput = document.getElementById('event-color');
          const submitButton = document.getElementById('submit-button');
          const cancelButton = document.getElementById('cancel-button');
          modalTitle.innerHTML = 'Edit Event';
          titleInput.value = info.event.title;
          startDateInput.value = moment(info.event.start).format('YYYY-MM-DD');
          endDateInput.value = moment(info.event.end, 'YYYY-MM-DD').subtract(1, 'day').format('YYYY-MM-DD');
          colorInput.value = info.event.backgroundColor;
          submitButton.innerHTML = 'Save Changes';

        
        


          editModal.show();

          submitButton.classList.remove('btn-success')
          submitButton.classList.add('btn-primary')

          // Edit button

          submitButton.addEventListener('click', function() {
            const updatedEvents = {
              id: info.event.id,
              title: titleInput.value,
              start: startDateInput.value,
              end: moment(endDateInput.value, 'YYYY-MM-DD').add(1, 'day').format('YYYY-MM-DD'),
              backgroundColor: colorInput.value
            }

            if ( updatedEvents.end <= updatedEvents.start) { // add if statement to check end date
              dangerAlert.style.display = 'block';
              return;
            }
          
            const eventIndex = myEvents.findIndex(event => event.id === updatedEvents.id);
            myEvents.splice(eventIndex, 1, updatedEvents);
          
            localStorage.setItem('events', JSON.stringify(myEvents));
          
            // Update the event in the calendar
            const calendarEvent = calendar.getEventById(info.event.id);
            calendarEvent.setProp('title', updatedEvents.title);
            calendarEvent.setStart(updatedEvents.start);
            calendarEvent.setEnd(updatedEvents.end);
            calendarEvent.setProp('backgroundColor', updatedEvents.backgroundColor);


          
            editModal.hide();

          })

          
        
        });

        // Delete menu
        menu.querySelector('li:last-child').addEventListener('click', function() {
          const deleteModal = new bootstrap.Modal(document.getElementById('delete-modal'));
          const modalBody = document.getElementById('delete-modal-body');
          const cancelModal = document.getElementById('cancel-button');
          modalBody.innerHTML = `Are you sure you want to delete <b>"${info.event.title}"</b>`
          deleteModal.show();

          const deleteButton = document.getElementById('delete-button');
          deleteButton.addEventListener('click', function () {
            myEvents.splice(eventIndex, 1);
            localStorage.setItem('events', JSON.stringify(myEvents));
            calendar.getEventById(info.event.id).remove();
            deleteModal.hide();
            menu.remove();

          });

          cancelModal.addEventListener('click', function () { 
            deleteModal.hide();
          })

          
        
        
        });
        document.addEventListener('click', function() {
          menu.remove();
        });
      });
    },

    eventDrop: function(info) { 
      let myEvents = JSON.parse(localStorage.getItem('events')) || [];
      const eventIndex = myEvents.findIndex(event => event.id === info.event.id);
      const updatedEvent = {
        ...myEvents[eventIndex],
        id: info.event.id, 
        title: info.event.title,
        start: moment(info.event.start).format('YYYY-MM-DD'),
        end: moment(info.event.end).format('YYYY-MM-DD'),
        backgroundColor: info.event.backgroundColor
      };
      myEvents.splice(eventIndex, 1, updatedEvent); // Replace old event data with updated event data
      localStorage.setItem('events', JSON.stringify(myEvents));
      console.log(updatedEvent);
    }

  });

  calendar.on('select', function(info) {

    const startDateInput = document.getElementById('start-date');
    const endDateInput = document.getElementById('end-date');
    startDateInput.value = info.startStr;
    const endDate = moment(info.endStr, 'YYYY-MM-DD').subtract(1, 'day').format('YYYY-MM-DD');
    endDateInput.value = endDate;
    if(startDateInput.value === endDate) {
      endDateInput.value = '';
    }
  });


  calendar.render();

  const form = document.querySelector('form');

  form.addEventListener('submit', function(event) {
    event.preventDefault(); // prevent default form submission

    // retrieve the form input values
    const title = document.querySelector('#event-title').value;
    const startDate = document.querySelector('#start-date').value;
    const endDate = document.querySelector('#end-date').value;
    const color = document.querySelector('#event-color').value;
    const endDateFormatted = moment(endDate, 'YYYY-MM-DD').add(1, 'day').format('YYYY-MM-DD');
    const eventId = uuidv4();

    console.log(eventId);

    if (endDateFormatted <= startDate) { // add if statement to check end date
      dangerAlert.style.display = 'block';
      return;
    }

    const newEvent = {
      id: eventId,
      title: title,
      start: startDate,
      end: endDateFormatted,
      allDay: false,
      backgroundColor: color
    };

    // add the new event to the myEvents array
    myEvents.push(newEvent);

    // render the new event on the calendar
    calendar.addEvent(newEvent);

    // save events to local storage
    localStorage.setItem('events', JSON.stringify(myEvents));

    myModal.hide();
    form.reset();
  });

  myModal._element.addEventListener('hide.bs.modal', function () {
    dangerAlert.style.display = 'none';
    form.reset(); 
  });

});
</script>
@endsection

