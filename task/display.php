<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h1 class="text-center bg-info">Data Display</h1>
	<table class="table table_bordered">
		<tr>
			<th>id</th>
			<th>username</th>
			<th>password</th>
			<th>action</th>
		</tr>

		<?php

        include "dbcon.php";
        $a = "select * from student";
        $result = mysqli_query($con,$a);
        
        while($data = mysqli_fetch_array($result))
        {
        	// echo "<pre>";
            //print_r($data);

		?>

		<tr>
			<td><?php echo $data['id'] ?></td>
			<td><?php echo $data['username'] ?></td>
			<td><?php echo $data['password'] ?></td>
			<td>view,edit,delete</td>
		</tr>

		<?php
	      }
	    ?>

	</table>
</div>

</body>
</html>