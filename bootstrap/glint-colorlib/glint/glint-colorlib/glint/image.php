<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "image_upload");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
    $skills = mysqli_real_escape_string($db, $_POST['skills']);
    $name=$_POST['name'];
     $email=$_POST['email'];

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, image_text,name,email,skills) VALUES ('$image', '$image_text','$name','$email','$skills')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>

<script>
function validateForm() {
    var x = document.forms["myForm"]["name"].value;
     var y = document.forms["myForm"]["email"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
     if (y == "") {
        alert("email must be filled out");
        return false;
    }
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email.value))
  {
    return (true);
  }
    alert("You have entered an invalid email address!")
    return (false);
}
</script>
</head>
<body>
 
<div id="content">
  <?php
   // while ($row = mysqli_fetch_array($result)) {
     // echo "<div id='img_div'>";
      //	echo "<img src='images/".$row['image']."' >";
      //	echo "<p>".$row['image_text']."</p>";
      //echo "</div>";
   // }
  echo "<br/><a href='index1.php'>View Result</a>";
  ?>
  <form method="POST" name="myForm" action="image.php" enctype="multipart/form-data" onsubmit="return validateForm()">
  	Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>

    <input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
      <div>
      <textarea 
        id="text1" 
        cols="40" 
        rows="4" 
        name="skills" 
        placeholder="Say something about your skills..."></textarea>
    </div>
  	<div>
  		<button type="submit" name="upload" >POST</button>
  	</div>
   
    
  </form>
</div>
</body>
</html>
