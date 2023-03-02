<?php
session_start();
echo '<h1>Selamat Datang ! ! ! </h1>';
 

include_once("config.php");
 

$result = mysqli_query($mysqli, "SELECT * FROM mobils ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Car Page</title>
</head>
 
<body>
<a href="add.php">Add New Car</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Brand</th> 
        <th>Type</th>
        <th>Price</th> 
        <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['Brand']."</td>";
        echo "<td>".$user_data['Type']."</td>";
        echo "<td>".$user_data['Price']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | 
        <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>

</table>
<br>
<a href="logout.php" class="btn">Logout</a>
</body>
</html>