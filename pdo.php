<p>Mahmoud 0-------------------------------------------------------------------------------------0</p>
    <div class="container">
      <div class="row">
        <?php
          foreach ($rows as $row){
            echo '<div class="col-md-4">';
              echo '<a href="'.$row['cat_link'].'" class="btn btn-block">';
                echo '<img src="cat_img/'.$row['cat_img'].'" class="img-fluid"/>';
              echo '</a>';
            echo '</div>';
          }
        ?>
      </div>
    </div>