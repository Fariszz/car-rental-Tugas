<?php 
    include "koneksi.php";

    $id = $_GET['kodeMobil'];
    $tipe = $_GET['tipeMobil'];
    $merk = $_GET['merkMobil'];
    $stok = $_GET['stokMobil'];     

    $query = "UPDATE mobil SET kode_mobil='$id', tipe_mobil='$tipe', merk_mobil='$merk', stok_mobil='$stok'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "Berhasil update ke database";
        ?>

    <a href="carTable.php"> Lihat Data di Tabel</a>
    <?php 
        }else{
            echo "Gagal update data ". mysqli_error($connect);
        }

?>