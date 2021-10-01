
<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'businessmachines';

    //database connection
    $db = mysqli_connect($host,$user,$pass,$db_name);

    //check connection 
    if($db -> connect_error){
        die("Connection failed: " . $db -> connect_error);
    }

?>
