<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Request</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #77b6ca;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img{
            display: flex;
            justify-content:flex-start;
            width: 65px;
        }
        .header h1 {
            font-size: 30px;
            margin: 0;
            color: #ffff;
        }
        .content {
            font-size: 14px;
            line-height: 1.6;
        }
        .content p {
            font-family: "Quicksand", sans-serif !important;
            color: #ffff;
            text-decoration: none;
        }
        .content a {
            color: #007bff;
            text-decoration: none;
        }
        .content a:hover {
            text-decoration: underline;
        }
        .content .email{
            text-align: center;
        }
        .content .button{
            text-align: center;
        }
        .content .pe{
            text-align: center;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            color: #666;
        }

        div p a {
            text-decoration:none !important;
            color : black !important;
            font-weight: bold !important;
        }
        .footer p{
            color: #ffff;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://i.pinimg.com/originals/03/46/31/034631bbc43d2a965bb02266ca56de2b.png" alt="">
            <p class="mt-5"><h1>Meminta Reset Password</h1></p>
        </div>
        <div class="content">
            <p class="email">{{ $recipient }}</p>
            <p>Kami menerima permintaan untuk mereset ulang kata sandi Anda. Klik tautan di bawah ini untuk mereset ulang :</p>
            <p class="button"><button type="button" class="btn btn-outline-primary"><a href="{{ route('auth.reset_pw.index',$token) }}">Reset Password</a></button></p>
            <p class="pe">Jika Anda tidak meminta pengaturan ulang kata sandi, abaikan email ini.</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Dinas Pendidikan dan Kebudayaan Kota Malang.</p>
        </div>
    </div>
</body>
</html>
