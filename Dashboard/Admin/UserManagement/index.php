<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="styleBooking.css">
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
        <a href="\car-rental-Tugas\Dashboard\Admin\CarManagement\"><i class="fa fa-car"></i>Car Management</a>
        <a class="active" href="\car-rental-Tugas\Dashboard\Admin\UserManagement\"><i class="fa fa-users"></i>User Management</a>
        <a href="\car-rental-Tugas\Dashboard\Admin\Admin\"><i class="fa fa-user"></i>Admin</a>
    </div>
    
    <!-- Page content -->
    <div class="content">
        <div class="Title">
            <h1>User Management</h1>
        </div>
        <div class="left-content">
            <div class="card">
                <!-- <p>Card 1</p> -->
                <img src="img/addUser.svg" alt="People" style="width: 500px;">
            </div>
            <div class="card">
                <div class="submit-button">
                    <a href="userTable.php">                        
                            <label class="submit-btn">
                                Cek Daftar User
                            </label>
                    </a>                    
                </div>
            </div>
        </div>
        <div class="right-content">
            <form action="insertProses.php" method="POST">
                <div class="card">
                    <!-- <p>Card 2</p> -->
                    <input type="text" name="IDCustomer" class="inputBox" placeholder="ID Customer">
                </div>
                <div class="card">
                    <!-- <p>Card 2</p> -->
                    <input type="text" name="nikCustomer" class="inputBox" placeholder="NIK Customer">
                </div>
                <div class="card">
                    <input type="text" name="namaCustomer" class="inputBox" placeholder="Nama Customer">
                </div>
                <div class="card">
                    <input type="text" name="alamatCustomer" class="inputBox" placeholder="Alamat Customer">
                </div>
                <div class="card">
                    <input type="text" name="nomorCustomer" class="inputBox" placeholder="Nomor HP">
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