@extends('home.layouts.master')

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Terbaru</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        width: 80%;
        margin: 0 auto;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 0;
    }

    header h1 {
        margin: 0;
    }

    nav {
        display: flex;
        align-items: center;
    }

    nav input[type="text"] {
        padding: 5px;
        margin-right: 10px;
    }

    nav button {
        padding: 5px 10px;
        margin-left: 5px;
    }

    main {
        display: flex;
        justify-content: space-between;
    }

    .highlight, .other-news {
        width: 48%;
    }

    .highlight .news-item, .other-news .news-item {
        background: #f9f9f9;
        padding: 20px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
    }

    .highlight .news-item h2 {
        margin-top: 0;
    }

    .highlight .news-item button {
        background: #007bff;
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
    }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Berita Terbaru</h1>
            <nav>
                <input type="text" placeholder="Search...">
                <button>Search</button>
                <button>Cart</button>
            </nav>
        </header>
        <main>
            <section class="highlight">
                <div class="news-item">
                    <h2>HIGHLIGHT</h2>
                    <p>Perkiraan Cuaca Esok</p>
                    <button>Baca</button>
                </div>
                <div class="news-item">
                    <h2>HIGHLIGHT</h2>
                    <p>Perkiraan Cuaca Besok</p>
                    <button>Baca</button>
                </div>
                <div class="news-item">
                    <h2>HIGHLIGHT</h2>
                    <p>Cuaca Pagi Ini</p>
                    <button>Baca</button>
                </div>
            </section>
            <aside class="other-news">
                <h2>Berita Lainnya</h2>
                <div class="news-item">Berita 1</div>
                <div class="news-item">Berita 2</div>
                <div class="news-item">Berita 3</div>
                <div class="news-item">Berita 4</div>
                <div class="news-item">Berita 5</div>
            </aside>
        </main>
    </div>
</body>
</html>

@endsection