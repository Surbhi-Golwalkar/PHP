<?php
include "dbcon.php";
$a = $_POST['A'];
$b = $_POST['B'];
$c = $_POST['C'];


$data = "insert into task (name,email,city)value('$a','$b','$c')";
mysqli_query($con,$data);

?>