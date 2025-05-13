<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpustakaan Erika Magdalena br Simarmata</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
      color: Black;
    }

    header {
      background-color: #ACE1AF ;
      color: black;
      padding: 20px;
      text-align: center;
    }

    header img {
      height: 60px;
      margin-bottom: 10px;
    }

    nav ul {
      padding: 0;
      margin: 0;
      list-style: none;
    }

    nav ul li {
      display: inline;
      margin: 0 15px;
    }

    nav ul li a {
      color: black;
      text-decoration: none;
      font-weight: bold;
    }

    .hero-img {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 60vh;
    }

    .hero-img img {
      max-width: 100%;
      max-height: 100%;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    .buku-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      margin-top: 20px;
    }

    .buku {
      background-color: white;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 15px;
      width: 300px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      transition: transform 0.3s;
      color: black;
    }

    .buku:hover {
      transform: scale(1.03);
    }

    .buku img {
      width: 100%;
      border-radius: 8px;
    }

    footer {
      background-color: #ACE1AF ;
      color: black;
      text-align: center;
      padding: 15px;
      margin-top: 40px;
    }

    a {
      text-decoration: none;
    }
  </style>
</head>
<body>

  <header>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Logo_of_North_Sumatra_University.svg/800px-Logo_of_North_Sumatra_University.svg.png" alt="Logo Website" />
    <h1>Perpustakaan Erika Magdalena br Simarmata</h1>
    <nav>
      <ul>
        <li><a href="index.html">Beranda</a></li>
        <li><a href="biodata.html">Tentang</a></li>
        <li><a href="Hubungi Saya.html">Hubungi Saya</a></li>
        <li><a href="tabel.php">Tabel Perkalian</a></li>
      </ul>
    </nav>
  </header>

  <main class="container mt-4">
    <p class="text-center fs-5">
      Perpustakaan ini berisikan dokumentasi dari berbagai tugas selama semester ini. Juga berfungsi sebagai arsip yang dapat digunakan kembali di masa depan.
    </p>

    <div class="hero-img">
      <img src="Perpustakaan.jpg" alt="Gambar Perpustakaan">
    </div>

    <hr class="my-4">

    <section>
      <h3 class="text-center">Kerja Sama Perpustakaan Lain</h3>
      <p class="text-center">
        <a href="http://perpus.unsika.ac.id/" target="_blank">Perpustakaan Universitas Singaperbangsa Karawang</a>
      </p>
    </section>

    <section class="mt-5">
      <h3 class="text-center mb-4">Event Terkini</h3>
      <div class="buku-container">
        <div class="buku">
          <img src="https://i.imgur.com/UmgrZBX.jpeg" alt="Event 1">
          <p class="mt-2">Event: Pengolahan Bahan Perpustakaan Berbasis Panduan Pengatalogan Praktis</p>
          <a href="https://www.instagram.com/p/DIsqJ7Aya-T/?igsh=MTE1bXhkZDRsYjlkZg==" target="_blank">Lihat di Instagram</a>
        </div>
        <div class="buku">
          <img src="https://i.imgur.com/QQTyMak.jpeg" alt="Event 2">
          <p class="mt-2">Event: Webinar Literasi Informasi</p>
          <a href="https://www.instagram.com/p/DIlZiIChWx1/?igsh=YzVxazFvZmV2aDEw" target="_blank">Lihat di Instagram</a>
        </div>
        <div class="buku">
          <img src="https://i.imgur.com/zCFSSAb.jpeg" alt="Event 3">
          <p class="mt-2">Event: Transformasi Perpustakaan Tradisional ke Digital</p>
          <a href="https://www.instagram.com/p/C6LPZGxLXoN/?igsh=MTZobTEwMDV4Mjg5cQ==" target="_blank">Lihat di Instagram</a>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Perpustakaan Erika Magdalena br Simarmata</p>
  </footer>

  <script>
    alert("Selamat Datang di Perpustakaan Erika Magdalena br Simarmata!");
  </script>

</body>
</html>
