<?php

interface BisaDihitung {
    public function hargaAkhir(): float;
}

class Produk implements BisaDihitung {
    public function __construct(
        protected string $nama,
        protected float $harga,
        protected int $stok, // Modifikasi 1: field stok
    ) {}

    public function hargaAkhir(): float {
        return $this->harga;
    }

    public function getNama(): string {
        return $this->nama;
    }

    public function getStok(): int {
        return $this->stok;
    }

    // Modifikasi 2: kondisi stok
    public function statusStok(): string {
        if ($this->stok > 0) {
            return 'Stok Tersedia';
        } else {
            return 'Stok Habis';
        }
    }
}

class ProdukDiskon extends Produk {
    public function __construct(
        string $nama,
        float $harga,
        int $stok,
        private float $diskon
    ) {
        parent::__construct($nama, $harga, $stok);
    }

    public function hargaAkhir(): float {
        return $this->harga * (1 - $this->diskon / 100);
    }
}

$daftar = [
    new Produk('Keyboard', 250000, 10),
    new ProdukDiskon('Mouse', 1500000, 0, 10),
];

foreach ($daftar as $produk) {
    echo "Produk: {$produk->getNama()}, ";
    echo "Harga Akhir: Rp " . number_format($produk->hargaAkhir(), 0, ',', '.') . ", ";
    echo "Status: {$produk->statusStok()}<br>";
}
?>