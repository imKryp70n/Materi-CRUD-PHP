<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="MyStyle1.css">
    <title>Tambah Detail</title>
</head>

<body>
    <div id="section">
        <h2>PEMESANAN MAKANAN</h2>
        <?php
        include 'connection.php';
        //include 'autoidorder.php';
        //$lastID = FormatNoTrans(OtomatisID());
        ?>
        <?php 
            $id = $_GET['id'];
        ?>
        <form action="simpan_detail.php" method="post">
            <div class="masakan">
                <fieldset>
                    <legend>Tambahkan Masakan</legend>
                    <table>
                        <tr>
                            <td>ID Order</td>
                            <td>:</td>
                            <td><input type="text" autocomplete="off" name="id_order" readonly id=""
                                    value="<?php  echo $id?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Makanan</td>
                            <td>:</td>
                            <td><select name="id_masakan" id="">
                                    <?php
                                        $query = "SELECT * FROM masakan_taufik ";
                                        $exec = mysqli_query($conn, $query);
                                        while ($data = mysqli_fetch_array($exec)){
                                            echo "<option value='".$data[id_masakan]."'>".$data[nama_masakan]."</option>";
                                        }
                                    ?>
                                </select></td>
                        </tr>
                        <tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>:</td>
                            <td><input type="number" autocomplete="off" name="jumlah" id="" value="1"></td>
                        </tr>
                        </tr>

                    </table>
                    <td>
                        <input type="submit" name="tambah" value="TAMBAHKAN">
                    </td>
                </fieldset>
            </div>
        </form>
</body>

</html>