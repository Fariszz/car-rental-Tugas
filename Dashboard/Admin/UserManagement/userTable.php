<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Mobil</title>
    <link rel="stylesheet" href="styleBooking.css">
</head>
<body>
<div class="card">
        <div class="submit-button">
            <a href="../UserManagement">                        
                    <label class="submit-btn-list">
                        Input User                    </label>
            </a>                    
        </div>
    </div>
    <table class="content-table">
        <thead>
        <tr>
            <th> ID </th>
            <th> NIK </th>
            <th> Nama </th>
            <th> Alamat </th>
            <th> Nomor HP</th>            
            <th> </th>
            <th> </th>            
        </tr>
        </thead>        
        <?php 
            include "koneksi.php";

            $query = "SELECT * FROM customer";
            $result = mysqli_query($connect, $query);            

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {                                
        ?>
        <tr>
            <td> <?php echo $row['id_customer']?> </td>
            <td> <?php echo $row["nik_customer"]?> </td>
            <td> <?php echo $row["nama_customer"]?> </td>
            <td> <?php echo $row["alamat_customer"]?> </td>            
            <td> <?php echo $row["noHp_customer"]?> </td>
            <td>  <a href="editForm.php?id=<?php echo $row['id_customer']?>"> Update </a></td>
            <td> <a href="hapus.php?id=<?php echo $row['id_customer'];?>">Hapus</a> </td>
        <?php          
                }
            }else{
                echo "0 result";
            }
        ?>
        </tr>        
    </table>
</body>
</html>