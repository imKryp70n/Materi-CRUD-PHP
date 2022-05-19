<?php
include "connection.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStyle1.css">
    <title>Tambah Masakan</title>
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
    <form action="simpanMasakan.php" method="post">
        <div class="masakan">
            <fieldset>
                <legend>Tambahkan Masakan</legend>
                <table>
                    <tr>
                        <td>ID Masakan</td>
                        <td>:</td>
                        <td><input type="text" autocomplete="off" name="idMasakan" id=""></td>
                    </tr>
                    <tr>
                        <td>Nama Masakan</td>
                        <td>:</td>
                        <td><input type="text" autocomplete="off" name="NamaMasakan" id=""></td>
                    </tr>
                    <tr>
                        <td>Harga Masakan</td>
                        <td>:</td>
                        <td><input type="text" autocomplete="off" name="HargaMasakan" id=""></td>
                    </tr>
                    <tr>
                        <td>Status Makanan</td>
                        <td>:</td>
                        <td><select name="Status" id="">
                                <option value="Tersedia">Tersedia</option>
                                <option value="Habis">Habis</option>
                            </select></td>
                    </tr>
                    <td>
                        <input type="submit" name="tambah" value="TAMBAHKAN">
                    </td>
                </table>
            </fieldset>
        </div>
    </form>
</body>

</html>