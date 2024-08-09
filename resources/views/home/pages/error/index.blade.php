<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Error | DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

	<style>
		* {
			-webkit-box-sizing: border-box;
					box-sizing: border-box;
		}

		body {
			padding: 15px;
			margin: 0;
		}

		#notfound {
			position: relative;
			height: 100vh;
		}

		#notfound .notfound {
			position: absolute;
			left: 50%;
			top: 50%;
			-webkit-transform: translate(-50%, -50%);
					-ms-transform: translate(-50%, -50%);
						transform: translate(-50%, -50%);
		}

		.notfound {
			max-width: 520px;
			width: 100%;
			text-align: center;
			line-height: 1.4;
		}

		.notfound .notfound-404 {
			height: 190px;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.notfound .notfound-404 h1 {
			font-family: 'Matura MT Script Capitals';
			font-size: 180px;
			font-weight: 700;
			margin: 0px;
			color: #388da8;
			position: relative;
			display: flex;
			align-items: center;
		}

		.notfound .notfound-404 h1 > span {
			display: inline-block;
			width: 120px;
			height: 120px;
			background-image: url('assets/img/emoji.png');
			background-size: cover;
			-webkit-transform: scale(1.4);
					-ms-transform: scale(1.4);
						transform: scale(1.4);
			z-index: -1;
			position: relative;
			top: -20px; /* Adjust the initial position */
		}

		.notfound h2 {
			font-family: 'Montserrat', sans-serif;
			font-size: 22px;
			font-weight: 700;
			margin: 0;
			text-transform: uppercase;
			color: #232323;
		}

		.notfound p {
			font-family: 'Montserrat', sans-serif;
			color: #787878;
			font-weight: 300;
		}

		.notfound a {
			font-family: 'Montserrat', sans-serif;
			display: inline-block;
			padding: 12px 30px;
			font-weight: 700;
			background-color: #388da8;
			color: #fff;
			border-radius: 40px;
			text-decoration: none;
			-webkit-transition: 0.2s all;
			transition: 0.2s all;
		}

		.notfound a:hover {
			opacity: 0.8;
		}

		@media only screen and (max-width: 767px) {
			.notfound .notfound-404 {
				height: 115px;
			}
			.notfound .notfound-404 h1 {
				font-size: 86px;
			}
			.notfound .notfound-404 h1 > span {
				width: 86px;
				height: 86px;
			}
		}
	</style>
</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>4<span id="emoji"></span>4</h1>
			</div>
			<br>
			<br>
			<h2>Oops! Halaman tidak ditemukan</h2>
			<p>Maaf, halaman yang Anda cari tidak ada, telah dihapus, diubah namanya, atau untuk sementara tidak tersedia</p>
			<a href="{{route('home.home.index')}}">Kembali ke beranda</a>
		</div>
	</div>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var emoji = document.getElementById('emoji');
			var position = 0;
			var direction = 1;
			var speed = 0.5;

			function animate() {
				position += direction * speed;
				if (position > 20 || position < -20) {
					direction *= -1;
				}
				emoji.style.top = position + 'px';
				requestAnimationFrame(animate);
			}

			animate();
		});
	</script>

</body>
</html>
