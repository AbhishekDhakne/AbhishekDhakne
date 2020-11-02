<?php
    require("database.php");
    if(count($_POST)>0){
        $update="UPDATE regist SET username='". $_POST['username']."',email='". $_POST['email']."',phoneno='". $_POST['phoneno']."'WHERE id='".$_REQUEST['id']."'";
        mysqli_query($conn,$update);
        $message="Record Modified Successfully";
    }
    $select="SELECT * FROM regist Where id='".$_REQUEST['id']."'";
    $result= mysqli_query($conn,$select);
    $row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="update.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div style="padding-bottom:5px;color:green;"><?php if(isset($message)){ echo $message;} ?></div>
    <div class="mod">
        <form action="" method="POST">
            <h1>Online Admin can Modify</h1>
            <!--<label >Register_Id</label>
            <input type="text" name="id" value="<?php// echo $row['id']; ?>" autocomplete="off">-->
            <label >Username</label>
            <input type="text" name="username" value="<?php echo $row['username']; ?>" autocomplete="off">
            <label >Email-Address</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>">
            <label >Phone Number</label>
            <input type="tel" name="phoneno" value="<?php echo $row['phoneno']; ?>" autocomplete="off">
            <input type="submit" name="update" value="Update" >
            <i class="fa fa-arrow-left" aria-hidden="true"><a href="sregistration.php"> Back</a></i>
        </form>
    </div>
</body>
</html>