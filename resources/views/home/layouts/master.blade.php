<!DOCTYPE html>
<html lang="en">
    @include('home.layouts.head')
<body class="">
    <div class="wrapper">
        @include('sweetalert::alert')
        @include('home.layouts.navbar')
        <div class="content-wrapper">
            <section class="content">
                <div class="" style="margin-top :-40px">
                    <main class="main">
                        @yield("content")
                    </main>
                </div>
            </section>
              <!-- Scroll Top -->
            <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

            {{-- <!-- Preloader -->
            <div id="preloader"></div> --}}
        @include('home.layouts.footer')
        </div>
    </div>
    @include('home.layouts.script')
</body>
</html>