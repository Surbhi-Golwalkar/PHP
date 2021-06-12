<?php
include "dbcon.php";

$student_name = $_POST['A'];
$email = $_POST['B'];
$mobile_number = $_POST['C'];
$address = $_POST['D'];
$gender = $_POST['E'];
$college = $_POST['F'];
$qualification = $_POST['G'];
$branch = $_POST['H'];
$semester = $_POST['I'];
$internship_course = $_POST['J'];

$data = "insert into task3 (student_name,email,mobile_number,address,gender,college,qualification,branch,semester,internship_course)value('$student_name','$email','$mobile_number','$address','$gender','$college','$qualification','$branch','$semester','$internship_course')";

mysqli_query($con,$data);
?>
