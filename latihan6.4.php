<?php
class perulangan{
    public function loop(){
        $array = array('subang','bandung','jakarta','surabaya','yogyakarta');
        foreach ($array as $key){
            echo $key."<br/>";
        }
    }

}
$Objekperulangan = new perulangan();
echo "nama-nama kota di pulau jawa :"."<br/>";
echo $Objekperulangan->loop()."<br/>";
?>