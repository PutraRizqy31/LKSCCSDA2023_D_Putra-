<?php
include_once("../config.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli2, "DELETE FROM motor WHERE id=$id");
 
header("Location:index.php");
?>