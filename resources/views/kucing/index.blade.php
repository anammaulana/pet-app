<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temukan Kucing - Pet Saver</title>
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

        .main-navbar {
            background-color: #ec8600; /* Warna oranye seperti di desain */
            padding: 15px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .main-navbar .cat-icon {
            width: 30px; /* Ukuran ikon kucing */
            height: 30px;
            margin-right: 10px;
            vertical-align: middle;
        }

        .main-navbar .title {
            font-size: 20px;
            font-weight: 700;
            display: flex;
            align-items: center;
        }

        .main-navbar .right-icon {
            width: 40px; /* Ukuran ikon di kanan atas */
            height: 40px;
            object-fit: contain;
        }

        .content-area {
            display: flex;
            flex: 1; /* Agar mengambil sisa ruang vertikal */
            padding: 20px 32px;
            gap: 30px; /* Jarak antara sidebar dan konten utama */
        }

        .sidebar {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.08);
            width: 250px; /* Lebar sidebar */
            min-width: 200px;
            height: fit-content; /* Agar tingginya sesuai dengan konten */
        }

        .filter-group {
            margin-bottom: 20px;
        }

        .filter-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
        }

        .filter-group select {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            background-color: #f9f9f9;
            cursor: pointer;
            -webkit-appearance: none; /* Remove default arrow on select */
            -moz-appearance: none;
            appearance: none;
            background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M208.5%2088.5L128%20169.1L47.5%2088.5L33.9%20102.1L128%20196.2L222.1%20102.1z%22%2F%3E%3C%2Fsvg%3E'); /* Custom arrow */
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 16px;
        }

        .results-area {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .sort-options {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
            position: relative; /* Untuk dropdown absolute */
        }

        .sort-options label {
            font-size: 14px;
            margin-right: 10px;
            font-weight: 600;
            color: #333;
        }

        .sort-options select {
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            background-color: #f9f9f9;
            cursor: pointer;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M208.5%2088.5L128%20169.1L47.5%2088.5L33.9%20102.1L128%20196.2L222.1%20102.1z%22%2F%3E%3C%2Fsvg%3E');
            background-repeat: no-repeat;
            background-position: right 8px center;
            background-size: 16px;
            width: 150px; /* Lebar dropdown Urutkan dari */
        }

      /* ... CSS yang sudah ada di atas ... */

       /* ... CSS yang sudah ada di atas ... */

       /* ... CSS yang sudah ada di atas ... */

        /* ... Bagian atas CSS Anda ... */

        /* Modifikasi pada .pet-card-grid */
        .pet-card-grid {
            display: grid;
            /* Ini akan mencoba membuat kolom dengan lebar minimal 211px.
            Jika lebar kartu diatur ke 211px secara eksplisit, maka ini akan sangat cocok. */
            grid-template-columns: repeat(auto-fit, minmax(211px, 1fr));
            gap: 25px; /* Jarak antara kartu */
            flex: 1;
            justify-content: center; /* Memusatkan grid jika ada ruang kosong di sisi */
            align-items: start; /* Memastikan item di baris yang sama memiliki tinggi yang sama di bagian atas */
        }

        /* KOTAK (pet-card) tetap pada ukuran yang Anda inginkan */
        .pet-card {
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden; /* Penting untuk menyembunyikan bagian gambar yang meluap jika object-fit: cover */
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.2s ease-in-out;
            cursor: pointer;
            /* Lebar kotak (kartu) yang Anda inginkan */
            width: 211px;
            height: 320px; /* Contoh tinggi total kartu. Sesuaikan jika perlu. */
            display: flex; /* Gunakan flexbox untuk menata gambar dan info secara vertikal */
            flex-direction: column;
        }

        .pet-card:hover {
            transform: translateY(-5px);
        }

        .pet-card img {
            width: 100%; /* Gambar akan mengisi 100% lebar dari kotak induknya (211px) */
            height: 200px; /* Gambar akan memiliki tinggi tetap 247px */
            /* Ini adalah properti KUNCI agar gambar menyesuaikan bentuk kotak: */
            object-fit: cover; 
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            flex-shrink: 0; /* Mencegah gambar mengecil dari tinggi 247px jika konten lain meluap */
        }

        /* Konten info (nama, keturunan) di bawah gambar */
        .pet-info {
            padding: 15px; /* Padding di sekitar teks */
            flex-grow: 1; /* Biarkan pet-info mengambil semua sisa ruang vertikal yang tersedia */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Pusatkan teks secara vertikal dalam area ini */
            align-items: center; /* Pusatkan teks secara horizontal */

        }

        /* ... CSS Responsif di bawahnya ... */

        @media (max-width: 768px) {
            .pet-card-grid {
                grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); /* Atur min-width yang lebih kecil */
                gap: 20px;
            }
            .pet-card {
                width: auto; /* Biarkan lebar menyesuaikan grid pada layar kecil */
                max-width: 211px; /* Batasi agar tidak terlalu lebar */
                height: 280px; /* Sesuaikan tinggi total kartu untuk mobile */
            }
            .pet-card img {
                height: 200px; /* Sesuaikan tinggi gambar di mobile */
            }
        }

        @media (max-width: 480px) {
            .pet-card-grid {
                grid-template-columns: 1fr; /* Satu kolom penuh */
            }
            .pet-card {
                width: 90%; /* Contoh: 90% dari lebar parent */
                margin: 0 auto; /* Pusatkan kartu di tengah */
                max-width: 211px; /* Pertahankan max-width */
                height: 280px; /* Tetap konsisten untuk mobile */
            }
            .pet-card img {
                height: 200px; /* Sesuaikan tinggi gambar di mobile */
            }
        }


        /* ... CSS responsif di bawahnya ... */

        @media (max-width: 768px) {
            .pet-card-grid {
                grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
                gap: 20px;
            }
            .pet-card {
                width: auto; /* Biarkan lebar menyesuaikan grid pada layar kecil */
                max-width: 211px; /* Batasi agar tidak terlalu lebar */
                height: 280px; /* Mungkin perlu tinggi yang sedikit lebih kecil di mobile */
            }
            .pet-card img {
                height: 200px; /* Sesuaikan tinggi gambar di mobile */
            }
        }

        @media (max-width: 480px) {
            .pet-card-grid {
                grid-template-columns: 1fr; /* Satu kolom penuh */
            }
            .pet-card {
                width: 90%; /* Contoh: 90% dari lebar parent */
                margin: 0 auto; /* Pusatkan kartu di tengah */
                max-width: 211px; /* Pertahankan max-width */
                height: 280px; /* Tetap konsisten untuk mobile */
            }
            .pet-card img {
                height: 200px; /* Sesuaikan tinggi gambar di mobile */
            }
        }

        /* ... CSS responsif di bawahnya ... */

        /* Pastikan responsif juga disesuaikan */
        @media (max-width: 768px) {
            .pet-card-grid {
                /* Untuk layar kecil, minmax mungkin perlu lebih kecil dari 211px */
                grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); /* Misalnya 180px */
                gap: 20px;
            }
            .pet-card {
                width: auto; /* Biarkan lebar menyesuaikan grid pada layar kecil */
                max-width: 211px; /* Opsional: batasi agar tidak terlalu lebar di layar kecil */
            }
        }

        @media (max-width: 480px) {
            .pet-card-grid {
                grid-template-columns: 1fr; /* Satu kolom penuh */
            }
            .pet-card {
                width: 90%; /* Contoh: 90% dari lebar parent */
                margin: 0 auto; /* Pusatkan kartu di tengah */
                max-width: 211px; /* Pertahankan max-width */
            }
        }
        /* ... CSS responsif di bawahnya ... */

        /* Pastikan responsif juga disesuaikan */
        @media (max-width: 768px) {
            .pet-card-grid {
                /* Untuk layar kecil, mungkin hanya 2 kolom atau bahkan 1 kolom */
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 20px;
            }
        }

        @media (max-width: 480px) {
            .pet-card-grid {
                grid-template-columns: 1fr; /* Satu kolom penuh */
            }
        }
                

        /* Dropdown khusus untuk Urutkan dari, meniru desain */
        .custom-dropdown {
            position: absolute;
            top: 100%; /* Di bawah select */
            right: 0;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            width: 150px; /* Lebar sesuai select */
            z-index: 10;
            overflow: hidden;
            display: none; /* Sembunyikan secara default */
        }

        .custom-dropdown.active {
            display: block; /* Tampilkan ketika aktif */
        }

        .custom-dropdown div {
            padding: 10px 12px;
            cursor: pointer;
            font-size: 14px;
            color: #333;
        }

        .custom-dropdown div:hover {
            background-color: #f0f0f0;
        }

        .custom-dropdown div.selected {
            background-color: #e0e0e0;
            font-weight: 600;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .content-area {
                flex-direction: column;
                padding: 15px;
            }

            .sidebar {
                width: 100%;
                max-width: none;
            }

            .sort-options {
                justify-content: space-between;
                flex-wrap: wrap;
            }

            .sort-options select {
                width: 100%;
                margin-top: 10px;
            }

            .pet-card-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            }
        }

        @media (max-width: 480px) {
            header, .main-navbar, .content-area {
                padding: 10px 15px;
            }

            .brand {
                font-size: 18px;
            }

            .main-navbar .title {
                font-size: 18px;
            }

            .nav-right {
                gap: 10px;
            }

            .nav-right .instagram-btn {
                padding: 6px 10px;
                font-size: 13px;
            }

            .filter-group select, .sort-options select {
                font-size: 13px;
                padding: 8px 12px;
            }
        }

        .adopsi-grid {
            padding: 0 24px;
        }

        .adopsi-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 kolom sejajar */
            gap: 20px;
        }

        .adopsi-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            height: 100%; /* Biar seragam */
        }

        .adopsi-card img {
            width: 100%;
            height: 300px; /* Ukuran gambar seragam */
            object-fit: fill;
        }

        .adopsi-info {
            padding: 15px;
            text-align: left;
            flex-grow: 1; /* Biar info isi penuh ke bawah */
        }

        .adopsi-info h3 {
            margin: 0 0 5px 0;
            font-size: 16px;
            font-weight: 700;
            color: #333;
        }

        .adopsi-info p {
            margin: 0;
            font-size: 14px;
            color: #666;
        }


    </style>
