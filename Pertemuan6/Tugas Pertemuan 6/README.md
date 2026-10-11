<h2>Tugas6</h2>
<br><b>Hasil Run code (index.php) Sebelum di modifikasi :</b>
<img width="1742" height="3636" alt="code" src="https://github.com/user-attachments/assets/db11db10-bf86-4892-8a4e-ce60847b41a1" />
<img width="1917" height="966" alt="image" src="https://github.com/user-attachments/assets/a0b7f48d-7f93-458b-8dac-1df09659b6c9" />

<br><b>Hasil Run code (index.php) Sesudah di modifikasi :</b>
<img width="1926" height="3826" alt="code2" src="https://github.com/user-attachments/assets/aed42426-86ed-4a66-a7e0-32364b8b1b1c" />
<img width="1917" height="965" alt="image" src="https://github.com/user-attachments/assets/abf94185-9cfb-4375-9051-697f6be8fb0f" />

<b>Modifikasi Program :</b>
1. Menambahkan kolom No HP
<br>Menambahkan kolom No HP pada tabel untuk menampilkan nomor telepon mahasiswa yang tersimpan di database.
2. Menambahkan kolom Jenis Kelamin
<br> Menambahkan kolom Jenis Kelamin agar informasi jenis kelamin setiap mahasiswa dapat ditampilkan pada tabel.

<br><b>5 Kode Bagian Penting</b>
1. Menghubungkan database
<br>include "Koneksi.php";
<br>Menghubungkan program dengan database.
2. Mengambil data mahasiswa
<br>$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
<br>Mengambil seluruh data mahasiswa dari tabel.
3. Menampilkan No HP
<br><img width="217" height="26" alt="image" src="https://github.com/user-attachments/assets/d74ed01f-5a8a-438f-892b-ac337cb790b7" />
<br>Menampilkan nomor HP mahasiswa.
4. Menampilkan Jenis Kelamin
<br><img width="297" height="22" alt="image" src="https://github.com/user-attachments/assets/6321e668-5fe6-476b-8c20-72b8719842cc" />
<br>Menampilkan jenis kelamin mahasiswa.
5. Menampilkan data menggunakan perulangan
<br><img width="521" height="20" alt="image" src="https://github.com/user-attachments/assets/3a452720-72c0-4aff-b757-5a9886b569f2" />
<br>Menampilkan data mahasiswa satu per satu.

<br><b>Eror yang pernah muncul</b>
<br>Error: Kolom No HP atau Jenis Kelamin tidak muncul.
<br>Penyebab: Nama kolom pada kode tidak sesuai dengan nama kolom di database.
<br>Langkah Perbaikan: Memastikan kolom no_hp dan jenis_kelamin tersedia di tabel mahasiswa.

<h2></h2>
<br><b>Hasil Run code (create.php) Sebelum di modifikasi :</b>
<img width="1602" height="1964" alt="code3" src="https://github.com/user-attachments/assets/99d73cb9-5004-4a9b-a95d-026336536d6f" />
<img width="1917" height="965" alt="image" src="https://github.com/user-attachments/assets/6e54cbda-06f6-4bb1-aba4-a851cd338d8a" />

<br><b>Hasil Run code (create.php) Sesudah di modifikasi :</b>
<img width="1726" height="2458" alt="code4" src="https://github.com/user-attachments/assets/b00054bc-81ba-4199-b027-f0d605631561" />
<img width="1917" height="971" alt="image" src="https://github.com/user-attachments/assets/21924c92-f8f0-431d-9359-fc393723ea40" />

<b>Modifikasi Program :</b>
1. Menambahkan input No HP
<br>Menambahkan input No HP pada formulir tambah mahasiswa agar pengguna dapat memasukkan nomor telepon mahasiswa.
2. Menambahkan input Jenis Kelamin
<br>Menambahkan input Jenis Kelamin agar pengguna dapat memasukkan informasi jenis kelamin mahasiswa saat menambahkan data.

