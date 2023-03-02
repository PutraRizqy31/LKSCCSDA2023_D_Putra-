<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Brand</td>
                <td><input type="text" name="Brand"></td>
            </tr>
            <tr> 
                <td>Type</td>
                <td><input type="text" name="Type"></td>
            </tr>
            <tr> 
                <td>Price</td>
                <td><input type="number" name="Price"></td>
            </tr>
            <tr> 
                <td>Image</td>
                <td><input type="file" name="Images"></td>
            </tr>
            <tr> 
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 

    if(isset($_POST['Submit'])) {
        $Brand = $_POST['Brand'];
        $Type = $_POST['Type'];
        $Price = $_POST['Price'];
        
        
        include_once("config.php");
                
        
        $result = mysqli_query($mysqli, "INSERT INTO mobils(Brand,Type,Price) VALUES('$Brand','$Type','$Price')");
        
        
        echo "User added successfully. 
        <a href='index.php'>View Cars</a>";
    }
    ?>
</body>
</html>