<?php
//including the database connection file
  $db = mysqli_connect("localhost", "root", "", "image_upload");
  if(isset($_POST['submit']))
  {
 $id1=$_GET['first'];
}
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($db, "SELECT * FROM images WHERE id=13"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
    
 
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            

<td>image</td>
<td>image_text</td>
            <td>Name</td>
            
            <td>Email</td>
            <td>skills</td>
              <td>product image</td>
            <td>update</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
   
        echo "<td>".$res['image']."</td>";
                 
            echo "<td>".$res['image_text']."</td>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['email']."</td>";
            echo "<td>".$res['skills']."</td>";  
            echo "<td>".$res['image1']."</td>";  
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
</body>
</html>