<br><b>5 Kode Bagian Penting</b>
1. Mengarahkan formulir ke store.php
<br><img width="373" height="22" alt="image" src="https://github.com/user-attachments/assets/7b05a280-4c11-480b-a5a1-db3c616cbd7a" />
<br>Mengirim data formulir untuk disimpan.
2. Input NIM
<br><img width="465" height="25" alt="image" src="https://github.com/user-attachments/assets/ca6884f1-171d-4805-9e8f-669b488ac6ba" />
<br>Memasukkan NIM mahasiswa.
3. Input Email
<br><img width="512" height="23" alt="image" src="https://github.com/user-attachments/assets/0ff28417-b120-415f-84dc-10dbd30dd59b" />
<br>Memasukkan alamat email mahasiswa.
4. Input No HP
<br><img width="501" height="20" alt="image" src="https://github.com/user-attachments/assets/4c6abbe6-c87b-4518-9222-a4ab03440ee0" />
<br>Memasukkan nomor HP mahasiswa.
5.Input Jenis Kelamin
<br><img width="651" height="26" alt="image" src="https://github.com/user-attachments/assets/538ea176-9f7f-402f-b70b-efa5c56a62ef" />
<br>Memasukkan jenis kelamin mahasiswa.

<br><b>Eror yang pernah muncul</b>
<br>Error: Data No HP atau Jenis Kelamin tidak terkirim.
<br>Penyebab: Atribut name pada input tidak sesuai dengan nama data yang dibutuhkan program.
<br>Langkah Perbaikan: Memastikan input menggunakan name="no_hp" dan name="jenis_kelamin".

<h2></h2>
<br><b>Hasil Run code (store.php) Sebelum di modifikasi :</b>
<img width="1280" height="1546" alt="code5" src="https://github.com/user-attachments/assets/53b75cff-a057-4ac7-9f46-0afe28a293f2" />
<img width="1911" height="960" alt="image" src="https://github.com/user-attachments/assets/c894117f-e02a-4bdc-8ea8-ba0394ea7df9" />

<br><b>Hasil Run code (store.php) Sesudah di modifikasi :</b>
<img width="1772" height="1622" alt="code6" src="https://github.com/user-attachments/assets/f38ab80b-465f-4233-a128-430b75dc99bd" />
<img width="1915" height="1027" alt="image" src="https://github.com/user-attachments/assets/8e9f7ed3-4d93-4c38-ab39-eaea3b6ae377" />

<b>Modifikasi Program :</b>
1. Mengambil data tambahan
<br>Menambahkan variabel $no_hp dan $jenis_kelamin untuk mengambil data dari formulir menggunakan $_POST.
2. Menambahkan data ke query INSERT
<br>Menambahkan kolom no_hp dan jenis_kelamin beserta nilainya ke query INSERT agar kedua data tersimpan di database.

