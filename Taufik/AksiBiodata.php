<?php
   if (isset($_POST['submit'])) {
        $NAMA = $_POST['nama'];
        $Alamat = $_POST['alamat'];
        $TempatLahir = $_POST['Tempatlahir'];
        $TanggalLahir = $_POST['Tanggallahir'];
        $JenisKelamin = $_POST['JK'];
        $Status = $_POST['Status'];
        $Agama = $_POST['Agama'];
        $Pendidikan = $_POST['Pendidikan'];
        $Pekerjaan = $_POST['Pekerjaan'];

        if (empty($NAMA) || 
                empty($Alamat) || 
                empty($TempatLahir) || 
                empty($TanggalLahir) || 
                empty($JenisKelamin) || 
                empty($Status) || 
                empty($Agama) || 
                empty($Pendidikan) || 
                empty($Pekerjaan)
            ){
            echo "Data tidak boleh kosong";
        
        } else {
            echo "Nama : $NAMA <br>";
            echo "Alamat : $Alamat <br>";
            echo "Tempat Lahir : $TempatLahir <br>";
            echo "Tanggal Lahir : $TanggalLahir <br>";
            echo "Jenis Kelamin : $JenisKelamin <br>";
            echo "Status : $Status <br>";
            echo "Agama : $Agama <br>";
            echo "Pendidikan : $Pendidikan <br>";
            echo "Pekerjaan : $Pekerjaan <br>";

        }
   }
?>