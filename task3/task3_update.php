<?php
include "dbcon.php";

$id = $_POST['id'];
$a = $_POST['student_name'];
$b = $_POST['email'];
$c = $_POST['mobile_number'];
$d = $_POST['address'];
$e = $_POST['gender'];
$f = $_POST['college'];
$g = $_POST['qualification'];
$h = $_POST['branch'];
$i = $_POST['semester'];
$j = $_POST['internship_course'];

echo $id,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j;
$data="update task3 SET student_name='$a' , email='$b' ,mobile_number='$c', address='$d', gender='$e', college='$f',qualification='$g',branch='$h',semester='$i',internship_course='$j' where id=$id ";
mysqli_query($con,$data);
header('location: internship.php');

?>
