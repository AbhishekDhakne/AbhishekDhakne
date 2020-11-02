<?php
    include_once 'database.php';
    $delete="DELETE from regist WHERE email='" .$_GET['email']."' ";
    if(mysqli_query($conn,$delete)){
        ?>
            <script>
                alert("Record Deleted Successfully");
            </script>
        <?php
    } 
    else{
        ?>
            <script>
                alert("Record Deleted failed");
                <?php echo"Error deleting record:".mysqli_error($conn); ?>
            </script>
        <?php
    }
    header("location:sregistration.php");
    mysqli_close($conn);
?>