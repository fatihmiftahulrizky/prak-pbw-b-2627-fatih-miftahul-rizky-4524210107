<?php
require_once 'Koneksi.php';

mysqli_select_db($koneksi, 'akademik');

$sqlInsert = "INSERT IGNORE INTO mahasiswa (nim, nama, email, no_hp, prodi, angkatan, ipk) VALUES
('2026001','Andi Pratama','andi@kampus.ac.id','081234567890','Teknik Informatika',2026,3.75),
('2026002','Siti Rahma','siti@kampus.ac.id','081234567891','Sistem Informasi',2026,3.82),
('2025003','Budi Santoso','budi@kampus.ac.id','081234567892','Teknik Informatika',2025,3.20)";

if (mysqli_query($koneksi, $sqlInsert)) {
    echo "[INSERT] Data mahasiswa berhasil dimasukkan ke tabel.\n";
} else {
    echo "[ERROR] Gagal memasukkan data: " . mysqli_error($koneksi) . "\n";
}

// MODIFIKASI 1: Menambahkan no_hp pada data yang ditampilkan
// MODIFIKASI 2: Menambahkan kondisi prodi Teknik Informatika
$sqlSelect = "SELECT nim, nama, no_hp, prodi, ipk
              FROM mahasiswa
              WHERE ipk >= 3.50
              AND prodi = 'Teknik Informatika'
              ORDER BY ipk DESC, nama ASC
              LIMIT 10";

$result = mysqli_query($koneksi, $sqlSelect);

echo "--- HASIL QUERY SELECT ---\n";

// Cek apakah ada data yang memenuhi kriteria (IPK >= 3.50)
if (mysqli_num_rows($result) > 0) {
    // Karena menggunakan LIMIT 10, loop dapat menampilkan maksimal 10 data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "NIM  : " . $row['nim'] . "\n";
        echo "Nama : " . $row['nama'] . "\n";
        echo "No HP: " . $row['no_hp'] . "\n";
        echo "Prodi: " . $row['prodi'] . "\n";
        echo "IPK  : " . $row['ipk'] . "\n";
    }
} else {
    echo "Tidak ada data mahasiswa dengan kriteria tersebut.\n";
}

mysqli_close($koneksi);
?>