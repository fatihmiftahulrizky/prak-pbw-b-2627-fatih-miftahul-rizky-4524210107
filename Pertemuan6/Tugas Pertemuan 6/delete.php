<?php
include "Koneksi.php";

// MODIFIKASI 1: Mengecek NIM dari URL
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    $query = mysqli_query(
        $koneksi,
        "DELETE FROM mahasiswa WHERE nim='$nim'"
    );

    if ($query) {
        echo "<script>
            alert('Data mahasiswa berhasil dihapus');
            window.location.href = 'index.php';
        </script>";
    } else {
        // MODIFIKASI 2: Menampilkan pesan error database
        echo "<script>
            alert('Data gagal dihapus: " . mysqli_error($koneksi) . "');
            window.history.back();
        </script>";
    }
} else {
    echo "<script>
        alert('NIM tidak ditemukan');
        window.location.href = 'index.php';
    </script>";
}
?>