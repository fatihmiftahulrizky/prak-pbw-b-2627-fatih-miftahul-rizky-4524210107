<?php
include "Koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];
$ipk = $_POST['ipk'];
$no_hp = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$query = mysqli_query(
    $koneksi,
    "INSERT INTO mahasiswa
    (nim, nama, email, prodi, angkatan, ipk, no_hp, jenis_kelamin)
    VALUES
    ('$nim', '$nama', '$email', '$prodi', '$angkatan', '$ipk', '$no_hp', '$jenis_kelamin')"
);

if ($query) {
    echo "Data berhasil disimpan";
} else {
    echo "Data gagal disimpan: " . mysqli_error($koneksi);
}
?>