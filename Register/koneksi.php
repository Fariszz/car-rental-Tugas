<?php 
    $namaHost = "localhost";
    $username = "root";
    $password = "";
    $database = "rental_mobil_2";

    $connect = mysqli_connect($namaHost,$username,$password,$database);

    if(!$connect){
        echo "Gagal login";
    }
    
?>