<?php
    include_once("database.php");
    session_start();
    $select="SELECT * FROM regist";
    $result1= mysqli_query($conn,$select);
    $rnum = mysqli_num_rows($result1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="reg">
        <h1>List of Future Builder's</h1>
        <table align="center">
            <tr>
                <th>Register_ID</th>
                <th>Name</th>
                <th>Email_Id</th>
                <th>Phone Number</th>
                <th colspan=2>Action Record</th>
            </tr>
            <?php
            if(mysqli_num_rows($result1)>0)
            {   $i=0;
                while($row= mysqli_fetch_array($result1))
                {
                    
                    ?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['username'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['phoneno'];?></td>
                        <td><i class="fa fa-edit" aria-hidden="true"><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a></i></td>
                        <td><i class="fa fa-minus-circle" aria-hidden="true"><a href="delete.php?email=<?php echo $row['email']; ?>">Remove</a></i></td>
                    </tr>
                    <?php
                    $i++;
                }
            }
            else{
                ?>
                <script>
                    alert("No data till now..")
                </script>
                <?php
            }
            ?>
        </table>
        <button type="submit"><a href="royal.php">Go Back</a></button>
    </div>
</body>
</html>