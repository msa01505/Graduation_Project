<?php 
include 'data.php';
session_start();
       require 'new.php';
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
       $stmt = $con->prepare("SELECT * FROM cart WHERE user_id='$user_id'");
       $stmt->execute();
       $rows = $stmt->fetchAll();
       $row_count = $stmt->rowCount();
       }}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap.css">

    <link rel="stylesheet" href="css/mahmoud.css" type="text/css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="brands.css" type="text/css">
    <link rel="stylesheet" href="Home.css" type="text/css">
    <script src="jquery-3.4.1.min.js"></script>
    <script src="DS.js"></script>
   <!--<link rel="stylesheet" href="main.css" />-->
       <title>Products</title>
       </HEAD>
       <body class="body">
        <section class="page-content text-center" >
            <header >
                <div class="container" > 
                     <div class="row align-items-center ">
         
                      <div class="col-xl-6 col-lg-7 col-md-7  col-sm-1 ">
                      <img  class="sora" src="DS.png"/>
                      <h1 class="nomall">D Shopping Mall</h1>
                      </div>
                     
                      <div class= "col-xl-4  col-lg-3  col-md-3 col-sm-2 input-group  ">
               <form    method="GET" action= "serch.php" >
                 <input  class="form-control list-group list-group-flush " name= "serch" type="text" placeholder="search" aria-label="search" aria-describedby="inputGroup-sizing-lg " value="<?php echo $keywords; ?>"/>
                </form>  
                       <!--<div class= "input-group-append ">
                          <button class="btn btn-outline-secondary  " type="button" id="button-addon2" ><a  class= "icon1" href="#"><i class="fas fa-search"></i></a> </button>
                      </div>-->
                      </div>
         
                          <?php
                          if(!empty($_SESSION["per"]))
                      {   
               echo '      <div class="  col-lg-2 col-md-2 offset col-sm-auto "> 
                           <br><br>   <a  class="icon" href="buy.php"><i class="fas fa-shopping-bag"></i> <span class="badge badge-primary">'.$row_count.'</span></a><hr>
                           <a  class="icon" href="sa/AddProduct.php"><i class="fas fa-user-shield"></i></a>
                           </div>
                    ';
           }
              else 
              {
                  echo '     <div class=" col-xl-2  col-lg-2 col-md-2 offset col-sm-auto "> 
                             <a  class="icon" href="buy.php"><i class="fas fa-shopping-bag"></i> <span class="badge badge-primary">'.$row_count.'</span></a>
                             </div>
                       ';
              }
             
             ?>

                     </div>
             <?php
                  if(!empty($_SESSION["user"])) {
                       echo '
             <nav  >  
                 <ul class="nav justify-content-center ">
                   <li class="nav-item">
                    <a class="nav-link active" href="Home.php">Home</a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link" href="shops.php">Shops</a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About us</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link " href="logout.php">Logout</a>
                  </li>                   
                 </ul>
             </nav>
 ';
}
else 
{
  echo '
             <nav >
                 <ul class="nav justify-content-center ">
                   <li class="nav-item">
                    <a class="nav-link active" href="Home.php">Home</a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link" href="shops.php">Shops</a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About us</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link " href="log.php">Login</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="signup.php">Sign Up</a>
                   </li>
                   
                 </ul>
             </nav>
 ';

 
}
 ?>
                     </div>
                </div>
             </header>

<section>
        <div class="page-content text-center body">
            <main class="collection-list"> 
                <h1>Welcome</h1>
            </main>
        </div>
               <?php 
        include "reco.php";
       ?>
       <!--- <form method="POST" action="action2.php" > -->
        <hr>
            <div class="container" style="margin-top: 50px; margin-right:60px; padding-left:45px;">
            <div class="row" >

                
                <?php
                if(!empty($_SESSION["user"]))
                {}
                include 'new.php';


                ///////////////////////////////////////////
///////////////////////////////////////////////
                //This cod To define the "do"
                  $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
                  if($do == 'brand') 
                  {
                    $cat_id = isset($_GET['cat_id']) && is_numeric($_GET['cat_id']) ? intval($_GET['cat_id']): 0;
                    $brand_id = isset($_GET['brand_id']) && is_numeric($_GET['brand_id']) ? intval($_GET['brand_id']): 0;
                    
                      echo ' <style>
                             .hejabi-list{
                              height: 100% !important;
                              width : 100% !important;
                              }
                             </style> ';
                    
                    //////////////////////////////////////////////////////////

                    $stmt = $con->prepare("SELECT * FROM product WHERE Product_category = ? AND product_brand = ? ");
                     $stmt->execute(array($cat_id,$brand_id));
                     $rows_id = $stmt->fetchAll();
                     $row_count = $stmt->rowCount();
                     if ($row_count > 0) 
                     {
                       foreach ($rows_id as $row_id) 
                       {
                           $pro_id =$row_id['product_id'];
                             $pro_cat =$row_id['Product_category'];
                               $pro_brand =$row_id['product_brand'];
                              $pro_title =$row_id['product_title'];
                              $pro_price =$row_id['product_price'];
                              $pro_image =$row_id['product_image'];
          echo '
                        <div class="col-md-4 col-sm-6" style ="">
                            <div class="body" >
                                 <img class="hejabi-list he" src="photos/'.$pro_image.'" style="width:70%;" />
                             </div>
                             <div class="price">'.$pro_price.' LE
         <br>   <a  id="product" href="action.php?do=cart&pid='.$pro_id.'" class ="button"> Add to Bag <i class="fas fa-shopping-bag"></i></a>
                                </div>
                                </div>
          ';
                      }
                    }
    }
                             ?> 
                      </div></div>









        <!--<header >
           
           </div>-->
          
       <!--    </form>   -->           
        </section>
   
   </section>
   
        </body>
   </HTML>