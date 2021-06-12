<?php
include "dbcon.php";

$name = $_POST['A'];
$city = $_POST['B'];
$phone = $_POST['C'];
$email = $_POST['D'];
$address = $_POST['E'];
$college = $_POST['F'];

$data = "insert into task2 (name,city,phone,email,address,college)value('$name','$city','$phone','$email','$address','$college')";

mysqli_query($con,$data);
?>
