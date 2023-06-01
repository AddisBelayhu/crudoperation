<?php
include "db_connection.php";

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `employee` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted successfully";
        die(mysqli_error($con));
      }else{
        header('location:retrive.php');
       }
}

?>