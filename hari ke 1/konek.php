<?php
// Informasi koneksi database
$host = 'localhost';      // Host database (biasanya 'localhost' jika database berada di server yang sama dengan aplikasi)
$username = 'root';   // Nama pengguna database
$password = '';   // Kata sandi pengguna database
$dbname = 'belajar_db';// Nama database yang akan digunakan

// Membuat koneksi
$koneksi = mysqli_connect($host, $username, $password, $dbname);

// Memeriksa apakah koneksi berhasil atau tidak
if (!$koneksi) {
    die("tolong masukan database: " . mysqli_connect_error());
}
else {
  echo("berhasil");
}
?>
