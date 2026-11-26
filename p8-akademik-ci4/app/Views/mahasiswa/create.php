
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>

    <h2>Tambah Mahasiswa</h2>

    <?php if (session()->getFlashdata('errors')) : ?>
        <div style="color: red;">
            <b>Terjadi kesalahan:</b>
            <ul>
                <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="/mahasiswa/simpan" method="post">

        NIM:
        <input type="text" name="nim">
        <br><br>

        Nama:
        <input type="text" name="nama">
        <br><br>

        Email:
        <input type="email" name="email">
        <br><br>

        Prodi:
        <input type="text" name="prodi">
        <br><br>

        IPK:
        <input type="number" name="ipk" step="0.01">
        <br><br>

        <button type="submit">Simpan</button>

    </form>

    <br>
    <a href="/mahasiswa">Kembali</a>

</body>
</html>
