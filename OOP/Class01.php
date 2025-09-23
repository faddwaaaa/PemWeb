<?php
// Class
class Buah{
    // Properti, Access Modifier (public, protected, private)
    public $nama;
    public $warna;
    public $berat;
    public $harga;
    // Constructor
    public function __construct($nama,$warna,$berat,$harga){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->berat = $berat;
        $this->harga = $harga;
    }

    // Method
    function set_nama($nama){
        $this->nama = $nama;
    }
    function get_nama(){
        return $this->nama;
    }
    function info(){
        return "{$this->nama} berwarna {$this->warna} {$this->berat}kg nya harganya {$this->harga}";
    }

}
?>