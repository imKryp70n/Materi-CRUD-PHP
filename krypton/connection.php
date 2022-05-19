<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "taufik_db_transaksi";
    $conn = new mysqli ($host, $user, $password, $database);
    if ($conn -> connect_error) {
        echo "<script>alert('Koneksi Gagal')</script>";
    } else{
        
    }

?>