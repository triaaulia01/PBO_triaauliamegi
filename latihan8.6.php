<?php
class manusia{
    public $nama="Aulia";
    var $kelas = "SI 2A";

    function tampilkan_nama(){
        return $this->nama;
    }
    public function tampilkan_kelas(){
        return $this->kelas;
    }

}
$manusia = new manusia();
echo "nama :".$manusia->tampilkan_nama()."<br/>";
echo "Kelas: ".$manusia->tampilkan_kelas()."<br/>";
?>