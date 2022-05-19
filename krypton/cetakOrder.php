<?php
require "fpdf184/fpdf.php";
$pdf = new FPDF('L','mm','A5');
$pdf -> SetAutoPageBreak(false);
$pdf -> AddPage();
$pdf -> SetFont('Arial','B',16);
// ----------------- Judul -----------------
$pdf -> Cell(190,7,'RUMAH MAKANAN RPL',0,1,'C');
$pdf -> SetFont('Arial','B',12);
$pdf -> Cell(190,7,'DAFTAR MASAKAN',0,1,'C');
$pdf -> Cell(10,7,'',0,1);
$pdf -> SetFont('Arial','B',10);
$pdf -> setLeftMargin(20);
// ----------------- Tabel -------------------  
$pdf -> Cell(20,6,'ID ORDER',1,0,'C');
$pdf -> Cell(23,6,'NO MEJA',1,0,'C');
$pdf -> Cell(30,6,'TANGGAL',1,0,'C');
$pdf -> Cell(35,6,'KASIR',1,0,'C');
$pdf -> Cell(35,6,'TOTAL',1,0,'C');
$pdf -> Cell(35,6,'STATUS ORDER',1,1,'C');
// -------------------------------------------
$pdf -> SetFont('Arial','',10);

 // ------------- connect to database ---------------
include "connection.php";
$sql = "SELECT * FROM ordermasakan INNER JOIN user as a on ordermasakan.Id_User_Taufik = a.id";
$MyData = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($MyData)){
    $pdf -> Cell(20,6,$row['ID_Order_Taufik'],1,0,'C');
    $pdf -> Cell(23,6,$row['No_Meja_Taufik'],1,0,'C');
    $pdf -> Cell(30,6,$row['Tanggal_Taufik'],1,0,'C');
    $pdf -> Cell(35,6,$row['nama_user'],1,0,'C');
    $pdf -> Cell(35,6,$row['Keterangan_Taufik'],1,0,'C');
    $pdf -> Cell(35,6,$row['Status_Order_Taufik'],1,1,'C');
} 
$pdf -> Output();
?>