<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpustakaan Erika Magdalena br Simarmata</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
      color: black;
    }

    header {
      background: linear-gradient(to right, #ACE1AF, #C1E1C1);
      color: black;
      padding: 30px 20px 20px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    header img {
      height: 70px;
      margin-bottom: 10px;
    }

    h1 {
      font-family: 'Georgia', serif;
      font-size: 2.5rem;
      font-weight: bold;
    }

    nav.navbar {
      background: linear-gradient(90deg, #6FCF97 0%, #ACE1AF 100%);
      font-weight: bold;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .navbar-brand {
      font-size: 1.2rem;
      font-weight: bold;
    }

    .nav-link {
      color: white !important;
      margin: 0 10px;
      transition: color 0.3s ease-in-out;
    }

    .nav-link:hover {
      color: #333 !important;
      text-decoration: underline;
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
      border-radius: 20px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.3);
      transition: transform 0.3s ease-in-out;
    }

    .hero-img img:hover {
      transform: scale(1.02);
    }

    .buku-container {
      display: flex;
      flex-wrap: wrap;
      gap: 25px;
      justify-content: center;
      margin-top: 30px;
    }

    .buku {
      background-color: white;
      border-radius: 12px;
      padding: 20px;
      width: 320px;
      box-shadow: 0 6px 12px rgba(0,0,0,0.15);
      transition: all 0.3s;
    }

    .buku:hover {
      transform: translateY(-5px) scale(1.03);
    }

    .buku img {
      width: 100%;
      border-radius: 10px;
    }

    footer {
      background-color: #ACE1AF;
      color: black;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
      font-weight: bold;
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
  </header>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand text-white" href="#"><i class="fas fa-book-reader"></i> Menu Navigasi</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html"><i class="fas fa-home"></i> Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="biodata.html"><i class="fas fa-user"></i> Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Hubungi Saya.html"><i class="fas fa-envelope"></i> Hubungi Saya</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tabel.php"><i class="fas fa-table"></i> Tabel Perkalian</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container mt-4">
    <p class="text-center fs-5">
      Perpustakaan ini berisikan dokumentasi dari berbagai tugas selama semester ini. Juga berfungsi sebagai arsip yang dapat digunakan kembali di masa depan.
    </p>

    <div class="hero-img">
      <img src="Perpustakaan.jpg" alt="Gambar Perpustakaan">
    </div>

    <hr class="my-5">

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
