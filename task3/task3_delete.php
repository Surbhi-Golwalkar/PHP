<?php
include('dbcon.php');
$id=$_GET['a'];
$sql="delete from task3 where id=$id";
mysqli_query($con,$sql);
header('location:internship.php');
?>