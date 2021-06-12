<?php
include "dbcon.php";
$u = $_POST['x'];
$p = $_POST['y'];

// echo $u,$p

$data = "insert into student (username,password)value('$u','$p')";
mysqli_query($con,$data);

?>