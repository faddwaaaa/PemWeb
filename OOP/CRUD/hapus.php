<?php
require "functions.php";

$dbHapus = new Fungsi();

$id = $_GET['id'];

if ($dbHapus->hapus($id) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data gagal dihapus!');
        document.location.href = 'index.php';
    </script>
    ";
}
?>
