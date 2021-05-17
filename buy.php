<?php
session_start();
if(!empty($_SESSION['user']))
{         
         $myfile = fopen("car.php", "r+") or die("Unable to open file!");
         echo fgets($myfile);
         header("Location: car.php?"); 
}
else
{        
        $myfile = fopen("log.php", "r+") or die("Unable to open file!");
         echo fgets($myfile);
         header("Location: log.php?"); 
}
?>