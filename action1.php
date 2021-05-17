<?php
include 'db_connection.php';
  $conn = OpenCon();
  if ($conn->connect_error) 
  {
    die("Connection failed: " . $conn->connect_error);
  }
//include "conectionTest.php";

if(isset($_POST["brands"]))
{				echo ' israa ';

	$brands_query = "SELECT * FROM brands";
	$run_query = mysqli_query($conn,$brands_query);
    if(mysqli_num_rows($run_query) > 0)
	{
		echo '    <div class="row" ';
				echo ' israa ';

		while($row = mysqli_fetch_array($run_query))
		{		
					echo ' ahmed ';

			$brand_id = $row["brand_id"];
			$brand_name = $row["brand_title"];
			$brand_link = $row["brand_link"];
			$brand_img = $row["brand_img"];
            echo '
						<div class="col-md-4">
                            <a href="'.$brand_link.'" class="btn btn-block">
                            <img src="cat_img/'.$brand_img.'" class="img-fluid" />
                                <div class="hover">
                                    <div class="filter-gold"></div>
                                </div>
                                </a>
                                </div>
			    ';
	  }
	  echo '</div>';
    }
}
?>