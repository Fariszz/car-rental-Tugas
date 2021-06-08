<?php 
    include "koneksi.php";

    $id = isset($_GET['kode_mobil']);    
    $sql = "DELETE FROM mobil WHERE kode_mobil= '$id'";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo "Data berhasil dihapus";
        ?>
        <a href="carTable.php"> Lihat Data di Tabel</a>
<?php
    }else{
        echo "Data gagal dihapus". mysqli_error($connect);
    }
?>