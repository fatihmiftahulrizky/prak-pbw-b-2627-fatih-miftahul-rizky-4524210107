<?php
// biodata.php

function statusKelulusan(float $ipk): string
{
    if ($ipk >= 3.50) return 'Sangat Memuaskan';
    if ($ipk >= 3.00) return 'Memuaskan';
    return 'Perlu Peningkatan';
}

// Modifikasi 1: Menambahkan field email dan status
$mahasiswa = [
    'nim' => '4524210107',
    'nama' => 'Fatih Miftahul Rizky',
    'prodi' => 'Teknik Informatika',
    'semester' => 5,
    'ipk' => 3.72,
    'email' => 'Fatih@gmail.com',
    'status' => 'Aktif'
];

// Modifikasi 2: Kondisi berdasarkan status mahasiswa
if ($mahasiswa['status'] === 'Aktif') {
    $keterangan = 'Mahasiswa masih aktif kuliah.';
} else {
    $keterangan = 'Mahasiswa tidak aktif kuliah.';
}
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Biodata</title>
</head>

<body>
    <h1>Biodata Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $kunci => $nilai): ?>
            <li>
                <?= ucfirst($kunci) ?>:
                <?= htmlspecialchars((string)$nilai) ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <p>Predikat: <?= statusKelulusan($mahasiswa['ipk']) ?></p>

    <p><?= $keterangan ?></p>

</body>
</html>