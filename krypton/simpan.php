<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" type="text/css" href="myStyle1.css">
</head>

<body>
    <h3>register User</h3>
    <form action="registrasi.php" method="post">
        <table>
            <tr>
                <td>ID USER</td>
                <td>:</td>
                <td><input type="number" name="ID" id="" disabled></td>

            </tr>
            <tr>
                <td>Level</td>
                <td>:</td>
                <td><Select name="id_role">
                        <option value="1">Manager</Option>
                        <option value="2">Kasir</option>
                        <option value="3">Pelayan</option>
                    </Select>
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td>Nama User</td>
                <td>:</td>
                <td><input type="text" name="NamaUser" id=""></td>
            </tr>
            <tr>

            </tr>
        </table>
        <td><input type="submit" name="submit" value="SIMPAN"></td><br>
        <a href="LihatUser.php">Lihat Data</a>
    </form>

</body>

</html>