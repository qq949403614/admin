<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- Latest Bootstrap min CSS -->
	@include('/home.laouts.css')
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
									<ul class="dropdown-menu dropdownhover-bottom" role="menu">
										<li class="dropdown">
											<a href="index.html"><img src="/jiuyexiangmu/home/assets/images/menu-icon1.png" alt="menu-icon1" /> Electronic & Digital <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu right">
												<li><a href="grid.html">Electronic 01</a></li>
												<li><a href="list.html">Electronic 02</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="#"><img src="/jiuyexiangmu/home/assets/images/menu-icon2.png" alt="menu-icon2" /> Phones & Accessories <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu right">
												<li><a href="grid.html">Iphone 05</a></li>
												<li><a href="list.html">Iphone 06</a></li>
												<li><a href="grid.html">Iphone 07</a></li>
												<li><a href="list.html">Handfree</a></li>
												<li><a href="grid.html">Bettery</a></li>
											</ul>
										</li>
										<li>
											<a href="#"><img src="/jiuyexiangmu/home/assets/images/menu-icon3.png" alt="menu-icon3" /> PHome & Kitchen <sup class="bg-red">hot!</sup></a>
										</li>
										<li class="dropdown">
											<a href="#"><img src="/jiuyexiangmu/home/assets/images/menu-icon4.png" alt="menu-icon4" /> Fashion & Clothing <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<div class="dropdown-menu dropdownhover-bottom mega-menu" role="menu">

										<div class="col-sm-8 col-md-8">
											<ul>
												<li><strong>Women’s Fashion</strong></li>
												<li><a href="#">Flip-Flops</a></li>
												<li><a href="#">Fashion Scarves</a></li>
												<li><a href="#">Wallets</a></li>
												<li><a href="#">Evening Handbags</a></li>
												<li><a href="#">Wrist Watches</a></li>
											</ul>
											<ul>
												<li><strong>Women’s Accessories</strong></li>
												<li><a href="#">Flip-Flops</a></li>
												<li><a href="#">Fashion Scarves</a></li>
												<li><a href="#">Wallets</a></li>
												<li><a href="#">Evening Handbags</a></li>
												<li><a href="#">Wrist Watches</a></li>
											</ul>
											<ul>
												<li><strong>Men’s Fashion</strong></li>
												<li><a href="#">Flip-Flops</a></li>
												<li><a href="#">Fashion Scarves</a></li>
												<li><a href="#">Wallets</a></li>
												<li><a href="#">Evening Handbags</a></li>
												<li><a href="#">Wrist Watches</a></li>
											</ul>
											<ul>
												<li><strong>Men’s Accessories</strong></li>
												<li><a href="#">Flip-Flops</a></li>
												<li><a href="#">Fashion Scarves</a></li>
												<li><a href="#">Wallets</a></li>
												<li><a href="#">Evening Handbags</a></li>
												<li><a href="#">Wrist Watches</a></li>
											</ul>
										</div>

									</div>
										</li>
										<li class="dropdown">
											<a href="#"><img src="assets/images/menu-icon5.png" alt="menu-icon2" /> Sport & Outdoors <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu right">
												<li><a href="grid.html">Sport 05</a></li>
												<li><a href="list.html">Sport 06</a></li>
												<li><a href="list.html">Outdoors 02</a></li>
												<li><a href="grid.html">Outdoors 01</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="#"><img src="/jiuyexiangmu/home/assets/images/menu-icon6.png" alt="menu-icon2" /> Jewelry & Watches <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu right">
												<li><a href="grid.html">Jewelry 05</a></li>
												<li><a href="grid.html">Watches 07</a></li>
												<li><a href="list.html">Watches 02</a></li>
											</ul>
										</li>
										<li>
											<a href="#"><img src="/jiuyexiangmu/home/ssets/images/menu-icon7.png" alt="menu-icon2" /> Health & Beauty <sup class="bg-blue">NEW</sup></a>
										</li>
										<li class="dropdown">
											<a href="#"><img src="/jiuyexiangmu/home/assets/images/menu-icon8.png" alt="menu-icon2" /> Toys & Hobbies <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu right">
												<li><a href="grid.html">Toys 05</a></li>
												<li><a href="list.html">Hobbies 02</a></li>
												<li><a href="grid.html">Toys 01</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="#"><img src="/jiuyexiangmu/home/assets/images/menu-icon9.png" alt="menu-icon2" /> Book & Office <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu right">
												<li><a href="grid.html">Book 05</a></li>
												<li><a href="list.html">Book 06</a></li>
												<li><a href="list.html">Office 02</a></li>
												<li><a href="grid.html">Office 01</a></li>
											</ul>
										</li>
										<li>
											<a href="#"><img src="/jiuyexiangmu/home/assets/images/menu-icon10.png" alt="menu-icon2" /> Cameras & Camcorders</a>
										</li>
										<li>
											<a href="#"><img src="/jiuyexiangmu/home/assets/images/menu-icon11.png" alt="menu-icon2" />All Categories</a>
										</li>
									</ul>
								</li>
								<li><a href="/">Home</a></li>
								<li><a href="/list">List</a></li>
								<li><a href="/grid">Grid</a></li>
								<li><a href="/detail">Shop-detail</a></li>
								<li><a href="/home/contact">Contact</a></li>
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
	<!-- newsletter -->
	<section class="grid-shop">
		<!-- .grid-shop -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">List</li>
					</ol>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="weight">
						<div class="title">
							<h2>Categories</h2>
						</div>
						<div class="product-categories">
							<ul>
								<li><a href="#">Laptop & Computer  <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
								<li><a href="#">Accessories   <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
								<li><a href="#">Gaming  <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
								<li><a href="#">Mac Computers  <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
								<li><a href="#">Ultrabooks <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
								<li><a href="#">Printers & Ink  <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
							</ul>
						</div>
					</div>
					<div class="weight">
						<div class="title">
							<h2>filter by price</h2>
						</div>
						<div class="filter-outer">
							<h3>Price</h3>
							<!-- Bootstrap Pricing Slider by ZsharE -->
							<div class="button-slider">
								<div class="btn-group">
									<div class="btn btn-default">
										<p>Range: <strong>$<span id="sliderValue">100.0</span></strong> - <strong>$<span id="sliderValue2">1.700.00</span></strong> </p>
										<input id="bootstrap-slider" data-slider-min="1" data-slider-max="1700" data-slider-step="1" data-slider-value="100" type="text">
										<div class="valueLabelblck">Filter</div>
									</div>
								</div>
							</div>
							<!-- End of Bootstrap Pricing Slider by ZsharE -->
							<div class="brands">
								<h3>Brands</h3>
								<ul>
									<li><a href="#">Black  <span>(10)</span></a></li>
									<li><a href="#">White   <span>(13)</span></a></li>
									<li><a href="#">Blue  <span>(05)</span></a></li>
									<li><a href="#">Red  <span>(87)</span></a></li>
									<li><a href="#">Screen <span>(40)</span></a></li>
								</ul>
							</div>
							<div class="color">
								<h3>Color</h3>
								<ul>
									<li><a href="#" class="color-1"><span ></span></a></li>
									<li><a href="#" class="color-2"><span ></span></a></li>
									<li><a href="#" class="color-3"><span ></span></a></li>
									<li><a href="#" class="color-4"><span ></span></a></li>
									<li><a href="#" class="color-5"><span ></span></a></li>
									<li><a href="#" class="color-6"><span ></span></a></li>
									<li><a href="#" class="color-7"><span ></span></a></li>
								</ul>
							</div>
							<div class="size">
								<h3>Size</h3>
								<ul>
									<li><a href="#">L </a></li>
									<li><a href="#">M </a></li>
									<li><a href="#">S </a></li>
									<li><a href="#">XL</a></li>
									<li><a href="#">XXL</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="weight">
						<div class="title">
							<h2>Compare products</h2>
						</div>
						<div class="ads-lft">
							<p>You have no item to compare. </p> <img src="/jiuyexiangmu/home/assets/images/add-banner2.jpg" alt="add banner"> </div>
					</div>
					<div class="weight">
						<div class="title">
							<h2>BEST PRODUCTS</h2>
						</div>
						<div class="toprating-box">
							<ul>
								<li>
								@foreach($goods as $k=>$v)
                                    <div class="e-product">
										<div class="pro-img"> <img src="{{$v->pic}}" alt="2"> </div>
										<div class="pro-text-outer"> <span>Macbook, Laptop</span>
											<a href="#">
												<h4> {{$v->title}} </h4>
											</a>
											<p class="wk-price">${{$v->price}}</p>
										</div>
									</div>
								@endforeach
                                </li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-9 col-md-9">
					<div class="col-md-12 grid-banner"> <img src="/jiuyexiangmu/home/assets/images/Grid-banner.png" alt="Grid-banner" /> </div>
					<div class="grid-spr">
						<div class="col-sm-6 col-md-6"> <a href="#" class="grid-view-icon"><i class="fa fa-th-large" aria-hidden="true"></i></a> <a href="#" class="list-view-icon"><i class="fa fa-list" aria-hidden="true"></i></a>
							<div class="select-option">
								<a class="btn btn-default btn-select options2">
									<input type="hidden" class="btn-select-input" id="1" name="1" value="" />
									<span class="btn-select-value">Select an Item</span>
									<span class="btn-select-arrow fa fa-angle-down"></span>
									<ul>
										<li class="selected">Default Sorting</li>
										<li>Option 1</li>
										<li>Option 2</li>
										<li>Option 3</li>
										<li>Option 4</li>
									</ul>
								</a>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 text-right"> <strong>Showing 1-12 <span>of 30 relults</span></strong> </div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<!-- .pro-text -->
						@foreach($goods as $k=>$v)
						<div class="pro-text">
							<div class="col-xs-12 col-sm-5 col-md-5">
								<!-- .pro-img -->
								<div class="pro-img"><img src="{{$v->pic}}" class="img-responsive" alt="2">
									<sup class="sale-tag">sale!</sup>
									<!-- .hover-icon -->
									<div class="hover-icon"> <a href="#"><span class="icon icon-Heart"></span></a> <a href="#"><span class="icon icon-Search"></span></a> <a href="#"><span class="icon icon-Restart"></span></a> </div>
									<!-- /.hover-icon -->
								</div>
								
								<!-- /.pro-img -->
							</div>
							
							<div class="col-xs-12 col-sm-7 col-md-7">
								<div class="pro-text-outer list-pro-text">
									<span>Macbook, Laptop</span>
									<a href="/home/goods/{{$v->id}}">
										<h4> {{$v->title}} </h4>
									</a>
									<div class="star2">
										<ul>
											<li class="yellow-color"><i class="fa fa-star" aria-hidden="true"></i></li>
											<li class="yellow-color"><i class="fa fa-star" aria-hidden="true"></i></li>
											<li class="yellow-color"><i class="fa fa-star" aria-hidden="true"></i></li>
											<li class="yellow-color"><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><a href="#">10 review(s)</a></li>
											<li><a href="#"> Add your review</a></li>
										</ul>
									</div>
									<p class="wk-price">${{$v->price}} </p>
									<p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus.</p>
									<a href="#" class="add-btn">Add to cart</a>
									<a href="#" class="add-btn2"><span class="icon icon-Heart"></span></a>
									<a href="#" class="add-btn2"><span class="icon icon-Restart"></span></a>
								</div>
							</div>
						</div>
						@endforeach
						<!-- /.pro-text -->
					</div>
					<div class="pull right">
					{{$goods->links()}}
					</div>

				</div>
			</div>
		</div>
		<!-- /.grid-shop -->
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
	@include('/home.laouts.foot')
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