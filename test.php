<?php
include 'data.php';
function calculat() //calculat real total price and discounts
{
   global $Discount;
   global $bill;
   global $subtotal;
   global $product;
     $x=$bill[$i];
     if($T_shirt>0)
     {
        $subtotal+=$product["T-shirt"]*$T_shirt;
     }
     if($Pants>0)
     {
        $subtotal+=$product["Pants"]*$Pants;
     }
     if($Jacket>0)
     {
        $subtotal+=$product["Jacket"]*$Jacket;
           $Discount["Jacket"]+=($product["Jacket"]*$T_shirt/2)/2;
     }
     if($Shoes>0)
     {
        $subtotal+=$product["Shoes"]*$Shoes;
        $Discount["Shoes"]+=($product["Shoes"]*$Shoes)/10;
     }
  return;
}
function Taxes() //calculat taxes
{
   global $subtotal;
   return $subtotal * 0.14;
}
function Total() //calculate end total price
{
   global $Discount;
   global $subtotal;
   global $Taxes;
   global $Total;
   foreach($Discount as $x => $x_value)
   {
      $Total-=$x_value;
   }

   $Total+=$subtotal;
   $Total+=$Taxes;
   return ;
}
function Output()  // displaying results 
{
   global $Discount;
   global $subtotal;
   global $Taxes;
   global $Total;


   echo $subtotal , "<br>" ;
   echo $Taxes , "<br>" ;
   foreach($Discount as $x => $x_value) 
   {
      if($x_value > 0)
      {
         echo $x_value , "<br>" ;
      }
   }
   echo $Total , "<br>" ;

}
function Transformation()
{
   global $Discount;
   global $subtotal;
   global $Taxes;
   global $Total;
   $Discount *= 15.74 ;
   $subtotal *= 15.74 ;
   $Taxes *= 15.74 ;
   $Total *= 15.74 ;
}
calculat();
$Taxes=Taxes();
Total();
echo '
    <input type="button" value="USD">
    <input type="button" value="EGP"><br><br><br>
';
//Output();
?>