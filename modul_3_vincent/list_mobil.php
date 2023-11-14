<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>
            <table border="1" class="table">
                <tr>
                    <th>Nama Mobil</th>
                    <th>Brand Mobil</th>
                    <th>Warna Mobil</th>
                    <th>Tipe Mobil</th>
                    <th>Harga Mobil</th>
                    <th>Opsi</th>		
                </tr>
                <?php 
                include "connect.php";
                $query_mysql = mysqli_query($conn, "SELECT * FROM showroom_mobil")or die(mysql_error());
                $nomor = 1;
                while($data = mysqli_fetch_array($query_mysql)){
                ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['nama_mobil']; ?></td>
                    <td><?php echo $data['brand_mobil']; ?></td>
                    <td><?php echo $data['warna_mobil']; ?></td>
                    <td><?php echo $data['tipe_mobil']; ?></td>
                    <td><?php echo $data['harga_mobil']; ?></td>
                    <td>
                    <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                    <a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>				
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </center>
</body>
</html>