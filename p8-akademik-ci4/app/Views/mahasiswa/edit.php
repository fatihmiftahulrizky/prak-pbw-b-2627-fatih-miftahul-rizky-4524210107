
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>

    <h2>Edit Data Mahasiswa</h2>

    <form action="/mahasiswa/update/<?= $mahasiswa['id']; ?>" method="post">

        NIM:
        <input type="text" name="nim" value="<?= esc($mahasiswa['nim']); ?>">
        <br><br>

        Nama:
        <input type="text" name="nama" value="<?= esc($mahasiswa['nama']); ?>">
        <br><br>

        Email:
        <input type="email" name="email" value="<?= esc($mahasiswa['email']); ?>">
        <br><br>

        Prodi:
        <input type="text" name="prodi" value="<?= esc($mahasiswa['prodi']); ?>">
        <br><br>

        IPK:
        <input type="number" name="ipk" step="0.01" min="0" max="4"
               value="<?= esc($mahasiswa['ipk']); ?>">
        <br><br>

        <button type="submit">Update</button>

    </form>

    <br>
    <a href="/mahasiswa">Kembali</a>

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

</body>
</html>
