@extends('home.layouts.master')

@section("content")
<section id="so" class="so section">
  <div class="so-bg">
    <img src="{{URL::to('/')}}/assets/img/banner-so.png" alt="">
  </div>
</section>

{{-- <section>
  
    <div class="profile-card mt-5">
      <div class="text-center mt-3"> 
        <img src="assets/img/suwarjana.jpeg" alt="Suwarjana">
        <h5>SUWARJANA, SE, MM</h5>
        <p>Pembin<div class="container">
    <h2>KEPALA DINAS DAN PEJABAT </h2> 
    <h2>DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG</h2>a Utama Muda</p>
        <p>NIP: 19670302 199602 1 003</p>
    </div>
  </div>
</section> --}}
          <!-- Team Classic-->
          <section id="testimonials" class="testimonials section light-background">
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
                <div class="container">
                    <h2>KEPALA DINAS DAN PEJABAT </h2> 
                    <h2>DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG</h2>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                          <h6>
                            SEKRETARIS
                          </h6>
                          <div class="profile mt-4">
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Tri Oky Rudianto Prastijo, S.E., M.Si</h3>
                          </div>
                        </div>
                      </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <h6>
                        Kepala Dinas Pendidikan & Kebudayaan
                      </h6>
                      <div class="profile mt-4">
                        <img src="assets/img/suwarjana.jpeg" class="testimonial-img" alt="">
                        <h3>Suwarjana, S.E., M.M.</h3>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->
      
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <h6>
                        KABID PEMBINAAN PENDIDIKAN DASAR
                      </h6>
                      <div class="profile mt-4">
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Dodik Teguh Pribadi, M.Pd</h3>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->
      
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <h6>
                        KABID PEMBINAAN KETENAGAAN
                      </h6>
                      <div class="profile mt-4">
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Tujuwarno, S.Pt</h3>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->
      
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <h6>
                        KABID PEMBINAAN PAUD & PENDIDIKAN NONFORMAL
                      </h6>
                      <div class="profile mt-4">
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Dra. Rr. Andayoen S. Alfiana, MA.P</h3>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <h6>
                        KABID PEMBINAAN PAUD & PENDIDIKAN NONFORMAL
                      </h6>
                      <div class="profile mt-4">
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Tujuwarno, S.Pt (Plh.)</h3>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->
      
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <h6>
                        KABID KEBUDAYAAN
                      </h6>
                      <div class="profile mt-4">
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Juli Handayani, SE, MM</h3>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <h6>
                        Kepala UPT Satuan Pendidikan Nonformal SKB (Sanggar Kegiatan Belajar)
                      </h6>
                      <div class="profile mt-4">
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Drs. Imam Kambali, M.Pd</h3>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <h6>
                        Kepala UPT Layanan Pendidikan Anak Berkebutuhan Khusus (PLA)
                      </h6>
                      <div class="profile mt-4">
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Dra. Nurfina Amanda Royani</h3>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->
      
                </div>
                <div class="swiper-pagination"></div>
              </div>
      
            </div>
      
          </section>
          {{-- <div class="container-fluid team pb-5">
            <div class="container pb-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="assets/img/suwarjana.jpeg" class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="assets/img/suwarjana.jpeg" class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="assets/img/suwarjana.jpeg" class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="assets/img/suwarjana.jpeg" class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
  
<div class="organization-structure">
  <img src="{{URL::to('/')}}/assets/img/so.png" alt="Organization Structure">
</div>
</div>
</section>

  
@endsection