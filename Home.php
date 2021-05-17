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
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="Home.css" type="text/css">
    <script src="jquery-3.4.1.min.js"></script>
    <script src="DS.js"></script>


   <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>DsMall</title>
</head>
<style>
.body{
    background:#e6e6e6;
    cursor: grab;
}
</style>
<body class="body">
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
       
    </header>

    <section >
      <div>
        <img  class= " logo" alt="Responsive image" src="mall.jpg" />
      </div>
      <div class="container">
       <div class="row">
          <div>
            <img src="home-an.jpg" class="cate"/>
          </div>
          <div >
            <img src="Home-fashion.jpg" class="cate" />
          </div>
          <div>
            <img src="home-fu.jpg" class="cate"/>
          </div>
       </div>
      </div>
     </section>
     
    <footer></footer>
    
    
</body> 