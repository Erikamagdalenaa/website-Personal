<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpustakaan Erika Magdalena br Simarmata</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
      color: black;
    }

    header {
      background-color: #ACE1AF;
      color: black;
      padding: 20px;
      text-align: center;
    }

    header img {
      height: 60px;
      margin-bottom: 10px;
    }

    .navbar {
      background: linear-gradient(90deg, #ACE1AF, #9CE2D4);
    }

    .navbar-nav .nav-link {
      font-weight: bold;
      font-size: 1.1rem;
      color: #212529 !important;
      transition: all 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
      background-color: rgba(255, 255, 255, 0.4);
      border-radius: 10px;
      padding: 8px 12px;
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
      background-color: #ACE1AF;
      color: black;
      text-align: center;
      padding: 15px;
      margin-top: 40px;
    }

    a {
      text-decoration: none;
    }
  </style>
  <style>
    #cookieBanner {
      display: none;
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: #fff3cd;
      color: #856404;
      padding: 15px;
      text-align: center;
      border-top: 1px solid #ffeeba;
      z-index: 1000;
    }

    #cookieBanner button {
      margin-left: 15px;
      padding: 6px 12px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    #cookieBanner button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <header>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Logo_of_North_Sumatra_University.svg/800px-Logo_of_North_Sumatra_University.svg.png" alt="Logo Website" />
    <h1>Perpustakaan Erika Magdalena br Simarmata</h1>
  </header>

  <nav class="navbar navbar-expand-lg shadow-sm sticky-top">
    <div class="container justify-content-center">
      <ul class="navbar-nav gap-4">
        <li class="nav-item">
          <a class="nav-link" href="index.html"><i class="bi bi-house-door-fill"></i> Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="biodata.html"><i class="bi bi-person-fill"></i> Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Hubungi Saya.html"><i class="bi bi-envelope-fill"></i> Hubungi Saya</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tabel.html"><i class="bi bi-table"></i> Tabel Perkalian</a>
        </li>
      </ul>
    </div>
  </nav>

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
<div id="cookieBanner">
    Situs ini menggunakan cookies untuk meningkatkan pengalaman pengguna.
    <button onclick="acceptCookies()">Saya Setuju</button>
  </div>

  <footer>
    <p>&copy; 2025 Perpustakaan Erika Magdalena br Simarmata</p>
  </footer>
   <script>
    alert("Selamat Datang di Perpustakaan Erika Magdalena br Simarmata!");

    function setCookie(name, value, days) {
      const expires = new Date(Date.now() + days * 864e5).toUTCString();
      document.cookie = name + '=' + encodeURIComponent(value) + '; expires=' + expires + '; path=/';
    }

    function getCookie(name) {
      return document.cookie.split('; ').reduce((r, v) => {
        const parts = v.split('=');
        return parts[0] === name ? decodeURIComponent(parts[1]) : r
      }, '');
    }

    function acceptCookies() {
      setCookie('cookieConsent', 'accepted', 30);
      document.getElementById('cookieBanner').style.display = 'none';
    }

    window.onload = function () {
      if (!getCookie('cookieConsent')) {
        document.getElementById('cookieBanner').style.display = 'block';
      }
    };
  </script>
</body>
</html>
  <footer>
    <p>&copy; 2025 Perpustakaan Erika Magdalena br Simarmata</p>
  </footer>

  <script>
    alert("Selamat Datang di Perpustakaan Erika Magdalena br Simarmata!");
  </script>

</body>
</html>
