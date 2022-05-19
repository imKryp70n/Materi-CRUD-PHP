<?php
include "connection.php";
if (isset($_POST['tambah'])){
    $id = $_POST['idMasakan'];
    $nama = $_POST['NamaMasakan'];
    $harga = $_POST['HargaMasakan'];
    $status = $_POST['Status'];
    $sql = "INSERT INTO `masakan_taufik`(`id_masakan`, `nama_masakan`, `harga_masakan`, `status_masakan`) VALUES ('$id','$nama','$harga','$status')";
    $addMasakan = mysqli_query ($conn,$sql);
    if ($addMasakan){
        echo " <script>
        alert('Makanan berhasil ditambahkan');
        window.location.href='ListMasakan.php';
    </script>";
    } else {
        echo " <script>
        alert('Makanan gagal ditambahkan');
        window.location.href='TambahMasakan.php';
    </script>";
    }
}
?>1