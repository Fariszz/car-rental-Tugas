<?php 
    include "koneksi.php";

    if (isset($_POST['kirim'])) {
        $id = $_POST['IDCustomer'];
        $nik = $_POST['nikCustomer'];
        $nama = $_POST['namaCustomer'];
        $alamat = $_POST['alamatCustomer'];
        $nohp = $_POST['nomorCustomer'];
        
        $sql = "INSERT INTO customer(id_customer, nik_customer, nama_customer, alamat_customer, noHp_customer)
        VALUES('$id', '$nik', '$nama', '$alamat', '$nohp')";

        if (mysqli_query($connect, $sql)) {
            // echo "\nData berhasil ditambahkan";
            header("location:/car-rental-Tugas/Dashboard/UserManagement/");
        }else{
            echo "Data gagal ditambahkan <br> " . mysqli_error($connect);
        }
    }
?>