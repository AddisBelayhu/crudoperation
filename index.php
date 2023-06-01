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
      <h2>User Registration Page</h2><br><br>

    <form action="process.php" method="post">
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="first_name" autocomplete = "off">
  </div>
 
  <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="last_name" autocomplete = "off">
  </div>

  <div class="form-group">
    <label>City</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="city_name" autocomplete = "off">
  </div>

 
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete = "off">

    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

    
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

  </body>
</html>

