<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
	<table class="table table-bordered">
		<h1 class="bg-info text-center text-white">View Data</h1>
		<tr>
			<th>id</th>
			<th>username</th>
			<th>email</th>
			<th>phone</th>
			<th>address</th>
			<th>gender</th>
			<th>college</th>
			<th>qualification</th>
			<th>branch</th>
			<th>semester</th>
			<th>course</th>
		</tr>
        <?php
            include "dbcon.php";
            $id = $_GET['a'];

            $select="select * from task3 where id = $id";
            $result=mysqli_query($con,$select);
            $fetch=mysqli_fetch_array($result);{

        ?>
        <tr>
			<td><?php echo $fetch['id'] ?></td>
			<td><?php echo $fetch['student_name'] ?></td>
			<td><?php echo $fetch['email'] ?></td>
			<td><?php echo $fetch['mobile_number'] ?></td>
			<td><?php echo $fetch['address'] ?></td>
			<td><?php echo $fetch['gender'] ?></td>
			<td><?php echo $fetch['college'] ?></td>
			<td><?php echo $fetch['qualification'] ?></td>
			<td><?php echo $fetch['branch'] ?></td>
			<td><?php echo $fetch['semester'] ?></td>
			<td><?php echo $fetch['internship_course'] ?></td>
			
		
		</tr>
		<?php
         }
		?>
	</table>
    </div>

</body>
</html>