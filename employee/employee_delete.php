<?php
include('dbcon.php');
$id=$_GET['a'];
$sql="delete from employee where id=$id";
mysqli_query($con,$sql);
header('location:employee_display.php');
?>