<?php
class Employee {
    protected $kerjalama;
    protected $gaji;

    public function __construct($lamaKerja, $gaji) {
        $this->kerjalama = $lamaKerja;
        $this->gaji = $gaji;
    }

    public function getGaji() {
        return $this->gaji;
    }
}

class Programmer extends Employee {
    public function getGaji() {
        if ($this->kerjalama < 1) {
            return parent::getGaji();
        } elseif ($this->kerjalama <= 10) {
            return parent::getGaji() + ($this->kerjalama * 0.01);
        } else {
            return parent::getGaji() + ($this->kerjalama * 0.02);
        }
    }
}

// Contoh penggunaan
$programmer = new Programmer(5, 10000);
echo "Gaji Programmer: " . $programmer->getGaji()."<br>";
class Direktur extends Employee {
    public function getGaji() {
        $bonus = $this->kerjalama * 0.5;
        $tunjangan = $this->kerjalama * 0.1;
        return parent::getGaji() + $bonus + $tunjangan;
    }
}

// Contoh penggunaan
$direktur = new Direktur(8, 20000);
echo "Gaji Direktur: " . $direktur->getGaji()."<br>";
class PegawaiMingguan extends Employee {
    private $hargaBarang;
    private $stockjual;

    public function __construct($lamaKerja, $gaji, $hargaBarang, $stockjual) {
        parent::__construct($lamaKerja, $gaji);
        $this->hargaBarang = $hargaBarang;
        $this->stockjual = $stockjual;
    }

    public function getGaji() {
        $totalPenjualan = $this->hargaBarang * $this->stockjual;

        if ($this->stockjual >= 0.7 * $totalPenjualan) {
            return parent::getGaji() + (0.1 * $this->hargaBarang * $this->stockjual);
        } else {
            return parent::getGaji() + (0.03 * $this->hargaBarang * $this->stockjual);
        }
    }
}
// Contoh penggunaan
$pegawaiMingguan = new PegawaiMingguan(3, 5000, 100, 80);
echo "Gaji Pegawai Mingguan: " . $pegawaiMingguan->getGaji();