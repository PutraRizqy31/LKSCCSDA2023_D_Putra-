<?php
include_once("../config.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli1, "DELETE FROM mobil WHERE id=$id");
 
header("Location:index.php");
?>