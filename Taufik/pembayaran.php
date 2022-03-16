<?php
$buku = 5000;
$pensil= 2000;
$penggaris = 1000;
$jumlahBeli = 10;
$yangDibeli = $buku;
$jumlah_bayar = $yangDibeli * $jumlahBeli;
if ($jumlahBeli > 5) {
    $diskon = $yangDibeli * 0.05 * $jumlahBeli;
} else {
    $diskon = 0;
}
$total_bayar = $jumlah_bayar - $diskon;
echo ("Jumlah buku yang dibeli : $jumlahBeli <br>");
echo ("Harga buku : $yangDibeli <br>");
echo ("Diskon : $diskon <br>");
echo ("Total bayar : $total_bayar <br>");

?>