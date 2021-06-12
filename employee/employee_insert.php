<?php
include "dbcon.php";

$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['phone'];
$d = $_POST['password'];

$data = "insert into employee(name,email,phone,password)value('$a','$b','$c','$d')";
mysqli_query($con,$data);

?>