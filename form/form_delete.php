<?php
include('dbcon.php');
$id=$_GET['a'];
$sql="delete from form1 where id=$id";
mysqli_query($con,$sql);
header('location:form_display.php');
?>