<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- Latest Bootstrap min CSS -->
	<link rel="stylesheet" href="/jiuyexiangmu/home/assets/css/bootstrap.min.css" type="text/css">
	<!-- Dropdownhover CSS -->
	<link rel="stylesheet" href="/jiuyexiangmu/home/assets/css/bootstrap-dropdownhover.min.css" type="text/css">
	<!-- latest fonts awesome -->
	<link rel="stylesheet" href="/jiuyexiangmu/home/assets/font/css/font-awesome.min.css" type="text/css">
	<!-- simple line fonts awesome -->
	<link rel="stylesheet" href="/jiuyexiangmu/home/assets/simple-line-icon/css/simple-line-icons.css" type="text/css">
	<!-- stroke-gap-icons -->
	<link rel="stylesheet" href="/jiuyexiangmu/home/assets/stroke-gap-icons/stroke-gap-icons.css" type="text/css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="/jiuyexiangmu/home/assets/css/animate.min.css" type="text/css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="/jiuyexiangmu/home/assets/css/style.css" type="text/css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="/jiuyexiangmu/home/assets/css/slider.css" type="text/css">
	<!--  baguetteBox -->
	<link rel="stylesheet" href="/jiuyexiangmu/home/assets/css/baguetteBox.css">
	<!-- Owl Carousel Assets -->
	<link href="/jiuyexiangmu/home/assets/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="/jiuyexiangmu/home/assets/owl-carousel/owl.theme.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="/jiuyexiangmu/home/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="/jiuyexiangmu/home/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body>
	<!--  Preloader  -->
	<div id="preloader">
		<div id="loading"> </div>
	</div>
	<header class="header2">
		<!--  top-header  -->
		@include('/home.laouts.head')
				<div class="main-menu">
					<!--  nav  -->
					<nav class="navbar navbar-inverse navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations=" fadeInLeft fadeInUp fadeInRight">
							<ul class="nav navbar-nav">
								<li class="all-departments dropdown"> <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span> Shop By Department</span> <i class="fa fa-bars" aria-hidden="true"></i> </a>
								</li>
								<li><a href="/">Home</a></li>
								<li><a href="/list">List</a></li>
								<li><a href="/grid">Grid</a></li>
								<li><a href="/detail">Shop-detail</a></li>
								<li><a href="/contact">Contact</a></li>
								<li><a href="/cart">Shopping-cart</a></li>
								<li><a href="/checkout">Checkout</a></li>
							</ul>
							<!-- /.navbar-collapse -->
						</div>
					</nav>
					<!-- /nav end -->
				</div>
			</div>
		</section>
	</header>
	 <section class="shopping-cart">
            <!-- .shopping-cart -->
            <div class="container">
				<div class="row">
					<div class="col-md-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/">Home</a></li>
							<li class="breadcrumb-item active">remind</li>
						</ol>
					</div>
					
					<div class="col-md-12">
						<div class="container text-center">
						    <div class="col-md-12 alert alert-success" role="alert">Join the success!! <a href="/cart">Click into the shopping cart</a></div>
						</div>
	                 
	                </div>
				</div>
               
            </div>
            <!-- /.shopping-cart -->
     </section>
	<!-- newsletter -->
	<section class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<h6 class="sing-up-text">sign up to
						<strong>newsletter</strong> &
						<strong>free shipping</strong> for first shopping</h6>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="sing-up-input">
						<input name="singup" type="text" placeholder="Your email address...">
						<input name="submit" type="button" value="Submit" /> </div>
				</div>
			</div>
		</div>
	</section>
	<!-- /newsletter -->
	@include('home.laouts.foot')
	<!-- sticky-socia -->
	<aside id="sticky-social">
		<ul>
			<li><a href="#" class="fa fa-facebook" target="_blank"><span><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</span></a></li>
			<li><a href="#" class="fa fa-twitter" target="_blank"><span><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</span></a></li>
			<li><a href="#" class="fa fa-rss" target="_blank"><span><i class="fa fa-rss" aria-hidden="true"></i> RSS</span></a></li>
			<li><a href="#" class="fa fa-pinterest-p" target="_blank"><span><i class="fa fa-pinterest-p" aria-hidden="true"></i> Pinterest</span></a></li>
			<li><a href="#" class="fa fa-share-alt" target="_blank"><span><i class="fa fa-share-alt" aria-hidden="true"></i> Flickr</span></a></li>
		</ul>
	</aside>
	<!-- /sticky-socia -->
	<p id="back-top"> <a href="#top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a> </p>
	<script src="/jiuyexiangmu/home/assets/js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="/jiuyexiangmu/home/assets/js/bootstrap.min.js"></script>
	<script src="/jiuyexiangmu/home/assets/js/bootstrap-dropdownhover.min.js"></script>
	<!-- Plugin JavaScript -->
	<script src="/jiuyexiangmu/home/assets/js/jquery.easing.min.js"></script>
	<script src="/jiuyexiangmu/home/assets/js/wow.min.js"></script>
	<!-- owl carousel -->
	<script src="/jiuyexiangmu/home/assets/owl-carousel/owl.carousel.js"></script>
	<!--  Custom Theme JavaScript  -->
	<script src="/jiuyexiangmu/home/assets/js/filter-price.js"></script>
	<script src="/jiuyexiangmu/home/assets/js/custom.js"></script>
</body>

</html>
