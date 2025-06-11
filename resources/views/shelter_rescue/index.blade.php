<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Shelter - Pet Saver</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6; /* Warna background abu-abu muda */
            color: #1f2937;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background: #ffffff;
            padding: 16px 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
        }

        .brand {
            font-weight: 700;
            color: #ec8600;
            font-size: 20px;
        }

        .nav-right {
            display: flex;
            gap: 16px;
            font-size: 14px;
            align-items: center;
        }

        .nav-right a {
            color: #0056b3;
            text-decoration: none;
        }

        .nav-right .instagram-btn {
            background-color: #ec8600;
            color: #ffffff;
            border: none;
            border-radius: 11px;
            padding: 8px 15px;
            font-weight: 700;
            cursor: pointer;
            font-size: 15px;
            line-height: 140%;
        }

        .main-content {
            flex: 1; /* Agar mengambil sisa ruang vertikal */
            padding: 20px 32px;
            display: flex;
            flex-direction: column;
        }

        .breadcrumb-bar {
            background-color: #ec8600; /* Warna oranye */
            height: 50px;
            padding: 10px 32px;
            color: white;
            font-size: 20px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
        }

        .breadcrumb-bar a {
            color: white;
            text-decoration: none;
        }

        .breadcrumb-bar span {
            margin: 0 5px;
        }

        .search-section {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
        }

        .search-title {
            font-size: 22px;
            font-weight: 700;
            color: #333;
            margin-bottom: 25px;
            text-align: center;
        }

        .search-inputs {
            display: flex;
            flex-wrap: wrap; /* Agar bisa wrap di layar kecil */
            justify-content: center;
            align-items: center;
            gap: 20px; /* Jarak antar input */
        }

        .input-group {
            display: flex;
            flex-direction: column;
            flex: 1; /* Ambil ruang yang tersedia */
            min-width: 280px; /* Lebar minimum untuk setiap input */
        }

        .input-group label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
        }

        .input-group input[type="text"] {
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f9f9f9;
        }

        .or-text {
            font-weight: 600;
            color: #555;
            align-self: flex-end; /* Posisikan "atau" di tengah jika input berbeda tinggi */
            margin-bottom: 10px; /* Sesuaikan margin untuk rata dengan input */
        }

        .results-count {
            font-size: 14px;
            color: #666;
            margin-top: 15px;
            text-align: center;
        }

        .shelter-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr)); /* Lebar kartu lebih besar dari kucing */
            gap: 30px;
            justify-content: center; /* Memusatkan grid */
        }

        .shelter-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            display: flex; /* Menggunakan flexbox untuk tata letak internal kartu */
            align-items: center; /* Pusatkan item secara vertikal di dalam kartu */
            padding: 20px;
            transition: transform 0.2s ease-in-out;
            cursor: pointer;
            min-height: 150px; /* Tinggi minimum kartu */
        }

        .shelter-card:hover {
            transform: translateY(-5px);
        }

        .shelter-logo {
            width: 100px; /* Ukuran logo */
            height: 100px;
            object-fit: contain;
            margin-right: 20px;
            border-radius: 5px; /* Opsional: sedikit radius pada logo */
        }

        .shelter-info {
            flex: 1; /* Mengambil sisa ruang */
            display: flex;
            flex-direction: column;
            text-align: left;
        }

        .shelter-info h3 {
            margin: 0 0 10px 0;
            font-size: 20px;
            font-weight: 700;
            color: #333;
        }

        .shelter-info p {
            margin: 0 0 5px 0;
            font-size: 14px;
            color: #555;
            display: flex; /* Untuk ikon dan teks */
            align-items: center;
        }

        .shelter-info p img {
            width: 16px; /* Ukuran ikon di samping teks info */
            height: 16px;
            margin-right: 8px;
            vertical-align: middle;
        }

        .lihat-hewan-btn {
            background-color: #ec8600;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 600;
            cursor: pointer;
            font-size: 14px;
            margin-top: 15px; /* Jarak dari teks di atasnya */
            align-self: flex-start; /* Agar tombol rata kiri */
            text-decoration: none; /* Untuk tag <a> */
            display: inline-block; /* Agar padding bekerja baik */
        }

        .lihat-hewan-btn:hover {
            background-color: #d17500;
        }


        /* Responsif */
        @media (max-width: 900px) {
            .shelter-card-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
        }

        @media (max-width: 768px) {
            header, .breadcrumb-bar, .main-content {
                padding: 15px;
            }

            .search-inputs {
                flex-direction: column;
                align-items: stretch; /* Agar input mengisi lebar penuh */
            }

            .input-group {
                min-width: unset; /* Hapus min-width agar menyesuaikan */
                width: 100%;
            }

            .or-text {
                align-self: center; /* Pusatkan "atau" di tengah jika kolom */
                margin-bottom: 15px;
            }

            .shelter-card-grid {
                grid-template-columns: 1fr; /* Satu kolom penuh di layar kecil */
                gap: 20px;
            }

            .shelter-card {
                flex-direction: column; /* Ubah layout kartu jadi kolom di mobile */
                text-align: center;
                padding: 15px;
            }

            .shelter-logo {
                margin: 0 0 15px 0; /* Sesuaikan margin logo */
            }

            .shelter-info {
                align-items: center; /* Pusatkan teks di tengah kartu mobile */
            }

            .lihat-hewan-btn {
                align-self: center; /* Pusatkan tombol di tengah kartu mobile */
            }
        }

        @media (max-width: 480px) {
            header, .breadcrumb-bar, .main-content {
                padding: 10px;
            }

            .search-section {
                padding: 20px;
            }

            .search-title {
                font-size: 20px;
            }

            .input-group input[type="text"] {
                font-size: 14px;
                padding: 10px;
            }
        }

    </style>
</head>
<body>
     <div class="breadcrumb-bar">
            <a href="{{route('home')}}">Home </a> 
            <span>>  Shelter atau Rescue</span>
        </div>
    <div class="main-content">
      

        <section class="search-section">
            <h2 class="search-title">Cari Animal Shelter atau Rescue</h2>
           <form method="GET" action="{{ route('shelters.index') }}" class="search-inputs">
                <div class="input-group">
                    <label for="nama-shelter">Nama Shelter atau Rescue</label>
                    <input type="text" name="nama" id="nama-shelter" value="{{ request('nama') }}" placeholder="Nama Shelter atau Rescue">
                </div>
           </form>
            <p class="results-count">{{ $shelters->count() }}  hasil</p>
        </section>

        <section class="shelter-results">
            <div class="shelter-card-grid">
         @forelse ($shelters as $shelter)
            <div class="shelter-card">
                <img src="{{ $shelter->gambar }}" alt="{{ $shelter->nama_shelter }} Logo" class="shelter-logo">
                <div class="shelter-info">
                    <h3>{{ $shelter->nama_shelter }}</h3>
                <p>
                    <img src="{{ asset('images/shelteroren.png') }}" alt="Location Icon">
                    <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($shelter->alamat) }}" target="_blank" style="color: #555; text-decoration: none;">
                        {{ $shelter->alamat }}
                    </a>
                </p>
                    <p><img src="{{ asset('images/phone.png') }}" alt="Phone Icon"> {{ $shelter->no_telpon }}</p>
                    <a href="{{ route('shelters.show', $shelter->id) }}" class="lihat-hewan-btn">Lihat Hewan</a>
                </div>
            </div>
        @empty
            <p class="results-count">Tidak ada shelter ditemukan.</p>
        @endforelse

                </div>
        </section>
    </div>
</body>
</html>