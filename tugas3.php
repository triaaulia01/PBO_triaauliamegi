<?php
class tokoPegadaian{
    var $besarPinjam = 1000000;
    var $besarBunga=10;
    var $totalPinjaman = 1100000;
    var $angsuranBulan = 5;
    var $besaranAngsuran = 220000;
    var $keterlambatanAngsuran = 40;
    var $dendaPerhari = 0.15;

    
    function BesarPinjaman()
    {
        return $this->besarPinjam + ($this->besarPinjam * $this->besarBunga + $this->besarPinjam);
    }
    
    function dendeKeterlambatan()
    {
            $dendaPerhari = 0.15;
        return $this->keterlambatanAngsuran * $this-> dendaPerhari;
    }
    function besarAngsuran()
    {
        $totalPinjaman = $this->besarPinjam;
        return $this->totalPinjaman / $this->angsuranBulan;
    }
} 
$ObjektokoPegadaian = new tokoPegadaian();
echo "Besaran Pinjaman : ".$ObjektokoPegadaian-> BesarPinjaman(). "<br />";
echo "dendaketerlambatan : ".$ObjektokoPegadaian-> dendeKeterlambatan(). "<br />";
echo "besarAngsuran : ".$ObjektokoPegadaian-> besarAngsuran(). "<br />";
?>
