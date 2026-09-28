<?php

interface Identitas {
    public function ringkasan(): string;
}

class Mahasiswa implements Identitas {
    private string $nim;
    private string $nama;
    private string $prodi; // Modifikasi 1 Menambahkan Prodi
    private float $ipk;

    public function __construct(
        string $nim,
        string $nama,
        string $prodi,
        float $ipk
    ) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->setIpk($ipk);
    }

    public function setIpk(float $ipk): void {
        if ($ipk < 0 || $ipk > 4) {
            throw new InvalidArgumentException(
                'IPK harus berada dalam rentang 0 hingga 4.'
            );
        }

        $this->ipk = $ipk;
    }

    public function getIpk(): float {
        return $this->ipk;
    }

    // Modifikasi 2: Kondisi predikat IPK
    public function predikat(): string {
        if ($this->ipk >= 3.50) {
            return 'Sangat Memuaskan';
        } elseif ($this->ipk >= 3.00) {
            return 'Memuaskan';
        } else {
            return 'Perlu Peningkatan';
        }
    }

    public function ringkasan(): string {
        return "NIM: {$this->nim}, Nama: {$this->nama}, Prodi: {$this->prodi}, IPK: {$this->ipk}";
    }
}

$mhs = new Mahasiswa(
    '4524210107',
    'Fatih Miftahul Rizky',
    'Teknik Informatika',
    3.72
);

echo $mhs->ringkasan();
echo "<br>";
echo "Predikat: " . $mhs->predikat();
?>