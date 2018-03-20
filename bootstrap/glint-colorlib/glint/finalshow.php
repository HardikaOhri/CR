 <?php
  $db = mysqli_connect("localhost", "root", "", "image_upload");
    $result = mysqli_query($db, "SELECT image1 FROM images");
   while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image1']."' >";
      	
      echo "</div>";
    }
  
  ?>