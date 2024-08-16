@extends('home.layouts.master')
@section("title","Kepala dan Pejabat | DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section("content")
<section id="so" class="so section">
  <div class="so-bg">
    <img src="{{URL::to('/')}}/assets/img/banner-so.png" alt="">
  </div>
</section>

{{-- team --}}
<section>
  <!-- Section Title -->
  <div class="container section-title mt-5" data-aos="fade-up" style="padding-top: 60px;">
    <h2>KEPALA DINAS DAN PEJABAT</h2>
  </div><!-- End Section Title -->

  <div class="container">
    <ul class="cards">
      @forelse ($table as $index => $row)
      <li>
        <div class="card">
          <img src="{{ asset('storage/' . $row->image) }}" class="card__image" alt="" />
          <div class="card__overlay">
            <div class="card__header">
              <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
              <div class="card__header-text">
                <h3 class="card__title"><b>{{ $row->nama }}</b></h3>            
                <span class="card__status text-black-50">{{ $row->jabatan }}</span>
              </div>
            </div>
          </div>
        </div>      
      </li>   
      @empty
          <p>Tidak ada data</p>
      @endforelse
    </ul>
  </div>
</section>
  
@endsection