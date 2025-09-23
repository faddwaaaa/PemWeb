<?php
$conn = mysqli_connect("localhost","root","","xiirpl1");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
};

function tambah($data) {
    global $conn;

    $nama = htmlspecialchars($data['nama']);

    $query = "INSERT INTO fungsi (nama) VALUES ('$nama')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
};

function hapus($id) {
    global $conn;

    $query = "DELETE FROM fungsi WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
};

function edit($data) {
    global $conn;

    $id   = $data['id'];
    $nama = htmlspecialchars($data['nama']);

    $query = "UPDATE fungsi SET nama = '$nama' WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
};
?>
