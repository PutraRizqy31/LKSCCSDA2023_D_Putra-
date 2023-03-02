<html>
<head>
    <title>Add product</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>harga</td>
                <td><input type="number" name="harga"></td>
            </tr>
            <tr> 
                <td>link</td>
                <td><input type="text" name="link"></td>
            </tr>
            <tr>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 

    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $link = $_POST['link'];
            
        include_once("config.php");
                
        
        $result = mysqli_query($mysqli, "INSERT INTO barang_masuk(nama,harga,link) VALUES('$nama','$harga','$link')");
        
        
        echo "User added successfully. 
        <a href='index.php'>Home</a>";
    }
    ?>
</body>
</html>