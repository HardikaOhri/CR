<?php

//Fetching Values from URL  
$nameO= $_POST['website'];
$name = $_POST['name'];
$email = $_POST['mail'];


$role=$_POST['role'];
$location=$_POST['loc'];

$vacancy= $_POST['vac'];
$skills=$_POST['skills'];


$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$connection = mysqli_connect($mysql_host,$mysql_user,$mysql_password,"hiretalent");



$db = mysqli_select_db($connection,"talent");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if (isset($_POST['name'])) 
{

$sql= "insert into talent (NameO,Name,email,vacancy,position,skills,location) values ('$nameO', '$name', '$email','$vacancy','$role','$skills','$location')";
    if(mysqli_query($connection,$sql))
		{
			echo "successfully registered";
		}
		else{
		echo ("oops! Please try again!". mysqli_error($connection));
				}



$sql = "SELECT * FROM talent";
if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>NameO</th>";
                echo "<th>Name</th>";
                echo "<th>email</th>";
                echo "<th>vacancy</th>";
                echo "<th>position</th>";
                echo "<th>skills</th>";
                echo "<th>location</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['NameO'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['vacancy'] . "</td>";
                echo "<td>" . $row['position'] . "</td>";
                echo "<td>" . $row['skills'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
//     if (!$query)
//      {
//     echo ("Could not enter your data: ". mysqli_error($connection));
// }
//     else
//     	echo "Form Submitted succesfully";
}

//connection closed
mysqli_close($connection);

?>









