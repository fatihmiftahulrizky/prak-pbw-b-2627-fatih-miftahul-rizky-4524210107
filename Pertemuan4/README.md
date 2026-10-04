<h2>Tugas4</h2>
<br><b>Hasil Run Code (Koneksi.php)</b>
<img width="1911" height="1072" alt="image" src="https://github.com/user-attachments/assets/ec52f233-df80-4565-97c5-7b4fcdfa155b" />

<br><b>Hasil Run Code (contoh1.php) Sebelum di Modifikasi:</b>
<img width="1907" height="1076" alt="image" src="https://github.com/user-attachments/assets/815e03ab-3e4f-4f72-94b4-56b7d267928a" />
<img width="1913" height="1073" alt="image" src="https://github.com/user-attachments/assets/e0e4f045-0eb8-41ea-91cc-562c4985eca9" />
Kenapa ada no_hp, karena di tugas sebelumnya saya telah modifikasi menambahkan no_hp

<br><b>Hasil Run Code (contoh2.php) Sebelum di Modifikasi:</b>
<img width="1913" height="1072" alt="image" src="https://github.com/user-attachments/assets/f0bba080-73de-441f-a8f6-330861c34916" />
<img width="1038" height="281" alt="image" src="https://github.com/user-attachments/assets/fd5c049d-fcd2-43b0-89ff-c65f7540e7d4" />
<img width="1912" height="1067" alt="image" src="https://github.com/user-attachments/assets/27d6bdd8-9d0d-4414-8f25-2bb6248b820f" />

<br><b>Hasil Run Code (Tugas4_contoh1.php) Sesudah di Modifikasi:</b>
<img width="1912" height="1075" alt="image" src="https://github.com/user-attachments/assets/2d8a3c12-0b86-483a-a4c5-c35004a18e41" />
<img width="1910" height="1071" alt="image" src="https://github.com/user-attachments/assets/a57738d0-531a-4fbc-a025-73b016c7f11d" />
Modifikasi Program :
1. Menampilkan no_hp
Di query SELECT ditambahkan: SELECT nim, nama, no_hp, prodi, ipk , Terus di output juga ditambahkan: echo "No HP: " . $row['no_hp'] . "\n";
Tujuannya: nomor HP mahasiswa ikut ditampilkan.
2. Menambahkan kondisi prodi
Di bagian WHERE ditambahkan: AND prodi = 'Teknik Informatika'
Jadi yang ditampilkan hanya mahasiswa Teknik Informatika yang IPK-nya ≥ 3.50.

<br><b>5 Kode Bagian Penting :</b>
1. require_once 'Koneksi.php';
Digunakan untuk menghubungkan program dengan database MySQL.
2. mysqli_select_db($koneksi, 'akademik');
Digunakan untuk memilih database akademik yang akan digunakan.
3. $sqlInsert
Digunakan untuk memasukkan data mahasiswa ke dalam tabel mahasiswa.
4. $sqlSelect
Digunakan untuk mengambil data mahasiswa dengan kondisi IPK minimal 3.50 dan hanya dari prodi Teknik Informatika.
5. while ($row = mysqli_fetch_assoc($result))
Digunakan untuk mengambil dan menampilkan data mahasiswa satu per satu dari hasil query.

<br><b>Error Yang Muncul</b>
<br>Error:
Data mahasiswa tidak tampil sesuai yang diharapkan.
<br>Penyebab:
Kondisi pada query SELECT terlalu spesifik, yaitu menggunakan AND prodi = 'Teknik Informatika', sehingga hanya mahasiswa dari prodi tersebut yang ditampilkan.
<br>Langkah Perbaikan:
Memeriksa kembali kondisi WHERE pada query dan memastikan nama prodi yang digunakan sesuai dengan data yang ada di tabel.

<br><b>Hasil Run Code (Tugas4_contoh2.php) Sesudah di Modifikasi:</b>
<img width="1912" height="1077" alt="image" src="https://github.com/user-attachments/assets/97ed4203-7671-41e3-aea2-f77c73dca3cc" />
<img width="1912" height="1072" alt="image" src="https://github.com/user-attachments/assets/535a1569-628e-40af-91f8-5551b7f5bea7" />
<img width="1911" height="1071" alt="image" src="https://github.com/user-attachments/assets/c3c631e1-1e30-4f00-bdd7-86d60979c7bd" />
Modifikasi Program :
1. Modifikasi UPDATE.
<br>Bagian awalnya: $sqlUpdate = "UPDATE mahasiswa SET ipk = 3.40 WHERE nim = '2025003'";
<br>ubah menjadi: $sqlUpdate = "UPDATE mahasiswa SET ipk = 3.50 WHERE nim = '2025003' AND ipk < 3.50";
<br> Perubahannya: IPK diubah menjadi 3.50 Ditambahkan kondisi AND ipk < 3.50
<br> Artinya, IPK hanya akan diubah kalau IPK sebelumnya masih di bawah 3.50.
2. Modifikasi SELECT/GROUP BY
<br>Ditambahkan kondisi: WHERE prodi = 'Teknik Informatika'
<br>Jadi query: $sqlRekap = "SELECT prodi, COUNT(*) AS jumlah_mahasiswa
             <br>FROM mahasiswa
             <br>WHERE prodi = 'Teknik Informatika'
             <br>GROUP BY prodi
             <br>ORDER BY jumlah_mahasiswa DESC";
<br>Perubahannya: Rekap yang sebelumnya menghitung semua prodi, Sekarang hanya menghitung mahasiswa dari Teknik Informatika

<br><b>5 Kode Penting :</b>
1. require_once 'Koneksi.php';
Digunakan untuk menghubungkan program dengan database MySQL.
2. mysqli_select_db($koneksi, 'akademik');
Digunakan untuk memilih database akademik.
3. $sqlUpdate
Digunakan untuk mengubah nilai IPK mahasiswa dengan kondisi tertentu.
4. $sqlRekap
Digunakan untuk menghitung jumlah mahasiswa berdasarkan prodi, khususnya Teknik Informatika.
5. $sqlDelete
Digunakan untuk menghapus data mahasiswa berdasarkan NIM.
