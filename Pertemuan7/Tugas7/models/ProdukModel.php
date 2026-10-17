
<?php
require_once __DIR__ . '/../koneksi.php';

class ProdukModel
{
    // Menampilkan semua data produk
    public function getAllProduk($koneksi)
    {
        $query = mysqli_query(
            $koneksi,
            "SELECT * FROM produk ORDER BY id DESC"
        );

        return $query;
    }

    // Menambahkan produk
    public function tambahProduk($koneksi, $nama_produk, $harga, $stok)
    {
        $query = mysqli_query(
            $koneksi,
            "INSERT INTO produk (nama_produk, harga, stok)
            VALUES ('$nama_produk', '$harga', '$stok')"
        );

        return $query;
    }

    // Mengambil produk berdasarkan ID
    public function getProdukById($koneksi, $id)
    {
        $query = mysqli_query(
            $koneksi,
            "SELECT * FROM produk WHERE id = '$id'"
        );

        return mysqli_fetch_assoc($query);
    }

    // Mengubah data produk
    public function updateProduk($koneksi, $id, $nama_produk, $harga, $stok)
    {
        $query = mysqli_query(
            $koneksi,
            "UPDATE produk
            SET nama_produk = '$nama_produk',
                harga = '$harga',
                stok = '$stok'
            WHERE id = '$id'"
        );
    }

    // Menghapus produk
    public function hapusProduk($koneksi, $id)
    {
    $query = mysqli_query(
        $koneksi,
        "DELETE FROM produk WHERE id = '$id'"
    );

        return $query;
    }
    
}
?>