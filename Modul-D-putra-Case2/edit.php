<?php

include_once("config.php");
 

if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $Brand=$_POST['Brand'];
    $Type=$_POST['Type'];
    $Price=$_POST['Price'];
        
    
    $result = mysqli_query($mysqli, "UPDATE mobils SET Brand='$Brand',Type='$Type',Price='$Price' WHERE id=$id");
    
    
    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];
 

$result = mysqli_query($mysqli, "SELECT * FROM mobils WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $Brand = $user_data['Brand'];
    $Type = $user_data['Type'];
    $Price = $user_data['Price'];
}
?>
<html>
<head>	
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Brand</td>
                <td><input type="text" name="Brand" value=<?php echo $Brand;?>></td>
            </tr>
            <tr> 
                <td>Type</td>
                <td><input type="text" name="Type" value=<?php echo $Type;?>></td>
            </tr>
            <tr> 
                <td>Price</td>
                <td><input type="text" name="Price" value=<?php echo $Price;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>