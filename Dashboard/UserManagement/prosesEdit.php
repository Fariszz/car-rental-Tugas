<?php 
    include "koneksi.php";

    $id = $_GET['IDCustomer'];
    $nik = $_GET['nikCustomer'];
    $nama = $_GET['namaCustomer'];
    $alamat = $_GET['alamatCustomer'];     
    $nomor = $_GET['nomorCustomer'];    

    $query = "UPDATE customer SET id_customer = '$id', nik_customer = '$nik', nama_customer = '$nama', alamat_customer = '$alamat', noHp_customer = '$nomor'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "Berhasil update ke database";
        ?>

    <a href="userTable.php"> Lihat Data di Tabel</a>
    <?php 
        }else{
            echo "Gagal update data ". mysqli_error($connect);
        }

?>