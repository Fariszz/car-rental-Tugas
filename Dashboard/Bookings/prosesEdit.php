<?php 
    include "koneksi.php";

    $id = $_GET['kodeMobil'];
    $idMobil = $_GET['kodeMobil'];
    $idCustomer = $_GET['IdCustomer'];
    $sewa = $_GET['hargaSewa'];     
    $tglSewa = $_GET['tanggalSewa'];
    $tglKembali = $_GET['tanggalKembali'];

    $query = "UPDATE sewa SET kode_sewa = '$id', kode_mobil = '$idMobil', id_customer = '$idCustomer', harga_sewa = '$sewa', tgl_sewa = '$tglSewa', tglKembali_sewa = '$tglKembali' ";
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