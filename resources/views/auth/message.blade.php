<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Request</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Mulish', sans-serif;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        b{
            color:black !important;
            text-decoration: none;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-style: solid;
            border-color: #388da8;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 24px;
            margin: 0;
            color: #333;
        }

        hr{
            border: 5px solid #388da8;
        }

        .content {
            padding-left: 60px;
            padding-right: 60px;
            padding-top: 20px;
            padding-bottom: 20px;
            font-size: 14px;
            line-height: 1.6;
            text-align: justify;
        }

        .content p a {
            color: #000;
            text-decoration:none;
        }

        .content a {
            color: #fff;
            text-decoration: none;
        }
        .content a:hover {
            text-decoration: underline;
        }
        .footer {
            padding: 60px;
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            background-color: #388da8;
            color: #fff;
        }
        .btn{
            padding: .65rem 1.4rem;
            font-size: 1rem;
            font-weight: 500;
            opacity: 1;
            border-radius: 3px;
            color: #ffffff;
            background: #388da8;
            border-color: #388da8;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="{{ route('home.home.index') }}"><img src="https://i.pinimg.com/originals/03/46/31/034631bbc43d2a965bb02266ca56de2b.png" alt="" height="80" width="80"></a>
            <h1>Konfirmasi Reset Password</h1>
        </div>
        <hr>
        <div class="content">
            <p>Yang terhormat, {{ $recipient }}</p>
            <p>Kami telah menerima permintaan untuk reset password dari akun website Dinas Pendidikan dan Kebudayaan Kota Malang. Klik link dibawah untuk melanjutkan proses reset password lama anda: </p>
            <a href="{{ route('auth.reset_pw.index',$token) }}" class="btn">Reset Password</a>
            <p>Jika kamu tidak menerima permintaan reset password, Harap abaikan pesan email ini!.</p>
            <p>Terima Kasih,<br>Dinas Pendidikan dan Kebudayaan Kota Malang</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Dinas Pendidikan dan Kebudayaan Kota Malang. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
