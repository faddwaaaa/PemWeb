<?php
require "Class01.php";

$penggemarJeruk = new Buah("Jeruk","Orange",1,7000);
// $nanas = new Buah("Nanas","Kuning");
// $nanas->set_nama("Nanas");
// $nanas->get_nama();
$penggemarNanas = new Buah("Nanas","Kuning",1,8000);
$penggemarNanas->nama;

echo $penggemarJeruk->info();
echo "<br>";
echo $penggemarNanas->info();

?>