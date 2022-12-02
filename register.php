 <?php
include 'database.php';
$user=$_POST['userName'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql = "INSERT INTO form (userName,email,password,date) VALUES ('$user','$email','$password',NOW())";
$result = mysqli_query($con,$sql);
if($result){
    echo 'success';
}else{
    echo mysqli_error($con);
}

?> 
