<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Pet Savers</title>
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

    h2 {
      font-size: 16px;
      margin-bottom: 10px;
    }

    p {
      font-size: 13px;
      color: #555;
      margin-bottom: 20px;
    }

    input[type="email"] {
      width: 370px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      margin-bottom: 20px;
      font-size: 14px;
    }

    input[type="password"] {
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

    .divider {
      margin: 25px 0;
      display: flex;
      align-items: center;
      text-align: center;
    }

    .divider::before,
    .divider::after {
      content: '';
      flex: 1;
      border-bottom: 1px solid #ccc;
    }

    .divider:not(:empty)::before {
      margin-right: .75em;
    }

    .divider:not(:empty)::after {
      margin-left: .75em;
    }

    .google-btn {
      background-color: #f5f5f5;
      border: 1px solid #ddd;
      color: #444;
      padding: 12px;
      font-size: 14px;
      border-radius: 6px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .google-btn img {
      height: 20px;
      margin-right: 10px;
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
    <h1>PET SAVERS</h1>
    <p>Silahkan Login</p>

    @if ($errors->any())
    <div style="color: red;">
      <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
      </ul>
    </div>
  @endif

    <form method="POST" action="/login">
      @csrf
      <input type="email" name="email" placeholder="email@domain.com" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit">Masuk</button>
    </form>

    <div class="divider">or</div>

    <div class="google-btn">
      <img src="/img/logo_google.svg" alt="Google logo" />
      <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" alt="Google logo" /> -->
      Continue with Google
    </div>

    <div class="terms">
      Belum punya akun? <a class="underline" href="{{ route('register') }}">Daftar di sini</a><br><br>
      Dengan mengklik lanjutkan, Anda setuju dengan <a href="#">Ketentuan Layanan</a> dan <a href="#">Kebijakan Privasi</a>
    </div>
  </div>
</body>

</html>