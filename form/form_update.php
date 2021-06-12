<?php
include "dbcon.php";

$id = $_POST['id'];
$a = $_POST['name'];
$b = $_POST['college'];
$c = $_POST['gender'];
$d = $_POST['education'];

$data="update form1 SET name='$a' , college='$b' ,gender='$c', education='$d' where id=$id ";
mysqli_query($con,$data);
header('location: form_display.php');
?>