</head>
<body>
    <header>
        <div class="brand">Pet Saver</div>
        <div class="nav-right">
            <button class="instagram-btn">Instagram</button>
            <!-- <a href="#">Sign In</a> -->
        </div>
    </header>

    <div class="main-navbar">
        <div class="title">
            <img src="img/whitecat.png" alt="Cat Icon" class="cat-icon">
            Find Cat
        </div>
        <img src="img/whitecat2.png" alt="Chat Icon" class="right-icon"> </div>

    <div class="content-area">
        <aside class="sidebar">
  <form method="GET" action="{{ route('kucing.index') }}">
    <div class="filter-group">
        <label for="keturunan">Keturunan</label>
        <select name="keturunan" id="keturunan" onchange="this.form.submit()">
            <option value="">Pilih</option>
            <option value="British Short Hair" {{ request('keturunan') == 'British Short Hair' ? 'selected' : '' }}>British Short Hair</option>
            <option value="Persia" {{ request('keturunan') == 'Persia' ? 'selected' : '' }}>Persia</option>
            <option value="Maine coon" {{ request('keturunan') == 'Maine coon' ? 'selected' : '' }}>Maine Coon</option>
        </select>
    </div>

    <div class="filter-group">
        <label for="usia">Usia</label>
        <select name="usia" id="usia" onchange="this.form.submit()">
            <option value="">Pilih</option>
            <option value="anak_kucing" {{ request('usia') == 'anak_kucing' ? 'selected' : '' }}>Anak Kucing</option>
            <option value="dewasa" {{ request('usia') == 'dewasa' ? 'selected' : '' }}>Dewasa</option>
            <option value="senior" {{ request('usia') == 'senior' ? 'selected' : '' }}>Senior</option>
        </select>
    </div>

    <div class="filter-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin" onchange="this.form.submit()">
            <option value="">Pilih</option>
            <option value="jantan" {{ request('jenis_kelamin') == 'jantan' ? 'selected' : '' }}>Jantan</option>
            <option value="betina" {{ request('jenis_kelamin') == 'betina' ? 'selected' : '' }}>Betina</option>
        </select>
    </div>
