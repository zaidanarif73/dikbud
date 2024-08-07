@extends('home.layouts.master')

@section("content")
<section id="so" class="so section">
  <div class="so-bg">
    <img src="{{URL::to('/')}}/assets/img/banner-so.png" alt="">
  </div>
</section>

{{-- team --}}
<section id="team" class="team section mt-5">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>KEPALA DINAS DAN PEJABAT</h2>
  </div><!-- End Section Title -->
  
  <div class="container">
    <div class="row gy-4">
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <img src="assets/img/suwarjana.jpeg" class="img-fluid" alt="">
          <h4>Walter White</h4>
          <span>Web Development</span>
        </div>
      </div><!-- End Team Member -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <img src="assets/img/suwarjana.jpeg" class="img-fluid" alt="">
          <h4>Sarah Jhinson</h4>
          <span>Marketing</span>
        </div>
      </div><!-- End Team Member -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="member">
          <img src="assets/img/suwarjana.jpeg" class="img-fluid" alt="">
          <h4>William Anderson</h4>
          <span>Content</span>
        </div>
      </div><!-- End Team Member -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="member">
          <img src="assets/img/suwarjana.jpeg" class="img-fluid" alt="">
          <h4>Amanda Jepson</h4>
          <span>Accountant</span>
        </div>
      </div><!-- End Team Member -->
    </div>
  </div>
  <br>
  <div class="organization-structure">
    <img src="{{URL::to('/')}}/assets/img/so.png" alt="Organization Structure">
  </div>
</section>
  
@endsection