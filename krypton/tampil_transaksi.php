<?php
    include "connection.php";
    $sql = "SELECT * FROM transaksi";
    $SQL2 = "SELECT a.Id_detail_order, b.Id_Order_Taufik,c.id_masakan,c.nama_masakan,a.Keterangan,a.Status_detail_order FROM detailorder as a, ordermasakan as b, masakan_taufik as c where a.Id_Order=b.ID_Order_Taufik and a.Id_Masakan = c.id_masakan";
    $transaksi = mysqli_query ($conn, $SQL2);
    
?>

<?php
    include "connection.php";
    $sql3 = "SELECT * FROM ordermasakan as a INNER JOIN user as b on a.Id_User_Taufik=b.id_role WHERE a.status_order_taufik='Selesai'";
    $order = mysqli_query($conn,$sql3);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
    <link rel="stylesheet" href="myStyle1.css">
</head>

<body>
    <div class="home">
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
    </div>

    <center>
        <table border="1" cellspacing="0" cellpadding="10px">
            <thead>
                <tr>
                    <th>ID ORDER</th>
                    <th>NO MEJA</th>
                    <th>TANGGAL</th>
                    <th>KASIR</th>
                    <th>TOTAL BAYAR</th>
                    <th>STATUS</th>
                    <th>LIHAT</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                    if (empty (mysqli_num_rows($order))) {
                        echo "<tr>";
                        echo "<td colspan='7'>Data Kosong</td>";
                        echo "</tr>";
                    } else {
                        while ($row = mysqli_fetch_assoc($order)) {
                            echo "<tr>";
                            echo "<td>".$row['Id_Order_Taufik']."</td>";
                            echo "<td>".$row['No_Meja']."</td>";
                            echo "<td>".$row['Tanggal_Order']."</td>";
                            echo "<td>".$row['Nama_User']."</td>";
                            echo "<td>".$row['Total_Bayar']."</td>";
                            echo "<td>".$row['Status_Order_Taufik']."</td>";
                            echo "<td><a href='detail_transaksi.php?id=".$row['Id_Order_Taufik']."'>LIHAT</a></td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </center>
</body>

</html>