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
$pdf -> setLeftMargin(30);
// ----------------- Tabel -------------------  
$pdf -> Cell(10,6,'ID',1,0,'C');
$pdf -> Cell(70,6,'NAMA MASAKAN',1,0,'C');
$pdf -> Cell(35,6,'HARGA MASAKAN',1,0,'C');
$pdf -> Cell(35,6,'STATUS MASAKAN',1,1,'C');
// -------------------------------------------
$pdf -> SetFont('Arial','',10);

 // ------------- connect to database ---------------
include "connection.php";
$sql = "SELECT * FROM masakan_taufik";
$MyData = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($MyData)){
    $pdf -> Cell(10,6,$row['id_masakan'],1,0,'C');
    $pdf -> Cell(70,6,$row['nama_masakan'],1,0);
    $pdf -> Cell(35,6,$row['harga_masakan'],1,0,'C');
    $pdf -> Cell(35,6,$row['status_masakan'],1,1,'C');
} 
$pdf -> Output();
?>