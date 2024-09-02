<?php
class kendaraan
{
    var $merek;
    var $jmlhRoda;
    var $harga;
    var $warna;
    var $bhnBakar;
    var $tahun;

    function setMerek($x)
    {
        $this->merek = $x;
    }
    function setHarga($x)
    {
        $this->harga = $x;
    }
    function setjmlhRoda($x)
    {
        $this->jmlhRoda = $x;

    }

    function setwarna($x)
    {
        $this->warna = $x;
    }
    function setbhnBakar($x)
    {
        $this->bhnBakar = $x;

    }
    function settahun($x)
    {
        $this->tahun = $x;
    }
}

$kendaraan1 = new kendaraan();
$kendaraan1->setMerek('Toyota yaris');
$kendaraan1->setjmlhRoda(4);
$kendaraan1->setHarga(160000000);
$kendaraan1->setwarna("merah");
$kendaraan1->setbhnBakar("premium");
$kendaraan1->settahun(2005);

$kendaraan2 = new kendaraan();
$kendaraan2->setMerek('Honda Scoopy');
$kendaraan2->setjmlhRoda(2);
$kendaraan2->setHarga(13000000);
$kendaraan2->setwarna("Hitam");
$kendaraan2->setbhnBakar("premium");
$kendaraan2->settahun(2004);

$kendaraan3 = new kendaraan();
$kendaraan3->setMerek('Isuzu panther');
$kendaraan3->setjmlhRoda(4);
$kendaraan3->setHarga(170000000);
$kendaraan3->setwarna("Hitam");
$kendaraan3->setbhnBakar("solar");
$kendaraan3->settahun(2003);

echo $kendaraan1->merek;
echo "<br>";
echo $kendaraan1->jmlhRoda;
echo "<br>";
echo $kendaraan1->harga;
echo "<br>";
echo $kendaraan1->warna;
echo "<br>";
echo $kendaraan1->bhnBakar;
echo "<br>";
echo $kendaraan1->tahun;
echo "<br>";
echo "<br>";

echo $kendaraan2->merek;
echo "<br>";
echo $kendaraan2->jmlhRoda;
echo "<br>";
echo $kendaraan2->harga;
echo "<br>";
echo $kendaraan2->warna;
echo "<br>";
echo $kendaraan2->bhnBakar;
echo "<br>";
echo $kendaraan2->tahun;
echo "<br>";
echo "<br>";

echo $kendaraan3->merek;
echo "<br>";
echo $kendaraan3->jmlhRoda;
echo "<br>";
echo $kendaraan3->harga;
echo "<br>";
echo $kendaraan3->warna;
echo "<br>";
echo $kendaraan3->bhnBakar;
echo "<br>";
echo $kendaraan3->tahun;
echo "<br>";
echo "<br>";

?>