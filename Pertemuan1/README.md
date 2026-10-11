<h2>Tugas1</h2>
<br><b>Sebelum di modifikasi</b> (Contoh1.php) :
<img width="1917" height="1078" alt="image" src="https://github.com/user-attachments/assets/c23b3bd9-9cc0-4e6e-a980-4ef04a00ffba" />
<img width="1372" height="2838" alt="kalkulator before" src="https://github.com/user-attachments/assets/99fed4dd-4a58-4bce-b6de-60b1bbe15b96" />

<br><b>Sesudah di modifikasi</b> (Tugas1.php) :
<img width="1917" height="1078" alt="image" src="https://github.com/user-attachments/assets/0fcbf79b-5c5d-41a3-9ebc-7979a9d2ccd5" />
<img width="1372" height="3636" alt="kalkulator after" src="https://github.com/user-attachments/assets/1898e971-753f-4764-85fd-0c1692141a1c" />

<br> <b>5 bagian kode penting</b> :
1. $_SERVER['REQUEST_METHOD'] === 'POST'
Digunakan untuk mengecek apakah form dikirim menggunakan metode POST. Kode kalkulator akan diproses setelah tombol Hitung ditekan.

2. Pengambilan nilai input
$a = (float) ($_POST['a'] ?? 0);
$b = (float) ($_POST['b'] ?? 0);
$operator = $_POST['operator'] ?? '';
Digunakan untuk mengambil nilai angka pertama, angka kedua, dan operator dari form. Nilai angka diubah menjadi tipe float.

3. switch ($operator)
Digunakan untuk menentukan operasi matematika berdasarkan operator yang dipilih, seperti +, -, *, dan /.

4. Validasi pembagian dengan nol
if ($b == 0) {
    $pesan = 'Pembagian dengan nol tidak diperbolehkan.';
}
Digunakan untuk mencegah kesalahan ketika pengguna mencoba melakukan pembagian dengan angka 0.

5. Modifikasi operator % dan ^

   case '%':
    $hasil = $a % $b;
    break;

   case '^':
    $hasil = $a ** $b;
    break;
Bagian ini merupakan modifikasi dari program awal. Operator % digunakan untuk mencari sisa pembagian, sedangkan ^ digunakan untuk menghitung perpangkatan

<br><b>Error yang pernah muncul</b>
<br>Error: Pembagian dengan nol tidak diperbolehkan.

Penyebab:
Error ini muncul ketika pengguna memasukkan angka 0 sebagai angka kedua dan memilih operator pembagian /. Pembagian dengan angka 0 tidak diperbolehkan.

Langkah perbaikan:
Menambahkan kondisi if ($b == 0) sebelum melakukan pembagian. Jika nilai $b adalah 0, program menampilkan pesan kesalahan dan tidak melakukan proses pembagian.

<br><b>Sebelum di modifikasi</b> (Contoh2.php) :
<img width="1917" height="1078" alt="image" src="https://github.com/user-attachments/assets/74ea7043-78ae-4e39-8745-97a2645c2bed" />
<img width="1602" height="1774" alt="Biodata Before" src="https://github.com/user-attachments/assets/d6e00215-2cf1-4e65-8776-567ce81d46ba" />

<br><b>Sesudah di modifikasi</b> (Tugas1_Biodata.php) :
<img width="1917" height="1078" alt="image" src="https://github.com/user-attachments/assets/63a6ce6c-7ccb-494d-b996-9dffbe6b3b32" />
<img width="1264" height="2382" alt="Biodata After" src="https://github.com/user-attachments/assets/ae25efdc-79e7-47cc-b146-1e2a0cf19eaa" />

<br> <b>5 bagian kode penting</b> :
1. Function statusKelulusan()
function statusKelulusan(float $ipk): string
Fungsi ini digunakan untuk menentukan predikat mahasiswa berdasarkan nilai IPK, yaitu Sangat Memuaskan, Memuaskan, atau Perlu Peningkatan.

2. Array $mahasiswa

$mahasiswa = [
    'nim' => '4524210107',
    'nama' => 'Fatih Miftahul Rizky',
    'prodi' => 'Teknik Informatika',
    'semester' => 5,
    'ipk' => 3.72,
    'email' => 'fatih@gmail.com',
    'status' => 'Aktif'
    
];
Bagian ini menyimpan data biodata mahasiswa. Pada modifikasi, ditambahkan email dan status mahasiswa.

3. Perulangan foreach
foreach ($mahasiswa as $kunci => $nilai)
Digunakan untuk menampilkan semua data yang ada di dalam array $mahasiswa secara otomatis tanpa harus menuliskan satu per satu.

4. Kondisi status mahasiswa

if ($mahasiswa['status'] === 'Aktif') {
    $keterangan = 'Mahasiswa masih aktif kuliah.';
} else {
    $keterangan = 'Mahasiswa tidak aktif kuliah.';
}
Bagian ini merupakan modifikasi yang digunakan untuk mengecek status mahasiswa. Program memberikan keterangan berbeda berdasarkan statusnya.

5. <p>Predikat: <?= statusKelulusan($mahasiswa['ipk']) ?></p>
Digunakan untuk menampilkan hasil dari fungsi statusKelulusan() ke halaman HTML

<br><b>Error yang pernah muncul</b>
<br>Error: Undefined variable $keterangan

Penyebab:
Variabel $keterangan belum dibuat, tetapi sudah dipanggil pada bagian:
<p><?= $keterangan ?></p>

Langkah perbaikan:
Menambahkan variabel $keterangan melalui kondisi if-else sebelum ditampilkan.
if ($mahasiswa['status'] === 'Aktif') {
    $keterangan = 'Mahasiswa masih aktif kuliah.';
} else {
    $keterangan = 'Mahasiswa tidak aktif kuliah.';
}

