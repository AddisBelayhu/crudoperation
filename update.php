<?php
include "db_connection.php";
if(count($_POST)>0) {
    mysqli_query($con,"UPDATE employee set first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', city_name='" . $_POST['city_name'] . "' ,email='" . $_POST['email'] . "' WHERE id='" . $_POST['id'] . "'");
    $message = "Record Modified Successfully";
    //header("location:retrive.php");
    }
    $result = mysqli_query($con,"SELECT * FROM employee WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>crud operation</title>
  </head>
  <body>
    <div class="container my-5">
      <h2>Update employee data</h2><br><br>

    <form action="" method="post">
    <div><?php if(isset($message)) { echo $message; } ?></div>
    <div>

         <a href="retrive.php">Employee List</a>
    </div>

  <div class="form-group">
    
   <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>">
    
</div>

  <div class="form-group">
        <label>First Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="first_name" autocomplete = "off" value="<?php echo $row['first_name']; ?>">

  </div>
 
  <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="last_name" autocomplete = "off" value="<?php echo $row['last_name']; ?>">
  </div>

  <div class="form-group">
    <label>City</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="city_name" autocomplete = "off" value="<?php echo $row['city_name']; ?>">
  </div>

 
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete = "off" value="<?php echo $row['email']; ?>">

    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

    
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>

  </body>
</html>

