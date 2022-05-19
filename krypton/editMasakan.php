<?php
include 'connection.php';
$id = $_GET['id'];
if (isset($_POST['Update'])) { 
    $idMasakan = $_POST['id'];
    $namaMasakan = $_POST['NamaMasakan'];
    $hargaMasakan = $_POST ['HargaMasakan'];
    $Status = $_POST ['Status'];
    $Query = "UPDATE `masakan_taufik` SET `id_masakan`='$id',`nama_masakan`='$namaMasakan',`harga_masakan`='$hargaMasakan',`status_masakan`='$Status' WHERE id_masakan = $id";
    $UpdateData = mysqli_query($conn, $Query);
    if (empty($namaMasakan || empty($hargaMasakan) || empty($Status))){
        
        echo "<script>alert('Data tidak boleh kosong');</script>";
        echo "<script>location='editMasakan.php?id=$id';</script>";
       

    } else {
        if ($UpdateData){
            echo '<script>alert("Data Berhasil di Update")</script>';
            echo "<script>location='ListMasakan.php';</script>";
        } else {
            echo '<script>alert("Data Gagal di Update")</script>';
            echo "<script>location='editMasakan.php?id=$id';</script>";
        }
    }
}
?>
<?php
include 'connection.php';
$id = $_GET['id'];
$idMasakan = $_GET['id'];
if (isset($_GET['id'])) {
    $update = mysqli_query($conn, "SELECT * FROM masakan_taufik WHERE id_masakan = '$id'");
    while ($dataUpdate = mysqli_fetch_array($update)) {
        $idMasakan = $dataUpdate['id_masakan'];
        $namaMasakan = $dataUpdate['nama_masakan'];
        $hargaMasakan = $dataUpdate['harga_masakan'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Masakan</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" type="text/css" href="myStyle1.css">
</head>

<body>
    <form action="" method="post">
        <div class="masakan">
            <fieldset>
                <legend>Edit Masakan</legend>
                <table>
                    <tr>
                        <td>ID Masakan</td>
                        <td>:</td>
                        <td><input type="text" name="id" value="<?php echo $idMasakan; ?>" disabled></td>
                    </tr>
                    <tr>
                        <td>Nama Masakan</td>
                        <td>:</td>
                        <td><input type="text" autocomplete="off" name="NamaMasakan"
                                value="<?php echo $namaMasakan; ?>"></td>
                    </tr>
                    <tr>
                        <td>Harga Masakan</td>
                        <td>:</td>
                        <td><input type="number" autocomplete="off" name="HargaMasakan"
                                value="<?php echo $hargaMasakan; ?>" id=""></td>
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
                        <input type="submit" name="Update" value="PERBARUI">
                    </td>
                    <tr>
                        <td><a href="ListMasakan.php">Kembali</a></td>
                    </tr>
                </table>
            </fieldset>
        </div>
    </form>
</body>

</html>