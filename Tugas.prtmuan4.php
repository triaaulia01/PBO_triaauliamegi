<?php
class tokopegadaian{
    var $besarpinjaman;
    var $besaranbunga;
    var $lamaangsuran;
    var $angsuran = [];

     function setpinjaman ($x)
     {
        $this->besarpinjaman = $x;
     }
     function getpinjaman()
     {
        return $this->besarpinjaman;
     }
     function setbesarbunga ($x)
     {
        $this->besaranbunga = $x;
     }
     function getbesarbunga()
     {
        return $this->besaranbunga;
     }
     function setlamaangsuran ($x)
     {
        $this->lamaangsuran = $x;
     }
     function getlamaangsuran()
     {
        return $this->lamaangsuran;
     }
     function hitungAngsuran(){
      $angsuranPokok = $this->besarpinjaman/ $this->lamaangsuran;

      for($i = 1; $i <= $this->lamaangsuran; $i++){
         $bungaBulanini = ($this->besarpinjaman *($this->besaranbunga/100)) / $this->lamaangsuran;
         $totalAngsuran = $angsuranPokok + ($bungaBulanini * ($this->lamaangsuran - $i +1));
         $this->angsuran[] = $totalAngsuran;
         
      }
     }
     function getangsuran(){
      return $this->angsuran;
}
}

$angsuran = new tokopegadaian();
$angsuran->setpinjaman(1000000);
$angsuran->setbesarbunga(10);
$angsuran->setlamaangsuran(5);
$angsuran->hitungAngsuran();
$angsuranArray = $angsuran->getangsuran();



echo "TOKO PEGADAIAN SYARIAH<br><br>";
echo "Jl Keadilan No 16<br><br>";
echo "Telp 732746238<br><br>";
echo "Program Penghitung Besaran Angsuran Hutang<br><br>";
echo "Besaran Pinjaman :Rp.",number_format($angsuran->getpinjaman(), 0, ',','.')."<br>";
echo "Masukan Besaran Bunga (%) :" .$angsuran->getbesarbunga() ."<br>";
echo "Lama Angsuran (Bulan) : " .$angsuran->getlamaangsuran() ."<br>";

for ($i = 0; $i < count($angsuranArray); $i++) {
   echo "Angsuran ke".($i + 1).": Rp." . number_format($angsuranArray[$i],0,',','.')."<br>";
}
?>