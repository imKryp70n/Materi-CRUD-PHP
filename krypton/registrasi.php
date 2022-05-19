<?php
include "connection.php";
if(isset($_POST['submit'])){
    $level = $_POST['id_role'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['NamaUser'];
    $sql = "INSERT INTO user VALUES ('','$level','$username','$password','$nama')";
    $data = mysqli_query($conn,$sql);
    if ($data) {
        echo " <script>
        alert('Registrasi Berhasil');
        window.location.href='LihatUser.php';
    </script>";
       
    } else {
        echo " <script>
        alert('Registrasi Gagal');
        window.location.href='LihatUser.php';
    </script>";
    }
}


?>