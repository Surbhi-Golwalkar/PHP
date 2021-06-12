<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
  <table class="table table-bordered">
    <h1 class="bg-info text-center text-white">Data Display</h1>
    <tr>
      <th>id</th>
      <th>student_name</th>
      <th>email</th>
      <th>mobile_number</th>
      <th>action</th>
    </tr> 
    <?php

        include "dbcon.php";
        $a = "select * from task3";

        $result = mysqli_query($con,$a);
      
        while ($data = mysqli_fetch_array($result)) {
          // echo "<pre>";
         //    print_r($data);
        
      

    ?>
    <tr>
      <td><?php echo $data['id'] ?></td>
      <td><?php echo $data['student_name'] ?></td>
      <td><?php echo $data['email'] ?></td>
      <td><?php echo $data['mobile_number'] ?></td>
      <td>
        <a href="task3_view.php?a=<?php echo $data['id']?>" class="btn btn-info">view</a>
        <a href="internship_edit.php?a=<?php echo $data['id']?>" class="btn btn-success">edit</a>
        <a href="task3_delete.php?a=<?php echo $data['id']?>" class="btn btn-danger">delete</a>
      </td>
    
    </tr>
    <?php
         }
    ?>
  </table>
    </div>

</body>
</html>