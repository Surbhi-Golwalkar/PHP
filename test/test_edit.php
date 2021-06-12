<?php
include "dbcon.php";
$id = $_GET['a'];
$a = "select * from test where id = $id";
$b=mysqli_query($con,$a);
$c=mysqli_fetch_array($b);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="test_insert.php">
<input type="text" name="id" value="<?php echo $c['id']?>">
		username:
		<input type="text" name="A" class="form-control" placeholder="Enter name" value="<?php echo $c ['username']?>">
		
		<br>
		password:
		<input type="text" name="B" class="form-control" placeholder="Enter password" value="<?php echo $c ['password']?>">
		<br>
		Email:
		<<input type="text" name="C" class="form-control" placeholder="Enter email" value="<?php echo $c ['email']?>">
		<br>
		phone:
		<input type="text" name="D" class="form-control" placeholder="Enter name" value="<?php echo $c ['phone']?>">
		Adress:
		<input type="text" name="E" class="form-control" placeholder="Enter name" value="<?php echo $c ['address']?>">
		<br>
		Pincode:
		<input type="text" name="F" class="form-control" placeholder="Enter name" value="<?php echo $c ['pincode']?>">
		<br>

		<button type="submit">update</button>
		

</form>
</body>
</html>