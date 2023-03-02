<?php

include_once("../config.php");
 

$result = mysqli_query($mysqli1, "SELECT * FROM mobil ORDER BY id DESC");
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
        <th>harga</th> 
        <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['type']."</td>";
        echo "<td>".$user_data['harga']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>

    <p><a href="../motor/index.php">motor</a></p>
</body>
</html>