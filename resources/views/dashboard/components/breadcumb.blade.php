<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">@yield('title_breadcumb')</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard.dashboard.index')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" id="breadcumb">@yield('breadcumb')</li>
                <li class="breadcrumb-item active" id="breadcumb_child">@yield('breadcumb_child')</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- /.content-header -->