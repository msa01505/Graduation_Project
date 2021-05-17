<?php
session_start();
include 'new.php';
//include "conectionTest.php";
$do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
                  if($do == 'cart') 
                  {
$pid = isset($_GET['pid']) && is_numeric($_GET['pid']) ? intval($_GET['pid']): 0;
	$user = $_SESSION["user"];
	
    $stmt = $con->prepare("SELECT user_id FROM user WHERE email='$user'");       
    $stmt->execute();
    $rows = $stmt->fetchAll();
    $row_count = $stmt->rowCount();
    if ($row_count > 0)
    {       
      foreach ($rows as $row)
      {
            $user_id=$row["user_id"];
           	$stmt = $con->prepare("SELECT p_id FROM cart WHERE p_id='$pid' AND user_id='$user_id'");       
		    $stmt->execute();
		    $rows = $stmt->fetchAll();
		    $row_count = $stmt->rowCount();
		    if ($row_count > 0)
		    {
		       echo ' <div class="alert-success alert-dismissible">
		       <strong>Item already added to your Bag! </strong>
		       </div> ';

		       $url = $_SERVER['HTTP_REFERER'];
         header("Refresh:2; url=$url");
		    }
		    else
		    {
		    	$stmt = $con->prepare("SELECT * FROM product WHERE product_id='$pid' ");
		    	$stmt->execute();
                     $rows_id = $stmt->fetchAll();
                     $row_count = $stmt->rowCount();
                     if ($row_count > 0) 
                     {
                       foreach ($rows_id as $row_id) 
                       {
                              $pname =$row_id['product_title'];
                              $pprice =$row_id['product_price'];
                              $pimage =$row_id['product_image'];
                              $pro_cat =$row_id['Product_category'];
                              $pro_brand =$row_id['product_brand'];
                              $qty =1;
                               

		    $stmt = $con->prepare("INSERT INTO cart (p_id,user_id,product_title,product_image,qty,price,total_amount) VALUES (?,?,?,?,?,?,?) ");
                $stmt->execute(array($pid,$user_id,$pname,$pimage,$qty,$pprice,$pprice));
                 echo ' <div class="alert-success alert-dismissible">
		       <strong>Item added to your Bag! </strong>
		       </div> 
		       ';
		       $url = $_SERVER['HTTP_REFERER'];
         header("Refresh:2; url=$url");

		    }
        }
    
}
}
}
else
{         $myfile = fopen("log.php", "r+") or die("Unable to open file!");
         echo fgets($myfile);
         header("Location: log.php"); 
}
}
?>


