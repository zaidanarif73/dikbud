@extends('home.layouts.master')
@section("css")
        <link  href="assets/css/inovasi/style.css" rel="stylesheet">
    @endsection
@section("content")
<div class="inov-bg">
    <img src="assets/img/banner-inov.png" alt="">
</div>
<div class="container mt-5">
    <main>
        <div class="gallery">
            <div class="gallery-item">
                <img src="assets/img/galeri/galeri1.jpg" alt="">
                <a href="{{ route('home.inovasi.show') }}" class="stretched-link"><h3>Sosialisasi Kepangkatan dengan Kelompok Kerja Kepala Sekolah(K3S) SD se Kota Malang</h3></a>
            </div>
            <div class="gallery-item">
                <img src="assets/img/galeri/galeri2.jpg" alt="">
                <h3>Talkshow Pencegahan Pernikahan Dini dan Kesehatan Reproduksi Remaja</h3>
            </div>
            <div class="gallery-item">
                <img src="assets/img/galeri/galeri3.jpg" alt="">
                <h3>UPACARA PEMBUKAAN LOMBA FLS2N DAN O2SN TINGKAT KEC. KEDUNGKANDANG</h3>
            </div>
            <div class="gallery-item">                    
                <img src="assets/img/galeri/galeri4.jpg" alt="">
                <h3>Bimbingan Teknis PMM Guru PAUD</>
            </div>
            <div class="gallery-item">                    
                <img src="assets/img/galeri/galeri5.jpg" alt="">                    
                <h3>Mas Kadin Hadiri Khotmul Qur'an dan Imtihan SDIT Ahmad Yani</h3>
            </div>
            <div class="gallery-item">
                <img src="assets/img/galeri/galeri6.jpg" alt="">
                <h3>Sosialisasi dan Edukasi Keselamatan Pelaksanaan Study Tour Bagi Sekolah</h3>
            </div>
            <div class="gallery-item">
                <img src="assets/img/galeri/galeri7.jpg" alt="">                    
                <h3>Mas Kadin Amanatkan Warga Disdikbud Wajib Tahu dan Paham Aturan PPDB</h3>
            </div>
            <div class="gallery-item">
                <img src="assets/img/galeri/galeri8.jpg" alt="">
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
@endsection