<?php
    include_once('koneksi.php');

    $password = $_POST['password'];
    $username =$_POST['username'];
    

    if(mysql_query("INSERT INTO sigin (username,password) VALUES ('$username','$password')"))
    echo"successfully inserted";
    else
    echo "failed";
?>