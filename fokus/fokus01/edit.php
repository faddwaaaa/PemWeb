<?php
require "koneksi.php";

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM fungsi WHERE id = $id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['kirim'])) {
    if (edit($_POST) > 0) {
        echo "Data berhasil diubah!";
        header("Location: tampil.php");
        exit;
    } else {
        echo "Gagal mengubah data!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">

        <label for="">Nama</label>
        <input type="text" name="nama" value="<?= $row['nama']; ?>">

        <input type="submit" name="kirim" value="Simpan">
    </form>
</body>
</html>
