<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = htmlspecialchars($_POST["nama-lengkap"]);
  $email = htmlspecialchars($_POST["email"]);
  $komentar = htmlspecialchars($_POST["komentar"]);

  // Tampilkan hasil di browser (bisa disimpan ke file atau database)
  echo "<h2>Data Diterima:</h2>";
  echo "<strong>Nama:</strong> $nama<br>";
  echo "<strong>Email:</strong> $email<br>";
  echo "<strong>Komentar:</strong> $komentar<br><br>";

  // Contoh: Kirim email balasan otomatis (opsional)
  $to = $email;
  $subject = "Terima kasih atas komentar Anda!";
  $message = "Halo $nama,\n\nTerima kasih atas komentar Anda:\n\"$komentar\"\n\nKami akan segera menanggapinya.\n\nSalam,\nPerpustakaan Erika Magdalena br Simarmata";
  $headers = "From: no-reply@domainanda.com"; // Ganti domain Anda

  // Kirim email (jika server mendukung mail)
  mail($to, $subject, $message, $headers);
}
?>
