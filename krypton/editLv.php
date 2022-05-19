<?php
include 'connection.php';
$id = $_GET['id'];
if (isset($_POST['update'])) { 
    $nama = $_POST['namaLV'];
    $idrole = $_POST['id'];
    $Query = "UPDATE `role` SET `Id_Role`='$id',`Nama`='$nama' WHERE Id_Role = $id";
    $UpdateData = mysqli_query($conn, $Query);
    if (empty($nama)){
        
        echo "<script>alert('Data tidak boleh kosong');</script>";
        echo "<script>location='editLv.php?id=$id';</script>";
       

    } else {
        if ($UpdateData){
            echo '<script>alert("Data Berhasil di Update")</script>';
            echo "<script>location='LihatLevel.php';</script>";
        } else {
            echo '<script>alert("Data Gagal di Update")</script>';
            echo "<script>location='LihatLevel.php?id=$id';</script>";
        }
    }
}
?>
<?php
include 'connection.php';
$id = $_GET['id'];
$idrole = $_GET['id'];
if (isset($_GET['id'])) {
    $update = mysqli_query($conn, "SELECT * FROM role WHERE Id_Role = '$id'");
    while ($dataUpdate = mysqli_fetch_array($update)) {
        $idrole = $dataUpdate['Id_Role'];
        $namaLV = $dataUpdate['Nama'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Level</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" type="text/css" href="myStyle.css">
</head>

<body>

    <form action="" method="post">
        <fieldset>
            <legend>Edit User</legend>
            <table>
                <tr>
                    <td>ID Role</td>
                    <td>:</td>
                    <td><input type="text" name="id" value="<?php echo $idrole; ?>" disabled></td>
                </tr>
                <tr>
                    <td>Nama Level</td>
                    <td>:</td>
                    <td><input type="text" name="namaLV" value="<?php echo $namaLV; ?>"></td>
                </tr>


            </table>
            <input type="submit" name="update" value="UPDATE">
            <br><br><br>
            <a href="lihat_data.php">Kembali</a>
        </fieldset>
    </form>

</body>

</html>