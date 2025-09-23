<?php
require "functions.php";

$dbEdit = new Fungsi();

$id = $_GET['id'];

$result = $dbEdit->query("SELECT * FROM siswa01 WHERE id = $id");
$row = $result[0];

if (isset($_POST['kirim'])) {
    if ($dbEdit->edit($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal diubah!');
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
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">

        <label for="nis">NIS</label>
        <input type="number" name="nis" id="nis" value="<?= $row['nis']; ?>" required><br><br>

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="<?= $row['nama']; ?>" required><br><br>

        <input type="submit" name="kirim" value="Simpan">
    </form>
</body>
</html>
