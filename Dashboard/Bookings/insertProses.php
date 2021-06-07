<?php 
    include "koneksi.php";

    if (isset($_GET['kirim'])) {
        $id = $_GET['kodeSewa'];
        $kode_mobil = $_GET['kodeMobil'];
        $id_customer = $_GET['IdCustomer'];
        $hargaSewa = $_GET['hargaSewa'];
        $tglSewa = $_GET['tanggalSewa'];        
        $tglKembali = $_GET['tanggalKembali'];
                
        $sql = "INSERT INTO sewa(kode_sewa, kode_mobil, id_customer, harga_sewa, tgl_sewa, tglKembali_sewa)
        VALUES('$id', '$kode_mobil', '$id_customer', '$hargaSewa', '$tglSewa', '$tglKembali')";

        if (mysqli_query($connect, $sql)) {
            // echo "\nData berhasil ditambahkan";
            header("location:/car-rental-Tugas/Dashboard/Bookings");
        }else{
            echo "Data gagal ditambahkan <br> " . mysqli_error($connect);
        }
    }
?>