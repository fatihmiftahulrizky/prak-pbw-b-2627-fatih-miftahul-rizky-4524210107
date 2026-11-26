<h1>Penjelasan Singkat Tugas P8 Pengenalan CI4</h1><br>

<b>Deskripsi</b><br>

Project ini merupakan implementasi modul mahasiswa sederhana menggunakan framework CodeIgniter 4 (CI4). Modul ini dibuat untuk mengelola data mahasiswa dengan menerapkan konsep CRUD (Create, Read, Update, Delete) serta validasi input menggunakan fitur Validation Rules dari CodeIgniter 4.

<b>Fitur Aplikasi</b>
1. Create (Tambah Data)<br>
Fitur untuk menambahkan data mahasiswa baru ke dalam database.<br>
Data yang dimasukkan meliputi:<br>
-NIM<br>
-Nama<br>
-Email<br>
-Program Studi<br>
-IPK<br>
<img width="575" height="433" alt="image" src="https://github.com/user-attachments/assets/a2bf5ced-46fc-4b9d-9a25-84130f1223a0" />
<img width="571" height="372" alt="image" src="https://github.com/user-attachments/assets/c22f367a-4955-48fa-9216-f43ca8a3ef0c" /><br>
<br>

2. Read (Menampilkan Data)<br>
Fitur untuk menampilkan seluruh data mahasiswa yang tersimpan di database dalam bentuk tabel.<br>
Informasi yang ditampilkan:<br>
-NIM<br>
-Nama<br>
-Program Studi<br>
-IPK<br>
<img width="558" height="322" alt="image" src="https://github.com/user-attachments/assets/e755e104-3795-49a9-a349-42c081b14307" /><br>
<br>
Pada halaman ini juga tersedia tombol Edit dan Hapus untuk mengelola data mahasiswa.<br>
<br>

3. Update (Ubah Data)<br>
Fitur untuk mengubah data mahasiswa yang sudah tersimpan di database. Pengguna dapat memilih data mahasiswa melalui tombol Edit, kemudian memperbarui informasi melalui form yang tersedia.
<img width="575" height="332" alt="image" src="https://github.com/user-attachments/assets/2467b7cc-be6b-4fc5-ad6e-2c99168206de" />
<img width="485" height="425" alt="image" src="https://github.com/user-attachments/assets/e4dec3d9-e8f2-479c-8268-4caf67d52ab0" />
<img width="557" height="372" alt="image" src="https://github.com/user-attachments/assets/bc7e5987-0660-4997-9c19-d1ddd6e7886c" /><br>
<br>

4. Delete (Hapus Data)<br>
Fitur untuk menghapus data mahasiswa berdasarkan ID. Sebelum data dihapus, aplikasi menampilkan konfirmasi agar pengguna dapat memastikan tindakan penghapusan.
<img width="1275" height="340" alt="image" src="https://github.com/user-attachments/assets/ed55f87e-30c9-4bda-adfb-d9de7ab90516" />
<img width="588" height="351" alt="image" src="https://github.com/user-attachments/assets/39297efe-c82a-43e4-b3eb-8e6011aa8c7d" /><br>
<br>

<b>Validasi Input</b><br>
Aplikasi menggunakan Validation Rules bawaan CodeIgniter 4 untuk memeriksa data sebelum disimpan atau diperbarui.
<img width="621" height="510" alt="image" src="https://github.com/user-attachments/assets/67411a8e-6bac-459d-9120-1bc1d6753a6b" /><br>
<br>

<b>Validasi yang diterapkan pada fitur tambah dan ubah:</b><br>

NIM: Wajib diisi dan tidak boleh duplikat saat menambah data.<br>
Nama: Wajib diisi.<br>
Email: Wajib diisi dan harus menggunakan format email yang valid.<br>
Email (tambah): Tidak boleh duplikat.<br>
Program Studi: Wajib diisi.<br>
IPK: Wajib diisi, harus berupa angka, minimal 0 dan maksimal 4.<br>
