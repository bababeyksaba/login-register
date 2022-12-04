<?php
$host = 'localhost';
$user ='root';
$password ='';
$db ='login_register';
$con = mysqli_connect($host,$user,$password,$db);
if(!$con){
    echo 'error in database file';
    exit();
}
mysqli_set_charset($con,'utf8')



?>