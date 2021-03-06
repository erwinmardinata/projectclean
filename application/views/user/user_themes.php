<?php
	$profil_web = $this->db->get('profil_web')->row();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
				<!-- Required meta tags -->
		    <meta charset="utf-8">
		    <meta name="author" content="<?php echo $profil_web->nama; ?>">
		    <meta name="description" content="<?php echo $deskripsi!=''?$deskripsi:$profil_web->deskripsi; ?>">
		    <meta name="keywords" content="<?php echo $profil_web->keyword; ?>">
				<meta name="og:image" content="<?php echo $image!=''?base_url($image):base_url($profil_web->logo); ?>"/>
		    <meta http-equiv="x-ua-compatible" content="ie=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta name="twitter:card" content="summary" />
				<meta name="twitter:site" content="@ShomadBuild" />
				<meta name="twitter:title" content="<?php echo $title; ?>" />
				<meta name="twitter:description" content="<?php echo $deskripsi!=''?$deskripsi:$profil_web->deskripsi; ?>" />
				<meta name="twitter:image" content="<?php echo $image!=''?base_url($image):base_url($profil_web->logo); ?>" />
		    <link rel="shortcut icon" href="<?php echo $profil_web->favicon; ?>" />
				<title><?php echo $title; ?> | <?php echo $profil_web->nama; ?></title>

        <!-- Icon css link -->
				<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/clean/assets/img/favicon.ico">

		<!-- CSS here -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/clean/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/clean/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/clean/assets/css/slicknav.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/clean/assets/css/animate.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/clean/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/clean/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/clean/assets/css/themify-icons.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/clean/assets/css/slick.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/clean/assets/css/nice-select.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/clean/assets/css/style.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
			<div id="preloader-active">
	        <div class="preloader d-flex align-items-center justify-content-center">
	            <div class="preloader-inner position-relative">
	                <div class="preloader-circle"></div>
	                <div class="preloader-img pere-text">
	                    <img src="<?php echo base_url(); ?>assets/clean/assets/img/logo/loder-logo.png" alt="">
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- Preloader Start -->
	    <header>
	        <!-- Header Start -->
	       <div class="header-area header-transparent">
	            <div class="main-header ">
	                <div class="header-top d-none d-lg-block">
	                   <div class="container-fluid">
	                       <div class="col-xl-12">
	                            <div class="row d-flex justify-content-between align-items-center">
	                                <div class="header-info-left">
	                                    <ul>
	                                        <li>+(123) 1234-567-8901</li>
	                                        <li>info@domain.com</li>
	                                        <li>Mon - Sat 8:00 - 17:30, Sunday - CLOSED</li>
	                                    </ul>
	                                </div>
	                                <div class="header-info-right">
	                                    <ul class="header-social">
	                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
	                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
	                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
	                                       <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                       </div>
	                   </div>
	                </div>
	               <div class="header-bottom  header-sticky">
	                    <div class="container-fluid">
	                        <div class="row align-items-center">
	                            <!-- Logo -->
	                            <div class="col-xl-2 col-lg-2 col-md-1">
	                                <div class="logo">
	                                    <!-- logo-1 -->
	                                    <a href="index.html" class="big-logo"><img src="<?php echo $profil_web->logo; ?>" alt=""></a>
	                                    <!-- logo-2 -->
	                                    <a href="index.html" class="small-logo"><img src="<?php echo $profil_web->favicon; ?>" alt=""></a>
	                                </div>
	                            </div>
	                            <div class="col-xl-8 col-lg-8 col-md-8">
	                                <!-- Main-menu -->
	                                <div class="main-menu f-right d-none d-lg-block">
	                                    <nav>
	                                        <ul id="navigation">
	                                            <li><a href="<?php echo site_url(); ?>">Home</a></li>
	                                            <li><a href="<?php echo site_url('about'); ?>">About</a></li>
	                                            <li><a href="project.html">Projects</a></li>
	                                            <li><a href="services.html">Services</a></li>
	                                            <li><a href="blog.html">Blog</a>
	                                                <ul class="submenu">
	                                                    <li><a href="blog.html">Blog</a></li>
	                                                    <li><a href="single-blog.html">Blog Details</a></li>
	                                                </ul>
	                                            </li>
	                                            <li><a href="#">Pages</a>
	                                                <ul class="submenu">
	                                                    <li><a href="elements.html">Element</a></li>
	                                                    <li><a href="project_details.html">Projects Details</a></li>
	                                                    <li><a href="services_details.html">Services Details</a></li>
	                                                </ul>
	                                            </li>
	                                            <li><a href="contact.html">Contact</a></li>
	                                        </ul>
	                                    </nav>
	                                </div>
	                            </div>
	                            <div class="col-xl-2 col-lg-2 col-md-3">
	                                <div class="header-right-btn f-right d-none d-lg-block">
	                                    <a href="#" class="btn">Contact Now</a>
	                                </div>
	                            </div>
	                            <!-- Mobile Menu -->
	                            <div class="col-12">
	                                <div class="mobile_menu d-block d-lg-none"></div>
	                            </div>
	                        </div>
	                    </div>
	               </div>
	            </div>
	       </div>
	        <!-- Header End -->
	    </header>
	    <main>

				<?php echo $content; ?>

	    </main>
	    <footer>
	        <!-- Footer Start-->
	        <div class="footer-main">
	                <div class="footer-area footer-padding">
	                    <div class="container">
	                        <div class="row  justify-content-between">
	                            <div class="col-lg-4 col-md-4 col-sm-8">
	                                <div class="single-footer-caption mb-30">
	                                    <!-- logo -->
	                                    <div class="footer-logo">
	                                        <a href="index.html"><img src="<?php echo base_url(); ?>assets/clean/assets/img/logo/logo2_footer.png" alt=""></a>
	                                    </div>
	                                    <div class="footer-tittle">
	                                        <div class="footer-pera">
	                                            <p class="info1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-lg-2 col-md-4 col-sm-5">
	                                <div class="single-footer-caption mb-50">
	                                    <div class="footer-tittle">
	                                        <h4>Quick Links</h4>
	                                        <ul>
	                                            <li><a href="#">About</a></li>
	                                            <li><a href="#">Services</a></li>
	                                            <li><a href="#">Projects</a></li>
	                                            <li><a href="#">Contact Us</a></li>
	                                        </ul>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-lg-3 col-md-4 col-sm-7">
	                                <div class="single-footer-caption mb-50">
	                                    <div class="footer-tittle">
	                                        <h4>Contact</h4>
	                                        <div class="footer-pera">
	                                            <p class="info1">198 West 21th Street, Suite 721 New York,NY 10010</p>
	                                        </div>
	                                        <ul>
	                                            <li><a href="#">Phone: +95 (0) 123 456 789</a></li>
	                                            <li><a href="#">Cell: +95 (0) 123 456 789</a></li>
	                                        </ul>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-lg-3 col-md-6 col-sm-8">
	                                <div class="single-footer-caption mb-50">
	                                    <!-- Form -->
	                                    <div class="footer-form">
	                                        <div id="mc_embed_signup">
	                                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
	                                                <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
	                                                <div class="form-icon">
	                                                    <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
	                                                        SIGN UP
	                                                    </button>
	                                                </div>
	                                                <div class="mt-10 info"></div>
	                                            </form>
	                                        </div>
	                                    </div>
	                                    <!-- Map -->
	                                    <div class="map-footer">
	                                        <img src="assets/img/gallery/map-footer.png" alt="">
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- Copy-Right -->
	                        <div class="row align-items-center">
	                            <div class="col-xl-12 ">
	                                <div class="footer-copy-right">
	                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	        </div>
	        <!-- Footer End-->
	    </footer>

		<!-- JS here -->

			<!-- All JS Custom Plugins Link Here here -->
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/vendor/modernizr-3.5.0.min.js"></script>
			<!-- Jquery, Popper, Bootstrap -->
			<script src="<?php echo base_url(); ?>assets/clean/assets/js/vendor/jquery-1.12.4.min.js"></script>
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/popper.min.js"></script>
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/bootstrap.min.js"></script>
		    <!-- Jquery Mobile Menu -->
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/jquery.slicknav.min.js"></script>

			<!-- Jquery Slick , Owl-Carousel Plugins -->
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/owl.carousel.min.js"></script>
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/slick.min.js"></script>
	        <!-- Date Picker -->
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/gijgo.min.js"></script>
			<!-- One Page, Animated-HeadLin -->
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/wow.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/clean/assets/js/animated.headline.js"></script>
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/jquery.magnific-popup.js"></script>

			<!-- Scrollup, nice-select, sticky -->
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/jquery.scrollUp.min.js"></script>
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/jquery.nice-select.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/clean/assets/js/jquery.sticky.js"></script>

	        <!-- counter , waypoint -->
	        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/jquery.counterup.min.js"></script>

	        <!-- contact js -->
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/contact.js"></script>
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/jquery.form.js"></script>
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/jquery.validate.min.js"></script>
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/mail-script.js"></script>
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/jquery.ajaxchimp.min.js"></script>

			<!-- Jquery Plugins, main Jquery -->
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/plugins.js"></script>
	        <script src="<?php echo base_url(); ?>assets/clean/assets/js/main.js"></script>

    </body>
</html>
