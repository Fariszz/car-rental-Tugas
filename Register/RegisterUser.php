<?php 
    include "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email    =$_POST['email'];

    $query = "insert into login (username,password,email)";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row['LEVEL'] == 1) {
        echo "Anda berhasil login. silahkan menuju ";?>
        <a href="homeAdmin.html">Halaman HOME</a>
    <?php
    }else if($row['LEVEL'] == 2){
        echo "Anda berhasil login. silahkan menuju "; ?>
        <a href="homeGuest.html">Halaman HOME</a>
    <?php
    }else{
        echo "Anda gagal login. silahkan "; ?>
        <a href="loginForm.html">Login kembali</a>
    <?php
        echo mysqli_error($connect);
    }
?>