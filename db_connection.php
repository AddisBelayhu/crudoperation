<?php
$servername='localhost';
$username='root';
$password='';
$databasename='crud';
$con = mysqli_connect($servername,$username,$password,$databasename);

if(!$con){
    //echo "connect successfully";
    die("connection error".mysqli_connect_error());
}
?>