<?php
include "connection.php";
$id = $_GET['id'];
$Del = "DELETE FROM masakan_taufik WHERE id_masakan=$id";
$Delete = mysqli_query ($conn,$Del);
if ($Delete){
    echo " <script>
    alert('Masakan Berhasil Dihapus');
    window.location.href='ListMasakan.php';
</script>";
} else {
    echo " <script>
    alert('Masakan Gagal Dihapus');
    window.location.href='ListMasakan.php';
</script>";
}



?>