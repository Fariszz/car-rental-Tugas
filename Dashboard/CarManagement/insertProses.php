<?php 
    include "koneksi.php";

    if (isset($_GET['kirim'])) {
        $id = $_GET['kodeMobil'];
        $tipe = $_GET['tipeMobil'];
        $merk = $_GET['merkMobil'];
        $stok = $_GET['stokMobil'];        
        
        $sql = "INSERT INTO mobil(kode_mobil, tipe_mobil, merk_mobil, stok_mobil)
        VALUES('$id', '$tipe', '$merk', '$stok')";

        if (mysqli_query($connect, $sql)) {
            // echo "\nData berhasil ditambahkan";
            header("location:/car-rental-Tugas/Dashboard/CarManagement/");
        }else{
            echo "Data gagal ditambahkan <br> " . mysqli_error($connect);
        }
    }
?>