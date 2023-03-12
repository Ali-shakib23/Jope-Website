<?php
$Jid=$_POST["Jid"];
$Jname=$_POST["Jname"];
$Jtype=$_POST["Jtype"];
$Jcategory=$_POST["Jcategory"];
$Jlocation=$_POST["Jlocation"];
$Jcompany=$_POST["Cname"];

include "config.php";
$insertjob="INSERT INTO jobs (Jid,Jname,Jtype,Jcategory,Jlocation,Jcompany) value('$Jid',
'$Jname','$Jtype','$Jcategory','$Jlocation', '$Jcompany')";
$result=mysqli_query($con,$insertjob);

if($result){
    echo "<h1>Job inserted Successfuly";
}
else {
    die ("Error: ".mysqli_errno(con));
}
?>