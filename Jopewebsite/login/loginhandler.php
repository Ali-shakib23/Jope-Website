<?php
$email=$_POST["email"];
$password=$_POST["password"];

include "config.php";

$loginUser="SELECT email,password FROM user WHERE email='$email' and password='$password'";

$result=mysqli_query($con,$loginUser);
$count=mysqli_num_rows($result);
if($count==1){
    echo "<h1>welcome to your profile </h1>";
  
}
else{
    echo"invalid";
}

?>