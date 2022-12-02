<?php
include 'database.php';
$user=$_POST['userName'];
$password=$_POST['password'];
$sql = "INSERT INTO form (userName,password,date) VALUES ('$user','$password',NOW())";
$result = mysqli_query($con,$sql);
if($result){
    echo 'success';
}else{
    echo mysqli_error($con);
}

?>
