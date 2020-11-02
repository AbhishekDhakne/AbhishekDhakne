<?php 
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Fitness</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Welcome</h1>
        <?php /*
            //$sql = "UPDATE regist SET commodity_quantity=$qty WHERE user=$rows['user']";
            $username=$_POST['username'];*/?>
           <!--<h1 style="color:yellow;"> <?php// echo $username;?></h1>-->
        <h1 style="color:yellow;">Thank you for Registration</h1>
        <button type="submit"><a href="sregistration.php">See Registration</a></button>
        <button type="submit"><a href="index.php">Logout</a></button>
    </div>
</body>
</html>
