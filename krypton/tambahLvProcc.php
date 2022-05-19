<?php
include "connection.php";
if(isset($_POST['submit'])){
    $nama = $_POST['NamaUser'];
    $sql = "INSERT INTO role VALUES ('','$nama')";
    $data = mysqli_query($conn,$sql);
    if ($data) {
        echo " <script>
        alert('Registrasi Berhasil');
        window.location.href='LihatLevel.php';
    </script>";
       
    } else {
        echo " <script>
        alert('Registrasi Gagal');
        window.location.href='LihatLevel.php';
    </script>";
    }
}


?>