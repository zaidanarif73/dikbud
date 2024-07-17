@extends('home.layouts.master')

@section("content")
<section id="so" class="so section">
  <div class="so-bg">
    <img src="{{URL::to('/')}}/assets/img/banner-so.png" alt="">
  </div>
</section>

<section>
  <div class="container">
    <h2>KEPALA DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG</h2>
    <div class="profile-card mt-5">
      <div class="text-center mt-3"> 
        <img src="assets/img/suwarjana.jpeg" alt="Suwarjana">
        <h5>SUWARJANA, SE, MM</h5>
        <p>Pembina Utama Muda</p>
        <p>NIP: 19670302 199602 1 003</p>
    </div>
</div>
<div class="organization-structure">
  <img src="{{URL::to('/')}}/assets/img/News.jpg" alt="Organization Structure">
</div>
</div>
</section>

  
@endsection