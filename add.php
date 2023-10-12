<?php
    $connection = mysqli_connect("localhost","root","")
    $crud = mysqli_select_db($connection, "crud")


if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $role = $_POST['role'];
  $salary = $_POST['salary'];

  $sql = "insert into employee(name,role,salary)values(' $name ',' $role ',' $salary ')";

  if(mysqli_query($connection,$sql)){
      echo '<script> location.replace("index.php") </script>'
  }
  else{
    echo "some error" . $connection->error;
  }
}


?>















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
  <form action="add.php" method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label>Role</label>
    <input type="text" name="role" class="form-control" aria-describedby="emailHelp" placeholder="Enter Role">
  </div>
  <div class="form-group">
    <label>Salary</label>
    <input type="text" name="salary" class="form-control" aria-describedby="emailHelp" placeholder="Enter Salary">
  </div><br><br>
  <input type="submit" class="btn btn-primary" name="submit" value="register">
</form>
</div>
</div>
</div>
</body>
</html>