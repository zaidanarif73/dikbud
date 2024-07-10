@extends('home.layouts.master')
@section("css")
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
@endsection
@section("content")
<section>
    <div class="container">
        <table id="myTable" class="cell-border hover">
            <thead>
                <tr>
                    <th class="dt-head-center">No</th>
                    <th class="dt-head-center">Nama File</th>
                    <th class="dt-head-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="dt-body-center">1</td>
                    <td>Row 1 Data 2</td>
                    <td>
                        <div class="row">
                            <a href="" class="nav-link col-6">
                                <i class='d-flex justify-content-end'>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g transform="matrix(0.9999999999999991,0,0,0.9999999999999991,1.7053025658242404e-13,8.526512829121202e-14)"><path d="M508.745 246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818 239.784 3.249 246.035a16.896 16.896 0 0 0 0 19.923c4.569 6.257 113.557 153.206 252.748 153.206s248.174-146.95 252.748-153.201a16.875 16.875 0 0 0 0-19.922zM255.997 385.406c-102.529 0-191.33-97.533-217.617-129.418 26.253-31.913 114.868-129.395 217.617-129.395 102.524 0 191.319 97.516 217.617 129.418-26.253 31.912-114.868 129.395-217.617 129.395z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M255.997 154.725c-55.842 0-101.275 45.433-101.275 101.275s45.433 101.275 101.275 101.275S357.272 311.842 357.272 256s-45.433-101.275-101.275-101.275zm0 168.791c-37.23 0-67.516-30.287-67.516-67.516s30.287-67.516 67.516-67.516 67.516 30.287 67.516 67.516-30.286 67.516-67.516 67.516z" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
                                </i>
                                </a>
                            <a href="" class="nav-link col-6">
                                <i class='d-flex justify-content-start text-center bx bxs-download bx-sm' style='color:#2f00ff'  ></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="dt-body-center">2</td>
                    <td>Row 2 Data 2</td>
                    <td>
                        <div class="row">
                            <a href="" class="nav-link col-6">
                                <i class='d-flex justify-content-end'>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g transform="matrix(0.9999999999999991,0,0,0.9999999999999991,1.7053025658242404e-13,8.526512829121202e-14)"><path d="M508.745 246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818 239.784 3.249 246.035a16.896 16.896 0 0 0 0 19.923c4.569 6.257 113.557 153.206 252.748 153.206s248.174-146.95 252.748-153.201a16.875 16.875 0 0 0 0-19.922zM255.997 385.406c-102.529 0-191.33-97.533-217.617-129.418 26.253-31.913 114.868-129.395 217.617-129.395 102.524 0 191.319 97.516 217.617 129.418-26.253 31.912-114.868 129.395-217.617 129.395z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M255.997 154.725c-55.842 0-101.275 45.433-101.275 101.275s45.433 101.275 101.275 101.275S357.272 311.842 357.272 256s-45.433-101.275-101.275-101.275zm0 168.791c-37.23 0-67.516-30.287-67.516-67.516s30.287-67.516 67.516-67.516 67.516 30.287 67.516 67.516-30.286 67.516-67.516 67.516z" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
                                </i>
                                </a>
                            <a href="" class="nav-link col-6">
                                <i class='d-flex justify-content-start text-center bx bxs-download bx-sm' style='color:#2f00ff'  ></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="dt-body-center">3</td>
                    <td>Row 1 Data 2</td>
                    <td>
                        <div class="row">
                            <a href="" class="nav-link col-6">
                                <i class='d-flex justify-content-end'>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g transform="matrix(0.9999999999999991,0,0,0.9999999999999991,1.7053025658242404e-13,8.526512829121202e-14)"><path d="M508.745 246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818 239.784 3.249 246.035a16.896 16.896 0 0 0 0 19.923c4.569 6.257 113.557 153.206 252.748 153.206s248.174-146.95 252.748-153.201a16.875 16.875 0 0 0 0-19.922zM255.997 385.406c-102.529 0-191.33-97.533-217.617-129.418 26.253-31.913 114.868-129.395 217.617-129.395 102.524 0 191.319 97.516 217.617 129.418-26.253 31.912-114.868 129.395-217.617 129.395z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M255.997 154.725c-55.842 0-101.275 45.433-101.275 101.275s45.433 101.275 101.275 101.275S357.272 311.842 357.272 256s-45.433-101.275-101.275-101.275zm0 168.791c-37.23 0-67.516-30.287-67.516-67.516s30.287-67.516 67.516-67.516 67.516 30.287 67.516 67.516-30.286 67.516-67.516 67.516z" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
                                </i>
                                </a>
                            <a href="" class="nav-link col-6">
                                <i class='d-flex justify-content-start text-center bx bxs-download bx-sm' style='color:#2f00ff'  ></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="dt-body-center">4</td>
                    <td>Row 2 Data 2</td>
                    <td>
                        <div class="row">
                            <a href="" class="nav-link col-6">
                                <i class='d-flex justify-content-end'>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g transform="matrix(0.9999999999999991,0,0,0.9999999999999991,1.7053025658242404e-13,8.526512829121202e-14)"><path d="M508.745 246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818 239.784 3.249 246.035a16.896 16.896 0 0 0 0 19.923c4.569 6.257 113.557 153.206 252.748 153.206s248.174-146.95 252.748-153.201a16.875 16.875 0 0 0 0-19.922zM255.997 385.406c-102.529 0-191.33-97.533-217.617-129.418 26.253-31.913 114.868-129.395 217.617-129.395 102.524 0 191.319 97.516 217.617 129.418-26.253 31.912-114.868 129.395-217.617 129.395z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M255.997 154.725c-55.842 0-101.275 45.433-101.275 101.275s45.433 101.275 101.275 101.275S357.272 311.842 357.272 256s-45.433-101.275-101.275-101.275zm0 168.791c-37.23 0-67.516-30.287-67.516-67.516s30.287-67.516 67.516-67.516 67.516 30.287 67.516 67.516-30.286 67.516-67.516 67.516z" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
                                </i>
                                </a>
                            <a href="" class="nav-link col-6">
                                <i class='d-flex justify-content-start text-center bx bxs-download bx-sm' style='color:#2f00ff'  ></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="dt-body-center">5</td>
                    <td>Row 1 Data 2</td>
                </tr>
                <tr>
                    <td class="dt-body-center">5</td>
                    <td>Row 2 Data 2</td>
                </tr>

                <tr>
                    <td class="dt-body-center">6</td>
                    <td>Row 2 Data 2</td>
                </tr>
                <tr>
                    <td class="dt-body-center">7</td>
                    <td>Row 1 Data 2</td>
                </tr>
                <tr>
                    <td class="dt-body-center">8</td>
                    <td>Row 2 Data 2</td>
                </tr>
                <tr>
                    <td class="dt-body-center">9</td>
                    <td>Row 2 Data 2</td>
                </tr>
                <tr>
                    <td class="dt-body-center">10</td>
                    <td>Row 1 Data 2</td>
                </tr>
                <tr>
                    <td class="dt-body-center">11</td>
                    <td>Row 2 Data 2</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection
@section("script")
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script>
        $(document).ready();
        
        new DataTable('#myTable', {

            paging: true,
            columnDefs: [{ width: '`10%', targets: 0 },{ width: '70%', targets: 1 },{ width: '20%', targets: 2 }]

        } );
    </script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
@endsection