<?php 

require 'functionsbozz.php';

$namabozz = query("SELECT * FROM namabozz");

if( isset($_POST["submit"]) ) {

    if( tambah($_POST) > 0 ) {
    echo "
        <script>
            alert('Berhasil Menambah Boss!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
    echo "
        <script>
            alert('Gagal Menambah Boss!');
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boss MakoMart</title>
</head>
<body>
    <h5>Boss MakoMart</h5>

    <form action="" method="POST">
    <table border="1" cellpadding="3" cellspacing="3">
        <tr>
            <td>Ganti Boss</td>
        </tr>
        <tr>
            <td><label for="username">Nama Boss </label></td>
            <td>:</td>
            <td><input type="text" name="username" id="username"><td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat </label></td>
            <td>:</td>
            <td><input type="text" name="alamat" id="alamat"><td>
        </tr>
        <tr>
            <td><label for="umur">Umur </label></td>
            <td>:</td>
            <td><input type="text" name="umur" id="umur"><td>
        </tr>
        <tr>
            <td><label for="gajikaryawan">Gaji Karyawan </label></td>
            <td>:</td>
            <td><input type="text" name="gajikaryawan" id="gajikaryawan"><td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Ganti!</button></td>
        </tr>
    </table>
</form>

<br><br>
<table border="1" cellpadding="3" cellspacing="3">
    <tr>
        <th>Nama Boss</th>
        <th>Alamat</th>
        <th>Umur</th>
        <th>Gaji Karyawan</th>
    </tr>
    <?php foreach( $namabozz as $nabz ) : ?>
        <tr>
            <td><?= $nabz["namabozz"] ?></td>
            <td><?= $nabz["alamat"] ?></td>
            <td><?= $nabz["umur"] ?></td>
            <td><?= $nabz["gajikaryawan"] ?></td>
            <td></td>
        </tr>
        <?php endforeach; ?>
    </table>
<br><br>

    <a href="index.php">Balik</a>
</body>
</html>