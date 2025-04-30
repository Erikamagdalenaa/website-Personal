<html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
	
    <header>
   <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Logo_of_North_Sumatra_University.svg/800px-Logo_of_North_Sumatra_University.svg.png" alt="Logo Website" width="50px" height="500px" />
   <h1>Perpustakaan Erika Magdalena br Simarmata</h1>
<nav>
<ul>
	 <li><a href="index.html">Beranda</a></li>
         <li><a href="biodata.html">Tentang</a></li>
	 <li><a href="Hubungi Saya.html">Hubungi Saya</a></li>
</ul>
</nav>
</header>
<head>
<title>Hompage Perpustakaan Erika Magdalena br Simarmata</title>
</head>
<body>
<p>Perpustakaan Erika Magdalena br Simarmata ini berisi dokumentasi dari berbagai tugas-tugas
selama semester ini, perpustakaan ini dibuat sebagai arsip yang mungkin dikemudian hari
dapat digunakan kembali.</p>
<div style="position: relative; width: 100%; height: 100vh;">
    <img src="Perpustakaan.jpg" alt="Gambar di Tengah" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
</div>
</body>

 <script>
	alert("Selamat Datang di Perpustakaan Erika Magdalena br Simarmata!");
</script>

</html>
<h3>Kerja sama perpustakaan lain</h3>
<a href="http://perpus.unsika.ac.id/">Perpustakaan Universitas Singaperbangsa Karawang</a>

<!-- event -->
	<div class="carousel-container">
		<h3 style="text-align: center; padding:20px 0; color: DB1415; margin-bottom: 20px; font-size: 24px;">
			<i class="fas fa-bullhorn me-2"></i> Event Perpustakaan Universitas Singaperbangsa Karawang
		</h3>
  		<div class="carousel-track" id="eventCarousel">
    			<!-- Cards akan di-generate lewat JS -->
  		</div>
	</div>
 
<style>
header {
   background-color: #74A12E;
   color: white;
   padding: 20px 10px;
   text-align: center;
}

header img {
   height: 50px;
}

header nav ul li {
   display: inline;
   margin: 0 10px;
}

header nav ul li a {
   color: white;
   text-decoration: none;
}
</style>
<footer>
  <p>&copy; 2025 All rights reserved</p>
</footer>
 
<style>
footer {
   background-color: #74A12E;
   color: white;
   padding: 20px 10px;
   text-align: center;
}
</style>

<script>
	const eventData = [
  		{
    			"title": "Perpustakaan Keliling",
    			"date": "3 Februari 2025",
    			"desc": "Perpustakaan Universitas Singaperbangsa Karawang, kembali mengadakan perpustakaan keliling mengusung tema:Buku Dibuka, Dibaca Jadi Ilmu."
  		},
  		{
    			"title": "Pengadaan Buku",
    			"date": "17 februari 2025",
    			"desc": "Untuk meningkatkan kualitas perpustakaan, menambah referensi pengguna dan menambah koleksi, maka Perpustakaan Universitas Singaperbangsa Karawang melakukan kegiatan pengadaan buku."
  		}
		{
    			"title": "Webinar Pelatihan Turnitin",
    			"date": "21 februari 2025",
    			"desc": "Perrpustakaan Universitas Singaperbangsa Karawang menggelar kegiatan Pelatihan Turnitin untuk para mahasiswa."
  		}
    const container = document.getElementById("eventCarousel");

	// Inject cards
	eventData.forEach((event) => {
  		const card = document.createElement("div");
  		card.className = "event-card";
  		card.innerHTML = `
    			<div class="event-title">📅 ${event.title}</div>
    			<div class="event-date">${event.date}</div>
    			<div class="event-desc">${event.desc}</div>
      			<a href="#" style="color:#007bff; font-weight:bold;">Baca Selengkapnya</a>
  `		;
  		container.appendChild(card);
	});

	// Carousel auto slide
	let currentIndex = 0;
	setInterval(() => {
  		currentIndex = (currentIndex + 1) % eventData.length;
  		container.style.transform = translateX(-${currentIndex * 100}%);
	}, 4000); // 5 detik
	</script>
