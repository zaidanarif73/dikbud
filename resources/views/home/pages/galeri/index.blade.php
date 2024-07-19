@extends('home.layouts.master')
    @section("css")
        <link  href="{{URL::to('/')}}/assets/css/galery/style.css" rel="stylesheet">

    @endsection
@section("content")
    <div class="container">
        <header>
            <h1>DOKUMENTASI KEGIATAN</h1>
        </header>
        <main>
            <div class="gallery">
                @forelse ($table as $index => $row)
                <div class="gallery-item">
                    <a class="" data-bs-toggle="modal" href="#userShowModal" id="show-user" data-url="{{ route('home.galeri.show', $row->id) }}" alt="">
                        <img src="{{ asset('storage/'.$row->image) }}" alt="">
                    </a>
                    <p>{{date('D, d-m-Y',strtotime($row->date))}}</p>
                    <h3>{{ $row->title }}</h3>
                    
                    
                </div>
                @empty
                <p>no data</p>
                @endforelse
                {{-- <div class="gallery-item">
                    <img src="assets/img/galeri/galeri2.jpg" alt="">
                    <p>Rabu, 21 Februari 2024 09:46 WIB</p>
                    <h3>Talkshow Pencegahan Pernikahan Dini dan Kesehatan Reproduksi Remaja</h3>
                </div>
                <div class="gallery-item">
                    <img src="assets/img/galeri/galeri3.jpg" alt="">
                    <p>Senin, 4 Maret 2024 08:19 WIB</p>
                    <h3>UPACARA PEMBUKAAN LOMBA FLS2N DAN O2SN TINGKAT KEC. KEDUNGKANDANG</h3>
                </div>
                <div class="gallery-item">                    
                    <img src="assets/img/galeri/galeri4.jpg" alt="">
                    <p>Senin, 12 Februari 2024 16:20 WIB</p>
                    <h3>Bimbingan Teknis PMM Guru PAUD</>
                </div>
                <div class="gallery-item">                    
                    <img src="assets/img/galeri/galeri5.jpg" alt="">                    
                    <p>Sabtu, 18 Mei 2024 10:10 WIB</p>
                    <h3>Mas Kadin Hadiri Khotmul Qur'an dan Imtihan SDIT Ahmad Yani</h3>
                </div>
                <div class="gallery-item">
                    <img src="assets/img/galeri/galeri6.jpg" alt="">
                    <p>Jumat, 17 Mei 2024 20:37 WIB</p>
                    <h3>Sosialisasi dan Edukasi Keselamatan Pelaksanaan Study Tour Bagi Sekolah</h3>
                </div>
                <div class="gallery-item">
                    <img src="assets/img/galeri/galeri7.jpg" alt="">                    
                    <p>Jumat, 17 Mei 2024 08:52 WIB</p>
                    <h3>Mas Kadin Amanatkan Warga Disdikbud Wajib Tahu dan Paham Aturan PPDB</h3>
                </div>
                <div class="gallery-item">
                    <img src="assets/img/galeri/galeri8.jpg" alt="">
                    <p>Senin, 13 Mei 2024 14:17 WIB</p>
                    <h3>Pentingnya Platform Merdeka Mengajar Guna Optimalisasi Kinerja Guru Dalam Mengajar</h3>
                </div> --}}
        </main>
        <div class="pagination">
            <button>&laquo;</button>
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button>&raquo;</button>
        </div>
    </div>
    <!-- <div class="container">
        <header>
            <h1>DOKUMENTASI KEGIATAN</h1>
        </header>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-dark card-has-bg click-col" style="background-image:url('assets/img/galeri/galeri1.jpg');">
                    <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                            <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">Sosialisasi Kepangkatan dengan Kelompok Kerja Kepala Sekolah(K3S) SD se Kota Malang</a></h4>
                            <small>
                                <i class="far fa-clock"></i> 
                                Senin, 4 Maret 2024 08:31 WIB
                            </small>
                        </div>
                        
                    </div>
                </div>
            </div>  
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-dark card-has-bg click-col" style="background-image:url('assets/img/galeri/galeri2.jpg');">
                    <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                            <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">Talkshow Pencegahan Pernikahan Dini dan Kesehatan Reproduksi Remaja</a></h4>
                            <small>
                                <i class="far fa-clock"></i> 
                                Rabu, 21 Februari 2024 09:46 WIB
                            </small>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-dark card-has-bg click-col" style="background-image:url('assets/img/galeri/galeri3.jpg');">
                    <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                            <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">UPACARA PEMBUKAAN LOMBA FLS2N DAN O2SN TINGKAT KEC. KEDUNGKANDANG</a></h4>
                            <small>
                                <i class="far fa-clock"></i> 
                                Senin, 4 Maret 2024 08:19 WIB
                            </small>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-dark card-has-bg click-col" style="background-image:url('assets/img/galeri/galeri4.jpg');">
                    <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                            <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">Bimbingan Teknis PMM Guru PAUD</a></h4>
                            <small>
                                <i class="far fa-clock"></i> 
                                Senin, 12 Februari 2024 16:20 WIB
                            </small>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-dark card-has-bg click-col" style="background-image:url('assets/img/galeri/galeri5.jpg');">
                    <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                            <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">Mas Kadin Hadiri Khotmul Qur'an dan Imtihan SDIT Ahmad Yani</a></h4>
                            <small>
                                <i class="far fa-clock"></i> 
                                Sabtu, 18 Mei 2024 10:10 WIB
                            </small>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-dark card-has-bg click-col" style="background-image:url('assets/img/galeri/galeri6.jpg');">
                    <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                            <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">Sosialisasi dan Edukasi Keselamatan Pelaksanaan Study Tour Bagi Sekolah</a></h4>
                            <small>
                                <i class="far fa-clock"></i> 
                                Jumat, 17 Mei 2024 20:37 WIB
                            </small>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-dark card-has-bg click-col" style="background-image:url('assets/img/galeri/galeri7.jpg');">
                    <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                            <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">Mas Kadin Amanatkan Warga Disdikbud Wajib Tahu dan Paham Aturan PPDB</a></h4>
                            <small>
                                <i class="far fa-clock"></i> 
                                Jumat, 17 Mei 2024 08:52 WIB
                            </small>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div> -->
    @include('home.pages.galeri.modal.index')
    </div>
@endsection
@section('script')
<script>
    $(document).ready(function () {

    /* When click show user */
    $('body').on('click', '#show-user', function () {
        var userURL = $(this).data('url');
        // 
        $.get(userURL, function (data) {
            $data_image = data.image;
            $('#userShowModal').modal('show');
            $('#title').text(data.title);
            $('#date').text('senin');
            $('#image').attr("src", "{{ asset('storage/_id_') }}".replace("_id_", $data_image));
            $('#description').text(data.description);
        })
    });
});
</script>
@endsection