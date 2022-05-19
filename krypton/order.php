<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="MyStyle1.css">
    <title>Order Makanan</title>
</head>

<body>

    <div id="section">
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
        <h2>PEMESANAN MAKANAN</h2>
        <?php
        include 'connection.php';
        //include 'autoidorder.php';
        //$lastID = FormatNoTrans(OtomatisID());
        ?>
        <?php 
            session_start();
            if (empty($_GET['destroy']) ==  false) {
                session_destroy();
            }
            //session_destroy();
        
        ?>


        <center>
            <form action="" method="post">
                <div class="masakan">
                    <fieldset>
                        <legend>Tambahkan Masakan</legend>
                        <table>
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td><input type="text" autocomplete="off" readonly name="Tanggal_Transaksi" id=""
                                        value="<?php date_default_timezone_set("Asia/Jakarta"); echo date ("d-m-Y");?>">
                                </td>
                            </tr>
                            <tr>
                                <td>No Meja</td>
                                <td>:</td>
                                <td><select name="noMeja" id="" <?php 
                            for ($i = 0; $i <= 10; $i++){
                                echo "<option value='$i'>$i</option>";
                            }                  
                            ?>>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Makanan</td>
                                <td>:</td>
                                <td><select name="NamaMasakan" id="">
                                        <?php
                                        $query = "SELECT `id_masakan`, `nama_masakan`, `status_masakan` FROM `masakan_taufik` WHERE status_masakan = 'Tersedia'";
                                        
                                        $exec = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($exec)) {
                                          
                                           echo "<option value='$row[id_masakan]'>$row[nama_masakan]</option>";
                                        }
                                       
                                    ?>
                                    </select></td>
                            </tr>
                            <tr>
                            <tr>
                                <td>Jumlah</td>
                                <td>:</td>
                                <td><input type="number" autocomplete="off" name="Stock" id="" value="1">
                                </td>
                            </tr>
                            </tr>
                            <td>
                                <input type="submit" name="tambah" value="TAMBAHKAN">
                            </td>
                        </table>
                    </fieldset>
                </div>
            </form>
        </center>
        <form action="aksi_order.php" method="post">
            <center>
                <table border="1" cellspacing="0" cellpadding="10px">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA MASAKAN</th>
                            <th>HARGA</th>
                            <th>JUMLAH</th>
                            <th>SUB TOTAL</th>
                            <th hidden>KODE BARANG</th>
                            <?php 
                                $awal = 1; $sub = 0; $total = 0;
                                if (@$_POST['NamaMasakan'] !=''){
                                    if (empty ($_SESSION['isi']) == true){
                                        $_SESSION['isi'] = 1;
                                    } else {
                                        $_SESSION['isi']++;
                                    }
                                
                                    @$idMasakan = $_POST['NamaMasakan'];
                                    $tampil = mysqli_fetch_array (mysqli_query ($conn, "SELECT nama_masakan, harga_masakan from masakan_taufik where id_masakan = '$idMasakan'"));
                                    @$NoMeja = $_POST ['noMeja'];
                                    @$namaMasakan = $tampil['nama_masakan'];
                                    @$hargaJual = $tampil['harga_masakan'];
                                    @$Stock = trim($_POST['Stock']);
                                    @$sub= $hargaJual * $Stock;
                                    
          
                                    //var_dump ($idMasakan);
                                    $_SESSION ["akhir"][$_SESSION['isi']] = array($namaMasakan, $hargaJual, $Stock, $sub, $idMasakan);
                                
                                    $_SESSION['noMeja'] = $NoMeja;
                                }
                                @$awal = $_SESSION ['isi'];
                                
                                for ($i = 0 ; $i <= $awal; $i++){
                                    if (@$_SESSION['akhir'][$i][0]!=''){
                                        ?>
                        <tr>
                            <td> <?php echo $i?></td>
                            <td> <?php echo @$_SESSION['akhir'][$i][0]?></td>
                            <!--<td> NAMA MASAKAN</td>-->
                            <td> <?php echo @$_SESSION['akhir'][$i][1]?></td>
                            <!--<td> HARGA JUAL</td>-->
                            <td> <?php echo @$_SESSION['akhir'][$i][2]?></td>
                            <!--<td> STOCK </td>-->
                            <td> <?php echo @$_SESSION['akhir'][$i][3]?></td>
                            <!--<td> SUB </td>-->
                            <td hidden> <?php echo @$_SESSION['akhir'][$i][4]?></td>
                            <!--<td> ID MASAKAN </td>-->

                        </tr>
                        <?php
                                    }
                                    $total = @$_SESSION ['akhir'][$i][3] + $total;
                                    $_SESSION ['total'] = $total;

                                }
                                    ?>
                        <tr>
                        <tr>
                            <td colspan=4>
                                <?php echo "Grand Bayar";?>
                            </td>
                            <td>
                                <?php echo "Rp. $total"; ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=6> <input type="submit" value="Save" name="Simpan">
                            </td>
                        </tr>
                        </tr>
                        </tr>
                        <?php
                                //var_dump ($_SESSION['akhir']);

                                ?>
                    </thead>
                    <tbody>
                    </tbody>
            </center>
        </form>
</body>

</html>