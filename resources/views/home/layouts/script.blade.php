<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{URL::to('/')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{URL::to('/')}}/assets/vendor/php-email-form/validate.js"></script>
<script src="{{URL::to('/')}}/assets/vendor/aos/aos.js"></script>
<script src="{{URL::to('/')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{URL::to('/')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>

{{-- CDN --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- Main JS File -->
<script src="{{URL::to('/')}}/assets/js/main.js"></script>

{{-- KAIADMIN JS --}}
    <script src="{{URL::to('/')}}/assets/js/home/core/jquery-3.7.1.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/home/core/popper.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/home/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{URL::to('/')}}/assets/js/home/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Datatables -->
    <script src="{{URL::to('/')}}/assets/js/home/plugin/datatables/datatables.min.js"></script>
    <!-- Kaiadmin JS -->
    <script src="{{URL::to('/')}}/assets/js/home/kaiadmin.min.js"></script>
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="{{URL::to('/')}}/assets/js/home/setting-demo.js"></script>
    <script src="{{URL::to('/')}}/assets/js/home/demo.js"></script>
    
{{-- END KAIADMIN JS --}}

{{-- datatable script --}}
@yield("script")