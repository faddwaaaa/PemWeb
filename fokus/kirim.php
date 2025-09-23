<?php
require_once "fungsiTombol.php";
list($nama, $alamat) = cekTombol();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Mengisi Data</h1>
    <form action="" method="get">
        <label for="name">Nama</label>
        <input type="text" name="nama"><br>
        <label for="alamat">Alamat</label><br>
        <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea><br>
        <button type="submit" name="btnKirim">Kirim</button>
    </form>

    <h3>Nama: <?= $nama; ?></h3>
    <h3>Alamat: <?= $alamat; ?></h3>
</body>
</html>
