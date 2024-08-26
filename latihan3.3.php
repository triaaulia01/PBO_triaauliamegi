<?php
class kendaraan {
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;

    function statusHarga() {
        // Determine the status based on the price of the vehicle
        if ($this->harga > 50000000) {
            $status = 'Mahal';
        } else {
            $status = 'Murah';
        }
        return $status;
    }
}

// Create the first vehicle object
$objekKendaraan1 = new kendaraan();
$objekKendaraan1->merek = "Yamaha MIO";  // set property
$objekKendaraan1->harga = 10000000; // set property

// Create the second vehicle object
$objekKendaraan2 = new kendaraan();
$objekKendaraan2->merek = "Toyota Avanza"; // set property
$objekKendaraan2->harga = 100000000; // set property

// Output the details for the second vehicle
echo "Merek: " . $objekKendaraan2->merek; // Output Merek: Toyota Avanza
echo "<br>";
echo "Nominal Harga: " . $objekKendaraan2->harga; // Output Nominal Harga: 100000000
echo "<br>";
echo "Status Harga Kendaraan: " . $objekKendaraan2->statusHarga(); // Output Status Harga Kendaraan: Mahal
?>