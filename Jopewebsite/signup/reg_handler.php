<?php 
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$password=$_POST["password"];

include "config.php";

$insertUser="INSERT INTO user(Firstname,Lastname,email,password) values ('$firstname','$lastname','$email',
'$password')";

$result=mysqli_query($con,$insertUser);
if($result){
    echo "<h1>user registered successfully </h1>";
    echo "<a href='../login/login.php'> Log IN </a>";
}



?>