<br><b>5 Kode Bagian Penting</b>
1. Menghubungkan database
<br>include "Koneksi.php";
<br>Menghubungkan program dengan database.
2. Memeriksa metode pengiriman
<br>if ($_SERVER["REQUEST_METHOD"] == "POST") {
<br>Memastikan data dikirim menggunakan metode POST.
3. Mengambil data No HP dan Jenis Kelamin
<br>$no_hp = $_POST['no_hp']; $jenis_kelamin = $_POST['jenis_kelamin'];
<br>Mengambil dua data tambahan dari formulir.
4. Menyimpan data mahasiswa
<br>INSERT INTO mahasiswa (nim, nama, email, prodi, angkatan, ipk, no_hp, jenis_kelamin)
<br>Menentukan kolom yang akan diisi pada tabel mahasiswa.
5. Memeriksa hasil penyimpanan
<br>if ($query) {
<br>Memeriksa apakah query penyimpanan berhasil.

<br><b>Eror yang pernah muncul</b>
<br>Error: Data mahasiswa gagal disimpan.
<br>Penyebab: Kolom atau nilai yang dimasukkan ke query INSERT tidak sesuai dengan struktur tabel.
<br>Langkah Perbaikan: Memastikan query INSERT mencantumkan kolom dan nilai No HP serta Jenis Kelamin dengan benar.

<h2></h2>
<br><b>Hasil Run code (edit.php) Sebelum di modifikasi :</b>
<img width="1834" height="2496" alt="code7" src="https://github.com/user-attachments/assets/1192ddcb-3697-48ab-a7d3-4f130b93fb64" />
<img width="1917" height="970" alt="image" src="https://github.com/user-attachments/assets/bd6abcab-d44d-4278-b2a2-d07df3ff3e18" />

<br><b>Hasil Run code (edit.php) Sesudah di modifikasi :</b>
<img width="2050" height="2914" alt="code8" src="https://github.com/user-attachments/assets/9d1ad666-a287-4e24-8ad6-8a4dbe0e9e46" />
<img width="1916" height="967" alt="image" src="https://github.com/user-attachments/assets/aca2c455-63bb-49b8-ac87-52a918519f53" />

<b>Modifikasi Program :</b>
1. Menambahkan field No HP
<br>Menambahkan field No HP yang menampilkan nomor telepon mahasiswa sebelumnya dan dapat diubah melalui formulir edit.
2. Menambahkan field Jenis Kelamin
<br>Menambahkan field Jenis Kelamin yang menampilkan data sebelumnya agar pengguna dapat mengubah informasi tersebut.

<br><b>5 Kode Bagian Penting</b>
1. Mengambil NIM dari URL
<br>$nim = $_GET['nim'];
<br>Mengambil NIM mahasiswa yang akan diedit.
2. Mengambil data mahasiswa
<br>$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim = '$nim'");
<br>Mengambil data mahasiswa berdasarkan NIM.
3. Menampilkan data No HP
<br><img width="212" height="20" alt="image" src="https://github.com/user-attachments/assets/295b7996-3102-45f7-a1bb-85915f7d6af7" />
<br>Menampilkan nomor HP sebelumnya pada formulir edit.
4. Menampilkan data Jenis Kelamin
<br><img width="362" height="22" alt="image" src="https://github.com/user-attachments/assets/ef996da2-21c1-4346-b303-cc7520704004" />
<br>Menampilkan jenis kelamin sebelumnya pada formulir edit.
5. Mengirim perubahan ke update.php
<br><img width="390" height="27" alt="image" src="https://github.com/user-attachments/assets/2d6a569d-cbb0-4533-92bd-cbb1ff825ce6" />
<br>Mengirim data yang sudah diedit untuk diperbarui.

<br><b>Eror yang pernah muncul</b>
<br>Error: Data mahasiswa tidak muncul pada formulir edit.
<br>Penyebab: NIM tidak ditemukan atau parameter nim tidak dikirim melalui URL.
<br>Langkah Perbaikan: Memastikan tombol Edit mengirim NIM melalui URL, misalnya edit.php?nim=12345.

<h2></h2>
<br><b>Hasil Run code (update.php) Sebelum di modifikasi :</b>
<img width="1048" height="1546" alt="code9" src="https://github.com/user-attachments/assets/18d051aa-28b6-4715-91ea-a2480351116d" />
<img width="1917" height="968" alt="image" src="https://github.com/user-attachments/assets/b3e7b809-839a-4413-8f95-40f0db6a6f7b" />

<br><b>Hasil Run code (update.php) Sesudah di modifikasi :</b>
<img width="1648" height="1736" alt="code10" src="https://github.com/user-attachments/assets/0d4367a7-c8e2-4531-8b90-22f334a880fb" />
<img width="1912" height="967" alt="image" src="https://github.com/user-attachments/assets/aa4f69d1-5a47-4bcf-84e7-ec44025b47b0" />

<b>Modifikasi Program :</b>
1. Mengambil data tambahan
<br>Menambahkan variabel $no_hp dan $jenis_kelamin untuk mengambil data yang dikirim dari formulir edit.
2. Memperbarui query UPDATE
<br>Menambahkan kolom no_hp dan jenis_kelamin ke query UPDATE agar perubahan kedua data tersebut tersimpan di database.

<br><b>5 Kode Bagian Penting</b>
1. Mengambil NIM
<br>$nim = $_POST['nim'];
<br>Mengambil NIM sebagai penanda data mahasiswa yang diubah.
2. Mengambil data No HP dan Jenis Kelamin
<br>$no_hp = $_POST['no_hp']; $jenis_kelamin = $_POST['jenis_kelamin'];
<br>Mengambil data tambahan dari formulir edit.
3. Menjalankan query UPDATE
<br>"UPDATE mahasiswa
SET nama='$nama',
email='$email',
prodi='$prodi',
angkatan='$angkatan',
ipk='$ipk',
no_hp='$no_hp',
jenis_kelamin='$jenis_kelamin'
WHERE nim='$nim'"
<br>Memperbarui data mahasiswa berdasarkan NIM.
4. Memeriksa hasil perubahan
<br>if ($query) {
<br>Memeriksa apakah proses pembaruan berhasil.
5. Menampilkan pesan error
<br>mysqli_error($koneksi)
<br>Menampilkan informasi kesalahan database jika query gagal.

<br><b>Eror yang pernah muncul</b>
<br>Error: Data No HP atau Jenis Kelamin tidak berubah setelah diedit.
<br>Penyebab: Kedua kolom belum dimasukkan ke dalam query UPDATE.
<br>Langkah Perbaikan: Menambahkan no_hp dan jenis_kelamin ke bagian SET pada query UPDATE.

<h2></h2>
<br><b>Hasil Run code (delete.php) Sebelum di modifikasi :</b>
<img width="1064" height="1166" alt="code11" src="https://github.com/user-attachments/assets/6968914a-c213-4ee2-b1b2-56466319ca7e" />
<img width="1913" height="966" alt="image" src="https://github.com/user-attachments/assets/48716ff0-5ec6-4b8c-b8ab-df7780811173" />

<br><b>Hasil Run code (delete.php) Sesudah di modifikasi :</b>
<img width="1418" height="1470" alt="code12" src="https://github.com/user-attachments/assets/9c5801e1-ffcb-42d0-a450-79741e72ff88" />
<img width="1911" height="972" alt="image" src="https://github.com/user-attachments/assets/0917e931-0c32-47de-9b2a-570116d5c4c8" />

<b>Modifikasi Program :</b>
1. Menambahkan pengecekan NIM
<br>Menambahkan isset($_GET['nim']) untuk memeriksa apakah NIM tersedia sebelum proses penghapusan dilakukan.
2. Menampilkan pesan error database
<br>Menambahkan mysqli_error($koneksi) pada pesan kegagalan agar penyebab penghapusan yang gagal dapat diketahui.

<br><b>5 Kode Bagian Penting</b>
1. Menghubungkan database
<br>include "Koneksi.php";
<br>Menghubungkan program dengan database.
2. Memeriksa NIM
<br>if (isset($_GET['nim'])) {
<br>Memastikan NIM tersedia sebelum penghapusan.
3. Mengambil NIM
<br>$nim = $_GET['nim'];
<br>Mengambil NIM mahasiswa yang akan dihapus.
4. Menghapus data mahasiswa
<br>"DELETE FROM mahasiswa WHERE nim='$nim'"
<br>Menghapus data berdasarkan NIM.
5. Menampilkan pesan error
<br>mysqli_error($koneksi)
<br>Menampilkan informasi kesalahan jika proses penghapusan gagal.

<br><b>Eror yang pernah muncul</b>
<br>Error: Data mahasiswa gagal dihapus.
<br>Penyebab: NIM tidak tersedia atau query penghapusan gagal dijalankan.
<br>Langkah Perbaikan: Memastikan NIM dikirim melalui URL dan query DELETE sesuai dengan nama tabel serta kolom di database.
