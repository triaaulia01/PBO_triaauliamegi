<?php
$buah = array('semangka', 'jeruk', 'apel', 'amggur');
echo $buah[2];
?>

<?php
$buah['semangka'] = "isinya merah";
$buah['jeruk'] = "rasanya manis";
$buah['apel'] = "warnanya merah";
$buah['anggur'] = "harganya mahal";

echo $buah['jeruk'];
?>

<?php
$buah = array('semangka' => "isinya merah", 'jeruk' => "rasanya manis", 'apel' => "warnanya merah", 'anggur' => "harganya mahal");
echo $buah['anggur']
    ?>