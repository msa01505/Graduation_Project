<?php
$servername="localhost";
$username="root";
$pass="";
$database="israa";
$conn=mysqli_connect($servername,$username,$pass,$database);
if(!$conn)
{
    die("connection failed".mysqli_connect_error);
}
else
{
    //echo "connectuion create";
}
?>+