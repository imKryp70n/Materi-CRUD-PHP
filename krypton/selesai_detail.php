<?php
include "connection.php";
    $id_det = $_GET['id_det'];
    $id = $_GET ['id'];
    $result = mysqli_query ($conn , "UPDATE `detailorder` SET `Status_detail_order`='Selesai' WHERE Id_Detail_Order = $id_det");

    $sql3 = "SELECT a.Id_Detail_Order, a.Id_Order, a.Id_Masakan , a.Keterangan , b.nama_masakan from detailorder as a INNER JOIN masakan_taufik as b on a.Id_Masakan = b.id_masakan WHERE a.Id_Order = '$id' and a.Status_detail_order = 'belum selesai'";

    $detail2 = mysqli_query ($conn, $sql3);
    $jumlah = mysqli_num_rows ($detail2);

    if ($jumlah != 0 ){
        echo " <script> window.location.href='detailOrder.php?id=$id';</script>";
    } else {
        $result = mysqli_query ($conn, "UPDATE ordermasakan SET Status_Order_Taufik = 'Selesai' WHERE ID_Order_Taufik = '$id'");
        echo " <script> alert('Pesanan Sudah Selesai');window.location.href='orderMasakan.php';</script>";
    }


?>