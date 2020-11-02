<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "gymregistration";

$conn = new mysqli($host , $dbUsername , $dbPassword, $dbName);

if($conn)
{?>
    
    <script>
    //alert("Connection Successful");
    </script>
    <?php    
}
else{
    echo "Connection failed";
    die ('Connect error('.mysql_connect_errno().')'.mysql_connect_error());
}

?>