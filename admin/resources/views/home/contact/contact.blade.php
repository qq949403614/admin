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
	<link rel="stylesheet" href="/jiuyexiangmu/home/assets/stroke-gap-icons/stroke-gap-icons.css" type="text/css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="/jiuyexiangmu/home/assets/css/animate.min.css" type="text/css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="/jiuyexiangmu/home/assets/css/style.css" type="text/css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="/jiuyexiangmu/home/assets/css/slider.css" type="text/css">
	<!--  baguetteBox -->
	<link rel="stylesheet" href="/jiuyexiangmu/home/assets/css/baguetteBox.css">
	<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.all.min.js"> </script>
	<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
	<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
	<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>

</head>
<body>
	<!--  Preloader  -->
	<div id="preloader">
		<div id="loading"></div>
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
									<a href="#"><img src="/jiuyexiangmu/home/assets/images/menu-icon5.png" alt="menu-icon2" /> Sport & Outdoors <i class="fa fa-angle-right" aria-hidden="true"></i></a>
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

									<a href="#"><img src="/jiuyexiangmu/home/assets/images/menu-icon7.png" alt="menu-icon2" /> Health & Beauty <sup class="bg-blue">NEW</sup></a>
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
	</header>
	<section class="shopping-cart">
        <div class="container">

			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb">
						<li>当前位置</li>
						<li class="breadcrumb-item"><a href="/">Home</a></li>
						<li class="breadcrumb-item active">contact</li>
					</ol>
				</div>
				
				<div class="col-md-12 contact-info pull-left">
                    <div class="contact-form">
                        <form action="/contact/edit" method="post" id="commentform" class="comment-form">
							<div class="row">
								<div class="col-md-12 text-center">
								@if(session('msg'))
		        				<div style="color:red;background:#ff0">{{session('msg')}}</div>
		        				@endif
								 	<div class="contact-bg">                 
										<h2>Review area</h2>
										<p>Please put forward your valuable advice and we will carefully record and correct it.</p>
							     	</div> 
								</div>
							</div>
							<div class="col-md-6">
							
                                <div class="lable">Name <span>*</span></div>
                              	<p class="comment-form-author"><input id="author" name="username" value="" size="30" type="text"></p>
                            </div>
                            
                            <div class="col-md-6">
                              	<div class="lable">Email <span>*</span></div>
                              	<p class="comment-form-email"><input id="email" name="email" value="" size="30" type="text"></p>
                            </div>
                            <div class="col-md-6">
                            	<div class="lable">Please give your valuable advice<span>*</span></div>
                            	<p class="comment-form-email"><img src="/image/sakdljfajflkk.jpg" width="65%" alt=""></p>
                            </div>
                            <div class="col-md-6">
                              	<div class="lable">An opinion or suggestion<span>*</span></div>
                              	<script id="editor" name="content" type="text/plain" style="width:550px;"></script>
                            </div>
                            <div class="col-md-8 col-md-offset-4">
                              	<p class="form-submit">
                              	{{csrf_field()}}
                              	<input name="submit" id="submit" class="btn btn-secondary" value="send messages" type="submit">  </p> 
                            </div>
                        </form>
                    </div>
                </div>
			</div>

        </div>
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
	<script>
		var ue = UE.getEditor('editor',{
			toolbars: [
    			['source', 'undo', 'redo', 'bold']
			]
		});
	</script>
</body>
	<!-- /sticky-socia -->
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
</html>