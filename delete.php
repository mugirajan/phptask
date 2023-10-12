<?php 
      $connection = mysqli_connect("localhost","root","")
      $crud = mysqli_select_db($connection, "crud");

      $delete= $_GET['del'];

      $sql = "delete from employee where id = '$delete' ";


    if(mysqli_query($connection,$sql))
    {
        echo '<script> location.replace("index.php") </script>'
    }
    else
    {
      echo "some error" . $connection->error;
    }

?>