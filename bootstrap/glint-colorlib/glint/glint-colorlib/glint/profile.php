<?php
include('session.php');
?>
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
    <title>BHAMASHAH </title>
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
	<div id="profile" >
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<a href="logout.php"><button style="margin-top: 50px;">LOG OUT</button></a>
</div>
 <center><a href="file:///C:/xampp/htdocs/bootstrap/glint-colorlib/glint/ele1.html"><button type="button" class="btn btn-info">Start Course</button></a></center>
    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>
                
                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll"  href="#Profile" title="Profile">Profile</a></li>
                    <li><a class="smoothscroll"  href="#Courses" title="Courses">Courses</a></li>
                    <li><a class="smoothscroll"  href="#Start Business" title="Start Business">Start Business</a></li>
                    <li><a class="smoothscroll"  href="#Hire Talent" title="Hire Talent">Hire Talent</a></li>
                    <li><a class="smoothscroll"  href="#About" title="About">About</a></li>
                     <li><a class="smoothscroll"  href="#Contact Us" title="Contact Us">Contact Us</a></li>
                </ul>
    
                <p></p>
    
                <ul class="header-nav__social">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                
                </ul>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/1.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Welcome to Bhamashah</h3>

                <h1>
                   Give Wings
                  To<br>
                     Your Dreams<br>
                </h1>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div> <!-- end home-content -->


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
                <a href="#0"><i class="fa fa-google" aria-hidden="true"></i><span>Google</span></a>
            </li>
         </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- profile
    ================================================== -->
    <section id='Profile' class="Profile"></section> 

    
                


    <!-- Courss
    ================================================== -->
    <section id='Courses' class="S-Courses">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">What We Do</h3>
                <h3 class="display-10"> E-Learning is "the study and ethical practice of facilitating learning and improving performance by creating, using, and managing appropriate technological processes and resources.We provides you many courese who helps you to build and save your future</h3>
                <div class="container">
  
 <center><button type="button" class="btn btn-info">Start Courses</button></center>
</div>
            </div>
            </div>
        </div> <!-- end section-header ->
                    

    </section> <!-- end s-services -->


    <!-- works
    ================================================== -->
    <section id='works' class="s-works">

        <div class="intro-wrap">
                
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    
                    <h1 class="display-2 display-2--light">The Government of Rajasthan, with the vision of Good Governance – “SuRaaj”</h1>
                </div>
            </div> <!-- end section-header -->

        </div> <!-- end intro-wrap -->

        <div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry">
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/modi.jpg" class="thumb-link" title="Cheif Minister" data-size="1050x700">
                                    <img src="images/portfolio/modi.jpg" 
                                         srcset="images/portfolio/modi.jpg 1x, images/portfolio/vashu.jpg 1x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    BJP
                                </h3>
                                
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                           
    
                        </div>
                    </div> <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/vashu.jpg" class="thumb-link" title="Woodcraft" data-size="1050x700">
                                    <img src="images/portfolio/vashu.jpg" 
                                         srcset="images/portfolio/vashu.jpg 1x, images/portfolio/vashu.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Cheif Minister
                                </h3>
                                
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            
    
                        </div>
                    </div> <!-- end masonry__brick -->
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/15.jpg" class="thumb-link" title="The Beetle Car" data-size="1050x700">
                                    <img src="images/portfolio/12.jpg"
                                         srcset="images/portfolio/15.jpg 1x, images/portfolio/15@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    E-learning
                                </h3>
                                
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            
    
                        </div>
                    </div> <!-- end masonry__brick -->
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/14.jpg" class="thumb-link" title="Grow Green" data-size="1050x700">
                                    <img src="images/portfolio/grow-green.jpg" 
                                         srcset="images/portfolio/14.jpg 1x, images/portfolio/14.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Women E-learning
                                </h3>
                                
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            
    
                        </div>
                    </div> <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/41.jpg" class="thumb-link" title="Guitarist" data-size="1050x700">
                                    <img src="images/portfolio/guitarist.jpg" 
                                         srcset="images/portfolio/41.jpg 1x, images/portfolio/41.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    HandCrafting
                                </h3>
                                
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            
    
                        </div>
                    </div> <!-- end masonry__brick -->
    

                </div> <!-- end masonry -->
            </div> <!-- end col-full -->
        </div> <!-- end works-content -->

    </section> <!-- end s-works -->


    <!-- clients
    ================================================== -->
    <section id="Hire Talent" class="Hire Talent">
        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Our Students</h3>
                <h1 class="display-2">We provide good placement for Women through these company
                </h1>
            </div>
        </div> <!-- end section-header -->


       
        <div class="row clients-outer" data-aos="fade-up">
            <div class="col-full">
                <div class="clients">
                    
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/apple.png" /></a>
                   
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/blackberry.png" /></a>
                    
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/envato.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/firefox.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/atom.png" /></a>
                    
            </div> <!-- end clients -->
            </div> <!-- end col-full -->
        </div> <!-- end clients-outer -->

        <div class="row clients-testimonials" data-aos="fade-up">
            <div class="col-full">
                <div class="testimonials">

                    <div class="testimonials__slide">

                        <p>WELL empowers women to use their knowledge and take action to lead and realize their goals. WELL will reinforce the skills of leadership, e.g., time management, organizational skills, public speaking, through workshop opportunities, e-learning, and mentorship. WELL will support women to stand in leadership roles, to be agents of change in their community, and to understand the importance of owning their power.

