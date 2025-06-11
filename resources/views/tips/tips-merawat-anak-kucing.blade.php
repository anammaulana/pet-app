<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tips Merawat Anak Kucing</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background-color: #f3f4f6;
      color: #1f2937;
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
    }
    .nav-right a {
      color: #0056b3;
      text-decoration: none;
    }
    .nav-right button {
      background: none;
      border: none;
      color: #ec8600;
      font-weight: 600;
      cursor: pointer;
    }
    .breadcrumb {
      background: #ec8600;
      color: white;
      font-size: 13px;
      padding: 8px 32px;
    }
    .breadcrumb a {
      color: white;
      text-decoration: underline;
    }
    main {
      max-width: 800px;
      margin: 32px auto;
      background: white;
      padding: 32px;
      border-radius: 8px;
      box-shadow: 0 1px 6px rgba(0, 0, 0, 0.08);
    }
    h1 {
      font-size: 28px;
      margin-bottom: 16px;
    }
    img {
      max-width: 100%;
      border-radius: 8px;
      margin-bottom: 24px;
    }
    ul {
      padding-left: 20px;
    }
    li {
      margin-bottom: 8px;
    }
    h3 {
      font-weight: 600;
      margin-top: 24px;
      margin-bottom: 8px;
    }
  </style>
</head>
<body>
  <header>
    <div class="brand">Pet Saver</div>
    <div class="nav-right">
      <button>Instagram</button>
      <a href="#">Sign In</a>
    </div>
  </header>

  <div class="breadcrumb">
    <a href="{{route('home')}}">Home</a> &gt; Tips Merawat Anak Kucing
  </div>

  <main>
    <h1>Tips Merawat Anak Kucing</h1>
    <img src="https://cdn.pixabay.com/photo/2016/02/10/16/37/cat-1192026_1280.jpg" alt="Anak Kucing Imut" />
    <p>
      Merawat anak kucing melibatkan beberapa langkah penting untuk memastikan mereka tumbuh sehat dan bahagia. 
      Tips-tips ini mencakup pemberian makanan yang tepat, menjaga kebersihan, memberikan stimulasi dan perhatian, 
      serta memastikan kondisi lingkungan yang aman.
    </p>

    <h3>1. Makanan dan Minuman:</h3>
    <ul>
      <li><strong>Susu formula:</strong> Jika induk kucing tidak ada atau tidak bisa menyusui, berikan susu formula khusus anak kucing. Hindari susu sapi biasa karena mengandung laktosa yang sulit dicerna oleh anak kucing.</li>
      <li><strong>Pola makan:</strong> Anak kucing perlu makan secara teratur, sekitar 8–12 kali sehari untuk anak yang baru lahir, dan berkurang seiring bertambahnya usia.</li>
      <li><strong>Air bersih:</strong> Pastikan anak kucing selalu mendapatkan akses ke air bersih dan segar.</li>
    </ul>
   <h3 className="font-semibold mb-2">2. Kebersihan:</h3>
        <ul className="list-disc pl-6 mb-4">
            <li><strong>Membersihkan:</strong> Bersihkan anak kucing secara teratur untuk menjaga kebersihannya.</li>
            <li><strong>Kotak pasir:</strong> Ajarkan anak kucing untuk menggunakan kotak pasir sejak dini.</li>
            <li><strong>Mandikan:</strong> Mandikan anak kucing sesekali jika diperlukan, namun jangan terlalu sering.</li>
        </ul>

        <h3 className="font-semibold mb-2">3. Lingkungan:</h3>
        <ul className="list-disc pl-6 mb-4">
            <li><strong>Tempat yang hangat:</strong> Pastikan tempat tinggal anak kucing hangat dan nyaman.</li>
            <li><strong>Kandang:</strong> Sediakan kandang yang aman dan nyaman untuk anak kucing.</li>
        </ul>

        <h3 className="font-semibold mb-2">4. Stimulasi:</h3>
        <ul className="list-disc pl-6 mb-4">
            <li><strong>Bermain:</strong> Ajak anak kucing bermain untuk melatih otot dan kecerdasan mereka.</li>
            <li><strong>Interaksi:</strong> Berikan interaksi dengan manusia untuk meningkatkan kemampuan sosialnya.</li>
        </ul>

        <h3 className="font-semibold mb-2">5. Kesehatan:</h3>
        <ul className="list-disc pl-6 mb-4">
            <li><strong>Vaksinasi:</strong> Lakukan vaksinasi sesuai jadwal untuk melindungi anak kucing dari penyakit.</li>
            <li><strong>Pemeriksaan rutin:</strong> Lakukan pemeriksaan kesehatan secara berkala untuk memastikan anak kucing tetap sehat.</li>
        </ul>

        <h3 className="font-semibold mb-2">6. Kapan Anak Kucing Mulai Buang Air Besar:</h3>
        <p className="mb-4">
            Anak kucing biasanya mulai buang air besar sendiri pada usia 3-4 minggu.
        </p>

        <h3 className="font-semibold mb-2">7. Tips Tambahan:</h3>
        <ul className="list-disc pl-6 mb-4">
            <li>Jangan memisahkan anak kucing dari induknya jika memungkinkan.</li>
            <li>Jangan memberikan terlalu banyak perhatian pada anak kucing, biarkan mereka bermain dan berinteraksi secara alami.</li>
            <li>Latih anak kucing untuk menggunakan kotak pasir sedini mungkin.</li>
            <li>Berikan kasih sayang dan perhatian pada anak kucing agar mereka merasa aman dan nyaman.</li>
        </ul>
  </main>
</body>
</html>
