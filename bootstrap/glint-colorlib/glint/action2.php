<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "company";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['btnSignup'])){ // Fetching variables of the form which travels in URL
$name = $_POST['txtUsername'];
//$email = $_POST['txtEmail'];
$password = $_POST['txtConfirmPassword'];

if($name !=''||$email !=''){
//Insert Query of SQL


$sql = "INSERT INTO login ( username, password) 
VALUES ( '$name', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registered successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<label for="login">
        Please Log In</label>
    <a href="index2.php" >LOG IN</a>
</body>
</html>