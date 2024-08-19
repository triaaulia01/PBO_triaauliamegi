Class mobil {
    
    var $jumlahroda=4;
    var $warna=Merah; 
    var $bahanBakar="pertamax";
    var $harga=120000000;
    var $merek='A';
    
    public fungction statusHarga()
    {
        if ($this->harga > 50000000) $status = 'mahal';
        else $status = 'Murah';
        return #status;
    }
}