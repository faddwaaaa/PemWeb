<?php
class fruit01{
    // properties
    public $nama;
    public $warna;

    // methods
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
}

$apel = new fruit01();
$apel->set_name("Apel");
echo $apel->get_name();
echo "<br>";
echo "<hr>";
$apel->set_color("Merah");
echo $apel->get_color();
echo "<br>";
?>