@extends('home.layouts.master')

@section("content")
<section id="so" class="so section">
  <div class="so-bg">
    <img src="{{URL::to('/')}}/assets/img/banner-so.png" alt="">
  </div>
</section>

<section>
  <div class="container">
    <h2>KEPALA DINAS DAN PEJABAT </h2> 
    <h2>DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG</h2>
    <div class="profile-card mt-5">
      <div class="text-center mt-3"> 
        <img src="assets/img/suwarjana.jpeg" alt="Suwarjana">
        <h5>SUWARJANA, SE, MM</h5>
        <p>Pembina Utama Muda</p>
        <p>NIP: 19670302 199602 1 003</p>
    </div>
  </div>
</section>
          <!-- Team Classic-->
          <div class="container-fluid team pb-5">
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
            </div>
  
<div class="organization-structure">
  <img src="{{URL::to('/')}}/assets/img/so.png" alt="Organization Structure">
</div>
</div>
</section>

  
@endsection