<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "image_upload");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
    $image1=$_FILES['image1']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
    $skills = mysqli_real_escape_string($db, $_POST['skills']);
    $name=$_POST['name'];
     $email=$_POST['email'];

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, image_text,name,email,skills,image1) VALUES ('$image', '$image_text','$name','$email','$skills','$image1')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
    if (move_uploaded_file($_FILES['image1']['tmp_name'], $target)) {
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
       var z = document.forms["myForm"]["skills"].value;
        var m = document.forms["myForm"]["ex"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
     if (z == "") {
        alert("Skills must be filled out");
        return false;
    }
     if (y == "") {
        alert("email must be filled out");
        return false;
    }
      if (m == "") {
        alert("Experience must be filled out");
        return false;
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email.value))
  {
    return (true);
  }
    alert("You have entered an invalid email address!")
    return (false);
}
}
</script>
</head>
<body >
  <link rel="stylesheet" type="text/css" href="formi.css">
 
<div id="content" style="color: white;">
  <?php
   // while ($row = mysqli_fetch_array($result)) {
     // echo "<div id='img_div'>";
      //	echo "<img src='images/".$row['image']."' >";
      //	echo "<p>".$row['image_text']."</p>";
      //echo "</div>";
   // }
 // echo "<br/><a href='view.html'>View Result</a>";
  ?>
  <form method="POST" name="myForm" action="imagefinal.php" enctype="multipart/form-data" onsubmit="return validateForm()">
  	Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Experience: <input type="number" name="ex"><br>


    <input type="hidden" name="size" value="1000000">
  	<div>
  	Upload authorized Certificate of startupr or business :  <input type="file" name="image">
  	</div>
     <input type="hidden" name="size" value="1000000">
    <div>
    Upload pictures of your products :  <input type="file" name="image1">
    </div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this certification..."></textarea>
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

<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>



<a href="http://localhost/bootstrap/glint-colorlib/glint/Chat-Application-master/index.php" class="button">Chat</a>


</body>
</html>




</div>
</body>
</html>
