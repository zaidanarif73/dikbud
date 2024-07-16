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
                
                <div class="gallery-item">
                    <a class="" data-bs-toggle="modal" href="#exampleModalToggle" alt="">
                        <img src="assets/img/galeri/galeri1.jpg" alt="">
                    </a>
                    <p>Senin, 4 Maret 2024 08:31 WIB</p>
                    <h3>Sosialisasi Kepangkatan dengan Kelompok Kerja Kepala Sekolah(K3S) SD se Kota Malang</h3>
                </div>
                <div class="gallery-item">
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
            </div>
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
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h1>Sosialisasi Kepangkatan dengan Kelompok Kerja Kepala Sekolah(K3S) SD se Kota Malang</h1>
                    <img src="assets/img/galeri/galeri1.jpg" alt="">
                    <br>
                    <p>Senin, 4 Maret 2024 08:31 WIB</p>
                    <h6>Bidang Ketenagaan Dinas Pendidikan dan Kebudayaan Kota Malang mengadakan Sosialisasi Kepangkatan dengan Kelompok Kerja Kepaka Sekolah(K3S) SD se Kota Malang. Sebelumnya, Bidang Ketenagaan sudah mengadakaan sosialisasi kepangkatan dengan guru melalui aplikasi Zoom. Dikarenakan pelaksanaan sosialisasi tersebut kurang maksimal dan efektif, maka diadakan sosialisasi secara tatap muka dengan K3S SD Se-Kota Malang ini. Kegiatan ini dilaksanakan pada tanggal 28 Februari 2024 yang bertempat di Ruang VIP Dinas Pendidikan dan Kebudayaan Kota Malang. Tujuan dari kegiatan tersebut adalah mengedukasi/memberikan pengarahan kepada K3S SD se Kota Malang terkait kepangkatan.</h6>
                    <br>
                    <img src="assets/img/galeri/galeri9.png" alt="">
                    <br>
                    <br>
                    <h6>Acara ini dihadiri oleh 30 Bapak/Ibu K3S SD se-Kota Malang. Sosialisasi dimulai pukul 13.00 yang dibuka oleh Bapak Sugeng dan sambutan dari Bapak Tujuwarno selaku Kepala Bidang Ketenagaan. Dalam sambutan tersebut Pak Tujuwarno mengatakan â€œKepala sekolah adalah ujung tombak kenaikan pangkat anak buahnya(guru)â€. Maksud dari perkataan tersebut adalah dinaikkan/tidaknya pangkat seorang guru tergantung kepada kepala sekolah di sekolah tersebut.</h6>
                </div>
                <!-- <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                </div> -->
            </div>
        </div>
    </div>
    </div>

    
@endsection

  