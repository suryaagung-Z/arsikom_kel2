<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Lupdate">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title> Home 1 </title>
      
    <!-- animate.css-->  
    <link href="assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="assets/custom/css/fables-icons.css" rel="stylesheet"> 
    <!-- Bootstrap CSS --> 
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- portfolio filter gallery -->
    <link href="assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css" rel="stylesheet">
    <!-- FANCY BOX -->
    <link href="assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet"> 
    <!-- RANGE SLIDER -->
    <link href="assets/vendor/range-slider/range-slider.css" rel="stylesheet">
    <!-- OWL CAROUSEL  --> 
    <link href="assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="assets/custom/css/custom-responsive.css" rel="stylesheet">
     
</head>


<body>

<div class="search-section">
    <a class="close-search" href="#"></a>
    <div class="d-flex justify-content-center align-items-center h-100">
        <form method="post" action="#" class="w-50">
            <div class="row">
                <div class="col-10">
                    <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Search Here ..." /> 
                </div>
                <div class="col-2 mt-3">
                     <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                </div>
            </div>
        </form>
    </div>
         
</div>

<!-- Loading Screen -->
<div id="ju-loading-screen">
  <div class="sk-double-bounce">
    <div class="sk-child sk-double-bounce1"></div>
    <div class="sk-child sk-double-bounce2"></div>
  </div>
</div>
 
 
<!-- /End Top Header -->

<div class="fables-transparent py-3 py-lg-0">
    <div class="container">
           <div class="row">
               <div class="col-12 col-md-10 pr-md-0">                       
                   <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">

                        <a class="navbar-brand logolupdate-brand pl-0" href="/"><img src="assets/custom/images/logolupdate.png" alt="Fables Template" class="logolupdate"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fables-iconmenu-icon text-white font-16"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="fablesNavDropdown"> 

                            <ul class="navbar-nav mx-auto fables-nav">   
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="/" id="sub-nav1">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="/about" id="sub-nav3" >
                                        About
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="/blog" id="sub-nav5" >
                                        Blog
                                    </a>
                                </li> 
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="#" id="sub-nav7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Contact Us
                                    </a>
                                </li>  
                            </ul> 

                </div>
            </nav>
               </div>
               <div class="col-5 col-md-2 pr-md-0 icons-header-mobile">
                    <div class="fables-header-icons pt-lg-4 text-right">
                        <a href="#" class="open-search fables-third-text-color fables-mega-menu-btn px-4  fables-second-hover-color">
                                    <span class="fables-iconsearch-icon"></span>
                        </a>       
                </div>

               </div>
           </div>
    </div>
</div>

@yield('main')

<div class="fables-footer-image fables-after-overlay white-color py-4 py-lg-5 bg-rules">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-2 mb-5 text-center">
                <h2 class="font-30 semi-font mb-5">Newsletter</h2>
                <form class="form-inline position-relative"> 
                  <div class="form-group fables-subscribe-formgroup"> 
                    <input type="email" class="form-control fables-subscribe-input fables-btn-rouned" placeholder="Your Email">
                  </div>
                  <button type="submit" class="btn fables-second-background-color fables-btn-rouned fables-subscribe-btn">Subscribe</button>
                </form>
                
            </div>
            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                <a href="#" class="fables-second-border-color border-bottom pb-3 d-block mb-3 mt-minus-13"><img src="assets/custom/images/logolupdate.png" alt="fables template"></a>
                <p class="font-15 fables-third-text-color">
                    t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. 
                    <br><br>
                    t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </p> 
                
            </div>
             
            <div class="col-12 col-sm-6 col-lg-4">
                <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3">Contact us</h2>
               <div class="my-3">
                    <h4 class="font-16 semi-font"><span class="fables-iconmap-icon fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> Address Information</h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">level13, 2Elizabeth St, Melbourne, Victor 2000</p>
                </div>
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span class="fables-iconphone fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> Call Now </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">+333 111 111 000</p>
                </div>
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span class="fables-iconemail fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> Mail </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">adminsupport@website.com</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3 mb-3">EXPLORE OUR SITE</h2>
                <ul class="nav fables-footer-links">
                    <li><a href="about1.html">About Us</a></li>
                    <li><a href="contactus1.html">Contact Us</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                </ul>
            </div>
                      
        </div> 
        
        </div>
</div>

    
<!-- /End Footer 2 Background Image -->




<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/jQuery.countdown-master/jquery.countdown.min.js"></script>
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
<script src="assets/custom/js/jquery-data-to.js"></script>   
<script src="assets/vendor/jquery-circle-progress/circle.js"></script>
<script src="assets/vendor/portfolio-filter-gallery/jquery.isotope.min.js"></script>
<script src="assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.js"></script>
<script src="assets/vendor/fancybox-master/jquery.fancybox.min.js"></script>
<script src="assets/custom/js/custom.js"></script>

 
</body>
</html>