</form>

        </aside>

        <section class="results-area">
             <div class="adopsi-grid">
        <div class="adopsi-container">
            @foreach($hewan as $item)
                <div class="adopsi-card">
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_hewan }}">
                    <div class="adopsi-info">
                        <h3>{{ $item->nama_hewan }}</h3>
                        <p>{{ $item->keturunan }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sortBySelect = document.getElementById('sort_by');
            const customDropdown = document.getElementById('sortDropdown');
            const customDropdownOptions = customDropdown.querySelectorAll('div');

            // Toggle custom dropdown visibility
            sortBySelect.addEventListener('click', (event) => {
                customDropdown.classList.toggle('active');
                event.stopPropagation(); // Mencegah event click menyebar ke body
            });

            // Handle selection from custom dropdown
            customDropdownOptions.forEach(option => {
                option.addEventListener('click', () => {
                    const value = option.dataset.value;
                    const text = option.textContent;

                    // Update the actual select element
                    sortBySelect.value = value;

                    // Update selected class in custom dropdown for styling
                    customDropdownOptions.forEach(opt => opt.classList.remove('selected'));
                    option.classList.add('selected');

                    // Close the custom dropdown
                    customDropdown.classList.remove('active');

                    // Anda bisa menambahkan logika di sini untuk memfilter/mengurutkan hasil
                    console.log('Selected sort option:', value, text);
                    // Contoh: panggil fungsi untuk me-render ulang kartu kucing
                    // renderPetCards(value);
                });
            });

            // Close custom dropdown when clicking outside
            document.addEventListener('click', (event) => {
                if (!sortBySelect.contains(event.target) && !customDropdown.contains(event.target)) {
                    customDropdown.classList.remove('active');
                }
            });

            // Optional: Mengatur nilai awal custom dropdown agar sesuai dengan select
            const initialSelectedValue = sortBySelect.value;
            customDropdownOptions.forEach(option => {
                if (option.dataset.value === initialSelectedValue) {
                    option.classList.add('selected');
                } else {
                    option.classList.remove('selected');
                }
            });
        });
    </script>
</body>
</html>