<?php
// including the database connection file
  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
      $image=$_POST['image'];
        $image_text=$_POST['image_text'];
    $name=$_POST['name'];
    
    $email=$_POST['email'];    
      $skills=$_POST['skills']; 
        $image=$_POST['image1'];  
    
    // checking empty fields
    if(empty($name)  || empty($email)) {            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
      
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($db, "UPDATE images SET image_text='$image_text',name='$name',email='$email',skills='$skills' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index3.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT * FROM images WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];

    $email = $res['email'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index3.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Image</td>
                <td><input type="text" name="name" value=""></td>
            </tr>
             <tr> 
                <td>Image_text</td>
                <td><input type="text" name="image_text" value="<?php echo $image_text;?>"></td>
            </tr>
             <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>

            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
           
                <td>Skills</td>
                <td><input type="text" name="skills" value="<?php echo $skills;?>"></td>
            </tr>
            <tr>
                 <tr> 
                <td>Product_image</td>
                <td><input type="text" name="name" value=""></td>
            </tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>