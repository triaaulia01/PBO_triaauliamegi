<?php
class manusia{
    private $nama="Aulia";
    private $kelas = "SI 2A";

    private function m_nama(){
        return $this->nama;
    }
    public function tampilkan_nama(){
        return $this->m_nama();
    }
    function tampilkan_kelas(){
        return $this->kelas;
    }

}
$manusia = new manusia();
echo "nama :".$manusia->tampilkan_nama()."<br/>";
echo "Kelas: ".$manusia->tampilkan_kelas()."<br/>";
?>