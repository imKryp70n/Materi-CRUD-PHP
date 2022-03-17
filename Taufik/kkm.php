<?php
    $UTS = $_POST['uts'];
    $UAS = $_POST['uas'];
    $a = 10;
    $KKM = ($UTS + $UAS) / 2;
    echo "Nilai UTS : $UTS <br>";
    echo "Nilai UAS : $UAS <br>" ;
    if ($KKM >= 80 && $KKM <= 100){
        echo "Nilai Anda $KKM, Anda Mendapatkan Nilai A";
    } elseif ($KKM >= 70 && $KKM <= 79){
        echo "Nilai Anda $KKM, Anda Mendapatkan Nilai B";
    } elseif ($KKM >= 60 && $KKM <= 69){
        echo "Nilai Anda $KKM, Anda Mendapatkan Nilai C";
    } elseif ($KKM >= 50 && $KKM <= 59){
        echo "Nilai Anda $KKM, Anda Mendapatkan Nilai D";
    } elseif ($KKM >= 0 && $KKM <= 49){
        echo "Nilai Anda $KKM, Anda Mendapatkan Nilai E";
    } else {
        echo "Nilai Anda $KKM, Anda Tidak Mendapatkan Nilai";
    }    

?>