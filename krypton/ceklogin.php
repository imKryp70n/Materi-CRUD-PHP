<html>
<script>
function Alert() {

    alert('Login Berhasil');
    alert('re-Created By Taufik Mulyana');
    window.location.href = 'index.php';
}
</script>

</html>
<?php
//session_start();
include 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($conn , "SELECT * FROM user WHERE username = '$username' and password = '$password'");
$cek = mysqli_num_rows($data);
if (empty($username) && empty ($password)){
    echo "<script>
    alert('Kolom tidak boleh kosong');
    window.location.href='login.php';
    </script>";
} else{
    if ($cek){  
        $login = mysqli_fetch_assoc($data);
        //$_SESSION['id_user'] = $login['id_role'];
        if ($login['id_role'] == 1) {
            session_start();
            $status = true;
            $_SESSION['username'] = $username;
            $_SESSION['id_role'] = '1';
            $_SESSION['status'] = "login";
            echo " <script>Alert();</script>";
        }else if ($login['id_role'] == 2) {
            
            session_start();
            $status = true;
            $_SESSION['username'] = $username;
            $_SESSION['id_role'] = '2';
            $_SESSION['status'] = "login";
          
            echo " <script>Alert();</script>";
        } elseif ($login['id_role'] == 3) {
            
            session_start();
            $status = true;
            $_SESSION['username'] = $username;
            $_SESSION['id_role'] = '3';
            $_SESSION['status'] = "login";
            echo " <script>Alert();</script>";
        } else {
            
        }
    } else {
        header("location:login.php?pesan=gagal");
    }
}

?>