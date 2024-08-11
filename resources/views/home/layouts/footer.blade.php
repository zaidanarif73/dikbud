<footer id="footer" class="footer position-relative">
  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="{{ route('home.home.index') }}" class="logo d-flex justify-content-center">
          @if($table_pengaturan->website_logo == null)
            <img src="{{URL::to('/')}}/assets/img/favicon.png" alt="">
          @else
            <img src="{{asset('storage/'.$table_pengaturan->website_logo)}}" alt="">
          @endif
        </a>
        <div class="footer-contact pt-3">
          <p>{{ $table_pengaturan->website_motto }}</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Alamat Kantor</h4>
        <p>{{ $table_pengaturan->website_address }}</p>
        <div class="col d-flex justify-content-cgitenter " >
          <iframe id="maps_mini" src="" frameborder="0"></iframe>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Pengunjung</h4>
        <p> jumlah pengunjung website</p>
      </div>
      <div class="col-lg-4 col-md-12 footer-newsletter">
        <h4>Kontak</h4>
        <p class="mt-3"><strong>Phone:</strong> <span>{{ $table_pengaturan->website_phone }}</span></p>
        <p><strong>Email:</strong> <span>{{ $table_pengaturan->website_email }}</span></p>
        <div class="social-links d-flex justify-content-center  mt-4">
          <a href="https://www.facebook.com/dikbudmalangkota/?locale=ms_MY"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/dikbudmalangkota?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
</footer>

