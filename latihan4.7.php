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

    function setjmlRoda($x)
    {
        $this->jumlahRoda = $x;
    }
    function getjmlRoda()
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
    function setbhnbakar($x)
    {
        $this->bahanBakar = $x;
    }
    function getbhnbakar()
    {
        return $this->bahanBakar;
    }
    function settahun($x)
    {
        $this->tahunPembuatan = $x;
    }
    function gettahun()
    {
        return $this->tahunPembuatan;
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
$Data1 = array('Toyota yaris', '4', '160000000', 'merah', 'pertamax', '2014');
$Data2 = array('Honda scoopy', '2', '13000000', 'putih', 'premium', '2005');
$Data3 = array('Isuzu panther', '4', '40000000', 'Hitam', 'solar', '1994');

for ($i = 1; $i <= 3; $i++) {
    for ($h = 0; $h <= 5; $h++) {
        ${"kendaraan$i"} = new kendaraan();
        ${"kendaraan$i"}->setMerek(${"Data$i"}[0]);
        ${"kendaraan$i"}->setjmlRoda(${"Data$i"}[1]);
        ${"kendaraan$i"}->setharga(${"Data$i"}[2]);
        ${"kendaraan$i"}->setwarna(${"Data$i"}[3]);
        ${"kendaraan$i"}->setbhnbakar(${"Data$i"}[4]);
        ${"kendaraan$i"}->settahun(${"Data$i"}[5]);
    }
}
for ($i = 1; $i <= 3; $i++) {
    echo "\$kendaraan$i<br>"
        . ${"kendaraan$i"}->getMerek() . "<br>"
        . ${"kendaraan$i"}->getjmlRoda() . "<br>"
        . ${"kendaraan$i"}->getharga() . "<br>"
        . ${"kendaraan$i"}->getwarna() . "<br>"
        . ${"kendaraan$i"}->getbhnbakar() . "<br>"
        . ${"kendaraan$i"}->gettahun() . "<br><br>";

}

