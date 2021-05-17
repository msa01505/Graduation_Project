<?php
session_start();
include 'db_connection.php';
  $conn = OpenCon();
  if ($conn->connect_error) 
  {
    die("Connection failed: " . $conn->connect_error);
  }
else if(isset($_POST['update']))
{
    $id=test_input($_POST["id"]);
    $brand=test_input($_POST["brand"]);
    $cat= test_input($_POST["cat"]);
    $title=test_input($_POST["title"]);
    $price=test_input($_POST["price"]); 
    $desc=test_input($_POST["description"]);
    $image=test_input($_POST["image"]);
    $keywords=test_input($_POST["keyword"]);

    $sql="UPDATE product set product_brand='$brand',product_category='$cat',product_title='$title',product_price='$price',product_desc='$desc',product_image='$image',
    product_keywords='$keywords'
    where product_id='$id'";
   // $result=mysqli_query($query);

if ($conn->query($sql) === TRUE)
    {
        echo"<script>alert('VALUE update Successfully')</script>";
         $myfile = fopen("DelEditProduct.php", "r+") or die("Unable to open file!");
         echo fgets($myfile);
         header("Location: DelEditProduct.php"); 
    }
    else
    {
        echo"<script>alert(' no update VALUE')</script>";

    }
  
}  
function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>