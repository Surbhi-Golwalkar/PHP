<?php
include('dbcon.php');
$id=$_GET['a'];
$data="delete from test where id=$id"
mysqli_query($con,$data);
header('location:test_display.php');
?>
