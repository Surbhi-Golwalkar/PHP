<?php
include "dbcon.php";
$id = $_GET['a'];
$a = "select * from task3 where id = $id";
$b=mysqli_query($con,$a);
$c=mysqli_fetch_array($b);
?>

<!DOCTYPE html>
<html>
<head>
	<title>PN Infosys</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="background: black">
<div class="container">
	<div class="row">
	
		<div class="col-md-6">
			<!-----card start--------->
			<div class="card" style="background-color: black!important">
				<br>

				<h1 style="font-size: 25px;color: white">Do Summer Internship From Home!.</h1>
				<p style="font-size: 20px;color: white">Once you"re registered, you can:</p>
				<p style="font-size: 20px;color: white">In Case any query, Kindly Contact: 7000846823</p>
				<br>

				<hr>

				<center><img src="https://internship2021.pninfosys.com/image/banner3.jpg" width="540" height="600"></center>
				<br>
				<p style="font-size: 25px;color: white">Learn from the comfort of your home</p>
				<p style="font-size: 20px;color: white">work-from-home transformational program aimed at building the leaders of tomorrow. Any college student from any degree, stream,
			    and year of study can apply for this program.</p>

			</div><!-------card end------>
			
		</div><!-------col end------->



		<div class="col-md-6">
			<div class="card bg-muted" style=" margin-top: 28px;">

			   
			    <div class="card body">
			    <h2 class="text-center text-info font-weight-bold"> Registration Form 2021</h2>

			    <form class="text-left" method = "post" action = "task3_update.php" style="width: 521px;
                margin-left: 7px;">
                <input type="text" name="id" value="<?php echo $c['id']?>">

			    <div class="form-group">
			 		<label style="font-weight: 600;margin-left: 9px;">Student name</label>
			 		<input type="text" name="student_name" class="form-control" placeholder="Enter name" value="<?php echo $c ['student_name']?>">
			 	</div>
			 	<div class="form-group">
			 		<label style="font-weight: 600;margin-left: 9px;">Email</label>
			 		<input type="text" name="email" class="form-control" placeholder="Enter email" value="<?php echo $c ['email']?>">
			 	</div>
			 	<div class="form-group">
			 		<label style="font-weight: 600;margin-left: 9px;">Mobile Number</label>
			 		<input type="text" name="mobile_number" class="form-control" placeholder="Enter no." value="<?php echo $c ['mobile_number']?>">
			 	</div>
			 	<div class="form-group">
			 		<label style="font-weight: 600;margin-left: 9px;">Address</label>
			 		<textarea class="form-control" name="address" ><?php echo $c ['address'] ?></textarea>
			 	</div>
			 	<div class="form-group">
			 		<label style="font-weight: 600;margin-left: 9px;">Gender</label><br>
			 		
			 		<input type="radio"  name="gender" value="male"> Male
					<input type="radio"  name="gender" value= "female" > Female
					
			 	</div>
			 	<div class="form-group">
			 		<label style="font-weight: 600;margin-left: 9px;">College</label>
			 		<select class="form-control" name="college">
			 			<option>MITS</option>
			 			<option>ITM</option>
			 			<option>RJIT</option>
			 		</select>
			 	</div>
			 	<div class="form-group">
			 		<label style="font-weight: 600;margin-left: 9px;">Qualification</label>
			 		<select class="form-control" name="qualification">
			 			<option>B.E</option>
			 			<option>B.Tech</option>
			 			<option>BCA</option>
			 			<option>MCA</option>
			 		</select>
			 	</div>
			 	<div class="form-group">
			 		<label style="font-weight: 600;margin-left: 9px;">Branch</label>
			 		<select class="form-control" name="branch">
			 			<option>ECE</option>
			 			<option>CS</option>
			 			<option>IT</option>
			 			<option>Other</option>
			 		</select>
			 	</div>
			 	<div class="form-group">
			 		<label style="font-weight: 600;margin-left: 9px;">Semester</label>
			 		<select class="form-control" name="semester">
			 			<option>5</option>
			 			<option>6</option>
			 			<option>7</option>
			 		</select>
			 	</div>
			 	<div class="form-group">
			 		<label style="font-weight: 600;margin-left: 9px;">internship course</label>
			 		<select class="form-control" name="internship_course">
			 			<option>python</option>
			 			<option>web development</option>
			 			<option>angular</option>
			 		</select>
			 	</div>
			 	
			 	<button type="submit" class="btn btn-info">update</button>
			 	
			 	</form>

			    
			     </div>

		    </div><!---------card end----------->
			
		</div><!-------col end------->

		


    </div><!----row end----->

</div><!------------end container------->
</body>
</html>