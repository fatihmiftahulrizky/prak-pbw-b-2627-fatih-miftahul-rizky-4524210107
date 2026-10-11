<?php
include "Koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];
$ipk = $_POST['ipk'];
$no_hp = $_POST['no_hp']; // MODIFIKASI 1: Mengambil data No HP
$jenis_kelamin = $_POST['jenis_kelamin']; // MODIFIKASI 1: Mengambil data Jenis Kelamin

$query = mysqli_query(
    $koneksi,
    "UPDATE mahasiswa
    SET nama='$nama',
    email='$email',
    prodi='$prodi',
    angkatan='$angkatan',
    ipk='$ipk',
    no_hp='$no_hp',
    jenis_kelamin='$jenis_kelamin'
    WHERE nim='$nim'"
);

if ($query) {
    echo "<script>
        alert('Data mahasiswa berhasil diubah');
        window.location.href = 'index.php';
    </script>";
} else {
    // MODIFIKASI 2: Menampilkan pesan error database
    echo "<script>
        alert('Data gagal diubah: " . mysqli_error($koneksi) . "');
        window.history.back();
    </script>";
}
?>