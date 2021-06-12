<?php
include "dbcon.php";
$id = $_GET['a'];
$a = "select * from form1 where id = $id";
$b=mysqli_query($con,$a);
$c=mysqli_fetch_array($b);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="form_update.php">
<input type="hidden" name="id" value="<?php echo $c['id']?>">
		Name:<input type="text" name="name" value="<?php echo $c ['name']?>">
   
		<br>
		<br>

College:
        <select name="college">
	    <option value="select">Select</option>

		<option value="rjit"
         <?php 
          if ($c['college'] == 'rjit') {
          	echo "selected";
          }
         ?>
		>RJIT</option>

		<option value="mpct"
		<?php 
          if ($c['college'] == 'mpct') {
          	echo "selected";
          }
         ?>
         >mpct</option>

		<option value="itm"
		<?php 
          if ($c['college'] == 'itm') {
          	echo "selected";
          }
         ?>
         >itm</option>

		<option value="MITS"
		<?php 
          if ($c['college'] == 'MITS') {
          	echo "selected";
          }
         ?>
         >MITS</option>

		</select>

		<br>
		<br>
Gender:
        <input type="radio" name="gender" value="male"
        <?php 
          if ($c['gender'] == 'Male') {
          	echo "checked";
          }
         ?>
         >Male

	    <input type="radio" name="gender" value="female"
	    <?php 
          if ($c['gender'] == 'female') {
          	echo "checked";
          }
         ?>
         >Female
	    <input type="radio" name="gender" value="other"
	    <?php 
          if ($c['gender'] == 'other') {
          	echo "checked";
          }
         ?>
         >other

        <br>
        <br>

Education:
        <input type="checkbox" name="education[]" value="mca">MCA
        <input type="checkbox" name="education[]" value="ca">CA      
        <input type="checkbox" name="education[]" value="ma">MA
        <input type="checkbox" name="education[]" value="bba">BBA

        <br>
        <br>
		
		

		<button type="submit">update</button>
		

</form>
</body>
</html>