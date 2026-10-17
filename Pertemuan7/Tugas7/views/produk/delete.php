
<?php
require_once __DIR__ . '/../../koneksi.php';
require_once __DIR__ . '/../../controllers/ProdukController.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    if (isset($_GET['konfirmasi']) && $_GET['konfirmasi'] == 'ya') {
        $controller = new ProdukController();
        $controller->delete($koneksi, $id);
    } else {
        echo "<h3>Yakin ingin menghapus produk ini?</h3>";
        echo "<a href='delete.php?id=$id&konfirmasi=ya'>Ya, Hapus</a> | ";
        echo "<a href='index.php'>Batal</a>";
    }
} else {
    echo "ID produk tidak ditemukan!";
}
?>
