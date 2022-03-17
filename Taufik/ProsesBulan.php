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