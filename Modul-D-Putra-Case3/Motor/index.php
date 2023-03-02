<?php

include_once("../config.php");
 

$result = mysqli_query($mysqli2, "SELECT * FROM motor ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>motor Page</title>
</head>
 
<body>
<a href="add.php">tambah motor</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>nama</th> 
        <th>type</th>
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
    <p><a href="../mobil/index.php">mobil</a></p>
</body>
</html>