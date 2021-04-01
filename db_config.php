<?php
define('DB_SERVER',"localhost");
define('DB_USER',"root");
define('DB_PASSWORD',"");
define('DB_NAME',"query_resolver");

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
if($con){
    //echo "Connection Established Successfully";
}
else{
    echo "Can't connect to Database";
}
?>

