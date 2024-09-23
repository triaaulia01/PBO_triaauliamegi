<?php
 
class Segitiga
{
    var $t;
 
    public function setbaris($t)
    {
        $this->t = $t;
    }
 
    public function getbaris()
    {
        return $this->t;
    }
 
    public function segitigasatu()
    {
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 5; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($j = 1; $j <= (2 * $i); $j++) {
                echo "* ";
            }
         
            echo "<br />";
        }
    }
 
 
    public function segitigadua()
    {
        for ($i = 1; $i <= $this->t; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
 
        for ($i = $this->t - 1; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }
 
    public function segitigatiga()
    {
        for ($i = 1; $i <= $this->t; $i++) {
            for ($j = $this->t; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }
            echo "<br>";
        }
 
        for ($i = $this->t - 1; $i >= 1; $i--) {
            for ($j = $this->t; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }
            echo "<br>";
        }
    }
}
 
$segitiga1 = new Segitiga();
$segitiga1->setbaris(6);
echo "<br>Segitigasatu:<br>";
$segitiga1->segitigasatu();
 
$segitiga2 = new Segitiga();
$segitiga2->setbaris(6);
echo "Segitigadua:<br>";
$segitiga2->segitigadua();
 
$segitiga3 = new Segitiga();
$segitiga3->setbaris(8);
echo "<br>Segitigatiga:<br>";
$segitiga3->segitigatiga();
?>