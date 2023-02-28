<?php


$id =  $_GET['id'];

$connection =  mysqli_connect("localhost","root","","kimia");
$query = mysqli_query($connection,"DELETE FROM `user` WHERE `id` = $id ");

if(mysqli_affected_rows($connection) >0){
    // sleep(5);
    
    header("location: task.php");
}else{
    echo "user not deleted";
}