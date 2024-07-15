@extends('home.layouts.master')
    @section("css")
        <link  href="assets/css/berita/style.css" rel="stylesheet">
    @endsection
@section("content")
    <div class="container">
        <header>
            <h1>Berita Terbaru</h1>
            <nav>
                <input type="text" placeholder="Search...">
                <button>Search</button>
            </nav>
        </header>
        <div class="row">
            <section class="highlight col-6">
                <div class="news-item">
                    <img alt src="assets/img/berita/Berita1.jpg">
                    <p>Jumat, 21 Juni 2024 09:25 WIB</p>
                    <h2>Jadi Narsum Worhshop, Mas Kadin Ucapkan Terima Kasih pada PTK SMPN 12 Malang</h2>
                    <p>Malang - Jajaran SMP Negeri 12 Malang yang kini dikepalai oleh M. Shodiq., M.Pd selenggarakan Worksh...</p>
                    <button>Baca Selengkapnya</button>
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
            <aside class="other-news col-6">
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
            </aside>
        </div>  
    </div>
@endsection