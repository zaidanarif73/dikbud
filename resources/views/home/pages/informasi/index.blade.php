@extends('home.layouts.master')
@section("title","Informasi | DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG")
@section("css")
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
@endsection
@section("content")
<div class="container mt-5" style="padding-top :60px">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h1 data-aos="fade-up">Informasi Publik</h1>
    </div>
    <div class="row mt-5">
        <div class="btn-group col-2">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Produk Hukum</button>
            <ul id="produkHukumList" class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Laporan Kinerja Instansi Pemerinta (LKJIP)</a></li>
                <li><a class="dropdown-item" href="#">Indikator Kinerja Individu (IKI)</a></li>
                <li><a class="dropdown-item" href="#">Perjanjian Kinerja (PK)</a></li>
                <li><a class="dropdown-item" href="#">Rencana Aksi</a></li>
                <li><a class="dropdown-item" href="#">Kompilasi Jumlah Siswa</a></li>
                <li><a class="dropdown-item" href="#">Lain-lainnya</a></li>
            </ul>
        </div>
        <div class="btn-group col-2">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Tahun</button>
            <ul id="tahunList" class="dropdown-menu" style="max-height: 200px; overflow-y: scroll;">
                <li><a class="dropdown-item" href="#">2019</a></li>
                <li><a class="dropdown-item" href="#">2020</a></li>
                <li><a class="dropdown-item" href="#">2021</a></li>
                <li><a class="dropdown-item" href="#">2022</a></li>
                <li><a class="dropdown-item" href="#">2023</a></li>
                <li><a class="dropdown-item" href="#">2024</a></li>
                <li><a class="dropdown-item" href="#">2025</a></li>
                <li><a class="dropdown-item" href="#">2026</a></li>
                <li><a class="dropdown-item" href="#">2027</a></li>
                <li><a class="dropdown-item" href="#">2028</a></li>
                <li><a class="dropdown-item" href="#">2029</a></li>
                <li><a class="dropdown-item" href="#">2030</a></li>
                <li><a class="dropdown-item" href="#">2019</a></li>
                <li><a class="dropdown-item" href="#">2020</a></li>
                <li><a class="dropdown-item" href="#">2021</a></li>
                <li><a class="dropdown-item" href="#">2022</a></li>
                <li><a class="dropdown-item" href="#">2023</a></li>
                <li><a class="dropdown-item" href="#">2024</a></li>
                <li><a class="dropdown-item" href="#">2025</a></li>
                <li><a class="dropdown-item" href="#">2026</a></li>
                <li><a class="dropdown-item" href="#">2027</a></li>
                <li><a class="dropdown-item" href="#">2028</a></li>
                <li><a class="dropdown-item" href="#">2029</a></li>
                <li><a class="dropdown-item" href="#">2030</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body"></div>
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 5%; background-color:#A0DEFF">No</th>
                                <th class="text-center" style="width: 60%; background-color:#A0DEFF">Nama File</th>
                                <th class="text-center" style="width: 35%; background-color:#A0DEFF">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($table as $index => $row)
                            <tr>
                                <td>{{ $table->firstItem() + $index }}</td>
                                <td>{{ $row->title }}</td>
                                <td>
                                    <div class="form-button-action d-flex justify-content-center">
                                        @if ($row->file_path != null)
                                            <a href="{{ asset('storage/'.$row->file_path) }}" target="_blank" class="btn btn-success mx-1"><i class="fa fa-plus"></i> Lihat</a>
                                            <a href="{{ asset('storage/'.$row->file_path) }}" class="btn btn-primary mx-1" download><i class="fa fa-plus"></i>Download</a>
                                        @elseif($row->file_link != null)
                                            <a href="{{ URL::to($row->file_link) }}" target="_blank" class="btn btn-success mx-1"><i class="fa fa-plus"></i> Lihat</a>
                                            <a href="{{ URL::to($row->file_link) }}" class="btn btn-primary mx-1" download><i class="fa fa-plus"></i>Download</a>
                                        @endif                      
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10" class="text-center">Data tidak ditemukan</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<form id="frmTahun" method="get">
    @csrf
    <input type="hidden" name="year"/>
</form>

<form id="frmProdukHukum" method="get">
    @csrf
    <input type="hidden" name="produkHukum"/>
</form>

@endsection
@section("script")
    <script>
        $(document).ready(function () {
            $('#tahunList li a').on('click', function () {
                var year= ($(this).text());
                //alert("Your Favourite Sports is "+txt);
                $("#frmTahun").attr("action", "{{ route('home.informasi.index') }}");
                $("#frmTahun").find('input[name="year"]').val(year);
                $("#frmTahun").submit();
                //$("#tahun").val() = txt;
            });
            $('#produkHukumList li a').on('click', function () {
                var produkHukum= ($(this).text());
                //alert("Your Favourite Sports is "+txt);
                $("#frmProdukHukum").attr("action", "{{ route('home.informasi.index') }}");
                $("#frmProdukHukum").find('input[name="produkHukum"]').val(produkHukum);
                $("#frmProdukHukum").submit();
                //$("#tahun").val() = txt;
            });
        });
    </script>
    
    <script>
        $(document).ready(function () {
            $("#basic-datatables").DataTable({
                pageLength: 10,
            });
        });
    </script>
@endsection