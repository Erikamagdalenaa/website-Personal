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
          <a class="nav-link" href="tabel.php"><i class="bi bi-table"></i> Tabel Perkalian</a>
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

<section class="featured">
    <h2 class="section-title">Koleksi Terbaru</h2>
    <div class="book-container">
        <div class="book-card">
            <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1489732961i/1362193.jpg" alt="Buku 1" class="book-img">
            <div class="book-info">
                <h3 class="book-title">Laskar Pelangi</h3>
                <p class="book-author">Oleh: Andrea Hirata</p>
                <p class="book-desc">menceritakan kisah anak-anak dari keluarga miskin di Pulau Belitung yang bersekolah di SD Muhammadiyah, sebuah sekolah yang hampir ditutup karena kekurangan murid</p>
                <a href="https://kalteng.kemenag.go.id/file/majalah/1613240554837.pdf" target=_blank" class="book-btn">Baca Detail</a>
            </div>
        </div>
        <div class="book-card">
            <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.gramedia.com%2Fproducts%2Fbintang-1&psig=AOvVaw2Arf4x9c62cUryJNW7IDhz&ust=1747465889349000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCLjRi_S3p40DFQAAAAAdAAAAABAM.jpg" alt="Buku 2" class="book-img">
            <div class="book-info">
                <h3 class="book-title">Bintangi</h3>
                <p class="book-author">Oleh: Tere Liye</p>
                <p class="book-desc">Menceritakan petualangan Raib, Seli, dan Ali yang berpetualang ke dunia paralel Klan Bintang untuk menyelamatkan pasak bumi dari ancaman Sekretaris Dewan Kota Klan Bintang.</p>
                <a href="https://digilib.rsrivaiabdullah.id/assets/file/bintang_tere_liye.pdf" target=_blank" class="book-btn">Baca Detail</a>
            </div>
        </div>
        <div class="book-card">
            <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.gramedia.com%2Fproducts%2Fmatahari-1&psig=AOvVaw16BPvFpzvhlDZBH6kQ75gW&ust=1747466170136000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCOCRgvW4p40DFQAAAAAdAAAAABAE.jpg" alt="Buku 3" class="book-img">
            <div class="book-info">
                <h3 class="book-title">Matahari</h3>
                <p class="book-author">Oleh: Tere Liye</p>
                <p class="book-desc">Menceritakan tentang petualangan Raib, Seli, dan Ali setelah kematian Ily, sahabat mereka, di Klan Matahari. Mereka bertiga kemudian menjelajahi Klan Bintang, menghadapi berbagai rintangan dan tantangan, termasuk serangan makhluk aneh dan penangkapan oleh pasukan Klan Bintang.</p>
                <a href="https://smksetiabudhirangkasbitung.sch.id/wp-content/uploads/2019/11/14.-Matahari.pdf" target=_blank" class="book-btn">Baca Detail</a>
            </div>
        </div>
    </div>
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
<!-- Popup Cookie -->
<div id="cookiePopup" style="
  position: fixed;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  background-color: #ACE1AF;
  border: 1px solid #b0c4de;
  padding: 20px;
  width: 90%;
  max-width: 600px;
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
  border-radius: 10px;
  display: none;
  z-index: 1000;
  font-family: 'Segoe UI', sans-serif;
">
  <p style="margin: 0 0 15px;">
    <strong>Kami Menggunakan Cookies 🍪</strong><br>
    Website ini Menggunakan Cookies agar situs ini berjalan dengan baik. 
    <br>
    <a href="#" style="color: #007bff; text-decoration: underline;">Kebijakan Cookies kami</a>
  </p>
  <div style="text-align: right;">
    <button onclick="setCookieConsent(true)" style="
      background-color: #ACE1AF;
      color: black;
      padding: 8px 15px;
      border: none;
      border-radius: 5px;
      margin-right: 10px;
      cursor: pointer;
    ">Terima Cookies</button>
    <button onclick="setCookieConsent(false)" style="
      background-color: #e0e0e0;
      color: #333;
      padding: 8px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    ">Kelola Cookies</button>
  </div>
</div>

<script>
  // Fungsi untuk set cookie
  function setCookie(nama, nilai, hari) {
    const d = new Date();
    d.setTime(d.getTime() + (hari * 24 * 60 * 60 * 1000));
    const expires = "expires=" + d.toUTCString();
    document.cookie = nama + "=" + nilai + ";" + expires + ";path=/";
  }

  function getCookie(nama) {
    const cname = nama + "=";
    const decodedCookie = decodeURIComponent(document.cookie);
    const ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
      let c = ca[i].trim();
      if (c.indexOf(cname) === 0) {
        return c.substring(cname.length, c.length);
      }
    }
    return "";
  }

  // Fungsi muncul/hilang popup
  function checkCookieConsent() {
    const consent = getCookie("cookie_consent");
    if (!consent) {
      document.getElementById("cookiePopup").style.display = "block";
    }
  }

  function setCookieConsent(terima) {
    setCookie("cookie_consent", terima ? "yes" : "no", 365);
    document.getElementById("cookiePopup").style.display = "none";
    alert(terima ? "Terima kasih telah menyetujui kuki kami!" : "Anda memilih untuk mengelola kuki.");
  }

  // Tampilkan popup saat halaman dimuat
  window.onload = checkCookieConsent;
</script>
</body>
</html>
