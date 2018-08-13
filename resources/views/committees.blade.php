<!DOCTYPE html>
<html lang="en">
<head>
	<title>SCAA</title>
	<meta charset="UTF-8">
	<meta name="description" content="HALO photography portfolio template">
	<meta name="keywords" content="photography, portfolio, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section start -->
	<header class="header-section sp-pad">
		<h3 class="site-logo">SCAA</h3>
		<form class="search-top">
			<button class="se-btn"><i class="fa fa-search"></i></button>
			<input type="text" placeholder="Search.....">
		</form>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<nav class="main-menu">
				 <ul>
        <li><a href="/">Home</a></li>
        <li><a href="comiittee">COMMITTEE</a></li>
        <li><a href="pastleader">PAST LEADERS</a></li>
        <li><a href="tour">TOURS</a></li>
        <li><a href="event">EVENT</a></li>
        <li><a href="sport">SPORTS</a></li>
        <li><a href="news">NEWS</a></li>
        <li><a href="notice">NOTICE</a></li>
        <li><a href="galary">GALARY</a></li>
        <li><a href="scholarship">SCHOLARSHIP</a></li>
        <li><a href="contact">Contact</a></li>
        

                    @if (Auth::check())
                       <li> <a href="{{ url('/home') }}"> {{ Auth::user()->name }}</a></li>
                    @else
                       <li> <a href="{{ url('/login') }}">Join</a></li>
                      <li>  <a href="{{ url('/register') }}">Register</a></li>
                    @endif
              
     
         

    
        
      </ul>
		</nav>
	</header>
	<!-- Header section end -->

	<!-- Page top section start -->
	<div class="page-top-area set-bg" data-setbg="img/headers-bg/3.jpg">
		<div class="breadcrumb-area">
			<!-- <a href="#">Home</a> / <span>Portfolio</span> -->
		</div>
	</div>
	<!-- Page top section end -->


	<!-- Portfolio section start -->
	<section class="portfolio-section">
		<!-- <div class="sp-pad spad">
			
			<ul class="portfolio-filter controls">
				<li class="control" data-filter="*">All</li>
				<li class="control" data-filter=".photo">Photography</li>
				<li class="control" data-filter=".wedding">Weddings</li>
				<li class="control" data-filter=".land">Landscapes</li>
				<li class="control" data-filter=".port">Portraits</li>
			</ul>
		</div> -->
		<div class="portfolio-warp">
			<!-- single item -->
			<div class="mix single-portfolio set-bg photo" data-setbg="img/portfolio/1.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/1.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
			<!-- single item -->
			<div class="mix single-portfolio set-bg wedding" data-setbg="img/portfolio/2.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/2.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
			<!-- single item -->
			<div class="mix single-portfolio set-bg land" data-setbg="img/portfolio/3.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/3.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
			<!-- single item -->
			<div class="mix single-portfolio sm-wide set-bg port" data-setbg="img/portfolio/4.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/4.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
			<!-- single item -->
			<div class="mix single-portfolio sm-wide set-bg photo" data-setbg="img/portfolio/5.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/5.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
			<!-- single item -->
			<div class="mix single-portfolio set-bg wedding" data-setbg="img/portfolio/6.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/6.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
			<!-- single item -->
			<div class="mix single-portfolio sm-wide set-bg land" data-setbg="img/portfolio/7.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/7.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
			<!-- single item -->
			<div class="mix single-portfolio set-bg port" data-setbg="img/portfolio/8.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/8.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
			<!-- single item -->
			<div class="mix single-portfolio set-bg photo" data-setbg="img/portfolio/9.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/9.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
			<!-- single item -->
			<div class="mix single-portfolio set-bg wedding" data-setbg="img/portfolio/10.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/10.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="sp-pad next-portfolio-link">
			<a href="#" class="arrow-btn">
				<i class="fa fa-angle-right"></i>
				<i class="fa fa-angle-right"></i>
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
	</section>
	<!-- Portfolio section end -->


	<!-- Footer section start -->
	<footer class="footer-section spad">
		<div class="container text-center">
			<h2>Let’s work together!</h2>
			<p>office@template.com</p>
			<div class="social">
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a></br>

</br><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				
			</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>