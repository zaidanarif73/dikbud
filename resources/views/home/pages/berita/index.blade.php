@extends('home.layouts.master')
    @section("css")
        <link  href="assets/css/berita/style.css" rel="stylesheet">
        <style>

            .card {
            width: 100%;
            height: auto;
            column-gap: 10px;
            object-fit: contain;
            border-radius: 10px;
            overflow: hidden;
            padding: 10px;

            }

            .news-item img{

                width: 100%;
                margin-bottom: 15px;
                border-radius: 10px;
                
            }

            .card span{
                margin-top: 20px;
            }

            @media (min-width: 600px) {
            .container {
                width: 100%;
                columns: 1;
                column-gap: 10px;
                padding: 10px;
                border-radius: 10px;
            }
            .card {
                max-width: 500px;
            }
            h2 {
                font-size: 1.75em;
            }
            p {
                font-size: 1.2em;
            }
        }
        @media (min-width: 900px) {
            .container {
                width: 100%;
                columns: 3;
                column-gap: 10px;
                padding: 10px;
                border-radius: 10px;
            }
            .card {
                max-width: 700px;
            }
            h2 {
                font-size: 2em;
            }
            p {
                font-size: 1.3em;
            }
          }

        </style>
    @endsection
@section("content")

<div class="banner-bg">
        <img src="{{URL::to('/')}}/assets/img/berita/bgberita.png" alt="">
