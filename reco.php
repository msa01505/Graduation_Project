<?php
header("Refresh:300");
?>
<section class="reco">
  <div class="card" style="width: 18rem;">
    <div class="card-header">
      Recommendation for you
    </div>
    <ul class="list-group list-group-flush">
<?php
include 'new.php';
      $stmt = $con->prepare("SELECT user_id FROM user  ORDER BY RAND() LIMIT 1");
      $stmt->execute();
      $rows = $stmt->fetchAll();
      $row_count = $stmt->rowCount();
      if ($row_count > 0)
      {
        foreach ($rows as $row)
        {
          $user_id = $row["user_id"];
        }

      $stmt = $con->prepare("SELECT *  FROM cart WHERE user_id = ? ORDER BY RAND() LIMIT 4 ");
      $stmt->execute(array($user_id));
      $rows_id = $stmt->fetchAll();
      $rows_count = $stmt->rowCount();
      if ($rows_count > 0)
      {
         foreach ($rows_id as $row_id)
         {
            $p_id = $row_id['p_id'];
            $pro_price =$row_id['price'];
            $pro_image =$row_id['product_image'];
            $stmt = $con->prepare("SELECT * FROM product WHERE product_id='$p_id'");
            $stmt->execute();
            $rows_p = $stmt->fetchAll();
            $rowp_count = $stmt->rowCount();
            if ($rowp_count > 0)
            {
              foreach ($rows_p as $row)
              {
                $cat_id = $row['Product_category'];
                $brand_id = $row['product_brand'];
              }
            }

            echo '
                  <li class="list-group-item">
                  <img class="reco-img" src="photos/'.$pro_image.'">
                  "'.$pro_price.'"Cras justo odio
                  <a href="product.php ?do=brand&cat_id='.$cat_id.'&brand_id='.$brand_id.'" class="btn btn-warning btn-block">Buy Now <i class="fas fa-shopping-cart"></i></a>
                  </li>
            ';
          }
}else{
      $stmt = $con->prepare("SELECT *  FROM product  ORDER BY RAND() LIMIT 4 ");
      $stmt->execute();
      $rowsn_id = $stmt->fetchAll();
      $rown_count = $stmt->rowCount();
      if ($rown_count > 0)
      {
         foreach ($rowsn_id as $row_id)
         {
            $pro_price =$row_id['product_price'];
            $pro_image =$row_id['product_image'];
            $cat_id=$row_id['Product_category'];
            $brand_id=$row_id['product_brand'];
            echo '
                  <li class="list-group-item">
                  <img class="reco-img" src="photos/'.$pro_image.'">
                  "'.$pro_price.'"Cras justo odio
                  <a href="product.php ?do=brand&cat_id='.$cat_id.'&brand_id='.$brand_id.'" class="btn btn-warning btn-block">Buy Now <i class="fas fa-shopping-cart"></i></a>
                  </li>
            ';
          }
     }

}
}
?>
    </ul>
  </div>
</section>
