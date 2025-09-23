<?php
require "koneksi.php";
if (isset($_GET['kirim'])) {
    if (tambah($_GET)>0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'tampil.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'tampil.php';
        </script>
        ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    <h1>Form Tambah Data</h1>
    <form action="" method="">
        <label for=""></label>
        <input type="text" name="nama" id="nama">
        <input type="submit" name="kirim">
    </form>
</body>
</html>