<?php
    include_once('koneksi.php');

    $name = $_POST['name'];
    $email =$_POST['email'];
    $username =$_POST['username'];
    $password =$_POST['password'];
    $Rpassword =$_POST['Rpassword'];
    

    if(mysql_query("INSERT INTO sigin (name,email,username,password,Rpassword) VALUES ('$username','$password')"))
    echo"successfully inserted";
    else
    echo "failed";
?>