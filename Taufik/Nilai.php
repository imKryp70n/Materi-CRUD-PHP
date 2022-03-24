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
                <td><input type="number" name="jumlah" id="" autocomplete ="off" placeholder="Masukkan Jumlah Nilai"></td>
                <td><input type="submit" name= "tambah" value="Tambah Nilai"></td>
                

        </table>
                
            <?php
                if(isset($_POST['tambah'])){
                    ?>
                    <?php
                    $JumlahData=$_POST['jumlah'];
                    for($i=1;$i<=$JumlahData;$i++){
                        ?>
                        <table>
                            <tr>
                                <td>Nilai ke <?php echo $i; ?></td>
                                <td>:</td>
                                <td><input type="number" name="nilai[]" id="" autocomplete ="off" placeholder="Masukkan Nilai"></td>
                            </tr>
                            
                        <?php
                    }
                    

            }
              ?> 
                 <?php
                    if (isset($_POST['simpan'])) {
                        $nilai = $_POST['nilai'];
                        $total = 0;
                        foreach ($nilai as $key) {
                            $total += $key;
                        }
                        $rata = $total / count($nilai);
                            echo "Rata-rata nilai adalah $rata <br>";
                            
                            if ($rata >= 80) {
                                echo "Nilai Anda A  <br>";
                            } elseif ($rata >= 70) {
                                echo "Nilai Anda B <br>";
                            } elseif ($rata >= 60) {
                                echo "Nilai Anda C  <br>";
                            } elseif ($rata >= 50) {
                                echo "Nilai Anda D <br>";
                            } else {
                                echo "Nilai Anda E  <br>";
                            }     
                    }
                    ?>              
        <table>
            <tr>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
         </form>
  
</body>
</html>