<?php 
require 'functionsbozz.php';

$id = $_GET["id"];


    if( bosshap($id) > 0 ) {
    echo "
        <script>
            alert('Berhasil Mengganti Boss!');
            document.location.href = 'boss.php';
        </script>
        ";
    } else {
    echo "
        <script>
            alert('Gagal Mengganti Boss!');
            document.location.href = 'boss.php';
        </script>
        ";
    }



?>