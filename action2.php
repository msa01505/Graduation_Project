<?php
session_start();
include 'db_connection.php';
  $conn = OpenCon();
  if ($conn->connect_error) 
  {
    die("Connection failed: " . $conn->connect_error);
  }

      $user_email = $_SESSION["user"];
            echo $user_email;
      $sql="SELECT user_id FROM user WHERE email = '$user_email' LIMIT 1";
      $run_query = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($run_query);
      if($count > 0)
      {
        $row = mysqli_fetch_array($run_query);
        $user_id=$row['user_id'];
        echo $user_id;
      }


      if(isset($_POST["addProuduct"])) 
    {
      $p_id = $_POST["proId"];
      $sql = "SELECT * FROM cart WHERE p_id ='$p_id' AND user_id ='$user_id'";
      $run_query = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($run_query);
      if($count > 0)
      {
        echo "product is already added";
      }
      else
      {
        $sql = "SELECT * FROM products WHERE product_id = '$p_id'";
        $run_query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($run_query);
        $id=$row["product_id"];
        $pro_name=$row["product_title"];
        $pro_image=$row["product_image"];
        $pro_price=$row["product_price"];
        $sql = "INSERT INTO `cart`( `p_id`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES ('$id','$user_id','$pro_name','$pro_image',1,'$pro_price','$pro_price')";
        if(mysqli_query($conn,$sql))
        {
          echo "Produc is added..!" ;
        }

      }
    }
  

?>