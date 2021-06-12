<?php
include "dbcon.php";
echo $id = $_GET['v'];

echo $a = "select * from task3 where id = $id";
$result = mysqli_query($con,$a);
print_r($result);

?>

