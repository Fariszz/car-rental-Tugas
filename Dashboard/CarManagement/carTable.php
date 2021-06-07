<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Mobil</title>
    <link rel="stylesheet" href="styleCar.css">
</head>
<body>
    <table class="content-table">
        <thead>
        <tr>
            <th> Kode Mobil </th>
            <th> Tipe Mobil </th>
            <th> Merk Mobil</th>
            <th> Stok Mobil</th>
        </tr>
        </thead>        
        <?php 
            include "koneksi.php";

            $query = "SELECT * FROM mobil";
            $result = mysqli_query($connect, $query);            

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {                                
        ?>
        <tr>
            <td> <?php echo $row["kode_mobil"] ?> </td>
            <td> <?php echo $row["tipe_mobil"] ?> </td>
            <td> <?php echo $row["merk_mobil"] ?> </td>
            <td> <?php echo $row["stok_mobil"] ?> </td>

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