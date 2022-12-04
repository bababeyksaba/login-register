<?php
$host = 'localhost';
$user ='root';
$password ='';
$db ='login-register';
$con = mysqli_connect($host,$user,$password,$db);
if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($con,'utf8');

?>