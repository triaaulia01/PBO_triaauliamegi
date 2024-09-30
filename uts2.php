<?php
class keyboard{
    private $username= "aulia";
    private $password= "1122";

    function tampilkan_form_login(){
    echo "Selamat datang di Aplikasi Bangun Ruang CLI\n";
    echo "Silahkan Login terlebih dahulu:\n";
    echo "Masukkan username: ";
    $username = trim(fgets(STDIN));
    echo "Masukkan password: ";
    $password = trim(fgets(STDIN));
   
    return array($username, $password);
}
function verifikasi_login($username, $password) {
    global $valid_username, $valid_password;
    return ($username == $valid_username && $password == $valid_password);
}
function tampilkan_Bangun_Ruang() {
    echo "Selamat datang, Anda telah berhasil login di Aplikasi Bangun Ruang CLI\n";
    echo "Silahkan pilih salah satu bangun ruang:\n";
    echo "1. Persegi\n";
    echo "2. Persegi Panjang\n";
    echo "3. Segitiga\n";
    echo "4. Lingkaran\n";
    echo "5. Belah Ketupat\n";
    echo "Pilih nomor bangun ruang: ";
    $pilihan = trim(fgets(STDIN));
    switch($pilihan) {
        case 1:
            hitung_persegi();
            break;
        case 2:
            hitung_persegi_panjang();
            break;
        case 3:
            hitung_segitiga();
            break;
        case 4:
            hitung_lingkaran();
            break;
        case 5:
            hitung_belah_ketupat();
            break;
        default:
            echo "Pilihan tidak valid!\n";

}
}
}
list($username, $password) = tampilkan_form_login();
 
if (verifikasi_login($username, $password)) {
    tampilkan_pilihan_bangun_ruang();
} else {
    echo "Mohon maaf, username dan password yang Anda masukkan salah!\n";
    echo "Silahkan kembali login.\n";
    list($username, $password) = tampilkan_form_login();
    if (verifikasi_login($username, $password)) {
        tampilkan_pilihan_bangun_ruang();
    } else {
        echo "Login gagal, program berhenti.\n";
    }
}
?>
