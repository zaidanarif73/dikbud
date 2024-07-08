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
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('home.home.index')}}" class="nav-link">
              <i class="nav-icon fa-brands fa-chrome"></i>
              <p>Buka Landingpage </p>
            </a>
          </li>

          <li class="nav-header">MENU ADMIN</li>

            <li class="nav-item">
              <a href="" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                {{-- <i class="nav-icon fas fa-user"></i> --}}
                <col class="row">
                <box-icon class="col-3" name='menu' animation='tada-hover' color="white" size="xs"></box-icon>
                <p>
                  Menu
                </p>
                </col>
                {{-- <box-icon name='menu' animation='tada-hover' color="white" size="xs"></box-icon>
                <p>
                  Menu
                  <span class="right badge badge-danger">New</span>
                </p> --}}
                
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <col class="row">
                <box-icon class="col-3" name='images' animation='tada-hover' color="white" size="xs"></box-icon>
                <p>
                  Banner
                </p>
                </col>
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <col class="row">
                <box-icon class="col-3" name='dock-right' animation='tada-hover' color="white" size="xs"></box-icon>
                <p>
                  Page
                </p>
                </col>
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <col class="row">
                <box-icon class="col-3" name='news' animation='tada-hover' color="white" size="xs"></box-icon>
                <p>
                  Berita
                </p>
                </col>
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <col class="row">
                <box-icon class="col-3" name='camera' type='solid' animation='tada-hover' color="white" size="xs"></box-icon>
                <p>
                  Galeri
                </p>
                </col>
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <box-icon class="col-3" name='wrench' type='solid' animation='tada-hover' color="white" size="xs"></box-icon>
                <p>
                  Layanan
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <box-icon class="col-3" name='link' animation='tada-hover' color="white" size="xs"></box-icon>
                <p>
                  Tautan
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <box-icon class="col-3" name='calendar' type='solid' animation='tada-hover' color="white" size="xs"></box-icon>
                <p>
                  Kalender
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <box-icon class="col-3" name='contact' type='solid' animation='tada-hover' color="white" size="xs"></box-icon>
                <p>
                  Kontak
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <box-icon class="col-3" name='download' type='solid' animation='tada-hover' color="white" size="xs"></box-icon>
                <p>
                  Unduh
                </p>
              </a>
            </li>

          
          <li class="nav-header">MENU ADMIN</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-gear"></i>
              <p>
                Pengaturan
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>User Avtivity</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="fa fa-circle nav-icon"></i>
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