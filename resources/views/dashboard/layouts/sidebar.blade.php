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
          <img src="@if(!empty(Auth::user()->avatar)) {{asset('storage/'.Auth::user()->avatar)}} @else https://avatars.dicebear.com/api/initials/{{ Auth::user()->name  ?? null}}.svg?margin=10 @endif" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('dashboard.profile.index') }}" class="d-block">{{ Auth::user()->name ?? null}}</a>
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

            @if(Auth::user()->hasRole([
                  \App\Enums\RoleEnum::SuperAdmin,
                  \App\Enums\RoleEnum::Admin,
            ]))
            <li class="nav-item">
              <a href="{{route('dashboard.menu.index')}}" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.menu')) active @endif">
                <i class="bx bx-menu col-3 bx-tada-hover"></i>
                <p>
                  Menu
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('dashboard.banner.index')}}" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.banner')) active @endif">
                <col class="row">
                <i class="bx bx-images col-3 bx-tada-hover"></i>
                <p>
                  Banner
                </p>
                </col>
              </a>
            </li>
            @endif
            
            <li class="nav-item">
              <a href="{{route('dashboard.berita.index')}}" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.berita')) active @endif">
                <col class="row">
                <i class="bx bx-news col-3 bx-tada-hover"></i>
                <p>
                  Berita
                </p>
                </col>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{route('dashboard.galeri.index')}}" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.galeri')) active @endif">
                <col class="row">
                <i class="bx bx-camera col-3 bx-tada-hover"></i>
                <p>
                  Galeri
                </p>
                </col>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('dashboard.layanan.index')}}" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.layanan')) active @endif">
                <i class="bx bx-wrench col-3 bx-tada-hover"></i>
                <p>
                  Layanan
                </p>
              </a>
            </li>


            @if(Auth::user()->hasRole([
                \App\Enums\RoleEnum::SuperAdmin,
                \App\Enums\RoleEnum::Admin,
            ]))
           
            <li class="nav-item">
              <a href="{{route('dashboard.tautan.index')}}" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.tautan')) active @endif">
                <i class="bx bx-link col-3 bx-tada-hover"></i>
                <p>
                  Tautan
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('dashboard.kalender.index')}}" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.kalender')) active @endif">
                <i class="bx bx-calendar col-3 bx-tada-hover"></i>
                <p>
                  Kalender
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('dashboard.kontak.index')}}" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.kontak')) active @endif">
                <i class="bx bxs-contact col-3 bx-tada-hover"></i>
                <p>
                  Kontak
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('dashboard.informasi.index')}}" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.informasi')) active @endif">
                <i class="bx bx-download col-3 bx-tada-hover"></i>
                <p>
                  Informasi
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('dashboard.inovasi.index')}}" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.inovasi')) active @endif">
                <i class="bx bxs-been-here col-3 bx-tada-hover"></i> 
                  Inovasi
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('dashboard.so.index')}}" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.so')) active @endif">
                <i class="bx bxs-vector col-3 bx-tada-hover"></i> 
                <p>
                  Struktur Organisasi
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('dashboard.vm.index')}}" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.vm')) active @endif">
                <i class="bx bxl-venmo col-3 bx-tada-hover"></i> 
                <p>
                  Visi Misi
                </p>
              </a>
            </li>
            @endif

            @if(Auth::user()->hasRole([
                \App\Enums\RoleEnum::SuperAdmin,
            ]))
            <li class="nav-item">
              <a href="{{route('dashboard.users.index')}}" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.user')) active @endif">
                <i class='bx bx-user col-3 bx-tada-hover'></i>
                <p>
                  User
                </p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{route('dashboard.pengaturan.index')}}" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.pengaturan')) active @endif">
                <i class="bx bx-cog col-3 bx-tada-hover"></i>
                <p>
                  Pengaturan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard/user-activity" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.log')) active @endif">
                <i class="bx bx-history col-3 bx-tada-hover"></i>
                <p>
                  User Activity
                </p>
              </a>
            </li>

          <li class="nav-item">
              <a href="{{route('dashboard.log.index')}}" class="nav-link @if(Str::startsWith(request()->route()->getName(), 'dashboard.log')) active @endif">
                <i class="bx bx-child col-3 bx-tada-hover"></i>
                <p>
                  Log
                </p>
              </a>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>