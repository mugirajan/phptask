<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD php</title>
</head>
<body>
   <div class="container">
   <div class="card">
  <div class="card-header">
    <h3>Employee List</h3>
  </div>
  <div class="card-body">
  <button type="button" class="btn btn-primary btn-sm"><a href="add.php" class="text-light">Small button</a></button>
  <br>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
      <th scope="col">Salary</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
  <?php

    $connection = mysqli_connect("localhost","root","");
    $crud = mysqli_select_db($connection, "crud");

    $sql = "select * from employee";
    $run = mysqli_query($connection,$sql);

    $id = 1; 

    while($row = mysqli_fetch_array($run)){
        $uid = $row['id'];
        $name = $row['name'];
        $role = $row['role'];
        $salary = $row['salary'];
    
  ?>

      <tr>
      <td><? echo $id ?></td>
        <td><? echo $name ?></td>
        <td><? echo $role ?></td>
        <td><? echo $salary ?></td>

        <td>
          <button class="btn btn-success"><a href='edit.php?edit=<?php echo $uid ?>' class="text-light">Edit</a></button> &nbsp;
          <button class="btn btn-success"><a href='delete.php?del=<?php echo $uid ?>' class="text-light">Delete</a></button>
        </td>
      </tr>
    <?php $id++; } ?>

  </tbody>
 
</table>
</div>
</div>
</body>
</html>