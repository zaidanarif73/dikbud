@extends('home.layouts.master')
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
            <h6 class="service-item d-flex justify-content-center align-items-center"><a href="#" class="stretched-link">Legalisir</a></h6>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/mutasi.png" alt="">
            </div>
            <h6 class="service-item d-flex justify-content-center align-items-center"><a href="#" class="stretched-link">Mutasi Siswa</a></h6>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/suratijazah.png" alt="">
            </div>
            <p>
              <h6 class="text-center"><a href="#" class="stretched-link">Surat Keterangan Ijazah Rusak atau Kesalahan Penulisan Ijazah</a></h6>
            </p>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/pengganti ijazah.png" alt="">
            </div>
            <p>
              <h6 class="text-center"><a href="#" class="stretched-link" >Pelayanan Surat Pengganti Ijazah SD atau SMP</a></h6>
            </p>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/rekom.png" alt="">
            </div>
            <p>
              <h6 class="text-center"><a href="#" class="stretched-link">Surat Rekomendasi penelitian & magang</a></h6  >
            </p>   
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/maklumat.png" alt="">
            </div>
            <h6 class="service-item d-flex justify-content-center align-items-center"><a href="#" class="stretched-link">Maklumat Layanan</a></h6>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/standar.png" alt="">
            </div>
            <h6 class="service-item d-flex justify-content-center align-items-center"><a href="#" class="stretched-link">SK Standar Pelayanan</a></h6>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/pengaduan.png" alt="">
            </div>
            <h6 class="tservice-item d-flex justify-content-center align-items-center"><a href="#" class="stretched-link">Layanan Pengaduan</a></h6>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="00">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/ppdb.png" alt="">
            </div>
            <h6 class="service-item d-flex justify-content-center align-items-center"><a href="#" class="stretched-link">PPDB</a></h6>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex justify-content-center align-items-center">
              <img src="assets/img/icon/solikin.jpeg" alt="">
            </div>
            <p>
              <h6 class="text-center"><a href="#" class="stretched-link">SOLIKIN | Sistem Online Kartu Induk Kesenian</a></h6>
            </p>
          </div>

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex justify-content-center align-items-center">

              <img src="assets/img/icon/ombudd.jpeg" alt="">
            </div>
            <h6 class="service-item d-flex justify-content-center align-items-center"><a href="#" class="stretched-link">Info Ombudsman</a></h6>
          </div>

        </div>

      </div>

    <!-- Features Details Section -->
   <section id="features-details" class="features-details section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Berita</h2>
    </div>
    <div class="container">
      <h3>berita utama</h3>

      <div class="row gy-4 justify-content-between features-item">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/News.jpg" class="img-fluid" alt="">
        </div>

        <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <p>
              Jumat, 21 Juni 2024
            </p>
            <h4>Jadi Narsum Worhshop, Mas Kadin Ucapkan Terima Kasih pada PTK SMPN 12 Malang</h4>
            <p>
            Malang - Jajaran SMP Negeri 12 Malang yang kini dikepalai oleh M. Shodiq., M.Pd selenggarakan Workshop (WS) bertajuk Peningkatan Kompetensi Guru Berbasis Literasi dan Numerasi. Kegiatan yang diselengg...
            </p>
            <a href="#" class="btn more-btn">Read More</a>
          </div>
        </div>

      </div>

    </section><!-- /Features Details Section -->

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