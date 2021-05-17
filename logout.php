<?php
    session_start();
    $_SESSION["per"]="";
$_SESSION["user"]="";

    //session_unset();
   // session_destroy();
    header('Location: Home.php');
?>