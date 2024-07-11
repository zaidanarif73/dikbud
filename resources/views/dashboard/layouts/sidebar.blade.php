<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #09121D;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link d-flex align-items-center justify-content-center">
      <img src="{{URL::to('/')}}/assets/img/favicon.png" alt="AdminLTE Logo" class="brand-image">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{URL::to('/')}}/dist/img/user6-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name ?? null}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dashboard.dashboard.index')}}" class="nav-link @if(request()->routeIs('dashboard.dashboard.index')) active @endif">
              <i class='bx bx-tachometer col-3 bx-tada-hover' ></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('home.home.index')}}" class="nav-link">
              <i class='bx bxl-chrome col-3 bx-tada-hover' ></i>
              <p>Buka Landingpage </p>
            </a>
          </li>

          <li class="nav-header">MENU ADMIN</li>

            <li class="nav-item">
              <a href="{{route('dashboard.menu.index')}}" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <i class="bx bx-menu col-3 bx-tada-hover"></i>
                <p>
                  Menu
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <col class="row">
                <i class="bx bx-images col-3 bx-tada-hover"></i>
                <p>
                  Banner
                </p>
                </col>
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <col class="row">
                <i class="bx bx-dock-right col-3 bx-tada-hover"></i>
                <p>
                  Page
                </p>
                </col>
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <col class="row">
                <i class="bx bx-news col-3 bx-tada-hover"></i>
                <p>
                  Berita
                </p>
                </col>
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <col class="row">
                <i class="bx bx-camera col-3 bx-tada-hover"></i>
                <p>
                  Galeri
                </p>
                </col>
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <i class="bx bx-wrench col-3 bx-tada-hover"></i>
                <p>
                  Layanan
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <i class="bx bx-link col-3 bx-tada-hover"></i>
                <p>
                  Tautan
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <i class="bx bx-calendar col-3 bx-tada-hover"></i>
                <p>
                  Kalender
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <i class="bx bxs-contact col-3 bx-tada-hover"></i>
                <p>
                  Kontak
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('dashboard.informasi.index')}}" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <i class="bx bx-download col-3 bx-tada-hover"></i>
                <p>
                  Unduh
                </p>
              </a>
            </li>

          
          <li class="nav-header">MENU ADMIN</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="bx bxs-cog col-3 bx-tada-hover"></i>
              <p>
                Pengaturan
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="bx bxs-user-circle col-3 bx-tada-hover"></i>
                  <p>User Avtivity</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="bx bx-history col-3 bx-tada-hover"></i>
                  <p>Log System</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>