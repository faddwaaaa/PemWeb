<?php
require "functions.php";

$dbTambah = new Fungsi();

if (isset($_POST['kirim'])) {
    if ($dbTambah->tambah($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal ditambahkan');
            document.location.href = 'index.php';
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
    <form action="" method="post">
        <label for="nis">NIS</label>
        <input type="number" name="nis" id="nis" required><br><br>

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <input type="submit" name="kirim" value="Kirim">
    </form>
</body>
</html>