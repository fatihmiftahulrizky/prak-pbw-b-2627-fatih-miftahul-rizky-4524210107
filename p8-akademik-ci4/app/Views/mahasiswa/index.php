
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <?php if (session()->getFlashdata('success')) : ?>
    <p style="color: green;">
        <?= session()->getFlashdata('success'); ?>
    </p>
<?php endif; ?>

<?php if (session()->getFlashdata('error')) : ?>
    <p style="color: red;">
        <?= session()->getFlashdata('error'); ?>
    </p>
<?php endif; ?>

    <h2>Data Mahasiswa</h2>

    <a href="/mahasiswa/tambah">Tambah Mahasiswa</a>
    <br><br>

    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>IPK</th>
        </tr>

<?php
/** @var array $mahasiswa */
foreach ($mahasiswa as $mhs): 
?>
    <tr>
        <td><?= esc($mhs['nim']); ?></td>
        <td><?= esc($mhs['nama']); ?></td>
        <td><?= esc($mhs['prodi']); ?></td>
        <td><?= esc($mhs['ipk']); ?></td>
    </tr>
<?php endforeach; ?>
    </table>
</body>
</html>
