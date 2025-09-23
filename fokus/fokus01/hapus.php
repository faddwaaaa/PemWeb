<?php
require_once "koneksi.php";

$id = $_GET['id'];
hapus($id);

header("Location: tampil.php");
exit;
?>
