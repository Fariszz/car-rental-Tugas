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
                <p>Welcome User</p>
            </div>            
        </div>
        <a href="\car-rental-Tugas\Dashboard\User\"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
        <a class="active" href="\car-rental-Tugas\Dashboard\User\Bookings\"><i class="fa fa-book"></i>Bookings</a>        
        <a href="\car-rental-Tugas\Dashboard\User\UserManagement\"><i class="fa fa-users"></i>User Management</a>    
        <a class="logout" href="\car-rental-Tugas\Login\index.php"><i class="fa fa-sign-out"></i>Logout</a>
    </div>
    
    <!-- Page content -->
    <div class="content">
        <div class="Title">
            <h1>Booking Management</h1>
        </div>
        <div class="left-content">
            <div class="card">
                <!-- <p>Card 1</p> -->
                <img src="img/Booking.svg" alt="Booking" style="width: 500px;">
            </div>
            <div class="card">
                <div class="submit-button">
                    <a href="bookingTable.php">                        
                            <label class="submit-btn-list">
                                Cek Daftar Booking
                            </label>
                    </a>                    
                </div>
            </div>
        </div>
        <div class="right-content">
            <form action="insertProses.php" method="GET">
                <div class="card">
                    <!-- <p>Card 2</p> -->
                    <input type="text" name="kodeSewa" class="inputBox" placeholder="Kode Sewa">
                </div>
                <div class="card">
                    <input type="text" name="kodeMobil" class="inputBox" placeholder="Kode Mobil">
                </div>
                <div class="card">
                    <input type="text" name="IdCustomer" class="inputBox" placeholder="ID Customer">
                </div>
                <div class="card">
                    <input type="number" name="hargaSewa" class="inputBox" placeholder="Harga Sewa">
                </div>
                <div class="date-pick">
                    <div class="card">
                        <input type="date" name="tanggalSewa" class="inputBox" placeholder="Tanggal Sewa" style="color: #DDE2FF; font-family: 'Poppins',sans-serif; padding-left: 30px;">
                    </div>
                    <div class="card">
                        <input type="date" name="tanggalKembali" class="inputBox" placeholder="Tanggal Kembali" style="color: #DDE2FF; font-family: 'Poppins',sans-serif; padding-left: 30px;">
                    </div>
                </div>                
                <!-- <div class="card">
                    <input type="number" name="hargaSewa" class="inputBox" placeholder="Harga Sewa">
                </div>                 -->
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