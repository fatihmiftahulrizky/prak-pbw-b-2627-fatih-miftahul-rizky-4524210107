<?php
$host = "localhost";
$user = "root";
$password = "";

// Menghubungkan ke MySQL
$koneksi = mysqli_connect($host, $user, $password);

if (!$koneksi) {
    die("Koneksi MySQL gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi MySQL berhasil!<br>";
}

// Membuat database
$queryDatabase = mysqli_query(
    $koneksi,
    "CREATE DATABASE IF NOT EXISTS penjualan_mvc"
);

if (!$queryDatabase) {
    die("Database gagal dibuat: " . mysqli_error($koneksi));
} else {
    echo "Database penjualan_mvc berhasil dibuat!<br>";
}

// Memilih database
$queryPilih = mysqli_select_db($koneksi, "penjualan_mvc");

if (!$queryPilih) {
    die("Database gagal dipilih: " . mysqli_error($koneksi));
} else {
    echo "Database berhasil dipilih!<br>";
}

// Membuat tabel produk
$queryTabel = mysqli_query(
    $koneksi,
    "CREATE TABLE IF NOT EXISTS produk (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama_produk VARCHAR(100) NOT NULL,
        harga DECIMAL(12,2) NOT NULL,
        stok INT NOT NULL
    )"
);

if (!$queryTabel) {
    die("Tabel produk gagal dibuat: " . mysqli_error($koneksi));
} else {
    echo "Tabel produk berhasil dibuat!";
}

// Menutup koneksi
mysqli_close($koneksi);
?>
