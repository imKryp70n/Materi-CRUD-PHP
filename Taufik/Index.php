<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Masukkan Jumlah Data</td>
                <td>:</td>
                <td><input type="number" name="jumlah" id="" autocomplete ="off" placeholder="Masukkan Jumlah Perulangan"></td>
                <td><input type="submit" value="Tambah Data"></td>
            </tr>

            
        </table>
        <?php if(isset($_POST['jumlah'])){$z0=$_POST['jumlah'];for($u1=1;$u1<=$z0;$u1++){echo"Data ke $u1 <br>";echo "<input type='text' name='nama' id='' autocomplete ='off' placeholder='Masukkan Nama'><br>";echo "<textarea name='alamat' id='' autocomplete ='off' placeholder='Masukkan Alamat'></textarea><br>";}}?>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>