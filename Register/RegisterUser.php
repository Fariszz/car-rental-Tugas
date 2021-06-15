<?php 
    include "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email    =$_POST['email'];

    $query = ("INSERT INTO login ([username], [password], [email]) VALUES ('$username', '$password', '$email')");
    $result = mysqli_query($connect, $query);

    if(mysqli_query($query)){
        echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
        
        }else{
        
         echo "<script>alert('FAILED TO INSERT');</script>";
         }

?>