</p>

                    </div>

                    <div class="testimonials__slide">
                        
                        <p>The biggest stumbling block to starting a new business — and succeeding —for anyone, is money. For women, the challenge is multiplied.</p>

                        

                    </div>

                    <div class="testimonials__slide">
                        
                        <p>We've focused here on engineering because people insist that female engineers or developers are "unicorns," but hiring more women in design, product, project management, community, and leadership positions in general creates a healthier workplace. A diverse workplace is proven to get better results, more accurately reflects your customer/client base, and ensures a wider range of experience. </p>

                        

                    </div>

                </div><!-- end testimonials -->
                
            </div> <!-- end col-full -->
        </div> <!-- end client-testimonials -->

    </section> <!-- end s-clients -->
    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Hello There</h3>
                <h1 class="display-1 display-1--light">We Are Bhamashah</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p>To build a better society,empowerment of every woman is imperative because empowerment of the woman is empowerment of the society and thus the State.The Bhamashah Scheme envisaged by us in the year 2008 with this aim, even before the Aadhaar programme was thought of,is the first of its kind direct benefit transfer scheme in the country.The objective of the Scheme is financial inclusion,women empowerment and effective service delivery.So this platform for rajasthan 's women to provide a better emplypment through e-learning courses.<br>
                <br>Vasundhara Raje
                Chief Minister, Rajasthan
                 
                </p>
            </div>
        </div> <!-- end about-desc -->

       
    </section> <!-- end s-about -->



    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

        <div class="overlay"></div>
        <div class="contact__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Contact Us</h3>
                <h1 class="display-2 display2--light">Just send us your questions or concerns by starting a new case and we will give you the help you need</h1>
            </div>
        </div><div id="menu1" class="tab-pane fade">
        <br>
      
      <div class="row">
      <div class="col-md-2 col-md-offset-1">  
      <img src="anu.jpg" class="img-circle person1" alt="Anuradha" width=250 height=250>
      <h5 align="center"><em><b>Anuradha Trivedi</b></em></h5>
      </div>
      <div class="col-md-2">
      <img src="damu.jpg" class="img-circle person1" alt="Damini" width=150 height=150>
      <h5 align="center"><em><b>Damini Charaya</b></em></h5>
      </div>
      <div class="col-md-2">
      <img src="hardu.jpg" class="img-circle person1" alt="Hardika" width=150 height=150>
      <h5 align="center"><em><b>Hardika Ohri</b></em></h5>
      </div>
      <div class="col-md-2">
      <img src="devu.jpg" class="img-circle person1" alt="Deewanshi" width=150 height=150>
      <h5 align="center"><em><b>Deewanshi Grover/b></em></h5>
      </div>
      </div>
     </div>
    </div>
  </div>
</div> <footer></footer>
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> Coderavens.com </a>
    </div>
    </footer>
    <!--/.Copyright-->
<!-- Footer -->

</body>
</html>
</section>
       
    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
