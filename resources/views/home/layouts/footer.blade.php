<footer id="footer" class="footer position-relative light-background">

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="logo d-flex justify-content-center">
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
        <div class="col d-flex justify-content-cgitenter " data-aos="fade-up" data-aos-delay="600" >
          {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63221.48905698436!2d112.6138562!3d-7.9634534!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827f2d620975%3A0xf19b7459bbee5ed5!2sUniversitas%20Brawijaya!5e0!3m2!1sid!2sid!4v1723016126347!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 90px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
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
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">DIKBUD KOTA MALANG</strong>
    <div class="credits">
      <a>Designed by Mahasiswa Magang</a>
    </div>
  </div>

</footer>

