<?php
include "dbcon.php";
$n = $_POST['name'];
$i = $_FILES['image']['name'];
$filename = $_FILES['image']['tmp_name'];

// echo $n,$i;
// echo "<pre>";
// print_r($i);

$file = "upload/".$i;
move_uploaded_file($filename,$file);
$data="insert into image(name,image)values('$n','$file')";
mysqli_query($con,$data);

?>