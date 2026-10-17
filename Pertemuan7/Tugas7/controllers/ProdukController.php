
<?php
require_once __DIR__ . '/../models/ProdukModel.php';

class ProdukController
{
    private $model;

    public function __construct()
    {
        $this->model = new ProdukModel();
    }

    // Menampilkan daftar produk
    public function index($koneksi)
    {
        return $this->model->getAllProduk($koneksi);
    }

    // Menambahkan produk
    public function create($koneksi)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama_produk = $_POST['nama_produk'];
            $harga = $_POST['harga'];
            $stok = $_POST['stok'];

            if ($this->model->tambahProduk(
                $koneksi,
                $nama_produk,
                $harga,
                $stok
            )) {
                echo "<script>
                    alert('Data produk berhasil ditambahkan!');
                    window.location.href = '../../index.php';
                </script>";
                exit;
            } else {
                echo "<script>
                    alert('Data produk gagal ditambahkan!');
                    window.history.back();
                </script>";
                exit;
            }
        }
    }

    // Mengambil data produk untuk diedit
    public function edit($koneksi, $id)
    {
        return $this->model->getProdukById($koneksi, $id);
    }

    // Menyimpan perubahan produk
    public function update($koneksi)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];
            $nama_produk = $_POST['nama_produk'];
            $harga = $_POST['harga'];
            $stok = $_POST['stok'];

            if ($this->model->updateProduk(
                $koneksi,
                $id,
                $nama_produk,
                $harga,
                $stok
            )) {
                echo "<script>
                    alert('Data produk berhasil diperbarui!');
                    window.location.href = '../../index.php';
                </script>";
                exit;
            } else {
                echo "<script>
                    alert('Data produk gagal diperbarui!');
                    window.history.back();
                </script>";
                exit;
            }
        }
    }

    // Menghapus produk
    public function delete($koneksi, $id)
    {
        if ($this->model->hapusProduk($koneksi, $id)) {
            echo "<script>
                alert('Data produk berhasil dihapus!');
                window.location.href = '../../index.php';
            </script>";
            exit;
        } else {
            echo "<script>
                alert('Data produk gagal dihapus!');
                window.history.back();
            </script>";
            exit;
        }
    }
}
?>
