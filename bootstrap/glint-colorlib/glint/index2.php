
<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body id="body" style="margin-left: 550px;">
<div id="main">
<h1>PHP Login Session Example</h1>
<div id="login">
<h2>Login Form</h2>
<form action=" " method="post">
<label style="color: white;">UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<br>
<br>

<label style="color: white;">Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<br>
<br>
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
<label for="login">
        IF NOT REGISTERED</label>
    <a href="action.html" >LOG IN</a>

</form>
</div>
</div>
</body>
</html>