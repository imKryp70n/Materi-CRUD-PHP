<?php
include "connection.php";
$id = $_GET['id'];
$Del = "DELETE FROM user WHERE id=$id";
$Delete = mysqli_query ($conn,$Del);
if ($Delete){
    echo " <script>
    alert('Data Berhasil Dihapus');
    window.location.href='LihatUser.php';
</script>";
} else {
    echo " <script>
    alert('Data Gagal Dihapus');
    window.location.href='LihatUser.php';
</script>";
}



?>