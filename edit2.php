<?php
  if(isset($_POST['update']))
{
    $id=test_input($_POST["rn"]);
    $brand=$_GET['brand'];
    $cat= $_POST['cat'];
    $title=$_GET['title'];
    $price=$_GET['price']; 
    $desc=$_GET['description'];
    $image=$_GET['image'];
    $keywords=$_GET['keyword'];

    $query="update product set product_brand='$brand',product_category='$cat',product_title='$title',product_price='$price',product_desc='$desc',product_image='$image',
    product_keywords='$keywords'
    where product_id='$id'";
    $result=mysqli_query($conn,$query);

    if($result)
    {
        echo"<script>alert('VALUE update Successfully')</script>";

        echo $id;
        echo $brand;
        echo $cat;
         $myfile = fopen("edit.php", "r+") or die("Unable to open file!");
         echo fgets($myfile);
         header("Location: edit.php?"); 
    }
    else
    {
        echo"<script>alert(' no update VALUE')</script>";

    }
  
}  
?>