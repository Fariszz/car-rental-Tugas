<?php 
    include "koneksi.php";

    $id = $_GET['id'];    
    $sql = "DELETE FROM customer WHERE id_customer='$id'";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo "Data berhasil dihapus";
        ?>
        <a href="userTable.php"> Lihat Data di Tabel</a>
<?php
    }else{
        echo "Data gagal dihapus". mysqli_error($connect);
    }
?>