<!DOCTYPE html>
<html lang="en">

<head>
    <title>List Masakan</title>
    <link rel="stylesheet" type="text/css" href="myStyle1.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>

</head>
<?php

    
    include 'connection.php';
    $sql = "SELECT * FROM masakan_taufik";
    $masakan = mysqli_query($conn , $sql);
    if (isset($_POST['Cari'])){
        $keyword = $_POST['keyword'];
        if($keyword == 'seluruh'){
            $sql = "SELECT * FROM masakan_taufik";
            $masakan = mysqli_query($conn, $sql);
        } else if ($keyword == 'tersedia'){
            $sql = "SELECT * FROM masakan_taufik where status_masakan = 'tersedia'";
            $masakan = mysqli_query($conn,$sql);
        } else {
            $sql = "SELECT * FROM masakan_taufik where status_masakan = 'habis'";
            $masakan = mysqli_query($conn,$sql);
        } 

    }
?>

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
            <li><a href="TambahMasakan.php">[+] Tambah Masakan</a></li>
            <li><a href="CetakMakanan.php">Cetak Makanan</a></li>
            <br>
            <form action="" method="post">
                <center>
                    <select class="classic" name="keyword">
                        <option value="seluruh">Seluruh</option>
                        <option value="tersedia">Tersedia</option>
                        <option value="habis">Habis</option>
                    </select>

                    <button type="submit" name="Cari">Cari</button>
                </center>
            </form>
        </ul>
        <center>
            <table border="1" cellspacing="0" cellpadding="10px">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAMA MASAKAN</th>
                        <th>HARGA MASAKAN</th>
                        <th>STATUS MASAKAN</th>
                        <th>Edit | Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($masakan as $row) : ?>
                    <tr>
                        <td><?= $row["id_masakan"]; ?></td>
                        <td><?= $row["nama_masakan"]; ?></td>
                        <td><?= $row["harga_masakan"]; ?></td>
                        <td><?= $row["status_masakan"]; ?></td>
                        <td>
                            <?php 
                        echo "<a href='editMasakan.php?id=$row[id_masakan]'>Edit</a>";
                        ?>
                            <a href="hapusMasakan.php?id=<?=$row['id_masakan']; ?>"
                                onClick="return confirm ('Apakah anda ingin menghapusnya?');">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
        </center>
    </div>
    
</body>

</html>