<?php
require "functions.php";

$dbTampil = new Fungsi();
$nama = $dbTampil->query("SELECT * FROM siswa01 ORDER BY nis ASC");

$no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data</title>
</head>
<body>
    <h1>Tampilan Data</h1>
    <a href="tambah.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($nama as $row): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nis']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> | 
                <a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
