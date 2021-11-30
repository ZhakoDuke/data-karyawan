<?php 
$conn = mysqli_connect("Localhost", "root", "", "makomart");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;
    $nama = htmlspecialchars($data["username"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $umur = htmlspecialchars($data["umur"]);
    $gaji = htmlspecialchars($data["gajikaryawan"]);

    $query = "INSERT INTO namabozz VALUES('', '$nama', '$alamat', '$umur', '$gaji')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>