<?php
include "dbcon.php";

$a = $_POST['name'];
$b = $_POST['college'];
$c = $_POST['gender'];
$d = $_POST['education'];
// echo "<pre>"
// print_r($d)

$x = implode(',', $d);
echo $x;
$data = "insert into form1(name,college,gender,education)value('$a','$b','$c','$x')";
mysqli_query($con,$data);

?>