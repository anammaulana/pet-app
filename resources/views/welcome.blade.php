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

        .temukan-sahabatmu-di-pet-saver {
            color: #ffffff;
            text-align: center;
            font-family: "Inter", sans-serif;
            font-size: 48px;
            font-weight: 700;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 264px;
            width: 90%;
            max-width: 800px;
            z-index: 1;
        }

        .cari-hewan-peliharaan-dari-shelter-terdekat-dari-lokasi-kamu {
            color: #dadada;
            text-align: center;
            font-family: "Inter", sans-serif;
            font-size: 20px;
            font-weight: 600;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 346px;
            width: 90%;
            max-width: 700px;
            z-index: 1;
        }

        .rectangle-98 {
            background: #ffffff;
            border-radius: 20px;
            width: 551px;
            height: 47px;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 427px;
            z-index: 1;
        }

        .search-input-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .search-input-wrapper input {
            width: calc(100% - 60px);
            height: 100%;
            border: none;
            background: transparent;
            font-family: "Inter", sans-serif;
            font-size: 13px;
            font-weight: 100;
            padding-left: 30px;
            padding-right: 30px;
            outline: none;
        }

        .icons-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            position: absolute;
            width: 100%;
            top: 558px;
            z-index: 1;
        }

        .icon-box {
            background: #ffffff;
            border-radius: 26px;
            width: 141px;
            height: 108px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-top: 10px;
            cursor: pointer;
            transition: transform 0.2s ease-in-out;
        }

        .icon-box:hover {
            transform: translateY(-5px);
        }

        .icon-box img {
            width: 62px;
            height: 62px;
            object-fit: cover;
            margin-bottom: 5px;
        }

        .icon-box p {
            color: #828282;
            text-align: center;
            font-family: "Inter", sans-serif;
            font-size: 15px;
            font-weight: 600;
            margin: 0;
        }

        /* Panel Pilihan Jenis Hewan Lainnya */
        .hewan-lainnya-box {
            display: none;
            position: absolute;
            top: 520px;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            width: 90%;
            max-width: 600px;
            z-index: 2;
        }

        .jenis-hewan-title {
            font-family: 'Inter', sans-serif;
            font-size: 18px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .hewan-lainnya-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 10px;
        }

        .hewan-box {
            width: 100px;
            height: 100px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .hewan-box:hover {
            transform: translateY(-5px);
        }

        .hewan-box img {
            width: 40px;
            height: 40px;
            object-fit: contain;
            margin-bottom: 8px;
        }

        .hewan-box p {
            font-size: 14px;
            color: #ec8600;
            font-weight: 600;
            margin: 0;
        }

        /* Tombol Kembali dengan Ikon Panah */
        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: transparent;
            border: none;
            font-size: 24px;
            color: #ec8600;
            cursor: pointer;
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 600px) {
            .hewan-lainnya-container {
                flex-direction: column;
                align-items: center;
            }

            .hewan-box {
                width: 80%;
            }
        }

        /* CSS untuk bagian rekomendasi hewan siap adopsi */
        .rekomendasi-home {
            background-color: #e0e0e0;
            padding: 40px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 0;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .rekomendasi-home.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .section-title {
            color: #ec8600;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 30px;
            text-align: center;
        }

        .section-title::after {
            content: '>';
            margin-left: 10px;
            font-size: 20px;
            font-weight: 700;
        }

        .adopsi-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
            width: 90%;
            max-width: 1000px;
            margin-bottom: 60px;
        }

        .adopsi-card {
            background-color: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .adopsi-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .adopsi-info {
            padding: 15px;
            text-align: left;
        }

        .adopsi-info h3 {
            margin: 0 0 5px 0;
            font-size: 18px;
            font-weight: 700;
            color: #333;
        }

        .adopsi-info p {
            margin: 0;
            font-size: 14px;
            color: #666;
        }
        
        .berencana-adopsi {
            margin-top: 40px;
            width: 90%;
            max-width: 1000px;
            text-align: center;
        }

        .berencana-adopsi h2 {
            color: #ec8600;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .berencana-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            justify-content: center; /* Tambahkan ini untuk memusatkan grid secara horizontal */
        }

        .berencana-card {
            background-color: #ffe0b2;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            /* Memusatkan item secara horizontal */
            align-items: center;
            justify-content: flex-start;
            cursor: pointer;
            width: 231px;
            height: 189px;
            /* Memusatkan teks di dalam kartu */
            text-align: center;
        }

        .berencana-card:hover {
            transform: translateY(-5px);
        }

        .berencana-card .icon {
            width: 50px;
            height: 50px;
            object-fit: contain;
            margin-bottom: 15px;
        }

        .berencana-card h3 {
            margin: 0 0 10px 0;
            font-size: 18px;
            font-weight: 600;
            color: #ec8600;
        }

        .berencana-card p {
            font-size: 14px;
            line-height: 1.5;
            color: #555;
        }

    </style>
</head>

<body>
    <div class="toko">
       <img class="background-1" src="img/background.png" alt="Pet background">
<div class="rectangle-97"></div>
<div class="instagram">Instagram</div>
<div class="pet-saver">Pet Saver</div>

<div class="sign-in">
    @guest
        <a href="{{ route('register') }}">Sign In</a>
    @else
        @if(Auth::user()->role === 'admin')
            <!-- Tombol Dashboard khusus admin -->
            <a href="{{ route('dashboardAdmin') }}" style="margin-right: 10px;">Dashboard</a>
        @endif

        <!-- Tombol Logout -->
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" style="background: none; border: none; color: inherit; cursor: pointer;">
                Logout
            </button>
        </form>
    @endguest
</div>

        <div class="temukan-sahabatmu-di-pet-saver">Temukan Sahabatmu di Pet Saver!</div>
        <div class="cari-hewan-peliharaan-dari-shelter-terdekat-dari-lokasi-kamu">Cari hewan peliharaan dari shelter terdekat dari lokasi kamu</div>
        <div class="rectangle-98">
            <div class="search-input-wrapper">
                <input type="text" placeholder="Cari shelter terdekat">
            </div>
        </div>

        <div class="icons-container">
            <a  href="{{ route('kucing.index') }}"style="text-decoration: none; color: inherit;">
                <div class="icon-box">
                   <img src="/img/iconkucing.png" alt="Kucing icon"> <p>Kucing</p>
                </div>
            </a>
            <a href="{{ route('anjing')}}" style="text-decoration: none; color: inherit;">
                <div class="icon-box">
                    <img src="img/iconanjing.png" alt="Anjing icon"> <p>Anjing</p>
                </div>
            </a>
            <div class="icon-box" id="hewanLainnyaBtn">
                <img src="img/paw.png" alt="Hewan lainnya icon"> <p>Hewan Lainnya</p>
            </div>
            <a href="{{route('shelter_rescue')}}" style="text-decoration: none; color: inherit;">
                <div class="icon-box">
                    <img src="img/rescue.png" alt="Shelter & Rescue icon"> <p>Shelter & Rescue</p>
                </div>
            </a>
        </div>
    </div>

    <div class="hewan-lainnya-box" id="hewanLainnyaPanel">
        <button class="back-button" id="backBtn">←</button>
        <div class="jenis-hewan-title">Jenis hewan peliharaan apa yang kamu cari?</div>
        <div class="hewan-lainnya-container">
            <a href="{{route('hamster')}}"style="text-decoration: none; color: inherit;">
                <div class="icon-box">
                    <img src="img/hamster.png" alt="hamster icon"> <p>Hamster</p>
                </div>
            </a>
           <a href="{{route('marmut')}}" style="text-decoration: none; color: inherit;">
                <div class="icon-box">
                  <img src="{{ asset('img/marmut.png') }}" alt="marmut icon"> <p>Marmut</p>
                </div>
            </a>
            <a href="{{route('kelinci')}}"style="text-decoration: none; color: inherit;">
                <div class="icon-box">
                    <img src="img/kelinci.png" alt="Kelinci icon"> <p>Kelinci</p>
                </div>
            </a>
        </div>
    </div>

    <div class="rekomendasi-home" id="rekomendasiHome">
        <h2 class="section-title">Hewan Siap Adopsi Terdekat yang Tersedia</h2>
        <div class="adopsi-grid">
            <div class="adopsi-card">
                <img src="img/kucing.jpg" alt="Anjing Jack">
                <div class="adopsi-info">
                    <h3>Jack</h3>
                    <p>Mini Pom</p>
                </div>
            </div>
            <div class="adopsi-card">
                <img src="img/kucing.jpg" alt="Anjing Buddy">
                <div class="adopsi-info">
                    <h3>Buddy</h3>
                    <p>Golden Retriever</p>
                </div>
            </div>
            <div class="adopsi-card">
                <img src="img/kucing.jpg" alt="Kucing Luna">
                <div class="adopsi-info">
                    <h3>Luna</h3>
                    <p>Persia</p>
                </div>
            </div>
            <div class="adopsi-card">
                <img src="img/kucing.jpg" alt="Anjing Max">
                <div class="adopsi-info">
                    <h3>Max</h3>
                    <p>Poodle</p>
                </div>
            </div>
        </div>


        <div class="berencana-adopsi">
            <h2>Berencana Adopsi?</h2>
            <div class="berencana-grid">
                <a href="{{route('tips-merawat-anak-kucing')}}" style="text-decoration: none; color: inherit;"> 
                    <div class="berencana-card">
                        <img src="img/iconkucing.png" alt="Tips Merawat Anak Kucing" class="icon">
                        <h3>Tips Merawat Anak Kucing</h3>
                        <p>Memberikan perawatan terbaik untuk anak kucing dan memastikan mereka tumbuh sehat.</p>
                    </div>
                </a>
                <a  href="{{route('tips-memilih-hewan-peliharaan')}}" style="text-decoration: none; color: inherit;"> 
                    <div class="berencana-card">
                        <img src="img/paw.png" alt="Tips Memilih Hewan Peliharaan" class="icon">
                        <h3>Tips Memilih Hewan Peliharaan</h3>
                        <p>Pilih hewan peliharaan yang tepat untuk keluarga dan menciptakan hubungan yang bahagia dengan hewan kesayangan.</p>
                    </div>
                </a>
                <a href="{{route('tips-memilih-shelter')}}" style="text-decoration: none; color: inherit;"> 
                    <div class="berencana-card">
                        <img src="img/rescue.png" alt="Memilih Hewan di Shelter" class="icon">
                        <h3>Memilih Hewan di Shelter</h3>
                        <p>Pilih hewan yang tepat dan memberikan rumah yang bahagia bagi hewan peliharaan baru Anda.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const rekomendasiHome = document.getElementById('rekomendasiHome');

            // Intersection Observer untuk mendeteksi saat elemen masuk viewport
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        rekomendasiHome.classList.add('is-visible');
                        observer.unobserve(rekomendasiHome); // Hentikan observasi setelah terlihat
                    }
                });
            }, {
                threshold: 0.2 // Mengaktifkan saat 20% dari elemen terlihat
            });

            observer.observe(rekomendasiHome);
        });

        // JavaScript untuk toggle panel pilihan hewan lainnya
        document.getElementById('hewanLainnyaBtn').addEventListener('click', function() {
            var panel = document.getElementById('hewanLainnyaPanel');
            panel.style.display = (panel.style.display === 'none' || panel.style.display === '') ? 'block' : 'none';
        });

        // JavaScript untuk tombol kembali (panah)
        document.getElementById('backBtn').addEventListener('click', function() {
            var panel = document.getElementById('hewanLainnyaPanel');
            panel.style.display = 'none';
        });
    </script>
</body>

</html>