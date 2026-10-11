<?php
include "Koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
        echo "<script>
            alert('Data mahasiswa berhasil disimpan');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal disimpan: " . mysqli_error($koneksi) . "');
            window.history.back();
        </script>";
    }
}
?>