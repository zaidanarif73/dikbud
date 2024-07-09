@extends('home.layouts.master')

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumentasi Kegiatan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f5f5f5;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        header {
            text-align: center;
            padding: 20px 0;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px 0;
        }

        .gallery-item {
            background: white;
            border: 1px solid #ddd;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
        }

        .gallery-item h2 {
            font-size: 18px;
            margin: 10px 0 5px;
        }

        .gallery-item p {
            font-size: 14px;
            color: #666;
        }

        .pagination {
            text-align: center;
            padding: 20px 0;
        }

        .pagination button {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            margin: 0 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>DOKUMENTASI KEGIATAN</h1>
        </header>
        <main>
            <div class="gallery">
                <div class="gallery-item">
                    <img src="https://via.placeholder.com/200" alt="Image">
                    <h2>JUDUL KEGIATAN</h2>
                    <p>Deskripsi singkat kegiatan</p>
                </div>
                <div class="gallery-item">
                    <h2>JUDUL KEGIATAN</h2>
                    <p>Deskripsi singkat kegiatan</p>
                </div>
                <div class="gallery-item">
                    <h2>JUDUL KEGIATAN</h2>
                    <p>Deskripsi singkat kegiatan</p>
                </div>
                <div class="gallery-item">
                    <h2>JUDUL KEGIATAN</h2>
                    <p>Deskripsi singkat kegiatan</p>
                </div>
                <div class="gallery-item">
                    <h2>JUDUL KEGIATAN</h2>
                    <p>Deskripsi singkat kegiatan</p>
                </div>
                <div class="gallery-item">
                    <h2>JUDUL KEGIATAN</h2>
                    <p>Deskripsi singkat kegiatan</p>
                </div>
                <div class="gallery-item">
                    <h2>JUDUL KEGIATAN</h2>
                    <p>Deskripsi singkat kegiatan</p>
                </div>
                <div class="gallery-item">
                    <h2>JUDUL KEGIATAN</h2>
                    <p>Deskripsi singkat kegiatan</p>
                </div>
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
</body>
</html>
@endsection