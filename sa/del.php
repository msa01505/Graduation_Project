<?php

   include("connection.php"); 
    error_reporting(0);
    $product_id=$_GET['rn'];
    $query="delete  from product where product_id='$product_id'";  

    //$query="delete  * from product";  
   // $query="select from product(product_brand,Product_category,product_title,product_price,product_desc,product_image,product_keywords)";
    $result=mysqli_query($conn,$query);
if($result)
{
        echo"<script>alert('Deleted successfully')</script>";
}
else
{
    echo"<h1>notdeleted</h1>";

}
?>
