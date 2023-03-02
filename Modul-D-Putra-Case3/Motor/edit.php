<?php

include_once("../config.php");
 

if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $nama=$_POST['nama'];
    $type=$_POST['type'];
    $Price=$_POST['Price'];
        
    
    $result = mysqli_query($mysqli2, "UPDATE motor SET nama='$nama',type='$type',Price='$Price' WHERE id=$id");
    
    
    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];
 

$result = mysqli_query($mysqli2, "SELECT * FROM motor WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $type = $user_data['type'];
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
                <td>nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>type</td>
                <td><input type="text" name="type" value=<?php echo $type;?>></td>
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