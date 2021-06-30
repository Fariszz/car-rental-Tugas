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
        <a href="\car-rental-Tugas\Dashboard\Admin\"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
        <a href="\car-rental-Tugas\Dashboard\Admin\Bookings\"><i class="fa fa-book"></i>Bookings</a>
        <a class="active" href="\car-rental-Tugas\Dashboard\Admin\CarManagement\"><i class="fa fa-car"></i>Car Management</a>
        <a href="\car-rental-Tugas\Dashboard\Admin\UserManagement\"><i class="fa fa-users"></i>User Management</a>
        <a href="\car-rental-Tugas\Dashboard\Admin\Admin\"><i class="fa fa-user"></i>Admin</a>
        <a class="logout" href="\car-rental-Tugas\Login\index.php"><i class="fa fa-sign-out"></i>Logout</a>
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
            <div class="card">
                <div class="submit-button">
                    <a href="carTable.php">                        
                            <label class="submit-btn-list">
                                Cek Daftar Mobil
                            </label>
                    </a>                    
                </div>
            </div>
        </div>        
        <div class="right-content">
            <form action="insertProses.php" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <!-- <p>Card 2</p> -->
                    <input type="text" name="kodeMobil" class="inputBox" placeholder="Kode Mobil">
                </div>
                <div class="card">
                    <input type="text" name="tipeMobil" class="inputBox" placeholder="Tipe Mobil">
                </div>
                <div class="card">
                    <input type="text" name="merkMobil" class="inputBox" placeholder="Merk Mobil">
                </div>
                <div class="card">
                    <input type="number" name="stokMobil" class="inputBox" placeholder="Stok Mobil">
                </div>                
                <div class="image_upload">
                    <input type="file" name="file" id="file">
                    <label for="file" class="input_upload">
                        Choose Image
                    </label>
                </div>                
                <div class="submit-button">
                    <input type="submit" name="kirim" id="submit">
                    <label for="submit" class="submit-btn">
                        SUBMIT
                    </label>
                </div>
            </form>                    
        </div>
    </div>
</body>
</html>