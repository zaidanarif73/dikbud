<!DOCTYPE html>
<html lang="en">
    @include('home.layouts.head')
<body>
    <div class="wrapper">
        {{-- @include('sweetalert::alert') --}}
        @include('home.layouts.navbar')
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid" style="margin-top :100px">
                    @yield("content")
                </div>
            </section>
        @include('home.layouts.footer')
        </div>
    </div>
    @include('home.layouts.script')
</body>
</html>