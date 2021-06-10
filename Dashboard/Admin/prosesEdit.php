<?php 
    include "koneksi.php";

    $id = $_POST['passAdmin'];  

    $query = "UPDATE admin SET password_admin = '$id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        header("location:/car-rental-Tugas/Dashboard/Admin/");
        ?>
    
    <?php 
        }else{
            echo "Gagal update data ". mysqli_error($connect);
        }

?>