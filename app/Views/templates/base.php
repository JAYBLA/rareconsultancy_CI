<!doctype html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
	<title><?=$title?> | Rare Consultancy</title>
	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="<?= base_url('/assets/css/aos.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css') ?>">	
	<link rel="stylesheet" href="<?= base_url('/assets/css/imp.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/css/custom-animate.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/css/flaticon.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/css/owl.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/css/magnific-popup.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/css/scrollbar.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/css/hiddenbar.css') ?>">
   
    <link rel="stylesheet" href="<?= base_url('/assets/css/color.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/custom.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/css/responsive.css') ?>">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('/assets/images/favicon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" href="<?= base_url('/assets/images/favicon/favicon-32x32.png') ?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?= base_url('/assets/images/favicon/favicon-16x16.png') ?>" sizes="16x16">
</head>
<body>

<div class="boxed_wrapper">

<div class="preloader"></div>

<div class="main-content">
<!-- main header -->
<header class="main-header header-style-four">
    <div class="top-divider"></div>
    <!--Start Header Upper-->
    <div class="header-upper-style2">
        <div class="container">
            <div class="outer-box clearfix">
                <div class="header-upper-left-style2 pull-left clearfix">
                    <div class="logo">
                        <a href="/"><img src="<?= base_url('/assets/images/resources/logo.png') ?>" alt="Awesome Logo" title=""></a>
                    </div>   
                </div>
                <div class="header-upper-right-style2 pull-right">
                    <div class="header-contact-info">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="flaticon-planet-earth thm-clr4"></span>
                                </div>
                                <div class="title">
                                    <h3>Address</h3>
                                    <p>Morogoro-Tanzania</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="flaticon-punctuality thm-clr4"></span>
                                </div>
                                <div class="title">
                                    <h3>Office Timeing</h3>
                                    <p>Mon - Sat: 08:00 AM - 08:00PM</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="flaticon-email thm-clr4"></span>
                                </div>
                                <div class="title">
                                    <h3>Email</h3>
                                    <p><a href="mailto:info@rareconsultancy.co.tz">info@rareconsultancy.co.tz</a></p>
                                </div>
                            </li>
                        </ul>    
                    </div>
                      
                </div>    
            </div>    
        </div>    
    </div>
    <!--End Header Upper-->
    
    <!--Start header lawer -->
    <div class="header-lawer-style4">
        <div class="container">
            <div class="outer-box clearfix">
                <!--Top Left-->
                <div class="header-lawer-left-style4 float-left clearfix">
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <div class="inner">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu style4 navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown current">
                                        <a class="home-icon" href="/">Home</a>
                                    </li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            <li><a href="<?= base_url('/brela') ?>">BRELA Help Desk</a></li>
                                            <li><a href="<?= base_url('/advisory') ?>">Advisory</a></li>
                                            <li><a href="<?= base_url('/trainings') ?>">Trainings</a></li>                                            
                                        </ul>
                                    </li>
                                    <li><a href="<?= base_url('/articles') ?>">Articles</a></li>
                                    <li><a href="<?= base_url('/contact') ?>">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>                        
                        <!-- Main Menu End-->
                    </div> 
                         
                </div>
                <!--Top Right-->
                <div class="header-lawer-right-style4 clearfix float-right">
                    <div class="button-box">
                        <a class="btn-four" href="<?= base_url('/contact') ?>"><span class="txt">Get a Quote</span></a>
                    </div>      
                </div>
                
            </div>  
        </div>
    </div>
    <!--End header lawer -->
   
    <!--Sticky Header-->
    <div class="sticky-header white-bg">
        <div class="container">
            <div class="clearfix">
                <!--Logo-->
                <div class="logo float-left">
                    <a href="/" class="img-responsive"><img src="<?= base_url('/assets/images/resources/logo.png') ?>" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="right-col float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu style4 clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>   
                </div>
            </div>
        </div>
    </div>
    <!--End Sticky Header-->
    
    
    
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="/"><img src="<?= base_url('/assets/images/resources/logo-7.png') ?>" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-instagram"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu --> 
    
</header>

<?= $this->renderSection('content') ?>

</div>	
<!--Start footer area-->  
<footer class="footer-area style4">
    <div class="footer">
        <div class="container">
            <div class="row">
                <!--Start single footer widget-->
                <div class="col-md-4">
                    <div class="single-footer-widget marbtm50">
                        <div class="our-company-info">
                            <div class="footer-logo">
                                <a href="/"><img src="<?= base_url('/assets/images/resources/logo-7.png') ?>" alt="Awesome Footer Logo" title="Logo"></a>    
                            </div>
                            <div class="text">
                                <p>Rare Consultancy is a Tanzania based consulting firm established with the aim of providing solution to various corporate problems.</p>
                            </div>    
                        </div>   
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-md-4">
                    <div class="single-footer-widget style4">
                        <div class="title">
                            <h3>RESOURCES</h3>
                        </div>
                        <ul class="resources-links">
                            <li><a href="#">Personal Loan</a></li>    
                            <li><a href="#">Home Loan</a></li>    
                            <li><a href="#">Car Loan</a></li>    
                            <li><a href="#">Business Loan</a></li>       
                        </ul>                     	  
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-md-4">
                    <div class="single-footer-widget style4 martop50">
                        <div class="title">
                            <h3>SUBSCRIBE US</h3>
                        </div>
                        <div class="subscribe-box">
                            <form class="subscribe-form" action="#">
                                <input type="email" name="email" placeholder="Email Address">
                                <button class="btn-four thm-bgc4" type="submit"><span class="txt">Subscribe</span></button>
                            </form>
                        </div>                     	  
                    </div>
                </div>
                <!--End single footer widget-->
            </div>
        </div>
    </div>
    <div class="bottom-divider"></div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row py-2">
                <div class="col-md-4">
                    <div class="copyright-text style4">
                        <p>&copy; <script>document.write(new Date().getFullYear())</script> || <a href="/">Rare Consultancy</a></p>
                    </div>    
                </div>
                <div class="col-md-4">
                    <div class="our-info-box">
                        <ul>
                            <li><a href="tel:+255768284698">(+255) 768 284 698</a></li>
                            <li><a href="mailto:info@rareconsultancy.co.tz">info@rareconsultancy.co.tz</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">    
                    <div class="footer-social-links style4">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> 
                            </li>
                        </ul>
                    </div>
                </div> 
                   
            </div>    
        </div>    
    </div>
</footer>   
<!--End footer area-->

<button class="scroll-top scroll-to-target thm-bgc4" data-target="html" data-aos="slide-up" data-aos-easing="linear" data-aos-duration="1100">
    <span class="fa fa-long-arrow-up"></span>
</button>
</div>
<script src="<?= base_url('/assets/js/jquery.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/aos.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/appear.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/bootstrap.bundle.min.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/isotope.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/jquery.bootstrap-touchspin.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/jquery.easing.min.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/jquery.enllax.min.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/jquery.fancybox.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/jquery.mixitup.min.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/jquery.paroller.min.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/jquery.polyglot.language.switcher.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/map-script.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/nouislider.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/owl.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/validation.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/wow.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/jquery.magnific-popup.min.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/slick.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/lazyload.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/scrollbar.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/jquery-ui.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/knob.js' ) ?>"></script>
<!-- thm custom script -->
<script src="<?= base_url('/assets/js/custom.js') ?>"></script>
</body>
</html>