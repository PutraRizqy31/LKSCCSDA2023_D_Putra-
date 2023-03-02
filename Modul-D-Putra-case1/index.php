<html>
<head>
    <title>Market</title>
</head>
<body>
    <p><b>Data Market</b></p>
    <p>
        
        <table border="1" cellpadding="2">
            <tr bgcolor="#e5e5e5">
                <td>No</td>
                <td>Nama</td>
                <td>Harga</td>
                <td>Link</td>
              </tr>
            <?php
            include 'config.php';
           
            $no=0;
            
            $query=mysqli_query($mysqli, "SELECT * FROM barang_masuk ORDER BY harga DESC");
            while($result=mysqli_fetch_array($query)){
            $harga[]=$result['harga'];
            $no++
            ?>
            <tr>
                <td><?php echo $no?></td>
                <td><?php echo $result['nama']?></td>
                <td><?php echo $result['harga']?></td>
                <td><a href="<?php echo $result['link']?>">Klik disini</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </p>
    <a href="add.php">Tambah Data</a>
</body>
</html>