<?php
include "db_connection.php";
$result = mysqli_query($con,"select * from `employee`");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>crud operation</title>
</head>

<body>
    
    <div class="container">
        <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add user</a> </button>
        
        <?php
        if(mysqli_num_rows($result)>0){
        ?>
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">City Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $i=0;
                    while ($row = mysqli_fetch_array($result)) {
                ?>   
            <tr>                            
            <th scope="row"><?php echo $id = $row['id'];?></th>
            <td><?php echo $row['first_name'];?></td>
            <td><?php echo $row['last_name'];?></td>
            <td><?php echo $row['city_name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td>
            <button class="btn btn-primary"><a href="update.php?id=<?php echo $row["id"]; ?>" class="text-light">Update</a></button>
            
             <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"class="text-light">Delete</a></button>
            </td>
          </tr>

          <?php
          $i++;
             }
             ?>
                            

            </tbody>
        </table>
        <?php } else{
            echo "No data found";
        }
        ?>
    </div>
</body>

</html>