<?php
session_start();
include 'database.php';
$user=$_POST['user'];
$password=$_POST['password'];

$sql = "SELECT *  FROM form WHERE  userName='$user' AND password = '$password';";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows ($result)>0){
    // echo 'success';
    $_SESSION['user'] =$user ;
    $_SESSION['pass']=$password;
    header('location: welcome.php');
}else{
    echo 'username or pass is wrong';
}

?>