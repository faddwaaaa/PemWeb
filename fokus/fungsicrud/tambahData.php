<?php
require "tambah.php";
$conn = mysqli_connect("localhost","'root","","xiirpl1");
$query = "INSERT INTO crud01 values ('','$nama','$alamat')";

if(isset($_GET["btnKirim"])){
    $nama = $_GET["nama"];
    $alamat = $_GET["alamat"];
    mysqli_query($conn, $query);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="" method="get">
        <label for="name">Nama</label>
        <input type="text" name="nama"><br>
        <label for="alamat">Alamat</label><br>
        <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea><br>
        <button type="submit" name="btnKirim">Kirim</button>
    </form>
</body>
</html>