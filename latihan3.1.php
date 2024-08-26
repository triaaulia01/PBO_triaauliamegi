<?php
class kendaraan 
{
    var $jumlahRoda=4;
    var $warna;
    var $bahanBakar="premium";
    var $harga=100000000;
    var $merek;
    var $tahunPembuatan=2004;
    function statusHarga()
{
    if($this->harga>50000000){
            $status = "Harga Kendaraan Mahal";
    }else {
        $status = "Harga Kendaraan Murah";
    }
    return $status;
}
function statusSubsidi()
{
    if ($this ->tahunPembuatan < 2005 && $this->bahanBakar == "preminum"){
    $status="DAPAT SUBSIDI";
    }else{

    $status="TIDAK DAPAT SUBSIDI";
    }
        return $status;

}
}


//instansiasi kelas
$ObjekKendaraan = new Kendaraan();//pembuatan objek dari kelas
echo "jumlahRoda: ".$ObjekKendaraan->jumlahRoda."<br/>"; //proses instansiasipemanggilan variable
echo "StatusHarga: ".$ObjekKendaraan->statusHarga(). "<br/>";//prosesinstansiasi/pemanggilan function dari kelas
echo "StatusSubsidi:".$ObjekKendaraan->statusSubsidi(). "<br/>";
?>