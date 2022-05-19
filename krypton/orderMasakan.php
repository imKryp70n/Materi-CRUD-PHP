<?php
include "connection.php";
$sql = "SELECT * FROM ordermasakan INNER JOIN user as a on ordermasakan.Id_User_Taufik = a.id where Status_Order_Taufik = 'Belum Selesai'";
$orderData = mysqli_query($conn, $sql);

    if (isset($_POST['Cari'])){
        $keyword = $_POST['keyword'];
        if($keyword == 'Seluruh'){
            $sql = "SELECT * FROM ordermasakan";
            $orderData = mysqli_query($conn, $sql);
        } else if ($keyword == 'Selesai'){
            $sql = "SELECT * FROM ordermasakan where Status_Order_Taufik = 'Selesai'";
            $orderData = mysqli_query($conn,$sql);
        } else if ($keyword == 'Sudah Bayar'){
            $sql = "SELECT * FROM ordermasakan where Status_Order_Taufik = 'Sudah Bayar'";
            $orderData = mysqli_query($conn,$sql);
        } else {
            $sql = "SELECT * FROM ordermasakan where Status_Order_Taufik = 'Belum Selesai'";
            $orderData = mysqli_query($conn,$sql);
        } 

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="MyStyle1.css">
    <title>Order Masakan</title>
</head>

<body>

    <div class="Masakan">
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

    <div class="nav1">
        <ul>
            <li><a href="order.php">[+] Tambah Orderan</a></li>
            <li><a href="CetakOrder.php">Cetak Orderan</a></li>
            <h3>Order Menu</h3>
            <br>
            <form action="" method="post">
                <center>
                    <select class="classic" name="keyword">
                        <option value="Seluruh">Seluruh</option>
                        <option value="Sudah Bayar">Sudah Bayar</option>
                        <option value="Selesai">Selesai</option>
                        <option value="Belum Selesai">Belum Selesai</option>
                    </select>

                    <button type="submit" name="Cari">Cari</button>
                </center>
            </form>
        </ul>

        <center>
            <table border="1" cellspacing="0" cellpadding="10px">
                <thead>
                    <tr>
                        <th>ID ORDER</th>
                        <th>NO MEJA</th>
                        <th>TANGGAL</th>
                        <th>ID USER</th>
                        <th>KETERANGAN</th>
                        <th>STATUS ORDER</th>
                        <th>LIHAT</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    if (mysqli_num_rows($orderData) == 0) {
                        echo "<tr>";
                        echo "<td colspan='7'>Data Kosong</td>";
                        echo "</tr>";
                        
                    } else {
                        foreach ($orderData as $order) {
                            echo "<tr>";
                            
                            echo "<td>".$order['ID_Order_Taufik']."</td>";
                            echo "<td>".$order['No_Meja_Taufik']."</td>";
                            echo "<td>".$order['Tanggal_Taufik']."</td>";
                            echo "<td>".$order['nama_user']."</td>";
                            echo "<td>".$order['Keterangan_Taufik']."</td>";
                            echo "<td>".$order['Status_Order_Taufik']."</td>";
                            echo "<td><a href='detailOrder.php?id=".$order['ID_Order_Taufik']."'>Detail Order</a></td>";
                            echo "</tr>";
                        }
                        
                    }
                    
                    ?>

                </tbody>
        </center>
    </div>
    </form>
</body>

</html>