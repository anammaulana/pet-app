<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Saver</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;600;700&display=swap" rel="stylesheet">
    <style>
        /* CSS untuk Halaman Utama (dari desain Anda) */
        body {
            margin: 0;
            background-color: #f4f3f3; /* Warna background utama */
            overflow-x: hidden; /* Mencegah scroll horizontal */
        }

        .toko,
        .toko * {
            box-sizing: border-box;
        }

        .toko {
            background: #f4f3f3;
            height: 832px;
            position: relative;
        }

        .background-1 {
            width: 100%;
            height: 464px;
            position: absolute;
            left: 0px;
            top: 148px;
            object-fit: cover;
        }

        .rectangle-97 {
            background: #ec8600;
            border-radius: 11px;
            width: 132px;
            height: 31px;
            position: absolute;
            right: 180px;
            top: 42px;
            z-index: 1;
        }

        .instagram {
            color: #ffffff;
            text-align: center;
            font-family: "Inter", sans-serif;
            font-size: 15px;
            line-height: 140%;
            font-weight: 700;
            position: absolute;
            right: 209px;
            top: 47px;
            z-index: 1;
        }

        .pet-saver {
            color: #ec8600;
            text-align: center;
            font-family: "Inter", sans-serif;
            font-size: 24px;
            line-height: 140%;
            font-weight: 700;
            position: absolute;
            left: 33px;
            top: 47px;
            width: 134px;
            height: 35px;
            z-index: 1;
        }

        .sign-in {
            color: #0056b3;
            text-align: center;
            font-family: "Inter", sans-serif;
            font-size: 12px;
            line-height: 140%;
            font-weight: 700;
            text-decoration: underline;
            position: absolute;
            right: 40px;
            top: 51px;
            z-index: 1;
        }


    </style>
</head>

<body>
    <div class="toko">
        <img class="background-1" src="img/background.png" alt="Pet background">
        <div class="rectangle-97"></div>
        <div class="instagram">Instagram</div>
        <div class="pet-saver">Pet Saver</div>
        <div class="sign-in">Sign in</div>
        <div class="temukan-sahabatmu-di-pet-saver">Temukan Sahabatmu di Pet Saver!</div>
        <div class="cari-hewan-peliharaan-dari-shelter-terdekat-dari-lokasi-kamu">Cari hewan peliharaan dari shelter terdekat dari lokasi kamu</div>
        <div class="rectangle-98">
            <div class="search-input-wrapper">
                <input type="text" placeholder="Cari shelter terdekat">
            </div>
        </div>

    </div>


</body>

</html>