<?php
class kendaraan {
    var $jumlahRoda;
    var $warna;
    var $bahanBakar = "premium";
    var $harga =50000000;
    var $merek;
    var $tahunPembuatan= 1999;

    function statusHarga()
    {
        if ($this->harga > 50000000)
        $status = 'mahal';
    else
    $status = 'Murah';
return $status;
    }
    function statusBBM()
    {
        if ($this-> bahanBakar = "premium" and $this->tahunPembuatan < 2005)
        $status = 'mendapatkan subsidi';
    else
    $status = 'tidak mendapatkan subsidi';
return $status;
    }
    function hargaBekas()
    {
        if ($this->tahunPembuatan > 2005) {
            $hargaBekas = $this->harga * 0.6;
        } elseif ($this->tahunPembuatan >= 2000 && $this->tahunPembuatan<= 2005) {
            $hargaBekas = $this->harga * 0.7;
        } else {
            $hargaBekas = $this->harga * 0.6;
            
        }
    return $hargaBekas;
    }

    function pajak() 
    {
if  ($this-> tahunPembuatan < 2017) {
        $jumlah_pajak = $this ->harga * 0.025;
        return $jumlah_pajak;
    }
    }        
}
 $kendaraan = new kendaraan();
echo "StatusHarga: ".  $kendaraan ->statusHarga()."<br>";
echo "harga bekas: ". $kendaraan->hargaBekas()."<br>";
echo "statusBBM : ". $kendaraan ->statusBBM()."<br>";
echo "Jumlahpajak : ". $kendaraan ->pajak()."<br>";
?>