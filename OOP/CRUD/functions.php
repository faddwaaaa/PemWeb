<?php
class Fungsi {
    public $koneksi;

    public function __construct($host="localhost", $user="root", $pass="", $db="xiirpl1") {
        $this->koneksi = mysqli_connect($host, $user, $pass, $db);
    }
    // function query
    public function query($query) {
        $result = mysqli_query($this->koneksi, $query);
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    // function tambah
    public function tambah($data) {
        $nis = $data['nis'];
        $nama = htmlspecialchars($data['nama']);
        $query = "INSERT INTO siswa01 (nis, nama) VALUES ('$nis','$nama')";
        mysqli_query($this->koneksi, $query);

        return mysqli_affected_rows($this->koneksi);
    }

    // function hapus
    public function hapus($id) {
        $query = "DELETE FROM siswa01 WHERE id = $id";
        mysqli_query($this->koneksi, $query);

        return mysqli_affected_rows($this->koneksi);
    }

    // function edit
    public function edit($data) {
        $id   = $data['id'];
        $nis = $data['nis'];
        $nama = htmlspecialchars($data['nama']);

        $query = "UPDATE siswa01 SET nis = '$nis', nama = '$nama' WHERE id = $id";
        mysqli_query($this->koneksi, $query);

        return mysqli_affected_rows($this->koneksi);
    }
}
?>