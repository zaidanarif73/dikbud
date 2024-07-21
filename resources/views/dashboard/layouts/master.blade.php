<!DOCTYPE html>
<html lang="en">
    @include('dashboard.layouts.head')
    @trixassets
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('sweetalert::alert')
        @include('dashboard.layouts.topbar')
        @include('dashboard.layouts.sidebar')
        <div class="content-wrapper">
            @include('dashboard.components.breadcumb')
            <section class="content">
                <div class="container-fluid">
                    @yield("content")
                </div>
            </section>
        </div>
    </div>
    @include('dashboard.layouts.script')
</body>
</html>