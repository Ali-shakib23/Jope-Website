<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./veiwing.css"> 
</head>
<body>
 
   
    <?php
    include "config.php";
    $Jname=$_GET["Jname"];
    $viewjobs= "SELECT * FROM jobs WHERE Jname='$Jname'";
    $result=mysqli_query($con,$viewjobs);
    
    $row=mysqli_fetch_array($result);
    $Jid=$row["Jid"];
    $Jname=$row["Jname"];
    $Jtype=$row["Jtype"];
    $Jcategory=$row["Jcategory"];
    $Jlocation=$row["Jlocation"];
    $Jcompany=$row["Jcompany"];
    ?>
    <div class="page">
    <h1>Job Detail</h1>
    <label>Job ID:</label>
    <p><?php echo $Jid; ?></p>

    <label>Job Title:</label>
    <p><?php echo $Jname; ?></p>

    <label>Job Type:</label>
    <p><?php echo $Jtype; ?></p>

    <label>Job category:</label>
    <p><?php echo $Jcategory; ?></p>

    <label>Job Location:</label>
    <p><?php echo $Jlocation; ?></p>

    <label>Company:</label>
    <p><?php echo $Jcompany; ?></p>
</div>
</body>
</html>