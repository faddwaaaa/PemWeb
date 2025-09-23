<?php
class fruit02{
    // properties
    public $nama;
    public $warna;
    public $harga;

    // methods
    function set_price($harga){
        $this->harga = $harga;
    }

    function set_name($nama){
        $this->nama = $nama;
    }

    function set_color($warna){
        $this->warna = $warna;
    }

    function get_name(){
        return $this->nama;
    }

    function get_color(){
        return $this->warna;
    }

    function get_info(){
        return $this->nama . " " . $this->warna . " harganya " . $this->harga;
    }
}

$apel = new fruit02();
$pisang = new fruit02();
$semangka = new fruit02();

$apel->set_name("Apel");
$apel->set_color("merah");
$apel->set_price("2000");
echo $apel->get_info(); 
echo "<br>";

$pisang->set_name("Pisang");
$pisang->set_color("kuning");
$pisang->set_price("3000");
echo $pisang->get_info(); 
echo "<br>";

$semangka->set_name("Semangka");
$semangka->set_color("hijau");
$semangka->set_price("10000");
echo $semangka->get_info(); 
echo "<br>";
?>