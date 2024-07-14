@extends('home.layouts.master')
@section("css")
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="assets/css/informasi/style.css" />
    --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
    
    {{-- <script src="assets/js/home/plugin/webfont/webfont.min.js"></script> --}}

    <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
            families: [
                "Font Awesome 5 Solid",
                "Font Awesome 5 Regular",
                "Font Awesome 5 Brands",
                "simple-line-icons",
            ],
            urls: ["../assets/css/home/fonts.min.css"],
            },
            active: function () {
            sessionStorage.fonts = true;
            },
        });
    </script>
    <link rel="stylesheet" href="assets/css/home/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/home/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/home/kaiadmin.min.css" />
@endsection
@section("content")
<div class="container">
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
                                            <a href="{{ asset('storage/'.$row->file_path) }}" target="_blank">  
                                                <button class="btn btn-primary">
                                                    <span class="btn-label">
                                                        <i class='bx bx-sm bxs-show'></i>
                                                    </span>
                                                    Lihat
                                                </button>
                                            </a>
                                            <a href="{{ asset('storage/'.$row->file_path) }}" class="mx-5" download>
                                                <button class="btn btn-danger">
                                                    <span class="btn-label">
                                                        <i class='bx bx-sm bxs-download'></i>
                                                    </span>
                                                    Download
                                                </button>
                                            </a>
                                        @elseif($row->file_link != null)
                                            <a href="{{ URL::to($row->file_link) }}" target="_blank">  
                                                <button class="btn btn-primary">
                                                    <span class="btn-label">
                                                        <i class='bx bx-sm bxs-show'></i>
                                                    </span>
                                                    Lihat
                                                </button>
                                            </a>
                                            <a href="{{ URL::to($row->file_link) }}" class="mx-5" download>
                                                <button class="btn btn-danger">
                                                    <span class="btn-label">
                                                        <i class='bx bx-sm bxs-download'></i>
                                                    </span>
                                                    Download
                                                </button>
                                            </a>
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

@endsection
@section("script")
    {{-- <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script>
        $(document).ready();
        
        new DataTable('#myTable', {

            paging: true,
            columnDefs: [{ width: '`10%', targets: 0 },{ width: '70%', targets: 1 },{ width: '20%', targets: 2 }]

        } );
    </script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script> --}}
    <script src="assets/js/home/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/home/core/popper.min.js"></script>
    <script src="assets/js/home/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/home/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Datatables -->
    <script src="assets/js/home/plugin/datatables/datatables.min.js"></script>
    <!-- Kaiadmin JS -->
    <script src="assets/js/home/kaiadmin.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#basic-datatables").DataTable({
                pageLength: 10,
            });
        });
    </script>
@endsection