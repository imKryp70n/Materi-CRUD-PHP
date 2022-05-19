<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
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
    <?php
    
    $id = $_GET['id'];
    ?>
    <center>
        <form action="simpan_transaksi.php" method="post">
            <div class="masakan">
                <fieldset>
                    <legend>Pembayaran</legend>
                    <table>
                        <tr>
                            <td>ID Order</td>
                            <td>:</td>
                            <td><input type="text" name="IDOrder" required readonly id="" value="<?= $id ?>"></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td><input type="text" autocomplete="off" readonly name="Tanggal_Transaksi" id=""
                                    value="<?php date_default_timezone_set("Asia/Jakarta"); echo date ("d-m-Y");?>">
                            </td>
                        </tr>
                        <?php
                                include "connection.php";
                                $query = "SELECT * FROM ordermasakan where ID_Order_Taufik =$id";
                                $exec = mysqli_query ($conn, $query);
                                $total = mysqli_fetch_array($exec)['Keterangan_Taufik'];
                                
                            ?>

                        <tr>
                            <td>Grand Total</td>
                            <td>:</td>
                            <td><input type="number" autocomplete="off" readonly name="grand" id=""
                                    value="<?=$total    ?>"></td>
                        </tr>
                        <tr>
                            <td>Bayar</td>
                            <td>:</td>
                            <td><input type="number" autocomplete="off" name="total" id="" value=""></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="bayar" value="BAYAR SEKARANG">
                            </td>
                        </tr>
                    </table>

                </fieldset>
            </div>

        </form>
    </center>
</body>

</html>