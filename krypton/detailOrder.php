<?php
include "connection.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM `detailorder` WHERE Id_Order = '$id'";
    $sql2 = "SELECT detailorder.Id_detail_order, detailorder.Id_Order, detailorder.Id_Masakan, detailorder.Status_detail_order, detailorder.Keterangan,masakan_taufik.nama_masakan from detailorder inner join masakan_taufik on detailorder.id_masakan = masakan_taufik.id_masakan where detailorder.Id_Order = '$id'";
    $sql3 = "SELECT detailorder.Id_detail_order, detailorder.Id_Order, detailorder.Id_Masakan, detailorder.Status_detail_order, detailorder.Keterangan,masakan_taufik.nama_masakan from detailorder inner join masakan_taufik on detailorder.id_masakan = masakan_taufik.id_masakan where detailorder.Id_Order = '$id' and detailorder.Status_detail_order = 'belum selesai'";
    
    $detail = mysqli_query($conn, $sql2);
    $detail2 = mysqli_query($conn, $sql3);
    $jumlah = mysqli_num_rows($detail2);
    
// echo "$id $jumlah";
// var_dump($jumlah);

$query2 = "SELECT SUM(a.Keterangan*b.harga_masakan) as total FROM detailorder as a INNER JOIN masakan_taufik as b ON a.Id_Masakan = b.id_masakan where a.Id_Order=$id GROUP BY a.Id_Order";
$proses2 = mysqli_query ($conn, $query2);
$total = mysqli_fetch_array ($proses2)['total'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Order</title>
    <link rel="stylesheet" href="myStyle1.css">
</head>

<body>
    <div class="nav">
        <ul>
            <li><a href="LihatUser.php">User </a></li>
            <li><a href="ListMasakan.php">Masakan </a></li>
            <li><a href="LihatLevel.php">Level </a></li>
            <li><a href="orderMasakan.php">Order </a></li>
            <li><a href="#">Detail </a></li>
            <li><a href="tampil_transaksi.php">Transaksi </a></li>
            <li><a href="logout.php" method="post" class="logout">Logout </a></li>
        </ul>
    </div>
    <br>
    <a href="tambah_detail.php?id=<?= $id ?>">[+] Tambah Detail Order</a> <br>

    <center>
        <table border="1" cellspacing="0" cellpadding="10px">
            <thead>
                <tr>
                    <th>ID DETAIL ORDER</th>
                    <th>ID MASAKAN</th>
                    <th>NAMA MASAKAN</th>
                    <th>JUMLAH</th>
                    <th>STATUS</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($detail as $row) : ?>
                <tr>
                    <td><?= $row["Id_detail_order"]; ?></td>
                    <td><?= $row["Id_Masakan"]; ?></td>
                    <td><?= $row["nama_masakan"]; ?></td>
                    <td><?= $row["Keterangan"]; ?></td>
                    <td><?= $row["Status_detail_order"]; ?></td>
                    <td>
                        <?php 
                         include "connection.php";
                         $status = $row["Status_detail_order"];
                         if ($jumlah != 0 ){
                             if ($status == "selesai"){
                                    echo "selesai";
                             } else {
                                    echo "<a href='selesai_detail.php?id_det=$row[Id_detail_order]&id=$id'>Selesai</a>";
                             }
                         } else {
                             $result = mysqli_query ($conn, "update detailorder SET Status_detail_order = 'selesai' WHERE Id_detail_order = $id");
                         }
                        ?>
                        <!--<a href="hapusMasakan.php?id=<?php //$row['id_masakan']; ?>"
                            onClick="return confirm ('Apakah anda ingin menghapusnya?');">Hapus</a>-->
                    </td>
                </tr>

                <?php endforeach; ?>
            </tbody>
            <tr>
                <td colspan=5>
                    <?php echo "Total Bayar";?>
                </td>
                <td>
                    <?php echo "Rp. $total"; ?>
                </td>
            </tr>
    </center>


</body>

</html>