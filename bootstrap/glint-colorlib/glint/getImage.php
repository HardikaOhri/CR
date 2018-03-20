<?php

  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  $link = mysqli_connect("localhost", "root", "","image_upload");
  
  $sql = "SELECT image1 FROM images WHERE id=$id";
  $result = mysqli_query($link,"$sql");
  $row = mysqli_fetch_array($result);
  mysqli_close($link);

  header("Content-type: image/jpeg");
  echo $row['image1'];
?>
