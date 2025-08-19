<?php
$conn = mysqli_connect("localhost","root","","xiirpl1");

function query( $query ) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
};

function ubah($data) : int|string {
    global $conn;

    $id = $data['id'];
    
    $nis = $data['nis'];
    $nama = htmlspecialchars($data['nama']);
    $nilai = $data['nilai_mtk'];


    // query insert data
    $query = "UPDATE siswa01 SET
                nis = '$nis',
                nama = '$nama',
                nilai_mtk = '$nilai',
              WHERE id = '$id' ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>