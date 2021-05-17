<?php
ob_start();
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
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="Home.css" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="css/mahmoud.css" type="text/css">
       <title>Cart</title>
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
               <form    method="GET" action= "/action_page.php" >
                 <input  class="form-control list-group  list-group-flush " type="text" placeholder="search" aria-label="search" aria-describedby="inputGroup-sizing-lg "/>
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
          </div> 

    </header>
    <body>
      <hr/>
                     <?php 
        include "reco.php";
       ?>
       <div class="container" style=" margin-right:60px; padding-left:45px;">
       <div class= "row justify-content-center">
       <div class= "col-lg-10">
       <div class= "table-responsive mt-2">
       <table class= "table table-bordered table-striped text-center">
       <thead>
       <tr>
       <td colspan= "7">
       <h4 class= "text-center text-info m-0">products in your Bag!</h4>
       </td>
       </tr>
       <tr>
       <th>ID</th>
       <th>Image</th>
       <th>Price</th>
       <th>Quantity</th>
       <th>Total Price</th>
       <th>
       <a href="?do=clear_all" class= "badge-danger badge p-1" onclick= "return confirm('Are you sure want to clear your bag?')"><i class= "fas fa-trash"></i>&nbsp;&nbsp;Clear Bag</a>
       </th>
       </tr>
       </thead>
       <tbody>
       <?php
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
       if ($row_count > 0) 
       {
       foreach ($rows as $row)
      {
        $c_id+=1;
        $pid=$row['p_id'];
        $qty=$row['qty'];

      ?>
             <form action="car.php" method="POST">
                    <tr>
                   <td> <?php echo $c_id;?></td>
                   <td><img src="photos/<?php echo $row['product_image'];?>" width="50"></td>
                   <td><i class= "fas fa-dollar-sign"></i>&nbsp;&nbsp;<?php echo  number_format($row['price'],2); ?></td>
                   <td><input type="number" class="form-control itemQty" name="qty" id = "<?php echo $pid; ?>" value="<?php echo $row['qty']?>" style="width:150px;">
                   <input ></td>
                                      <td><i class= "fas fa-dollar-sign"></i>&nbsp;&nbsp;<?php echo number_format($row['total_amount'],2)?></td>
                                      <td>
                                      <?php echo '<a href="?do=remove&p_id='.$row['id'].'" class ="text-danger lead"onclick= "return confirm("Are you sure want to clear your bag?")" ><i class = "fas fa-trash-alt"></i></a>';?>
                                      </td>
                   </tr>
                   </form>
            <?php
          
            $grand_total += $row['total_amount'];
     if(isset($_POST['qty']))
{
  $qty=$_POST['qty'];
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
       $stmt = $con->prepare("SELECT * FROM cart WHERE user_id='$user_id' AND p_id= ?  LIMIT 1");
       $stmt->execute(array($pid));
       $rows = $stmt->fetchAll();
       $row_count = $stmt->rowCount();
       if ($row_count > 0) 
       {
       foreach ($rows as $row)
       {
         $pid=$row['p_id'];
         $price=$row['price'];
         $total= $price * $qty ;
         echo $total ;
         echo $pid;

       }
       }}}
    

}  }
  }
?>

                <tr>
                <td colspan = "3">
                <a href= "shops.php" class= "btn btn-success" ><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; Continue Shopping </a>
                </td>
                <td colspan="1"><b>Grand Total</b></td>
                <td><b><i class= "fas fa-dollar-sign"></i>&nbsp;&nbsp;<?php echo number_format($grand_total,2)?>
                </b>
                </td>
                <td>
                <a href="checkout.php" class = "btn btn-info <?= ($grand_total > 1)?"": "disabled"; ?>" > <i class = "far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                </td>
                </tr>
          <?php
       }}?>
       </tbody>
       </table>
       </div>
       </div>
       </div>
       </div>

  <!--   <div class="container-fluid">
                </div>
                <div class="row"> 
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                    <b>Total</b>
                  </div>
                </div>
              </div>
              <div class="panel-footer"></div>
            </div>
          </div>
          <div class="col-md-2"></div>


        </div>
-->
    </body>
    <?php
                $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
                
                  if($do == 'remove') 
                  {
                    
                    $pid = isset($_GET['p_id']) && is_numeric($_GET['p_id']) ? intval($_GET['p_id']): 0;
                    $stmt = $con->prepare("DELETE FROM `cart` WHERE `id` = ?");
                    $stmt->execute(array($pid));
                    header("Refresh:1; url=car.php");
                  }
                  else if($do == 'clear_all')
                  {
                    $stmt = $con->prepare("DELETE FROM `cart`");
                    $stmt->execute();
                    header("Refresh:1; url=car.php");
                  }             

ob_end_flush();
    ?>