<?php
    include 'connection.php';

    if (isset($_POST['tambah'])) {
        $id_order = $_POST['id_order'];
        $id_masakan = $_POST['id_masakan'];
        $keterangan = $_POST['jumlah'];
        
        $sql = "INSERT INTO `detailorder`(`Id_Order`, `Id_Masakan`, `Keterangan`, `Status_detail_order`) VALUES ('$id_order','$id_masakan','$keterangan','Belum Selesai')";

        $proses = mysqli_query($conn, $sql);

        $sql2 = "SELECT SUM(a.keterangan*b.harga_masakan) as total FROM detailorder as a INNER JOIN masakan_taufik as b ON a.Id_Masakan=b.id_masakan where a.Id_Order='$id_order' GROUP BY a.Id_Order";

        $proses2 = mysqli_query($conn, $sql2);
        $total = mysqli_fetch_array($proses2)['total'];

        $sql3 = "UPDATE `ordermasakan` SET `Keterangan_Taufik`='$total' WHERE Id_Order_Taufik='$id_order'";
        $proses3 = mysqli_query($conn, $sql3);
         if ($proses3) {
             echo " <script> alert('Data Berhasil Disimpan');window.location.href='detailOrder.php?id=$id_order';</script>";
  
        } else {
             echo " <script> alert('Data Gagal Disimpan');window.location.href='detailOrder.php?id=$id_order';</script>";
         }

    }
?>