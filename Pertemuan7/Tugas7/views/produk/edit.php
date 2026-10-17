
<?php
require_once __DIR__ . '/../../koneksi.php';
require_once __DIR__ . '/../../controllers/ProdukController.php';

$controller = new ProdukController();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $produk = $controller->edit($koneksi, $id);
} else {
    die("ID produk tidak ditemukan!");
}

if (!$produk) {
    die("Produk tidak ditemukan!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller->update($koneksi);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk</h2>

    <form method="POST">
        <input type="hidden" name="id" value="<?= $produk['id']; ?>">

        <label>Nama Produk:</label><br>
        <input
            type="text"
            name="nama_produk"
            value="<?= htmlspecialchars($produk['nama_produk']); ?>"
            required
        >
        <br><br>

        <label>Harga:</label><br>
        <input
            type="number"
            name="harga"
            min="0"
            value="<?= $produk['harga']; ?>"
            required
        >
        <br><br>

        <label>Stok:</label><br>
        <input
            type="number"
            name="stok"
            min="0"
            value="<?= $produk['stok']; ?>"
            required
        >
        <br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <br>

    <a href="index.php">Kembali ke Daftar Produk</a>
</body>
</html>