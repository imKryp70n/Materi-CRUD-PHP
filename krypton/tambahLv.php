<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Level</title>
    <link rel="stylesheet" type="text/css" href="myStyle1.css">
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
    <h3>Registrasi Level</h3>

    <form action="tambahLvProcc.php" method="post">
        <table>
            <tr>
                <td>Nama Profesi</td>
                <td>:</td>
                <td><input type="text" name="NamaUser" id=""></td>
            </tr>
        </table>
        <td><input type="submit" name="submit" value="SIMPAN"></td><br>
        <a href="LihatLevel.php">Lihat Data</a>
    </form>

</body>

</html>