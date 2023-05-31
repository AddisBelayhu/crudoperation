<?php
include "db_connection.php";

if(isset($_POST['submit'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $city_name=$_POST['city_name'];
    $email=$_POST['email'];

    $sql= "insert into employee(first_name,last_name,city_name,email) values('$first_name','$last_name','$city_name','$email')";

    if(mysqli_query($con,$sql)){
        echo "New recored in inserted";
    }else{
        echo "Error:".$sql."<br>".mysqli_error($con);
    }
    mysqli_close($con);
}

?>