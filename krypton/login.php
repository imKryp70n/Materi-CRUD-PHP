<?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<script>alert('Login Gagal, Username atau password salah ')</script>";
            }else if ($_GET['pesan'] == "logout") {
                echo "<script>alert('Logout Berhasil')</script>";
            }else if ($_GET['pesan'] == "belum_login") {
                echo "<script>alert('Silahkan login terlebih dahulu')</script>";
            }
        }
    ?>
<?php
    session_start();
    if (!empty($_SESSION['status'])) {
        header("location:index.php");
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple Login Form Example</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" href="login.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="login-form">
        <form action="ceklogin.php" method="post">
            <h1>Login</h1>
            <div class="content">
                <div class="input-field">
                    <input type="text" name="username" placeholder="Email" autocomplete="off" require>
                </div>
                <div class="input-field">
                    <input type="password" name="password" placeholder="Password" autocomplete="new-password" require>
                </div>
                <a href="https://github.com/imKryp70n" class="link">github.com/imKryp70n</a>
            </div>
            <div class="action">
                <button>Sign in</button>
            </div>
        </form>
    </div>
    <!-- partial -->
    <script src="./script.js"></script>

</body>

</html>