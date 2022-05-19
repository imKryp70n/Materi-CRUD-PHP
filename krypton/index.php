<!DOCTYPE html>
<html lang="en">

<head>
    <title>HOME</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" type="text/css" href="myStyle1.css">

</head>

<body>
    <?php
session_start();
    if ($_SESSION['status'] != "login") {
        header("location:login.php?pesan=belum_login");
       
    } 
    $session = $_SESSION['status'];

    if ($session == 'login'){
    ?>

    <?php
    $username = $_SESSION['username'];
    echo "Hello $username";
}
    
?>


    <div class="home">
        <div class="nav">
            <ul>
                <li><a href="LihatUser.php">User </a></li>
                <li><a href="ListMasakan.php">Masakan </a></li>
                <li><a href="LihatLevel.php">Level </a></li>
                <li><a href="orderMasakan.php">Order </a></li>
                <li><a href="#">Detail </a></li>
                <li><a href="tampil_transaksi.php">Transaksi </a></li>
                <li><a href="logout.php" method="post" class="logout">Logout </a></li>
            </ul>
        </div>
    </div>

</body>

</html>