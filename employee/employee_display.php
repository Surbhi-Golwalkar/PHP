<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
  <table class="table table-bordered">
    <h1 class="bg-info text-center text-white" style="background-color: #41215f !important;">Data Display</h1>
    <tr>
      <th>id</th>
      <th>username</th>
      <th>action</th>
    </tr> 
    <?php

        include "dbcon.php";
        $a = "select * from employee";
        $result = mysqli_query($con,$a);
      
        while ($data = mysqli_fetch_array($result)) {
          // echo "<pre>";
         //    print_r($data);
        
      

    ?>
    <tr>
      <td><?php echo $data['id'] ?></td>
      <td><?php echo $data['name'] ?></td>
      <td>
        <a href="employee_view.php?a=<?php echo $data['id']?>" class="btn btn-info" style ="background-color: #41215f !important;">view</a>
        <a href="employee_edit.php?a=<?php echo $data['id']?>" class="btn btn-success" style ="background-color: #41215f !important;">edit</a>
        <a href="employee_delete.php?a=<?php echo $data['id']?>" class="btn btn-danger" style ="background-color: #41215f !important;">delete</a>
      </td>
    
    </tr>
    <?php
         }
    ?>
  </table>
    </div>

</body>
</html>