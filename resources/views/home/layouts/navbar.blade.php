@php
    use App\Models\Menu;
@endphp
<header id="header" data-aos="fade-down" class="header d-flex align-items-center fixed-top">
    <div class="container container-xl position-relative d-flex align-items-center">

        <a href="{{ route('home.home.index') }}" class="logo d-flex align-items-center me-auto">
            @if ($table_pengaturan->website_logo == null)
                <img src="{{ URL::to('/') }}/assets/img/favicon.png" alt="">
                <!-- <h1 class="sitename">Dinas Pendidikan dan Kebudayaan Kota Malang</h1> -->
            @else
                <img src="{{ asset('storage/' . $table_pengaturan->website_logo) }}" alt="">
            @endif
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                @foreach ($table_menu as $index => $row)
               
                    @if ($row->title == 'Layanan')
                        <li><a href="{{ route('home.home.index') }}#layanan ">{{ $row->title }}</a></li>
                    @elseif($row->title == 'Kontak')
                        <li><a href="{{ route('home.home.index') }}#kontak">{{ $row->title }}</a></li>
                    @elseif($row->title == 'Informasi Publik')
                        <li><a href="{{ route('home.informasi.index') }}">{{ $row->title }}</a></li>
                    @elseif($row->title == 'Home')
                        <li><a href="{{ route('home.home.index') }}">{{ $row->title }}</a></li>
                    @elseif($row->title == 'Berita')
                        <li><a href="{{ route('home.berita.index') }}">{{ $row->title }}</a></li>
                    @elseif($row->title == 'Inovasi')
                        <li><a href="{{ route('home.inovasi.index') }}">{{ $row->title }}</a></li>
                    @elseif($row->title == 'Galeri')
                        <li><a href="{{ route('home.galeri.index') }}">{{ $row->title }}</a></li>
                    @elseif($row->title == 'Profil')
                        <li class="dropdown"><a href="#"><span>{{ $row->title }}</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="{{ route('home.pejabat.index') }}">Kepala Dinas dan Pejabat</a></li>
                                <li><a href="{{ route('home.SO.index') }}">Struktur Organisasi</a></li>
                                <li><a href="{{ route('home.VM.index') }}">Visi & Misi</a></li>
                            </ul>
                        </li>
                    {{-- @else
                        @php
                            $child = Menu::where('parent', $row->id)
                                ->orderBy('created_at')
                                ->get();
                        @endphp
                        @if ($child->count() == 0)
                            <li><a href="{{ '/' . strtolower($row->title) . '/show' }}">{{ $row->title }}</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#"><span>{{ $row->title }}</span>
                                    <i class="bi bi-chevron-down toggle-dropdown"></i>
                                </a>
                                <ul>
                                    @foreach ($child as $ch)
                                        <li><a href="">{{ $ch->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                    @endif --}}
                        
                  
                      
                  @else
                  <ul>
                        @if ($row->parent == null) <!-- Menampilkan hanya parent di navbar utama -->
                            @php
                                $child = Menu::where('parent', $row->id)
                                    ->orderBy('created_at')
                                    ->get();
                            @endphp
                            @if ($child->count() == 0)
                                <li><a href="{{ '/' . strtolower($row->title) . '/show' }}">{{ $row->title }}</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#"><span>{{ $row->title }}</span>
                                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                                    </a>
                                    <ul>
                                        @foreach ($child as $ch)
                                            <li><a href="{{ '/' . strtolower($ch->title) . '/show' }}">{{ $ch->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endif
                </ul>
                
                  @endif
                @endforeach

            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
