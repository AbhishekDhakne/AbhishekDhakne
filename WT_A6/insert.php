<?php
require("database.php");
    $username= $_POST['username'];
    $pass= $_POST['pass'];
    $gender= $_POST['gender'];
    $email= $_POST['email'];
    $phoneno= $_POST['phoneno'];
if(!empty($username) || !empty($pass) || !empty($gender) || !empty($email) || !empty($phoneno))
{
    $passw = password_hash($pass,PASSWORD_BCRYPT);
    include("database.php");

    $SELECT = "SELECT * from regist Where email='$email' ";
    $query= mysqli_query($conn,$SELECT);

    $rnum = mysqli_num_rows($query);
    if($rnum>0)
    {
        echo "Email already exist";
    }
    else{
        
            $INSERT = "INSERT into regist(username,pass,gender,email,phoneno) VALUES('$username','$passw','$gender','$email','$phoneno')";
            $iquery = mysqli_query($conn,$INSERT);
            if(isset($iquery)){
                header("location:royal.php");
            }
            else{
                echo "Insertion failed";
            }
        
    }    
}
else
{
    ?>
    <script>
        alert("All Fields are Required");
    </script>
    <?php
}
?>