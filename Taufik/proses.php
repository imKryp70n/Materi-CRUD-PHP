<?php
if (isset($_POST['submit'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operasi = $_POST['pilih'];
    $hasil = 0;
    if ($angka1 == "" || $angka2 == "") {
        echo "Angka 1 atau angka 2 belum diisi";
    } else {
        if ($operasi == 'tambah') {
            $hasil = $angka1 + $angka2;
        } else if ($operasi == 'kurang') {
            $hasil = $angka1 - $angka2;
        } else if ($operasi == 'kali') {
            $hasil = $angka1 * $angka2;
        } else if ($operasi == 'bagi') {
            $hasil = $angka1 / $angka2;
        }
        echo "Hasil dari $angka1 $operasi $angka2 adalah $hasil";
    }
}
?>