<?php
include "dbcon.php";
$id = $_GET['a'];
$a = "select * from employee where id = $id";
$b=mysqli_query($con,$a);
$c=mysqli_fetch_array($b);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="employee_update.php">
<input type="text" name="id" value="<?php echo $c['id']?>">
		username:
		<input type="text" name="name" class="form-control" placeholder="Enter name" value="<?php echo $c ['name']?>">
		
		<br>
		Email:
		<<input type="text" name="email" class="form-control" placeholder="Enter email" value="<?php echo $c ['email']?>">
		<br>
		phone:
		<input type="text" name="phone" class="form-control" placeholder="Enter name" value="<?php echo $c ['phone']?>">
		Password:
		<input type="password" name="password" class="form-control" placeholder="Enter name" value="<?php echo $c ['password']?>">
		
		<br>

		<button type="submit">update</button>
		

</form>
</body>
</html>