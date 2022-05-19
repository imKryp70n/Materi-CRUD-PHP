<?php
    include "connection.php";
    session_start();

    if (isset($_POST['bayar'])){
        $id_user = $_SESSION['id_role'];
        $id_order = $_POST['IDOrder'];
        $grand = $_POST['grand'];
        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date ("y-m-d");
        $total = $_POST['total'];


        if ($total < 0 ){
            echo " <script> alert('Total Bayar Kurang');window.location.href='index.php';</script>";
        } else {
            if ($total >= $grand ){
                $query = "INSERT INTO `transaksi`(`id_user`, `id_order`, `tanggal`, `total_bayar`) VALUES ('$id_user','$id_order','$tanggal','$total')";        
                $exec = mysqli_query ($conn,$query);
                $query2 = "UPDATE ordermasakan set Status_Order_Taufik ='Sudah Bayar' where ID_Order_Taufik=$id_order";
                $exec2 = mysqli_query ($conn,$query2);
                if ($exec){
                    //echo "Berhasil";
                    echo " <script>alert('Pembayaran Berhasil');window.location.href='tampil_transaksi.php';</script>";
                } else {
                    //echo "Gagal";
                    echo " <script>alert('Pembayaran Gagal');window.location.href='tampil_transaksi.php';</script>";
                }
            } else {
                echo " <script>alert('Uang kurang');window.location.href='tampil_transaksi.php';</script>";
            }
        }

    }

?>