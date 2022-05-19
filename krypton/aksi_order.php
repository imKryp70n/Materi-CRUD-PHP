<?php
session_start ();
include "connection.php";   
$querycount = "SELECT max(Id_Order_Taufik) as LastID FROM ordermasakan";
$result = mysqli_query ($conn, $querycount) or die (mysqli_error($conn));
$row = mysqli_fetch_array ($result, MYSQLI_ASSOC);

$LastID = $row['LastID']+1;
$total = $_SESSION['total'];
$noMeja = $_SESSION ['noMeja'];
date_default_timezone_set ("Asia/Jakarta");
$tanggal = date ("y-m-d");

$Status = "Belum Selesai";
$id_user = $_SESSION['id_role'];
$sql = mysqli_query ($conn, "INSERT INTO `ordermasakan`(`ID_Order_Taufik`, `No_Meja_Taufik`, `Tanggal_Taufik`, `Id_User_Taufik`, `Keterangan_Taufik`, `Status_Order_Taufik`) VALUES ('$LastID','$noMeja','$tanggal','$id_user','$total','$Status')");
$awal = $_SESSION['isi'];


    $j = 0;
    while ($j <= $awal){    
        $idMasakan = @$_SESSION['akhir'][$j][4];
        $Stock = @$_SESSION['akhir'][$j][2];
        $sub = @$_SESSION ['akhir'][$j][3];

        if ($LastID !="" and $idMasakan != "" and $Stock != ""){
            $query = mysqli_query ($conn, "INSERT INTO `detailorder`(`Id_Order`, `Id_Masakan`, `Keterangan`, `Status_detail_order`) VALUES ('$LastID','$idMasakan','$Stock','Belum Selesai')");

        }
        $j++;
    
    }   

    unset ($_SESSION['isi']);
    unset ($_SESSION['nilai']);
    unset ($_SESSION['noMeja']);
     echo " <script>
     alert('Pesanan telah dipesan');
     window.location.href='orderMasakan.php';
    </script>";
    //echo "".mysqli_error();

?>