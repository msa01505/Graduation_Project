<?php
session_start();
include 'db_connection.php';
  $conn = OpenCon();
  if ($conn->connect_error) 
  {
    die("Connection failed: " . $conn->connect_error);
  }
else //if(isset($_POST['qty']))
{
	                                  $qty = isset($_GET['qty']) ? $_GET['qty'] : 'Manage';
                  if(!empty($qty))
                  {
                    $p_total = $pro_price * $qty ;
                    $stmt = $con->prepare("UPDATE cart SET qty = '$qty' , total_amount = '$p_total' WHERE user_id = ? AND p_id = ? ") ;
                    $stmt->execute(array($user_id,$p_id));
                             $myfile = fopen("car.php", "r+") or die("Unable to open file!");
                      echo fgets($myfile);
                      header("Location: car.php?"); 


}
}
?>