</div>
        {{-- <header>
            <h1>Berita Terbaru</h1>
            <nav>
                <input type="text" placeholder="Search...">
                <button>Search</button>
            </nav>
        </header> --}}
        <div class="container-fluid">
            <div class="row">
            {{-- <section class="highlight col-12 col-md-12 col-lg-6">
                <div class="news-item">
                    <img alt src="assets/img/berita/Berita1.jpg">
                    <p>Jumat, 21 Juni 2024 09:25 WIB</p>
                    <h2>Jadi Narsum Worhshop, Mas Kadin Ucapkan Terima Kasih pada PTK SMPN 12 Malang</h2>
                    <p>Malang - Jajaran SMP Negeri 12 Malang yang kini dikepalai oleh M. Shodiq., M.Pd selenggarakan Worksh...</p>
                    <!-- <button>Baca Selengkapnya</button> -->
                    <a href="https://dikbud.malangkota.go.id/blog/jadi-narsum-worhshop-mas-kadin-ucapkan-terima-kasih-pada-ptk-smpn-12-malang-W8E5q1" class="link">
                        <button class="button">Baca Selengkapnya</button>
                    </a>
                </div>
                <div class="news-item">
                    <img src="assets/img/berita/Berita2.jpg" alt="">
                    <p>Kamis, 20 Juni 2024 22:36 WIB</p>
                    <h2>Mas Kadin : Lulusan SKB itu Mbois, Jangan Minder. Kalian Setara dengan Lulusan Formal</h2>
                    <p>Malang - Didampingi Kepala Bidang Pembinaan Ketenagaan sekaligus Plh. Kepala Bidang Pembinaan PAUD P...</p>
                    <button>Baca Selengkapnya</button>
                </div>
                <div class="news-item">
                    <img src="assets/img/berita/Berita3.jpg" alt="">
                    <p>Kamis, 20 Juni 2024 08:06 WIB</p>
                    <h2>Ombudsman Republik Indonesia</h2>
                    <p>Ombudsman adalah lembaga negara yang mempunyai kewenangan mengawasi penyelenggaraan pelayanan publik...</p>
                    <button>Baca Selengkapnya</button>
                </div>
                    <div class="news-item">
                    <img alt src="assets/img/berita/Berita8.jpg">
                    <p>Kamis, 16 Mei 2024 09:56 WIB</p>
                    <h2>Rapat Persiapan APEKSI</h2>
                    <p>MALANG, (14/05/2024) Pukul 13.00 WIB pada rapat persiapan apeksi guru-guru berkumpul di Ruang Aula D...</p>
                    <button>Baca Selengkapnya</button>
                </div>
            </section>
            <aside class="other-news col-12 col-md-12 col-lg-6">
                <h2>Berita Lainnya</h2>
                <div class="news-item">
                    <img src="assets/img/berita/Berita4.jpg" alt="">
                    <p>Senin, 17 Juni 2024 18:42 WIB</p>
                    <h2> Pj Walikota Malang Tinjau Penyembelihan Hewan Qurban Disdikbud </h2>
                    <p>Malang - Pj Walikota Malang Dr. Ir. Wahyu Hidayat, MM didampingi Kepala Dinas Pendidikan dan Kebuday...</p>
                    <button>Baca Selengkapnya</button>
                </div>
                <div class="news-item">
                    <img src="assets/img/berita/Berita5.jpg" alt="">
                    <p>Senin, 17 Juni 2024 18:35 WIB</p>
                    <h2> Keluarga Besar Disdikbud Laksanakan Sholat Idhul Adha 1445 H di Masjid Tarbiyatul Hidayah </h2>
                    <p>Malang - Senin, 17 Juni 2024&nbsp;atau bertepatan dengan 10 Dzulhijjah 1445 H, Keluarga Besar Dinas...</p>
                    <button>Baca Selengkapnya</button>
                </div>
                <div class="news-item">
                    <img src="assets/img/berita/Berita5.jpg" alt="">
                    <p>Jumat, 7 Juni 2024 19:34 WIB</p>
                    <h2> Mas Kadin dan Sekdin Kunjungi SP Memantau 3K PTK </h2>
                    <p>Malang - Jum' at, 7 Juni 2024 Kepala Dinas&nbsp;Pendidikan dan Kebudayaan Kota Malang , Suwwrjana, S...</p>
                    <button>Baca Selengkapnya</button>
                </div>
                <div class="news-item">
                    <img src="assets/img/berita/Berita6.jpg" alt="">
                    <p>Rabu, 19 Juni 2024 20:11 WIB</p>
                    <p> Komitmen Bersama Bunda PAUD Kota Malang Mendukung Gerakan Transisi PAUD ke SD yang Menyenangkan </p>
                    <p>Malang - Usai prosesi pengukuhan Kelompok Kerja (Pokja) Bunda PAUD Tahun 2024 oleh Bunda PAUD (Pendi...</p>
                    <button>Baca Selengkapnya</button>
                </div>
                <div class="news-item">
                    <img src="assets/img/berita/Berita7.jpg" alt="">
                    <p>Senin, 17 Juni 2024 18:42 WIB</p>
                    <h2> Pj Walikota Malang Tinjau Penyembelihan Hewan Qurban Disdikbud </h2>
                    <p>Malang - Pj Walikota Malang Dr. Ir. Wahyu Hidayat, MM didampingi Kepala Dinas Pendidikan dan Kebuday...</p>
                    <button>Baca Selengkapnya</button>
                </div>
            </aside> --}}
            <div class="container">


                <div class="card">
                    <img src="assets/img/berita/Berita3.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis fugiat ipsam quod sequi, unde ex omnis laboriosam doloribus tempora aperiam pariatur! Fugiat esse facere quasi tempora necessitatibus sapiente deleniti consequatur!</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>




                <div class="card">
                    <img src="assets/img/berita/Berita1.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.pinimg.com/474x/f2/02/10/f20210348bda3d18e3d36b57f9aa3cb7.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.pinimg.com/236x/6a/ee/82/6aee82009fde8933f36b0127433991ae.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.pinimg.com/236x/fa/f1/8a/faf18a77019c86192d2eacbd4ee2e026.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.pinimg.com/236x/f6/1d/7c/f61d7c0e4ac32f7edb8fdf9afde039c9.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.pinimg.com/236x/a4/89/ff/a489ff86c6cc2b817e36759eec53ca23.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.pinimg.com/236x/24/b7/c7/24b7c7066a3523279080979c6a79369a.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://images.alphacoders.com/117/thumbbig-1178048.webp" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.pinimg.com/236x/7c/44/30/7c44307a66c1458511ca2365db4c0721.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.pinimg.com/236x/ed/83/66/ed8366eb39039ccf33bbc575795e658a.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.pinimg.com/474x/0e/71/bb/0e71bb162293b8459f67e0810d574bac.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.pinimg.com/474x/c9/f5/0f/c9f50f5b9b3e22db631449e8829380d2.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.pinimg.com/236x/35/03/d9/3503d95a7e22a33e4b2ba9660b51dd27.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.pinimg.com/474x/d8/16/6e/d8166eba9d587768b9a59350780fa711.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.pinimg.com/236x/b0/2a/86/b02a865d3ed15fd3507809eae2410391.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.pinimg.com/474x/c7/ed/aa/c7edaabec1f3fa4d4213740706a9d826.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.etsystatic.com/41031696/r/il/70d684/5671643679/il_794xN.5671643679_hxz4.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.pinimg.com/474x/e0/f2/5b/e0f25b4e828ff0f1821bb9cf22905c23.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.pinimg.com/474x/d8/ee/a6/d8eea63adfd1ed99da44363eb5fe7d87.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.pinimg.com/474x/c8/fb/4e/c8fb4e08761497d2b04ec7635d075e21.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="https://i.pinimg.com/236x/2c/05/55/2c055573b79231cba191005a137f8124.jpg" class="card-img-top" alt="">
                    <span class="tanggal">
                        Rabu, 24 Juli 2024
                    </span>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                {{-- <img src="https://i.pinimg.com/474x/f2/02/10/f20210348bda3d18e3d36b57f9aa3cb7.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/236x/6a/ee/82/6aee82009fde8933f36b0127433991ae.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/236x/0d/bd/49/0dbd4965228a9aef6ea1a13868ef6f8b.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/236x/23/2c/ed/232ced655e56f77b021cee56bff11137.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/236x/fa/f1/8a/faf18a77019c86192d2eacbd4ee2e026.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/236x/f6/1d/7c/f61d7c0e4ac32f7edb8fdf9afde039c9.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/236x/a4/89/ff/a489ff86c6cc2b817e36759eec53ca23.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/236x/24/b7/c7/24b7c7066a3523279080979c6a79369a.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/236x/74/c2/16/74c2164412ea96397c2da1a27e1b301e.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/236x/7c/44/30/7c44307a66c1458511ca2365db4c0721.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/236x/ed/83/66/ed8366eb39039ccf33bbc575795e658a.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/474x/0e/71/bb/0e71bb162293b8459f67e0810d574bac.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/474x/c9/f5/0f/c9f50f5b9b3e22db631449e8829380d2.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/236x/35/03/d9/3503d95a7e22a33e4b2ba9660b51dd27.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/474x/d8/16/6e/d8166eba9d587768b9a59350780fa711.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/236x/b0/2a/86/b02a865d3ed15fd3507809eae2410391.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/474x/c7/ed/aa/c7edaabec1f3fa4d4213740706a9d826.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/236x/44/b3/cc/44b3cc27ff898507a4175953707881b7.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/474x/e0/f2/5b/e0f25b4e828ff0f1821bb9cf22905c23.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/474x/d8/ee/a6/d8eea63adfd1ed99da44363eb5fe7d87.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/474x/c8/fb/4e/c8fb4e08761497d2b04ec7635d075e21.jpg"> --}}
                {{-- <img src="https://i.pinimg.com/236x/2c/05/55/2c055573b79231cba191005a137f8124.jpg"> --}}

            </div>
            
        </div>
        </div>
         
@endsection