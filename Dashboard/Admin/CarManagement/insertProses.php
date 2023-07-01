<?php 
    include "koneksi.php";
    $statusMsg = '';

    if (isset($_POST['kirim']) && !empty($_FILES["file"]["name"])) {
        $id = $_POST['kodeMobil'];
        $tipe = $_POST['tipeMobil'];
        $merk = $_POST['merkMobil'];
        $stok = $_POST['stokMobil'];  

        // Upload Image
        $targetDir = "uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        
        $sql = "INSERT INTO mobil(kode_mobil, tipe_mobil, merk_mobil, stok_mobil, file_name, uploaded_on)
        VALUES('$id', '$tipe', '$merk', '$stok', '".$fileName."', NOW())";

        $allowTypes = array('jpg','png','jpeg','gif','pdf');
        // if(in_array($fileType, $allowTypes)){
        //     // Upload file to server
        //     if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
        //         // Insert image file name into database
        //         $insert = $connect->query("INSERT into mobil (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
        //     }
        // }
        if (mysqli_query($connect, $sql)) {
            if (in_array($fileType, $allowTypes)) {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                    header("location:/car-rental-Tugas/Dashboard/Admin/CarManagement/");
                }else{
                    echo "Data gagal ditambahkan <br>" . mysqli_error($connect);
                }
            }
            // echo "\nData berhasil ditambahkan";            
        }else{
            echo "Data gagal ditambahkan <br> " . mysqli_error($connect);
        }    
    }
?>