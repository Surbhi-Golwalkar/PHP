<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
	<table class="table table-bordered">
		<h1 class="bg-info text-center text-white" style="background-color: #41215f !important;"> View Data</h1>
		<tr>
			<th>id</th>
			<th>username</th>
			<th>password</th>
			<th>email</th>
			<th>phone</th>
			<th>address</th>
			<th>pincode</th>
		</tr>
        <?php
            include "dbcon.php";
            $id = $_GET['a'];

            $select="select * from test where id = $id";
            $result=mysqli_query($con,$select);
            $fetch=mysqli_fetch_array($result);{

        ?>
        <tr>
			<td><?php echo $fetch['id'] ?></td>
			<td><?php echo $fetch['username'] ?></td>
			<td><?php echo $fetch['password'] ?></td>
			<td><?php echo $fetch['email'] ?></td>
			<td><?php echo $fetch['phone'] ?></td>
			<td><?php echo $fetch['address'] ?></td>
			<td><?php echo $fetch['pincode'] ?></td>	
		</tr>
		<?php
         }
		?>
	</table>
    </div>

</body>
</html>