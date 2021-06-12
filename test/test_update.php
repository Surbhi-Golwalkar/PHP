<?php
include "dbcon.php";

$id = $_POST['id'];
$a = $_POST['A'];
$b = $_POST['B'];
$c = $_POST['C'];
$d = $_POST['D'];
$e = $_POST['E'];
$f = $_POST['F'];

echo $id,$a,$b,$c,$d,$e,$f;

$data = "insert into test(username,password,email,phone,address,pincode)value('$a','$b','$c','$d','$e','$f')";
mysqli_query($con,$data);
header('location: test_display.php');
?>
