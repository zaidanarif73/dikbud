@extends('home.layouts.master')
@section("title","Kepala dan Pejabat | DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section("content")
<section id="so" class="so section">
  <div class="so-bg">
    <img src="{{URL::to('/')}}/assets/img/banner-so.png" alt="">
  </div>
</section>

{{-- team --}}
<section id="team" class="team section mt-5">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up" style="padding-top: 60px;">
    <h2>KEPALA DINAS DAN PEJABAT</h2>
  </div><!-- End Section Title -->
  
  <div class="container">
    <div class="row gy-4 d-flex flex-nowrap overflow-auto justify-content-start">
      @forelse ($table as $index => $row)
        <div class="col-xl-3 col-md-6 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <img src="{{ asset('storage/' . $row->image) }}" class="img-fluid" alt="">
            <h4>{{ $row->nama }}</h4>
            <span>{{ $row->jabatan }}</span>
          </div>
        </div><!-- End Team Member -->
      @empty
        <p>Tidak ada data</p>
      @endforelse
    </div>
  </div>
</section>
  
@endsection