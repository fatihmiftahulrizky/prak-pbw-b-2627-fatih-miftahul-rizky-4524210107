<h2>Tugas5</h2>
<br><b>Hasil Run code (form.php) Sebelum di modifikasi :</b>
<img width="1188" height="1318" alt="code" src="https://github.com/user-attachments/assets/a3e366c2-069a-4fa1-b1c1-ff6e93cb087a" />
<img width="1913" height="970" alt="image" src="https://github.com/user-attachments/assets/4929bac7-ef2e-4eca-b33d-939124d26cf1" />

<br><b>Hasil Run code (form.php) Sesudah di modifikasi :</b>
<img width="1188" height="1622" alt="code2" src="https://github.com/user-attachments/assets/28f3d966-2c56-43e9-b069-a8a120349599" />
<img width="1917" height="972" alt="image" src="https://github.com/user-attachments/assets/70cda50d-62f2-4d1d-9da3-3ecf4cca68c6" />

<b>Modifikasi Program:</b>
1. Menambahkan field No HP
Menambahkan input No HP pada form agar mahasiswa dapat mengisi nomor teleponnya.
2. Menambahkan field Jenis Kelamin
Menambahkan input Jenis Kelamin agar mahasiswa dapat mengisi jenis kelaminnya secara manual.

<br><b>5 Kode Bagian Penting : </b>
1. Form HTML
<img width="390" height="23" alt="image" src="https://github.com/user-attachments/assets/bd67e1d0-2ef9-4ce2-ba22-45d37defbd10" />
<br>Digunakan untuk mengirim data form ke file simpan.php menggunakan metode POST.

2. Input NIM
<img width="397" height="30" alt="image" src="https://github.com/user-attachments/assets/d3db0e55-314e-4986-b995-cdce1e47c088" />
<br>Digunakan untuk mengisi NIM mahasiswa dan wajib diisi.

3. Input Email
<img width="431" height="23" alt="image" src="https://github.com/user-attachments/assets/9b1f9f96-ab48-4f10-a9a2-5e9c6c79ed37" />
<br>Digunakan untuk mengisi alamat email mahasiswa.

4. Input No HP
<img width="402" height="25" alt="image" src="https://github.com/user-attachments/assets/9e0469db-7ddf-4ce1-8a98-236ee5158cfd" />
<br>Digunakan untuk mengisi nomor HP mahasiswa. Bagian ini merupakan salah satu modifikasi.

5.Input Jenis Kelamin
<img width="476" height="25" alt="image" src="https://github.com/user-attachments/assets/ee689ecf-03c9-449d-8a89-89f0b43780a4" />
<br>Digunakan untuk mengisi jenis kelamin mahasiswa secara manual. Bagian ini merupakan modifikasi kedua.

<br><b>Eror yang pernah muncul</b>
<br>Error: Error: ! [rejected] main -> main (stale info)
<br>Penyebab: Informasi branch lokal belum sesuai dengan kondisi branch di GitHub saat melakukan push menggunakan --force-with-lease.
<br>Langkah Perbaikan: Memperbarui informasi remote dengan perintah berikut, lalu mencoba push kembali.

<h2></h2>
<br><b>Hasil Run code (simpan.php) Sebelum di modifikasi :</b>
<img width="1280" height="1204" alt="code3" src="https://github.com/user-attachments/assets/16fc1dbb-8e4a-4e17-8631-3429bf06e2c5" />
<img width="1911" height="967" alt="image" src="https://github.com/user-attachments/assets/9cba52e7-376a-40a3-9829-04a8a6937e5c" />

<br><b>Hasil Run code (simpan.php) Sesudah di modifikasi :</b>
<img width="1710" height="1280" alt="code4" src="https://github.com/user-attachments/assets/553cf6b3-5a3d-4c6a-95d0-064ba7fef096" />
<img width="1916" height="968" alt="image" src="https://github.com/user-attachments/assets/5a03f872-c47b-4e68-a052-215058140fb3" />

<b>Modifikasi Program:</b>
1. Menambahkan variabel No HP dan Jenis Kelamin
<img width="402" height="47" alt="image" src="https://github.com/user-attachments/assets/15960fea-1011-49e2-91e4-85582b514ee2" />
<br>Digunakan untuk mengambil data No HP dan Jenis Kelamin yang dikirim dari form.
2. Menambahkan kolom pada query INSERT
<img width="867" height="120" alt="image" src="https://github.com/user-attachments/assets/4adb047e-4a57-4d23-8c3e-bd34bf4ac824" />
<br>Digunakan untuk menyimpan data No HP dan Jenis Kelamin ke tabel mahasiswa bersama data lainnya.

<br><b>5 Kode Bagian Penting</b>
1. Menghubungkan Database
<br>include "Koneksi.php";
<br>Digunakan untuk menghubungkan program dengan database melalui file Koneksi.php.
2. Mengambil Data NIM
<br>$nim = $_POST['nim'];
<br>Digunakan untuk mengambil NIM yang dikirim dari form menggunakan metode POST.
3. Mengambil Data Tambahan
<br>$no_hp = $_POST['no_hp']; $jenis_kelamin = $_POST['jenis_kelamin'];
<br>Digunakan untuk mengambil data No HP dan Jenis Kelamin dari form.
4. Menyimpan Data ke Database
<br>$query = mysqli_query(
    $koneksi,
    "INSERT INTO mahasiswa
    (nim, nama, email, prodi, angkatan, ipk, no_hp, jenis_kelamin)
    VALUES
    ('$nim', '$nama', '$email', '$prodi', '$angkatan', '$ipk', '$no_hp', '$jenis_kelamin')"
);
<br>Digunakan untuk memasukkan data mahasiswa ke tabel mahasiswa.
5. Memeriksa Hasil Penyimpanan
<br>if ($query) {
    echo "Data berhasil disimpan";
} else {
    echo "Data gagal disimpan: " . mysqli_error($koneksi);
}
<br>Digunakan untuk menampilkan pesan sesuai hasil proses penyimpanan data.

<br><b>Eror yang pernah muncul</b>
<br>Error: Unknown column 'jenis_kelamin' in 'field list'
<br>Penyebab: Kolom jenis_kelamin belum tersedia pada tabel mahasiswa saat program dijalankan.
<br>Langkah Perbaikan: Menambahkan kolom jenis_kelamin ke tabel mahasiswa melalui phpMyAdmin.
