<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Mobil</title>
    <link rel="stylesheet" href="styleCar.css">
    <script src="js/jquery-3.5.1.js"></script>
    <script>
            $(document).ready(function(){
                $(".submit-btn-show").click(function(){
                    $(".content-table").slideToggle("slow");
                });
            });
    </script>
</head>
<body>
    <div class="card">
        <div class="submit-button">
            <a href="../CarManagement">                        
                    <label class="submit-btn-list">
                        Input Mobil
                    </label>
            </a>                    
        </div>
    </div>
    <div class="card">
        <div class="submit-button" >
            <a>                        
                    <label class="submit-btn-show">Show Table </label>
            </a>                    
        </div>
    </div>
    <table class="content-table">
        <thead>
        <tr>
            <th> Kode Mobil </th>
            <th> Tipe Mobil </th>
            <th> Merk Mobil</th>
            <th> Stok Mobil</th>
            <th> Image Mobil </th>
            <th> </th>
            <th> </th>
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
            <div class="isi-table">
            <td> <?php echo $row['kode_mobil']?> </td>
            <td> <?php echo $row["tipe_mobil"]?> </td>
            <td> <?php echo $row["merk_mobil"]?> </td>
            <td> <?php echo $row["stok_mobil"]?> </td>
            <td> <img src="<?php echo $imageURL = 'uploads/'.$row["file_name"]; ?>" alt="" style="width: 120px;"></td>
            <td>  <a href="editForm.php?id=<?php echo $row['kode_mobil']?>"> Update </a></td>
            <td> <a href="hapus.php?id=<?php echo $row['kode_mobil'];?>">Hapus</a> </td>
            </div>
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