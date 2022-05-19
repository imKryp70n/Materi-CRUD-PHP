<?php
include 'connection.php';
$id = $_GET['id'];
if (isset($_POST['update'])) { 
    $nama = $_POST['username'];
    $password = $_POST['pass'];
    $idrole = $_POST['id_role'];
    $namauser = $_POST['nama'];
    $Query = "UPDATE `user` SET `id_role`='$id',`username`='$nama',`password`='$password',`nama_user`='$namauser' WHERE id = $id";
    $UpdateData = mysqli_query($conn, $Query);
    if (empty($password)){
        
        echo "<script>alert('Password tidak boleh kosong');</script>";
        echo "<script>location='edit.php?id=$id';</script>";
       

    } else {
        if ($UpdateData){
            echo '<script>alert("Data Berhasil di Update")</script>';
            echo "<script>location='LihatUser.php';</script>";
        } else {
            echo '<script>alert("Data Gagal di Update")</script>';
            echo "<script>location='edit.php?id=$id';</script>";
        }
    }
}
?>
<?php
include 'connection.php';
$id = $_GET['id'];
if (isset($_GET['id'])) {
    $update = mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'");
    while ($dataUpdate = mysqli_fetch_array($update)) {
        $id = $dataUpdate['id'];
        $idrole = $dataUpdate['id_role'];
        $username = $dataUpdate['username'];
        $password = $dataUpdate['password'];
        $nama = $dataUpdate['nama_user'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" type="text/css" href="myStyle.css">
</head>

<body>
    <fieldset>
        <legend>Edit User</legend>
        <form action="" method="post">

            <table>
                <tr>
                    <td>ID</td>
                    <td>:</td>
                    <td><input type="text" name="id" value="<?php echo $id; ?>" readonly></td>
                </tr>
                <tr>
                    <td>ID Role</td>
                    <td>:</td>
                    <td><select name="id_role">
                            <option value="1">Manager</option>
                            <option value="2">Kasir</option>
                            <option value="3">Pelayan</option>

                        </select></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
                </tr>


            </table>
            <input type="submit" name="update" value="UPDATE">
            <br><br><br>
            <a href="lihat_data.php">Kembali</a>
        </form>
    </fieldset>
</body>

</html>