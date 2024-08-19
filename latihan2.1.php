<?php 
class Guru {
    var $nama_nama = array("de","ce","ve","re");
    var $nama_guru;
    var $NIK;
    var $jabatan;
    var $alamat;
}

class murid {
    var $nama_siswa;
    var $NIS;
    var $kelas;
    var $alamat;
}

class Kurikulum {
    var $tahun_akademik;
    var $sks_matkul;
}

class Mobil {
    var $jumlahRoda=4;
    var $warna="merah";
    var $bahanBakar="pertamax";
    var $harga=120000000;
    var $merek='A';


    public function statusHarga()
    {
        if ($this->harga > 50000000) $status = 'mahal';
        else $status = 'murah';
        return $status;
    }

    
}

$ObjekBMW = new Mobil;
$ObjekTesla = new Mobil;
$OjekAudi = new Mobil;

?>
