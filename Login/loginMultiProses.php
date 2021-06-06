<?php 
    include "koneksi.php";

    $username = $_POST['username'];
    $password = ($_POST['password']);

    $query = "SELECT * FROM sigin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row['LEVEL'] == 1) {
        echo "Anda berhasil login. silahkan menuju ";?>
        <a href="/Dashboard/Home/index.html">Halaman HOME</a>
    <?php
    }else if($row['LEVEL'] == 2){
        echo "Anda berhasil login. silahkan menuju "; ?>
        <a href="##LOGIN ADMIN##">Halaman HOME</a>
    <?php
    }else{
        echo "Anda gagal login. silahkan "; ?>
        <a href="Login_Awal.html">Login kembali</a>
    <?php
        echo mysqli_error($connect);
    }
?>