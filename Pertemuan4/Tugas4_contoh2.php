<?php

require_once 'Koneksi.php';

// Memilih database
mysqli_select_db($koneksi, 'akademik');

// ==========================================
// 1. UPDATE: Mengubah data IPK
// ==========================================
echo "=== 1. PROSES UPDATE DATA ===\n";

// MODIFIKASI 1: Menambahkan kondisi IPK harus di bawah 3.50
$sqlUpdate = "UPDATE mahasiswa SET ipk = 3.50 WHERE nim = '2025003' AND ipk < 3.50";

if (mysqli_query($koneksi, $sqlUpdate)) {
    echo "Data IPK mahasiswa dengan NIM 2025003 berhasil diubah menjadi 3.50.\n\n";
} else {
    echo "Gagal UPDATE: " . mysqli_error($koneksi) . "\n\n";
}

// 2. SELECT & GROUP BY: Rekap jumlah mahasiswa per prodi

// MODIFIKASI 2: Menambahkan kondisi hanya untuk Teknik Informatika
$sqlRekap = "SELECT prodi, COUNT(*) AS jumlah_mahasiswa
             FROM mahasiswa
             WHERE prodi = 'Teknik Informatika'
             GROUP BY prodi
             ORDER BY jumlah_mahasiswa DESC";

$resultRekap = mysqli_query($koneksi, $sqlRekap);

if (mysqli_num_rows($resultRekap) > 0) {
    while ($row = mysqli_fetch_assoc($resultRekap)) {
        echo "Prodi: " . $row['prodi'] . "\n";
        echo "Jumlah: " . $row['jumlah_mahasiswa'] . "\n";
    }
} else {
    echo "Tidak ada data rekap prodi.\n";
}

// 3. SELECT: Verifikasi sebelum penghapusan
$sqlVerifikasi = "SELECT * FROM mahasiswa WHERE nim = '2025003'";

$resultVerifikasi = mysqli_query($koneksi, $sqlVerifikasi);

if (mysqli_num_rows($resultVerifikasi) > 0) {
    $row = mysqli_fetch_assoc($resultVerifikasi);

    echo "Data ditemukan:\n";
    echo "NIM  : " . $row['nim'] . "\n";
    echo "Nama : " . $row['nama'] . "\n";
    echo "Prodi: " . $row['prodi'] . "\n";
    echo "IPK  : " . $row['ipk'] . "\n";
} else {
    echo "Data mahasiswa tidak ditemukan.\n";
}

// 4. DELETE: Menghapus data
$sqlDelete = "DELETE FROM mahasiswa WHERE nim = '2025003'";

if (mysqli_query($koneksi, $sqlDelete)) {
    echo "Data mahasiswa dengan NIM 2025003 berhasil dihapus dari tabel.\n";
} else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi) . "\n";
}

mysqli_close($koneksi);
?>