<h2>Tugas2</h2>
<br><b>Sebelum di modifikasi</b> (Contoh3.php):
<img width="1917" height="1078" alt="image" src="https://github.com/user-attachments/assets/ad7690ec-99b5-4be8-9b07-d49be81bd80e" />
<img width="1880" height="1584" alt="Identitas before" src="https://github.com/user-attachments/assets/08414eef-baca-4947-990b-400b78e5f816" />

<br><b>Sesudah di modifikasi</b> (Tugas2.php) 
<img width="1915" height="1078" alt="image" src="https://github.com/user-attachments/assets/d25197c6-3f73-4956-b763-814f57b087a5" />
<img width="1818" height="2762" alt="Identitas after" src="https://github.com/user-attachments/assets/849ad0c0-6d1c-4f0a-bca6-f5469c09f61f" />

<br> <b>5 bagian kode penting</b> :
1. Interface Identitas

interface Identitas {
    public function ringkasan(): string;
}
Digunakan untuk menentukan bahwa class yang menggunakan interface ini harus memiliki fungsi ringkasan().

2. Class Mahasiswa

class Mahasiswa implements Identitas {
Digunakan untuk membuat class mahasiswa yang menyimpan data dan fungsi yang berhubungan dengan mahasiswa.

3. Constructor __construct()

public function __construct(
    string $nim,
    string $nama,
    string $prodi,
    float $ipk
)
Digunakan untuk mengisi data mahasiswa ketika object Mahasiswa dibuat.

4. Validasi IPK

if ($ipk < 0 || $ipk > 4) {
    throw new InvalidArgumentException(
        'IPK harus berada dalam rentang 0 hingga 4.'
    );
}
Digunakan untuk memastikan nilai IPK berada dalam rentang 0 sampai 4. Jika tidak, program akan memberikan pesan kesalahan.

5. Fungsi predikat()

public function predikat(): string {
    if ($this->ipk >= 3.50) {
        return 'Sangat Memuaskan';
    } elseif ($this->ipk >= 3.00) {
        return 'Memuaskan';
    } else {
        return 'Perlu Peningkatan';
    }
}
Ini merupakan modifikasi kedua. Fungsi ini menentukan predikat mahasiswa berdasarkan nilai IPK.

<br><b>Error yang pernah muncul</b>
<br>Too few arguments to function Mahasiswa::__construct()

Penyebab:
Constructor Mahasiswa membutuhkan 4 parameter, yaitu NIM, nama, prodi, dan IPK, tetapi sebelumnya object dibuat hanya dengan 3 atau jumlah parameter yang tidak sesuai.

Langkah perbaikan:
Menyesuaikan data saat membuat object dengan parameter yang dibutuhkan constructor

$mhs = new Mahasiswa(
    '2026001',
    'Andi Pratama',
    'Teknik Informatika',
    3.72
);

<br><b>Sebelum di modifikasi</b> (Contoh4.php):
<img width="1917" height="1078" alt="image" src="https://github.com/user-attachments/assets/884b086b-4870-4d4f-9384-b126c3ba525c" />
<img width="2142" height="1736" alt="hitung before" src="https://github.com/user-attachments/assets/c3ae48d3-b5c3-4685-ad0a-ed5700622206" />

<br><b>Sesudah di modifikasi</b> (Tugas2_Hitung.php) 
<img width="1917" height="1078" alt="image" src="https://github.com/user-attachments/assets/c105c97c-bd45-4e68-b647-fc830f81a062" />
<img width="1650" height="2610" alt="hitung after" src="https://github.com/user-attachments/assets/5050457f-41f4-4b5b-830e-15943e64ca08" />

<br> <b>5 bagian kode penting</b> :
1. Interface BisaDihitung

interface BisaDihitung {
    public function hargaAkhir(): float;
}
Digunakan untuk menentukan bahwa class yang menggunakan interface harus memiliki fungsi hargaAkhir().

2. Class Produk

class Produk implements BisaDihitung {
Digunakan untuk membuat objek produk yang memiliki data seperti nama, harga, dan stok.

3. Field stok

protected int $stok,
Ini merupakan modifikasi pertama. Field ini digunakan untuk menyimpan jumlah stok dari setiap produk.

4. Fungsi statusStok()

public function statusStok(): string {
    if ($this->stok > 0) {
        return 'Stok Tersedia';
    } else {
        return 'Stok Habis';
    }
}
Ini merupakan modifikasi kedua. Fungsi ini mengecek jumlah stok dan menentukan apakah produk masih tersedia atau sudah habis.

5. Perulangan foreach

foreach ($daftar as $produk) {
    echo "Produk: {$produk->getNama()}, ";
    echo "Harga Akhir: Rp " . number_format($produk->hargaAkhir(), 0, ',', '.') . ", ";
    echo "Status: {$produk->statusStok()}<br>";
}
Digunakan untuk mengambil setiap produk dari $daftar dan menampilkan nama, harga akhir, serta status stoknya.

<br><b>Error yang pernah muncul</b>
<br>Error: Too few arguments to function Produk::__construct()

Penyebab:
Setelah ditambahkan field stok, constructor Produk membutuhkan 3 parameter, yaitu nama, harga, dan stok. Jika saat membuat object hanya diberikan nama dan harga, maka akan muncul error karena nilai stok belum diberikan.

Langkah perbaikan:
Menambahkan nilai stok saat membuat object Produk dan ProdukDiskon.

new Produk('Keyboard', 250000, 10) dan new ProdukDiskon('Mouse', 1500000, 0, 10)
Dengan begitu, semua parameter yang dibutuhkan constructor sudah diberikan dan program dapat dijalankan dengan benar.
