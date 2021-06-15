<?php 
    include "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row['LEVEL'] == 1) {

        header('location:../Dashboard/Admin/index.html');?>
    <?php

    }else if($row['LEVEL'] == 2){
        header('location:../Dashboard/user/index.html');?>
    <?php
    }else{

        header("location:index.php");
        // echo "Anda gagal login. silahkan "; ?>
        <script>console.log("gagal");</script>
        <!-- <a href="loginForm.html">Login kembali</a> -->
    <?php
        echo mysqli_error($connect);
    }
?>