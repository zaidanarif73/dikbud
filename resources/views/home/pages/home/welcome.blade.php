@extends('home.layouts.master')
@section("css")
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
</style>
{{-- <link rel="stylesheet" href="/assets/css/home/swiper/bootstrap.css"> --}}
  {{-- <link rel="stylesheet" href="/assets/css/home/swiper/fonts.css"> --}}

  <link rel="stylesheet" href="/assets/css/home/swiper/style.css">
  <link rel="stylesheet" href="/assets/css/home/kalender.css">
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

    <!-- Layanan Section -->
    <section id="featured-services" class="featured-services section light-background">
      <div class="container section-title " data-aos="fade-up ">
        <h2 class=" p-5">Layanan</h2>
      </div>

      <div class="card-container container">
        <div class="card-layanan">
            <img src="assets/img/icon/legalisir.png" alt="Legalisir">
            <p><a href="{{ route('home.legalisir.index') }}" class="">Legalisir</a></p>
        </div>
        <div class="card-layanan">
            <img src="assets/img/icon/mutasi.png" alt="Mutasi Siswa">
            <p><a href="{{ route('home.mutasi.index') }}" class="">Mutasi Siswa</a></p>
        </div>
        <div class="card-layanan">
            <img src="assets/img/icon/suratijazah.png" alt="Ijazah Rusak">
            <p><a href="{{ route('home.ijazah_rusak.index') }}" class="">Surat Keterangan Ijazah Rusak atau Kesalahan Penulisan Ijazah</a></p>
        </div>
        <div class="card-layanan">
            <img src="assets/img/icon/pengganti ijazah.png" alt="Ijazah Rusak">
            <p><a href="{{ route('home.pengganti_ijazah.index') }}" class="">Pelayanan Surat Pengganti Ijazah SD atau SMP</a></p>
        </div>
        <div class="card-layanan">
            <img src="assets/img/icon/rekom.png" alt="Surat Rekomendasi">
            <p><a href="{{ route('home.rekomendasi_penelitian.index') }}" class="">Surat Rekomendasi penelitian & magang</a></p>
        </div>
        <div class="card-layanan">
            <img src="assets/img/icon/maklumat.png" alt="Maklumat Layanan">
            <p><a href="{{ route('home.maklumat.index') }}" class="">Maklumat Layanan</a></p>
        </div>
        <div class="card-layanan">
            <img src="assets/img/icon/standar.png" alt="Struktur Organisasi">
            <p><a href="{{ route('home.SKSP.index') }}" class="">Struktur Organisasi Pelayanan Dan SK Standar Pelayanan</a></p>
        </div>
        <div class="card-layanan">
            <img src="assets/img/icon/ppdb.png" alt="PPDB">
            <p><a href="{{ route('home.PPDB.index') }}" class="">PPDB</a></p>
        </div>
        <div class="card-layanan">
            <img src="assets/img/icon/pengaduan.png" alt="Layanan Pengaduan">
            <p><a href="{{ route('home.pengaduan.index') }}" class="">Layanan Pengaduan</a></p>
        </div>
        <div class="card-layanan">
            <img src="assets/img/icon/solikin.jpeg" alt="Solikin">
            <p><a href="{{ route('home.solikin.index') }}" class="">SOLIKIN | Sistem Online Kartu Induk Kesenian</a></p>
        </div>
        <div class="card-layanan">
            <img src="assets/img/icon/ombudd.jpeg" alt="Ombudsman">
            <p><a href="{{ route('home.ombudsman.index') }}" class="">Ombudsman</a></p>
        </div>
        <div class="card-layanan">
            <img src="assets/img/icon/mpp1.jpg" alt="MPP">
            <p><a href="{{ route('home.mpp.index') }}" class="">Layanan di MPP Merdeka Kota Malang</a></p>
        </div>
        <div class="card-layanan">
            <img src="assets/img/icon/form_PIP.png" alt="Form PIP">
            <p><a href="{{ route('home.formpip.index') }}" class="">Form Permohonan Informasi Publik</a></p>
        </div>
        <div class="card-layanan">
            <img src="assets/img/icon/pembelajaran.png" alt="Pembelajaran">
            <p><a href="{{ route('home.pembelajaran.index') }}" class="">Pembelajaran</a></p>
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
<div>
    <a href="{{ route('home.berita.index') }}" class="btn mt-2 mb-5">Semua Berita</a>
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

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="custom-content card">
              <form action="{{ route('home.kontak.store') }}" method="post" autocomplete="off" onsubmit="confirm('Apakah anda yakin ingin mengirim pesan ini?')" enctype="multipart/form-data">
                @csrf
                  <div class="row p-3">
                      <div class="form-group col-md-6">
                          <label for="username">Nama</label>
                          <input type="text" class="form-control border border-dark" id="username" placeholder="Masukan Nama Anda" name="name"/>
                      </div>
                      <div class="form-group col-md-6">
                          <label for="email2">Email</label>
                          <input type="email" class="form-control border border-dark" id="email" placeholder="Masukan Email Anda" name="email"/>
                      </div>
                      <div class="form-group col-md-12">
                        <label for="username">Gambar</label>
                        <input type="file" class="form-control border border-dark" accept="image/*" id="image" name="image"/>
                      </div>
                      <div class="form-group col-md-12">
                          <label for="username">Subject</label>
                          <input type="text" class="form-control border border-dark" id="subject" placeholder="Masukan Judul" name="subject"/>
                      </div>
                      <div class="form-group col-md-12">
                          <label for="comment">Pesan Anda</label>
                          <textarea class="form-control border border-dark" id="comment" rows="5" name="message">
                          </textarea>
                      </div>
                      <div class="card-action">
                          <button class="btn" type="submit" style="background: #2a2f5b; color:white">Submit</button>
                      </div>
                  </div>
              </form>
              
          </div>
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

