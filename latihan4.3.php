<?php
class kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan;

    function setMerek($x)
    {
        $this->merek = $x;
    }

    function getMerek()
    {
        return $this->merek;
    }
    function setHarga($x)
    {
        $this->harga = $x;

    }

    function getHarga()
    {
        return $this->harga;
    }

    function setjumlahRoda($x)
    {
        $this->jumlahRoda = $x;
    }
    function getjumlahRoda()
    {
        return $this->jumlahRoda;
    }

    function setWarna($x)
    {
        $this->warna = $x;
    }
    function getwarna()
    {
        return $this->warna;
    }
    function statusHarga()
    {
        if ($this->harga > 50000000)
            $status = 'mahal';
        else
            $status = 'murah';
        return $status;
    }
}

$kendaraan1 = new kendaraan;
$kendaraan1->setMerek('Yamaha Mio');
$kendaraan1->setHarga(10000000);
$kendaraan1->setjumlahRoda(4);
$kendaraan1->setwarna("Hitam");
echo $kendaraan1->getMerek();
echo "<br>";
echo $kendaraan1->getHarga();
echo "<br>";
echo $kendaraan1->getjumlahRoda();
echo "<br>";
echo $kendaraan1->getwarna();
?>