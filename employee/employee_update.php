<?php
include "dbcon.php";

$id = $_POST['id'];
$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['phone'];
$d = $_POST['password'];

$data="update employee SET name='$a' , email='$b' ,phone='$c', password='$d' where id=$id ";
mysqli_query($con,$data);
header('location: employee_display.php');
?>