<?php 
session_start();

if(isset($_SESSION['userid'])&& isset($_SESSION['username']) && isset($_SESSION['usertype'])){

    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    unset($_SESSION['usertype']);
   
    // session_destroy();
    header("location:index.php");
}

?>