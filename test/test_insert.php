<?php
include "dbcon.php";

$a = $_POST['A'];
$b = $_POST['B'];
$c = $_POST['C'];
$d = $_POST['D'];
$e = $_POST['E'];
$f = $_POST['F'];

$data = "insert into test(username,password,email,phone,address,pincode)value('$a','$b','$c','$d','$e','$f')";
mysqli_query($con,$data);

?>
