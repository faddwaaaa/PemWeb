<?php
require_once "koneksi.php";
$nama = query("SELECT * FROM fungsi");

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
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($nama as $row):
            $id = $row["id"];
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td>
                <a href="edit.php?id=<?= $id; ?>">Edit</a> | 
                <a href="hapus.php?id=<?= $id; ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
