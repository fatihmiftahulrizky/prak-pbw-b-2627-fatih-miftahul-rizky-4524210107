
<?php
require_once __DIR__ . '/../../koneksi.php';
require_once __DIR__ . '/../../controllers/ProdukController.php';

$controller = new ProdukController();
$controller->create($koneksi);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
</head>
<body>
    <h2>Tambah Produk</h2>

    <form method="POST">
        <label>Nama Produk:</label><br>
        <input type="text" name="nama_produk" required>
        <br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" min="0" required>
        <br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" min="0" required>
        <br><br>

        <button type="submit">Simpan</button>
        <a href="index.php">Kembali</a>
    </form>
</body>
</html>
