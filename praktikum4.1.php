<?php
class mahasiswa
{
    var $nama;
    var $kelas;
    var $MataKuliah;
    var $nilai;
    function setnama($x)
    {
        $this->nama = $x;
    }

    function getnama()
    {
        return $this->nama;
    }
    function setkelas($x)
    {
        $this->kelas = $x;
    }

    function getkelas()
    {
        return $this->kelas;
    }
    function setmatakuliah($x)
    {
        $this->MataKuliah = $x;
    }

    function getmatakuliah()
    {
        return $this->MataKuliah;
    }
    function setnilai($x)
    {
        $this->nilai = $x;
    }

    function getnilai()
    {
        return $this->nilai;
    }
    function statuskuis()
    {
        if ($this->nilai >= 75)
            $status = 'lulus kuis';
        else
            $status = 'tidak lulus kuis';
        return $status;
    }

}
$Data1 = array('Aditya', 'SI 2', 'pemrograman berorientasi objek', '80', );
$Data2 = array('Shinta', 'SI 2', 'pemrograman berorientasi objek', '75', );
$Data3 = array('Inue', 'SI 2', 'pemrograman berorientasi objek', '55', );
for ($i = 1; $i <= 3; $i++) {
    for ($h = 0; $h <= 3; $h++) {
        ${"mahasiswa$i"} = new mahasiswa();
        ${"mahasiswa$i"}->setnama(${"Data$i"}[0]);
        ${"mahasiswa$i"}->setkelas(${"Data$i"}[1]);
        ${"mahasiswa$i"}->setmatakuliah(${"Data$i"}[2]);
        ${"mahasiswa$i"}->setnilai(${"Data$i"}[3]);

    }
}

for ($i = 1; $i <= 3; $i++) {
    echo "mahasiswa$i<br>", "NAMA ="
        . ${"mahasiswa$i"}->getnama() . "<br>", "KELAS ="
        . ${"mahasiswa$i"}->getkelas() . "<br>", "MATA KULIAH ="
        . ${"mahasiswa$i"}->getmatakuliah() . "<br>", "NILAI ="
        . ${"mahasiswa$i"}->getnilai() . "<br>", "KUIS ="
        . ${"mahasiswa$i"}->statuskuis() . "<br><br>";
}
?>