<?php 
    include "koneksi.php";

    $id = $_POST['IDCustomer'];
    $nik = $_POST['nikCustomer'];
    $nama = $_POST['namaCustomer'];
    $alamat = $_POST['alamatCustomer'];     
    $nomor = $_POST['nomorCustomer'];    

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