@extends('home.layouts.master')
@section("css")
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
  .fc-today-button{
      background-color: #495057 !important;
  }
  #calendars{
    height:auto;
    width: auto;
  }

  @media only screen and (min-width: 600px) {
      #calendars{
      height:500px;
      width: 500px;
      }
      .kalender{
        display: flex;
        justify-content: center;
      }
      #my_kalender{
        background-image: url("assets/img/bgcale.png");
        background-size:cover;
        background-repeat: no-repeat;
      }
  }
  
</style>
{{-- <link rel="stylesheet" href="/assets/css/home/swiper/bootstrap.css"> --}}
  {{-- <link rel="stylesheet" href="/assets/css/home/swiper/fonts.css"> --}}
  <link rel="stylesheet" href="/assets/css/home/swiper/style.css">
@endsection


@section("content")
    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade" style="text-align: left">
      <div class="swiper-wrapper text-sm-left">
        <div class="swiper-slide context-dark" id="swipper" data-slide-bg="{{URL::to('/')}}/assets/img/cobabud.jpg" alt="">
          <div class="swiper-slide-caption section-md" >
            <div class="container" id="swipper_tittle">
              <div class="row">
              <div class="col-sm-9 col-md-8 col-lg-7 col-xxl-7 offset-lg-1 offset-xxl-0">
                <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Dikbud Kota Malang</span></h1>
                <p class="big swiper-text" data-caption-animate="fadeInLeft" data-caption-delay="300">Testing </p>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="{{URL::to('/')}}/assets/img/banner-vm.png" alt=""">
          <div class="swiper-slide-caption section-md">
          <div class="container">
          <div class="row">
          <div class="col-sm-8 col-lg-7 offset-lg-1 offset-xxl-0">
            <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0">Visi Misi</span></h1>
            <p class="big swiper-text" data-caption-animate="fadeInRight" data-caption-delay="300">We use only the best ingredients to make one-of-a-kind pizzas for our customers.</p>
          </div>
          </div>
          </div>
          </div>
        </div>
        <div class="swiper-slide context-dark" id="swipper" data-slide-bg="{{URL::to('/')}}/assets/img/banner-so.png" alt=""">
            <div class="swiper-slide-caption section-md" >
              <div class="container" id="swipper_tittle">
                <div class="row">
                <div class="col-sm-9 col-md-8 col-lg-7 col-xxl-7 offset-lg-1 offset-xxl-0">
                  <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Struktur Organisasi</span></h1>
                  <p class="big swiper-text" data-caption-animate="fadeInLeft" data-caption-delay="300">Testing </p>
                </div>
                </div>
              </div>
            </div>
          </div>
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
                  <h6 class="text-center"><a href="{{ route('home.legalisir.index') }}" class="stretched-link">Legalisir</a></h6>
                </p>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/mutasi.png" alt="">
            </div>
            <p>
              <h6 class="text-center"><a href="{{ route('home.mutasi.index') }}" class="stretched-link">Mutasi Siswa</a></h6>
            </p>
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
              <h6 class="text-center"><a href="{{ route('home.pengganti_ijazah.index') }}" class="stretched-link">Pelayanan Surat Pengganti Ijazah SD atau SMP</a></h6>
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
            <p>
              <h6 class="text-center"><a href="{{ route('home.maklumat.index') }}" class="stretched-link">Maklumat Layanan</a></h6>
            </p>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/standar.png" alt="">
            </div>
            <p>
              <h6 class="text-center"><a href="{{ route('home.SKSP.index') }}" class="stretched-link">Struktur Organisasi Pelayanan Dan SK Standar Pelayanan</a></h6>
            </p>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/pengaduan.png" alt="">
            </div>
            <p>
              <h6 class="text-center"><a href="{{ route('home.pengaduan.index') }}" class="stretched-link">Layanan Pengaduan</a></h6>
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
              <h6 class="text-center"><a href="{{ route('home.solikin.index') }}" class="stretched-link">SOLIKIN | Sistem Online Kartu Induk Kesenian</a></h6>
            </p>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/ombudd.jpeg" alt="">
            </div>
            <p>
              <h6 class="text-center"><a href="{{ route('home.ombudsman.index') }}" class="stretched-link">Info Ombudsman</a></h6>
            </p>
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
    
    <!-- Calender -->
    <section name="calendar">
      @include('home.component.kalender')
    </section>
    
    <!--end Calendar-->

  
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
<!--kalender-->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/home/kalender.js"></script>
<script src="{{URL::to('/')}}/assets/js/home/swiper/core.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/home/swiper/script.js"></script>


@endsection

