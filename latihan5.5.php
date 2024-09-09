<?php
class kartuBelanja{
    var $pembeli;
    var $kartuMember;
    var $totalBelanja;
    var $diskon;

    function member($kartuMember, $totalBelanja){
    switch ($kartuMember){
        case 1:
            if ($this->totalBelanja > 500000){
                $diskon = 50000;
            }elseif ($this->totalBelanja > 100000){
                $diskon = 15000;
            }
            break;
            case 0:
            if ($this->totalBelanja > 100000){
                $diskon = 5000;
            }
            break;
    }  
    }}
echo "Nama: $nama<br>";
    echo "Total Belanja: Rp " . number_format($totalBelanja, 0, ',', '.') . "<br>";
    echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
    echo "Biaya yang Dikeluarkan: Rp " . number_format($biaya_akhir, 0, ',', '.') . "<br><br>";
