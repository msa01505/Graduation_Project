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
<HTML>
    <HEAD>

           <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="css/mahmoud.css" type="text/css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="Home.css" type="text/css">
    <script src="jquery-3.4.1.min.js"></script>
    <script src="DS.js"></script>


    <!-----<script src="DS.js"></script>!------------>
   <!--<link rel="stylesheet" href="main.css" />-->
       <title>Brands</title>
       </HEAD>
       <body class="body">
        <section class="page-content text-center">
            <header >
                <div class="container">
                     <div class="row align-items-center ">
         
                      <div class="col-xl-6 col-lg-7 col-md-7  col-sm-1 ">
                      <img  class="sora" src="DS.png"/>
                      <h1 class="nomall">D Shopping Mall</h1>
                      </div>
                     
                      <div class= "col-xl-4  col-lg-3  col-md-3 col-sm-5 input-group  ">
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
            <div class="container" style="margin-top: 50px; margin-right:60px; padding-left:45px;">
           <div class="row">
                <?php
                include 'new.php';
                include 'reco.php';
               //This cod To define the "do"
                  $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
                  if($do == 'cat') {
                    $cat_id = isset($_GET['cat_id']) && is_numeric($_GET['cat_id']) ? intval($_GET['cat_id']): 0;
//Start to get the data with pdo connection
                    $stmt = $con->prepare("SELECT brand FROM cat_brand WHERE category = ?");
                     $stmt->execute(array($cat_id));
                     $rows_id = $stmt->fetchAll();
                     $row_count = $stmt->rowCount();
                     if ($row_count > 0) {
                      foreach ($rows_id as $row_id) {
                        $brid = $row_id['brand'];
                       $stmt = $con->prepare("SELECT * FROM brands WHERE brand_id = ?");
                       $stmt->execute(array($brid));
                       $rows = $stmt->fetchAll();
                       foreach($rows as $row) {
                        $brand_id = $row["brand_id"];
                        $brand_name = $row["brand_title"];
                        $brand_link = $row["brand_link"];
                        $brand_img = $row["brand_img"];
                        echo '
                                          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 body">
                                              <a href="product.php?do=brand&cat_id='.$cat_id.'&brand_id='.$brand_id.'" class="button btn-block">
                                                <img src="brand/'.$brand_img.'" class="img-fluid" style="width:100%";/>
                                                     <div class="hover">
                                                          <div class="filter-gold"></div>
                                                        </div>
                                                        </a>
                                                         </div>
                                ';

                       }
                      }
                       

                     } 
                  }
                ?>
            </div>
            </div>



         
       
   </section>
   
        </body>
   </html>