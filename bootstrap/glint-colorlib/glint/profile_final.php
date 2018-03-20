<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Hire Talent</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <style type="text/css" media="screen">
        .s-styles { 
            background: white;
            padding-top: 15rem;
            padding-bottom: 12rem;
        }
     </style> 

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- header
    ================================================== 
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="images/logo.png" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>
                
                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="index.html" title="home">Home</a></li>
                    <li><a href="index.html#about" title="about">About</a></li>
                    <li><a href="index.html#services" title="services">Services</a></li>
                    <li><a href="index.html#works" title="works">Works</a></li>
                    <li><a href="index.html#clients" title="clients">Clients</a></li>
                    <li><a href="#contact" title="contact">Contact</a></li>
                </ul>
    
                <p>Perspiciatis hic praesentium nesciunt. Et neque a dolorum <a href='#0'>voluptatem</a> porro iusto sequi veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit.</p>
    
                <ul class="header-nav__social">
                    <li>
                        <a href="#0"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-dribbble"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content 

        </nav>  <!-- end header-nav 

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header>
    --> 
    <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="xyu.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

              

                <h3>
           Hire Talent/Get Hired
                <br>
            
                </h3>
                <p> </p>
<!--
                <div class="home-content__buttons">
                    <a href="#contact" class="smoothscroll btn btn--stroke">
                        Start a Project
                    </a>
                    <a href="index.html#about" class="smoothscroll btn btn--stroke">
                        More About Us
                    </a>
                </div>
-->
            </div>

            <div class="home-content__scroll">
                <a href="#styles" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div> <!-- end home-content -->

<!--
        <ul class="home-social">
            <li>
                <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-behance" aria-hidden="true"></i><span>Behance</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a>
            </li>
        </ul> 
        <!-- end home-social 
-->
    </section> <!-- end s-home -->

    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
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




<a href="#" class="button">Apply now</a>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>


<?php

//Fetching Values from URL  
// $nameO= $_POST['website'];
// $name = $_POST['name'];
// $email = $_POST['mail'];


// $role=$_POST['role'];
// $location=$_POST['loc'];

// $vacancy= $_POST['vac'];
// $skills=$_POST['skills'];


$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$connection = mysqli_connect($mysql_host,$mysql_user,$mysql_password,"image_upload1");



$db = mysqli_select_db($connection,"images");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// if (isset($_POST['name'])) 
// {

// $sql= "insert into talent (NameO,Name,email,vacancy,position,skills,location) values ('$nameO', '$name', '$email','$vacancy','$role','$skills','$location')";
//     if(mysqli_query($connection,$sql))
// 		{
// 			echo "successfully registered";
// 		}
// 		else{
// 		echo ("oops! Please try again!". mysqli_error($connection));
// 				}



$sql = "SELECT * FROM images";
if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>name</th>";
                echo "<th>email</th>";
                echo "<th>experience</th>";
                echo "<th>image</th>";
                echo "<th>interest</th>";
                echo "<th>strength</th>";
                echo "<th>image_text</th>";
                echo "<th>skills</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>" ;
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['ex'] . "</td>";
                echo "<td>" . $row['image'] . "</td>";
                echo "<td>" . $row['interests'] . "</td>";
                echo "<td>" . $row['strength'] . "</td>";
                echo "<td>" . $row['image_text'] . "</td>";
                echo "<td>" . $row['skills'] . "</td>";

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


//connection closed
mysqli_close($connection);

?>









