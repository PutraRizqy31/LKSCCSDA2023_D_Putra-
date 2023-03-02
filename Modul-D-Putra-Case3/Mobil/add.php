<html>
<head>
    <title>Add Cars</title>
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
                <td>type</td>
                <td><input type="text" name="type"></td>
            </tr>
            <tr> 
                <td>harga</td>
                <td><input type="number" name="harga"></td>
            </tr>
            
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 

    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $type = $_POST['type'];
        $harga = $_POST['harga'];
        
        
        include_once("../config.php");
                
        
        $result = mysqli_query($mysqli1, "INSERT INTO mobil(nama,type,harga) VALUES('$nama','$type','$harga')");
        
        
        echo "User added successfully. 
        <a href='index.php'>View Cars</a>";
    }
    ?>
</body>
</html>