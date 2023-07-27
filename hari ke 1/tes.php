<?php
// Sertakan file koneksi.php
include_once('konek.php');

// Sekarang Anda dapat menggunakan koneksi database di sini
// Contoh:
$query = "SELECT * FROM produk";
$result = mysqli_query($koneksi, $query);

// Periksa apakah query berhasil dieksekusi
if (!$result) {
    die("Error: " . mysqli_error($koneksi));
}

// Cek apakah ada data yang ditemukan
if (mysqli_num_rows($result) > 0) {
    // Loop melalui hasil query untuk mengakses data produk
    while ($row = mysqli_fetch_assoc($result)) {
        // Lakukan sesuatu dengan data produk, misalnya tampilkan di layar
        echo "ID Produk: " . $row['id'] . "<br>";
        echo "Nama Produk: " . $row['nama'] . "<br>";
        echo "Harga: " . $row['harga'] . "<br>";
        echo "Deskripsi: " . $row['deskripsi'] . "<br><br>";
    }
} else {
    echo "Tidak ada data produk.";
}

// ... kode lainnya ...
?>
