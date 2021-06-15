<?php 
    include "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email    =$_POST['email'];

    $query = "INSERT INTO login (username, password, email) VALUES ('$username', '$password', '$email')";
    $result = mysqli_query($connect, $query);
    $num	  = mysqli_affected_rows($connect);

    if($num > 0) {
        header('location:../Login/index.php');
        
    } else{	
        header("location:index.php");
    }

?>