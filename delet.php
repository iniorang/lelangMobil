<?php
include_once("config.php");
$id=$_GET['id'];
$delete=mysqli_query($mysqli,"DELETE FROM kendaraan WHERE id=$id");
header("Location:Dashboard.php");
?>