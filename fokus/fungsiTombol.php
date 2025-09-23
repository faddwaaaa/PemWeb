<?php
function cekTombol() {
    if (isset($_GET['btnKirim'])) {
        $nama = $_GET['nama'];
        $alamat = $_GET['alamat'];
        return [$nama, $alamat]; // kirim balik ke pemanggil
    }
    return [null, null];
}
