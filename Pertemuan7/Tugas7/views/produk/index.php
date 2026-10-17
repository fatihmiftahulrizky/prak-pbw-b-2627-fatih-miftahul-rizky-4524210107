
<?php
require_once __DIR__ . '/../../koneksi.php';
require_once __DIR__ . '/../../controllers/ProdukController.php';

$controller = new ProdukController();
$produk = $controller->index($koneksi);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Produk</title>
</head>
<body>
    <h2>Data Produk</h2>

    <a href="create.php">Tambah Produk</a>

    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        <?php if (mysqli_num_rows($produk) > 0) { ?>
            <?php while ($data = mysqli_fetch_assoc($produk)) { ?>
                <tr>
                    <td><?= $data['id']; ?></td>
                    <td><?= htmlspecialchars($data['nama_produk']); ?></td>
                    <td>Rp <?= number_format($data['harga'], 0, ',', '.'); ?></td>
                    <td><?= $data['stok']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $data['id']; ?>">Edit</a> |
                        <a href="delete.php?id=<?= $data['id']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="5" align="center">Belum ada data produk.</td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
