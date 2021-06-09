<?php 
    include "koneksi.php";

    if (isset($_POST['kirim'])) {
        $id = $_POST['kodeSewa'];
        $kode_mobil = $_POST['kodeMobil'];
        $id_customer = $_POST['IdCustomer'];
        $hargaSewa = $_POST['hargaSewa'];
        $tglSewa = $_POST['tanggalSewa'];        
        $tglKembali = $_POST['tanggalKembali'];
                
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