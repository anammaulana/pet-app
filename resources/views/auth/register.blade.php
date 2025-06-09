<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Pet Savers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 80px auto;
            background: #fff;
            padding: 40px 60px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #ff8800;
            font-size: 24px;
            margin-bottom: 30px;
        }

        p {
            font-size: 13px;
            color: #555;
            margin-bottom: 20px;
        }

        input {
            width: 370px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        button {
            width: 400px;
            background-color: #ff8800;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .terms {
            margin-top: 20px;
            font-size: 11px;
            color: #777;
        }

        .terms a {
            color: #555;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Daftar ke PET SAVERS</h1>
        <p>Silahkan isi data Anda</p>

        @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/register">
            @csrf
            <input type="text" name="name" placeholder="Nama Lengkap" required />
            <input type="email" name="email" placeholder="email@domain.com" required />
            <input type="password" name="password" placeholder="Password" required />
            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required />
            <button type="submit">Daftar</button>
        </form>

        <div class="terms">
            Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a><br><br>
            Dengan mendaftar, Anda setuju pada <a href="#">Terms of Service</a> dan <a href="#">Privacy Policy</a>.
        </div>
    </div>
</body>

</html>