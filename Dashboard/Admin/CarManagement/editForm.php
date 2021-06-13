<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>

    <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM mobil WHERE kode_mobil='$id'";
        $result = mysqli_query($connect, $query);
    ?>

        <!-- The sidebar -->
    <div class="sidebar">        
        <div class="dashboard-title">
            <div class="image-container">
                <i class="fa fa-user-circle-o"></i>
            </div>            
            <div class="user-name">
                <p>Muhammad Faris</p>
            </div>            
        </div>
        <a href="\car-rental-Tugas\Dashboard"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
        <a href="\car-rental-Tugas\Dashboard\Bookings"><i class="fa fa-book"></i>Bookings</a>
        <a class="active" href=""><i class="fa fa-car"></i>Car Management</a>
        <a href="\car-rental-Tugas\Dashboard\UserManagement"><i class="fa fa-users"></i>User Management</a>
        <a href="\car-rental-Tugas\Dashboard\Admin"><i class="fa fa-user"></i>Admin</a>
    </div>
    
    <!-- Page content -->

    <div class="content">
        <div class="Title">
            <h1>Car Management</h1>
        </div>
        
        <div class="left-content">
            <div class="card">
                <!-- <p>Card 1</p> -->
                <img src="img/uploadin2.svg" alt="upload" style="width: 500px;">
            </div>
        </div>
        <div class="right-content">
            <form action="prosesEdit.php" method="POST">
            <?php 
                while ($row = mysqli_fetch_array($result)){
            ?>
                <div class="card">
                    <!-- <p>Card 2</p> -->
                    <input type="text" name="kodeMobil" class="inputBox" placeholder="Kode Mobil" value="<?php echo  $row['kode_mobil'] ;?>">
                </div>
                <div class="card">
                    <input type="text" name="tipeMobil" class="inputBox" placeholder="Tipe Mobil" value="<?php echo  $row['tipe_mobil'] ;?>">
                </div>
                <div class="card">
                    <input type="text" name="merkMobil" class="inputBox" placeholder="Merk Mobil" value="<?php echo  $row['merk_mobil'] ;?>">
                </div>
                <div class="card">
                    <input type="number" name="stokMobil" class="inputBox" placeholder="Stok Mobil" value="<?php echo  $row['stok_mobil'] ;?>">
                </div>
                <div class="image_upload">
                    <input type="file" name="" id="file">
                    <label for="file" class="input_upload">
                        Choose Image
                    </label>
                </div>
                <div class="submit-button">
                    <input type="submit" name="kirim" id="submit">
                    <label for="submit" class="submit-btn">
                        UPDATE
                    </label>
                </div>

                <?php
                    }

                ?>
            </form>                    
        </div>
    </div>
</body>
</html>