<?php
include "connection.php";
$id = $_GET['id'];
$Del = "DELETE FROM role WHERE Id_Role=$id";
$Delete = mysqli_query ($conn,$Del);
if ($Delete){
    echo " <script>
    alert('Data Berhasil Dihapus');
    window.location.href='LihatLevel.php';
</script>";
} else {
    echo " <script>
    alert('Data Gagal Dihapus');
    window.location.href='LihatLevel.php';
</script>";
}



?>