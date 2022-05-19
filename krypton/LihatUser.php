<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" type="text/css" href="myStyle1.css">

</head>
<?php
    include 'connection.php';
    $sql = "SELECT * FROM user";
    $data = mysqli_query($conn , $sql);
    if ($conn -> connect_error) {
        echo("Gagal terhubung dengan USER: ");
    } else {
        //echo("Koneksi Berhasil.");
    }
    ?>

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
    <center>
        <a href="simpan.php">[+] Tambahkan Data</a>
        <table border="1" cellspacing="0" cellpadding="10px">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID_Role</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama User</th>
                    <th>Edit | Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) : ?>
                <tr>
                    <td><?= $row["id"]; ?></td>
                    <td><?= $row["id_role"]; ?></td>
                    <td><?= $row["username"]; ?></td>
                    <td><?= $row["password"]; ?></td>
                    <td><?= $row["nama_user"]; ?></td>
                    <td>
                        <?php 
                        echo "<a href='edit.php?id=$row[id]'>Edit</a>";
                        ?>
                        <a href="hapus.php?id=<?=$row['id']; ?>" onClick="return confirm ('yakin?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </center>
</body>

</html>