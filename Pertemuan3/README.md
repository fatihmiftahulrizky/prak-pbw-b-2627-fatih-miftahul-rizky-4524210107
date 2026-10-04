<h2>Tugas3</h2>
<br><b>Hasil Run code (Koneksi.php) :</b>
<img width="1917" height="1076" alt="image" src="https://github.com/user-attachments/assets/810eaa3d-ddc4-40fe-aba6-658d8e0d1e9e" />

<br><b>Hasil Run code (Contoh1.php) :<b/>
<img width="1913" height="1072" alt="image" src="https://github.com/user-attachments/assets/2e403320-9c49-4267-b03b-cf7f8bb003b2" />
<img width="1912" height="1078" alt="image" src="https://github.com/user-attachments/assets/6b4d097f-d4de-4b50-980a-68c73befff2e" />

<br><b>Hasil Run code (contoh2.php) Sebelum di modifikasi :</b>
<img width="1912" height="1067" alt="image" src="https://github.com/user-attachments/assets/b8c2d3f8-1f0d-4fea-a34c-0011cefc5672" />
<img width="1916" height="1072" alt="image" src="https://github.com/user-attachments/assets/62f14255-d58e-42ca-8d0a-e76d00772a1e" />
<img width="1911" height="1072" alt="image" src="https://github.com/user-attachments/assets/a6df1cf4-1b95-4431-8642-02dfb94b62ac" />

<br><b>Hasil Run code (Tugas3.php) Sesudah di modifikasi :</b>
<img width="1912" height="1072" alt="image" src="https://github.com/user-attachments/assets/87a79c1d-8413-4748-8a24-b0796718093b" />
<img width="1912" height="1066" alt="image" src="https://github.com/user-attachments/assets/8321c844-05e1-410d-ac35-1d4ae58136df" />
<img width="1907" height="1065" alt="image" src="https://github.com/user-attachments/assets/5d504f00-886b-4042-9591-64ba9bb66aa6" />
Modifikasi Program :
1. Menambahkan no_hp pada tabel mahasiswa
Field no_hp ditambahkan untuk menyimpan nomor HP mahasiswa sehingga data mahasiswa menjadi lebih lengkap.
2. Menambahkan kategori pada tabel mata_kuliah
Field kategori ditambahkan untuk menentukan kategori mata kuliah, misalnya mata kuliah wajib atau pilihan.

<br><b>5 Kode Bagian Penting</b>
1. require_once 'Koneksi.php';
Digunakan untuk menghubungkan program dengan koneksi database MySQL.
2. CREATE DATABASE IF NOT EXISTS akademik
Digunakan untuk membuat database akademik jika database tersebut belum tersedia.
3. $sqlCreateTables
Berisi kumpulan query untuk membuat tabel mahasiswa, dosen, mata_kuliah, krs, dan mk_krs.
4.foreach ($sqlCreateTables as $query)
Digunakan untuk menjalankan semua query pembuatan tabel satu per satu.
5.FOREIGN KEY
Digunakan untuk menghubungkan tabel yang saling berhubungan, seperti mata_kuliah dengan dosen dan krs dengan mahasiswa.

<br><b>Eror yang pernah muncul</b>
<br>Error:
SQL syntax error pada bagian TINYNT.
<br>Penyebab:
Terjadi kesalahan penulisan tipe data. Seharusnya menggunakan TINYINT, bukan TINYNT.
<br>Langkah Perbaikan:
Mengubah TINYNT menjadi TINYINT, kemudian menjalankan kembali program sehingga query dapat diproses dengan benar.
