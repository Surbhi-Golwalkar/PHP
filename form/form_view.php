<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
  <table class="table table-bordered">
    <h1 class="bg-info text-center text-white" style="background-color: #41215f !important;">View Data</h1>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>college</th>
      <th>gender</th>
      <th>education</th>
      <th>action</th>
    </tr> 
    <?php
            include "dbcon.php";
            $id = $_GET['a'];

            $select="select * from form1 where id = $id";
            $result=mysqli_query($con,$select);
            $fetch=mysqli_fetch_array($result);{

        ?>
      <tr>
      <td><?php echo $fetch['id'] ?></td>
      <td><?php echo $fetch['name'] ?></td>
      <td><?php echo $fetch['college'] ?></td>
      <td><?php echo $fetch['gender'] ?></td>
      <td><?php echo $fetch['education'] ?></td>
      <td>
        <a href="form_view.php?a=<?php echo $data['id']?>" class="btn btn-info" style ="background-color: #41215f !important;">view</a>
        <a href="form_edit.php?a=<?php echo $data['id']?>" class="btn btn-success" style ="background-color: #41215f !important;">edit</a>
        <a href="form_delete.php?a=<?php echo $data['id']?>" class="btn btn-danger" style ="background-color: #41215f !important;">delete</a>
      </td>
    
    </tr>
    <?php
         }
    ?>
  </table>
    </div>

</body>
</html>