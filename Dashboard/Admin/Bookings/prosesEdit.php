<?php 
    include "koneksi.php";

    $id = $_POST['kodeMobil'];
    $idMobil = $_POST['kodeMobil'];
    $idCustomer = $_POST['IdCustomer'];
    $sewa = $_POST['hargaSewa'];     
    $tglSewa = $_POST['tanggalSewa'];
    $tglKembali = $_POST['tanggalKembali'];

    $query = "UPDATE sewa SET kode_sewa = '$id', kode_mobil = '$idMobil', id_customer = '$idCustomer', harga_sewa = '$sewa', tgl_sewa = '$tglSewa', tglKembali_sewa = '$tglKembali' ";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "Berhasil update ke database";
        ?>

    <a href="bookingTable.php"> Lihat Data di Tabel</a>
    <?php 
        }else{
            echo "Gagal update data ". mysqli_error($connect);
        }

?>