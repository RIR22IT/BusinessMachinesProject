<?php

require_once('../database/connection.php');
session_start();

    if(isset($_POST['btnlogin']))
    {
        if(empty($_POST['email']) || empty($_POST['password']))
        {
            header("location:index.php?Empty= Please Fill in the Blanks!");
        }
        else
        {   
    
            $query = "select * from useraccount where email = '".$_POST['email']."' and password = '".$_POST['password']."'";
            $result=mysqli_query($db,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['email'] = $_POST['email'];
                header("location: adminDashboard.php");
            }
            else
            {
                header("location: index.php?Invalid= Please Enter correct Email and the Password");
            }
        }
    }
   

?>
    