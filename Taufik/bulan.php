<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
     <form method="post">
         <fieldset style="margin-left: 40%; margin-right: 30%;margin-top: 10%;border-radius: 10px;">
         <h2>DATA BULAN</h2>                                                <!--    -->
            <table>                                                                 
                <tr>                                                
                    <td>Bulan </td>
                    <td>:</td>
                    <td>
                    <select name="bulan">
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                    </td>
                    
                    <td><input type="submit" name="submit" value="Proses"></td>

                </tr>
            </table>
                <?php
                        if (isset($_POST['submit'])){
                                $bulan = $_POST['bulan'];
                            if ($bulan == 'Januari'){
                                echo "Januari memiliki 31 hari";
                                    
                            } elseif ($bulan == 'Februari'){
                                echo "Februari memiliki 28 hari";
                            } elseif ($bulan == 'Maret'){
                                echo "Maret memiliki 31 hari";
                            } elseif ($bulan == 'April'){
                                echo "April memiliki 30 hari";
                            } elseif ($bulan == 'Mei'){
                                echo "Mei memiliki 31 hari";
                            } elseif ($bulan == 'Juni'){
                                echo "Juni memiliki 30 hari";
                            } elseif ($bulan == 'Juli'){
                                echo "Juli memiliki 31 hari";
                            } elseif ($bulan == 'Agustus'){
                                echo "Agustus memiliki 31 hari";
                            } elseif ($bulan == 'September'){
                                echo "September memiliki 30 hari";
                            } elseif ($bulan == 'Oktober'){
                                echo "Oktober memiliki 31 hari";
                            } elseif ($bulan == 'November'){
                                echo "November memiliki 30 hari";
                            } elseif ($bulan == 'Desember'){
                                echo "Desember memiliki 31 hari";
                            } else {
                                echo "Maaf, bulan yang anda masukkan salah";
                        }
                    }
    
                ?>
        </fieldset>
    </form>
</body>
</html>

