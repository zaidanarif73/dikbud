@extends('home.layouts.master')

@section("content")
<section>
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <!-- Example single danger button -->
                    <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-8">
                    <!-- Example single danger button -->
                    <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-2">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                            <i class="fas fa-times"></i>
                            </button>
                        </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header text-white bg-secondary">Informasi Publik</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col-4">No</th>
                            <th scope="col-4">Nama File</th>
                            <th scope="col-4">Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
       </section>
@endsection