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
    <table class="content-table">
        <thead>
        <tr>
            <th> Kode Sewa </th>
            <th> Kode Mobil </th>
            <th> ID Customer</th>
            <th> Harga Sewa</th>
            <th> Tanggal Sewa</th>
            <th> Tanggal Kembali</th>
            <th> </th>
            <th> </th>
        </tr>
        </thead>        
        <?php 
            include "koneksi.php";

            $query = "SELECT * FROM sewa";
            $result = mysqli_query($connect, $query);            

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {                                
        ?>
        <tr>
            <td> <?php echo $row['kode_sewa']?> </td>
            <td> <?php echo $row["kode_mobil"]?> </td>
            <td> <?php echo $row["id_customer"]?> </td>
            <td> <?php echo $row["harga_sewa"]?> </td>
            <td> <?php echo $row["tgl_sewa"]?> </td>
            <td> <?php echo $row["tglKembali_sewa"]?> </td>
            <td>  <a href="editForm.php?id=<?php echo $row['kode_sewa']?>"> Update </a></td>
            <td> <a href="hapus.php?id=<?php echo $row['kode_sewa'];?>">Hapus</a> </td>
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