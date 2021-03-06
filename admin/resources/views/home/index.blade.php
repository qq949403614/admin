<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>index</title>

@include('/home.laouts.css')
</head>
<body>
<!--  Preloader  -->
<div id="preloader">
	<div id="loading">
	</div>
</div>
 <!--login-->
    <div class="container">
    	<div class="modal fade login" id="loginModal">
    	      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login with</h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                                <div class="social">
                                    <a href="#">
                                    	<img src="/img/index/back_top_qq.png" alt="">
                                    </a>
                                    <a href="">
                                    	<img src="/img/index/back_top_wx.png" alt="">
                                    </a>
                                    <a href="">
                                    	<img src="/img/index/back_top_call.png" alt="">
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="/login" accept-charset="UTF-8">
                                    <input id="name" class="form-control" type="text" placeholder="username" name="username">
                                    <input id="pwd" class="form-control" type="password" placeholder="password" name="pwd">
                                    {{csrf_field()}}
                                    <input class="btn btn-default btn-login" type="submit" value="sgin in">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="post" html="{:multipart=>true}" data-remote="true" action="/entry">
                                <input id="username" class="form-control" type="text" placeholder="username" name="username">
                                <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                <input id="Repeat_Password" class="form-control" type="password" placeholder="Repeat_Password" name="Repeat_Password">
                                <div class="col-md-8" style="padding:0px;margin:0px;">
	                                <input id="phone" class="form-control" type="text" placeholder="phone" name="phone">
                                </div>
                                <div class="col-md-4" style="padding:0px;margin:0px;">
	                                <input class="col-md-12 btn btn-success btn-lg" type="button" id="send" value="send">
                                </div>
                                <input id="code" class="form-control" type="text" placeholder="code" name="code">
                                <input id="email" class="form-control" type="text" placeholder="email" name="email">
                                {{csrf_field()}}
                                <input id="register" class="btn btn-default btn-register" type="submit" value="register">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to 
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            </span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>        
    		      </div>
    	      </div>
    	</div>
    </div>
 <!--end login -->
@section('jss')
<script>
	// 验证表单
	$('#register').click(function(){
		// 用户名正则表达式
		var uPattern = /^[\u4e00-\u9fa5_a-zA-Z0-9]{6,15}$/;
		var username = $('#username').val();
		// 密码正则表达式
		var password = /^\w{6,15}$/;
		var pwd = $('#password').val();
		var pwdw = $('#Repeat_Password').val();
		// 邮箱正则表达式
		var EmailRegular = /^[\w-]+(\.[\w-])*@[\w-]+(\.[\w-]+)+$/;
		var email=$('#email').val();
		// 验证用户名
		if(!uPattern.test(username)){
			alert('Please enter 6-15 valid names');
			return false;
		} 
		// 验证密码
		if(!password.test(pwd)){
			alert('Please enter 6-15 letters passwerd');
			return false;
		}
		// 确认密码
		if(pwd != pwdw){
			alert('Two cipher inconsistencies');
			return false;
		}
		// 验证邮箱
		if(!EmailRegular.test(email) ){
			alert('Please enter the correct input Email');
			return false;
		}
	});
	// 验证手机验证码
	$("#send").click(function(){
		// 手机号正则表达式
		var reg = /1\d{10}/;
		var phone = $('input[name=phone]').val();
		if (!reg.test(phone)) {
			alert('手机格式有误!!!');
			return;
		}		
		$.get('/message',{phone:phone},function(data){
			alert(data.data.vcode);
			console.log(data);
		});
		$(this).addClass("disabled");
		var time = 60;
		var init = setInterval(function(){
			$('#send').val(time+'send');
			time--;
			if(time < 0){
				clearInterval(init);
				$('#send').removeClass('disabled');
				$('#send').val('send');
			}
		},1000);
	}); 	
</script>
@endsection
<header>

	<!--  top-header  -->
	<div class="top-header">
		<div class="container">
			<div class="col-md-6">
				<div class="top-header-left">
					<ul>
						<li>
							<div class="dropdown">
								<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
								  Concern complex <i class="fa fa-angle-down" aria-hidden="true"></i>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Help center</a></li>
									<li><a href="#">Add to favorites</a></li>
								</ul>
							</div>
						</li>
						<li>
							<div class="dropdown">
								<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
									web nav <i class="fa fa-angle-down" aria-hidden="true"></i>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">complex</a></li>
									<li><a href="#">complex</a></li>
									<li><a href="#">complex</a></li>
									<li><a href="#">complex</a></li>
									<li><a href="#">complex</a></li>									
								</ul>
							</div>
						</li>
						<li>
							hello! please<a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Login</a>
                			or<a data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a>
						</li>

					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="top-header-right">
					<ul>
						<li><i class="icon-location-pin icons" aria-hidden="true"></i> Store Location</li>
						<li><i class="icon-note icons" aria-hidden="true"></i><a href="#" style="color:#fff;">My orders</a></li>
						<li>
							<div class="dropdown">
								<a href="/center" class="btn btn-default dropdown-toggle">
									<i aria-hidden="true"></i> Personal center
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>	
	<!--  /top-header  -->
	<section class="top-md-menu">
		<div class="container">
			@if(session('msg'))
			<div class="alert alert-danger text-center">{{session('msg')}}</div>
			@endif
			<div class="col-sm-3">
				<div class="logo">
					<h6><img src="/jiuyexiangmu/home/assets/images/logo.png" alt="logo" /></h6>
				</div>
			</div>
			<div class="col-sm-6">
				<!-- Search box Start -->
				<form>
					<div class="well carousel-search hidden-phone">
						<div class="btn-group">
							<a class="btn dropdown-toggle btn-select" data-toggle="dropdown" href="#">All Categories <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Item I</a></li>
								<li><a href="#">Item II</a></li>
								<li><a href="#">Item III</a></li>
								<li class="divider"></li>
								<li><a href="#">Other</a></li>
							</ul>
						</div>
						<div class="search">
							<input type="text" placeholder="Select prodect" />
						</div>
						<div class="btn-group">
							<button type="button" id="btnSearch" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
						</div>
					</div>
				</form>
				<!-- Search box End -->
			</div>
			<div class="col-sm-3">
				<!-- cart-menu -->
				<div class="cart-menu">
					<ul>
						<li><a href="#"><i class="icon-heart icons" aria-hidden="true"></i></a><span class="subno">1</span><strong>Your Wishlist</strong></li>
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" data-hover="dropdown"><i class="icon-basket-loaded icons" aria-hidden="true"></i></a><span class="subno">2</span><strong>Your Cart</strong>
							<div class="dropdown-menu  cart-outer">
								<div class="cart-content">
									<div class="col-sm-4 col-md-4"><img src="/jiuyexiangmu/home/assets/images/elec-img4.jpg" alt="13"></div>
									<div class="col-sm-8 col-md-8">
										<div class="pro-text">
											<a href="#">Apple Macbook Retina 23’’ </a>
											<div class="close">x</div>
											<strong>1 × $290.00</strong>
										</div>
									</div>
								</div>
								<div class="cart-content">
									<div class="col-sm-4 col-md-4"><img src="/jiuyexiangmu/home/assets/images/elec-img3.jpg" alt="13"></div>
									<div class="col-sm-8 col-md-8">
										<div class="pro-text">
											<a href="#">Apple Macbook Retina 23’’ </a>
											<div class="close">x</div>
											<strong>1 × $290.00</strong>
										</div>
									</div>
								</div>
								<div class="total">
									<div class="col-md-6 text-left">
										<span>Shipping :</span>
										<strong>Total :</strong>
									</div>
									<div class="col-md-6 text-right">
										<strong>$0.00</strong>
										<strong>$160.00</strong>
									</div>
								</div>
								<a href="shopping-cart.html" class="cart-btn">VIEW CART </a> <a href="checkout.html" class="cart-btn">CHECKOUT</a>
							</div>
						</li>
					</ul>
				</div>
				<!-- cart-menu End -->
			</div>
			<div class="main-menu">
				<!--  nav  -->
				<nav class="navbar navbar-inverse navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations=" fadeInLeft fadeInUp fadeInRight">
						<ul class="nav navbar-nav">
							<li class="all-departments dropdown">
								<a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span> Shop By Department</span></a>
								<ul class="dropdown-menu dropdownhover-bottom all-open" role="menu">
									<li class="dropdown">
										<a href="index.html"><img src="/jiuyexiangmu/home/assets/images/menu-icon1.png" alt="menu-icon1" /> Electronic & Digital </a>
										<ul class="dropdown-menu right">
											<li><a href="grid.html">Electronic 01</a></li>
											<li><a href="list.html">Electronic 02</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#"><img src="/jiuyexiangmu/home/assets/images/menu-icon2.png" alt="menu-icon2" /> Phones & Accessories</a>
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
										<a href="#"><img src="/jiuyexiangmu/home/assets/images/menu-icon4.png" alt="menu-icon4" /> Fashion & Clothing</a>
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
										<a href="#"><img src="/jiuyexiangmu/home/assets/images/menu-icon5.png" alt="menu-icon2" /> Sport & Outdoors </a>
										<ul class="dropdown-menu right">
											<li><a href="grid.html">Sport 05</a></li>
											<li><a href="list.html">Sport 06</a></li>
											<li><a href="list.html">Outdoors 02</a></li>
											<li><a href="grid.html">Outdoors 01</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#"><img src="/jiuyexiangmu/home/assets/images/menu-icon6.png" alt="menu-icon2" /> Jewelry & Watches </a>
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
										<a href="#"><img src="/jiuyexiangmu/home/assets/images/menu-icon8.png" alt="menu-icon2" /> Toys & Hobbies </a>
										<ul class="dropdown-menu right">
											<li><a href="grid.html">Toys 05</a></li>
											<li><a href="list.html">Hobbies 02</a></li>
											<li><a href="grid.html">Toys 01</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#"><img src="/jiuyexiangmu/home/assets/images/menu-icon9.png" alt="menu-icon2" /> Book & Office </a>
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
							<li><a href="/goods/list">List</a></li>
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
	<!-- header-outer -->
	<section class="header-outer">
		<!-- header-slider -->
			<div class="header-slider">					
					<div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
						<!-- .home-slider -->
						<div class="carousel-inner">
							<div class="item active">
								<div class="container">		
									<div class="caption">
									<div class="caption-outer">
										<div class="col-xs-12 col-sm-12 col-md-4">												
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6">
											<h3>samsung galaxy ON NXT</h3>
											<h2 class="animated wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">New Arrivals</h2>
											<h4>Only from $520 </h4>
											<p class="animated wow fadeInRight">iPhone 7 dramatically improves the most important aspects of the iPhone experience.</p>
											<a data-scroll class="btn get-start animated fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" href="#">BUY NOW</a>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-2">												
											<div class="save-price animated wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
												<span class="save-text">From</span>
												<span class="saveprice-no"><sup>$</sup>520</span>
											</div>
										</div>
									</div>
								</div>
								</div>
								
							</div>
							<div class="item">
								<div class="container">		
									<div class="caption">
									<div class="caption-outer">
										<div class="col-xs-12 col-sm-12 col-md-4">												
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6">
											<h3>new collection</h3>
											<h2 class="animated wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">Phantom</h2>
											<h4>Only from $920 </h4>
											<p class="animated wow fadeInRight">iPhone 7 dramatically improves the most important aspects of the iPhone experience.</p>
											<a data-scroll class="btn get-start animated fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" href="#">BUY NOW</a>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-2">												
											<div class="save-price animated wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
												<span class="save-text">From</span>
												<span class="saveprice-no"><sup>$</sup>520</span>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
							<div class="item">
								<div class="container">		
									<div class="caption">
									<div class="caption-outer">
										<div class="col-xs-12 col-sm-12 col-md-4">												
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6">
											<h3>Divoom brands</h3>
											<h2 class="animated wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">Voombox 2.0</h2>
											<h4>Only from $69 </h4>
											<p class="animated wow fadeInRight">iPhone 7 dramatically improves the most important aspects of the iPhone experience.</p>
											<a data-scroll class="btn get-start animated fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" href="#">BUY NOW</a>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-2">												
											<div class="save-price animated wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
												<span class="save-text">From</span>
												<span class="saveprice-no"><sup>$</sup>520</span>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
						</div>
						<!-- indicators -->
						<ol class="carousel-indicators">
							<li data-target="#home-slider" data-slide-to="0" class="active"></li>
							<li data-target="#home-slider" data-slide-to="1"></li>
							<li data-target="#home-slider" data-slide-to="2"></li>
						</ol>
						<!-- /indicators -->
						<!-- /.home-slider -->
					</div>					
			</div>
			<!-- /header-slider end -->			
	</section>
	<!-- /header-outer -->
</header>
<!-- banner -->
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4">
				<!-- banner-img -->
				<a href="#" class="banner-img">
					<!-- banner-text -->
					<div class="banner-text">
						<h3>Samsung</h3>
						<h2>Tablet mini 3</h2>
						<span class="price">Price: $720</span>
					</div>
					<!-- /banner-text -->
				</a>
				<!-- /banner-img -->
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<!-- banner-img -->
				<a href="#" class="banner-img banner-img2">
					<!-- banner-text -->
					<div class="banner-text">
						<h3>sony brand</h3>
						<h2>Smartwatch</h2>
						<span class="price">Price: $220</span>
					</div>
					<!-- /banner-text -->
				</a>
				<!-- /banner-img -->
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<!-- banner-img -->
				<a href="#" class="banner-img banner-img3">
					<!-- banner-text -->
					<div class="banner-text">
						<h3>beat brand</h3>
						<h2>Headphone</h2>
						<span class="price">Price: $150</span>
					</div>
					<!-- /banner-text -->
				</a>
				<!-- /banner-img -->
			</div>
		</div>
	</div>
</section>
<!-- /banner -->
<!-- deal-outer -->
<section class="deal-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="deal-week">
					<div class="title">
						<h2>Deals Of The Week</h2>
					</div>
					<div class="owl-demo-outer">
						<!-- #owl-demo -->
						<div id="owl-demo" class="deals-wk">
							<div class="item">
								<div class="col-md-12">
									<!-- .pro-text -->
									<div class="pro-text text-center">
										<!-- .pro-img -->
										<div class="pro-img">
											<img src="/jiuyexiangmu/home/assets/images/wk-deal-img.jpg" alt="2" />
										</div>
										<!-- /.pro-img -->
										<div class="text-text">
											<span>Macbook, Laptop</span>
											<h4> Apple Macbook Retina 23’’ </h4>
											<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
											<p class="wk-price">$290.00 <span>$290.00</span> </p>
											<p class="availalbe">Availalbe: <span>In Stock</span></p>
											<a href="#" class="add-btn">Add to cart</a>
										</div>
										<!-- clockdiv -->
										<div id="clockdiv">
											<h4>Hurry Up! Offer ends in:</h4>
											<div>
												<span class="days">14</span>
												<div class="smalltext">Days</div>
											</div>
											<div>
												<span class="hours">23</span>
												<div class="smalltext">Hours</div>
											</div>
											<div>
												<span class="minutes">59</span>
												<div class="smalltext">Minutes</div>
											</div>
											<div>
												<span class="seconds">47</span>
												<div class="smalltext">Seconds</div>
											</div>
										</div>
										<!-- /clockdiv -->
									</div>
									<!-- /.pro-text -->
								</div>
							</div>
							<div class="item">
								<div class="col-md-12">
									<!-- .pro-text -->
									<div class="pro-text text-center">
										<!-- .pro-img -->
										<div class="pro-img">
											<img src="/jiuyexiangmu/home/assets/images/wk-deal-img.jpg" alt="2" />
										</div>
										<!-- /.pro-img -->
										<div class="text-text">
											<span>Macbook, Laptop</span>
											<h4> Apple Macbook Retina 23’’ </h4>
											<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
											<p class="wk-price">$290.00 <span>$290.00</span> </p>
											<p class="availalbe">Availalbe: <span>In Stock</span></p>
											<a href="#" class="add-btn">Add to cart</a>
										</div>
									</div>
									<!-- /.pro-text -->
								</div>
							</div>
							<div class="item">
								<div class="col-md-12">
									<!-- .pro-text -->
									<div class="pro-text text-center">
										<!-- .pro-img -->
										<div class="pro-img">
											<img src="/jiuyexiangmu/home/assets/images/wk-deal-img.jpg" alt="2" />
										</div>
										<!-- /.pro-img -->
										<div class="text-text">
											<span>Macbook, Laptop</span>
											<h4> Apple Macbook Retina 23’’ </h4>
											<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
											<p class="wk-price">$290.00 <span>$290.00</span> </p>
											<p class="availalbe">Availalbe: <span>In Stock</span></p>
											<a href="#" class="add-btn">Add to cart</a>
										</div>
									</div>
									<!-- /.pro-text -->
								</div>
							</div>
							<div class="item">
								<div class="col-md-12">
									<!-- .pro-text -->
									<div class="pro-text text-center">
										<!-- .pro-img -->
										<div class="pro-img">
											<img src="/jiuyexiangmu/home/assets/images/wk-deal-img.jpg" alt="2" />
										</div>
										<!-- /.pro-img -->
										<div class="text-text">
											<span>Macbook, Laptop</span>
											<h4> Apple Macbook Retina 23’’ </h4>
											<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
											<p class="wk-price">$290.00 <span>$290.00</span> </p>
											<p class="availalbe">Availalbe: <span>In Stock</span></p>
											<a href="#" class="add-btn">Add to cart</a>
										</div>
									</div>
									<!-- /.pro-text -->
								</div>
							</div>
							<!-- /#owl-demo -->
						</div>
					</div>

				</div>
			</div>


			<div class="col-sm-8">
				<!-- new-arrivals -->
				<div class="new-arrivals">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#home">new arrivals</a></li>
						<li><a data-toggle="tab" href="#menu1">featured</a></li>
						<li><a data-toggle="tab" href="#menu2">special</a></li>
					</ul>

					<div class="tab-content">
						<div id="home" class="tab-pane fade in active">							
							<div class="owl-demo-outer">
								<!-- #owl-demo -->
								<div id="owl-demo8" class="deals-wk2">
									<div class="item">
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img2.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img3.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img4.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img5.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img6.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>

									</div>
									<div class="item">
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img2.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img3.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img4.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img5.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img6.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>

									</div>


									<!-- /#owl-demo -->
								</div>
							</div>
						</div>
						<div id="menu1" class="tab-pane fade">							
							<div class="owl-demo-outer">
								<!-- #owl-demo -->
								<div id="owl-demo7" class="deals-wk2">
									<div class="item">
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img2.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img3.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img4.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img5.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img6.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="#">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>

									</div>
									<div class="item">
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img2.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img3.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img4.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img5.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img6.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>

									</div>


									<!-- /#owl-demo -->
								</div>
							</div>
						</div>
						<div id="menu2" class="tab-pane fade">								
							<div class="owl-demo-outer">
								<!-- #owl-demo -->
								<div id="owl-demo6" class="deals-wk2">
									<div class="item">
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img2.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img3.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img4.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="shop-detail.html">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img5.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="#">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img6.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="#">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>

									</div>
									<div class="item">
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="#">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img2.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="#">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img3.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="#">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img4.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="#">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img5.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="#">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<!-- .pro-text -->
											<div class="pro-text text-center">
												<!-- .pro-img -->
												<div class="pro-img">
													<img src="/jiuyexiangmu/home/assets/images/new-arrivals-img6.jpg" alt="2" />
												</div>
												<!-- /.pro-img -->
												<div class="pro-text-outer">
													<span>Macbook, Laptop</span>
													<a href="#">
														<h4> Apple Macbook Retina 23’ </h4>
													</a>
													<p class="wk-price">$290.00 </p>
													<a href="#" class="add-btn">Add to cart</a>
												</div>
											</div>
											<!-- /.pro-text -->
										</div>

									</div>


									<!-- /#owl-demo -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /new-arrivals -->

			</div>
		</div>
	</div>
</section>
<!-- /deal-outer -->
<!-- all-product -->
<section class="all-product">
	<div class="container">
		<div class="row">
			<!-- title -->
			<div class="title">
				<h2>
					ELECTRONICS & COMPUTERS						
				</h2>
				<ul class="nav nav-tabs etabs">
						<li class="active"><a data-toggle="tab" href="#phones">Cell Phones</a></li>
						<li><a data-toggle="tab" href="#laptop">Laptop</a></li>
						<li><a data-toggle="tab" href="#desktop">Desktop</a></li>
						<li><a data-toggle="tab" href="#tV">TV & Video</a></li>
						<li><a data-toggle="tab" href="#tablets">Tablets</a></li>
					</ul>
			</div>
			<!-- /title -->
			<!-- electonics -->
			<div class="electonics">

				<div class="brd2 col-xs-12 col-sm-3 col-md-3">
					<div id="home-slider2" class="carousel slide carousel-fade" data-ride="carousel">
						<!-- .home-slider -->
						<div class="carousel-inner">
							<div class="item active">
								<a class="ads" href="#">
									<img src="/jiuyexiangmu/home/assets/images/add-banner.jpg" alt="add-banner" />
								</a>
							</div>
							<div class="item">
								<a class="ads" href="#">
									<img src="/jiuyexiangmu/home/assets/images/add-banner.jpg" alt="add-banner" />
								</a>
							</div>
						</div>
						<!-- indicators -->
						<ol class="carousel-indicators">
							<li data-target="#home-slider2" data-slide-to="0" class="active"></li>
							<li data-target="#home-slider2" data-slide-to="1"></li>
						</ol>
						<!-- /indicators -->
						<!-- /.home-slider -->
					</div>
				</div>
				<div class="col-xs-12 col-sm-9 col-md-9">
					<div class="row">
						<!-- tab-content -->
						<div class="tab-content">
							<!-- tab-pane -->
							<div id="phones" class="tab-pane fade in active">									
								<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo3" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"></a>
														<a href="#" class="add-btn2"></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"</a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>


							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="laptop" class="tab-pane fade in">
								<div id="owl-demo13" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="desktop" class="tab-pane fade in">
								<div id="owl-demo14" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="tV" class="tab-pane fade in">
								<div id="owl-demo15" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="tablets" class="tab-pane fade in">
								<div id="owl-demo16" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/elec-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
							</div>
							<!-- /tab-pane -->
						</div>
						<!-- /tab-content -->

					</div>
				</div>
			</div>
			<!-- /electonics -->
			<!-- half-banner -->
			<div class="half-banner">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<a href="#" class="banner half-banner1">
							<div class="text">
								<h4>best digital</h4>
								<h3>sale smartwatch</h3>
								<div class="banner-price">
									$620.00 <span>$60.00  </span>
								</div>
							</div>
						</a>
					</div>
					<a href="#" class="col-xs-12 col-sm-6 col-md-6">
						<div class="banner half-banner2">
							<div class="text">
								<h4>strong prices</h4>
								<h3>Lenovo Yoga Tablet 2</h3>
								<div class="banner-price">
									$620.00 <span>$60.00  </span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<!-- /half-banner -->
			<!-- title -->
			<div class="title">
				<h2>
					FASHION & CLOTHING						
				</h2>
				<ul class="nav nav-tabs etabs">
						<li class="active"><a data-toggle="tab" href="#men">Men’s</a></li>
						<li><a data-toggle="tab" href="#women">Women’s</a></li>
						<li><a data-toggle="tab" href="#kid">Kid’s</a></li>
						<li><a data-toggle="tab" href="#clothing">Clothing</a></li>
						<li><a data-toggle="tab" href="#shoes">Shoes</a></li>
						<li><a data-toggle="tab" href="#handbag">Handbag</a></li>
					</ul>
			</div>
			<!-- /title -->
			<!-- FASHION -->
			<div class="electonics">

				<div class="brd2 col-xs-12 col-sm-3 col-md-3">
					<div id="home-slider3" class="carousel slide carousel-fade" data-ride="carousel">
						<!-- .home-slider -->
						<div class="carousel-inner">
							<div class="item active">
								<a class="ads" href="#">
									<img src="/jiuyexiangmu/home/assets/images/fs-add-banner.jpg" alt="add-banner" />
								</a>
							</div>
							<div class="item">
								<a class="ads" href="#">
									<img src="/jiuyexiangmu/home/assets/images/fs-add-banner.jpg" alt="add-banner" />
								</a>
							</div>
						</div>
						<!-- indicators -->
						<ol class="carousel-indicators">
							<li data-target="#home-slider3" data-slide-to="0" class="active"></li>
							<li data-target="#home-slider3" data-slide-to="1"></li>
						</ol>
						<!-- /indicators -->
						<!-- /.home-slider -->
					</div>
				</div>
				<div class="col-xs-12 col-sm-9 col-md-9">
					<div class="row">
						<!-- tab-content -->
						<div class="tab-content">
							<!-- tab-pane -->
							<div id="men" class="tab-pane fade in active">
									<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo9" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>


							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="women" class="tab-pane fade in">
									<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo17" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="kid" class="tab-pane fade in">
									<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo18" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="clothing" class="tab-pane fade in">
									<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo19" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="shoes" class="tab-pane fade in">
									<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo20" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="handbag" class="tab-pane fade in">
									<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo21" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/fc-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/fc-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /tab-pane -->
						</div>
						<!-- /tab-content -->

					</div>
				</div>
			</div>
			<!-- /FASHION -->
			<!-- full-banner -->
			<div class="half-banner">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<a href="#" class="banner animated wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="/jiuyexiangmu/home/assets/images/add-banner-large.jpg" alt="add banner large">
						</a>
					</div>
				</div>
			</div>
			<!-- /full-banner -->
			<!-- title -->
			<div class="title">
				<h2>
					Home, Garden & Kitchen						
				</h2>
				<ul class="nav nav-tabs etabs">
						<li class="active"><a data-toggle="tab" href="#men2">Men’s</a></li>
						<li><a data-toggle="tab" href="#women2">Women’s</a></li>
						<li><a data-toggle="tab" href="#kid2">Kid’s</a></li>
						<li><a data-toggle="tab" href="#clothing2">Clothing</a></li>
						<li><a data-toggle="tab" href="#shoes2">Shoes</a></li>
						<li><a data-toggle="tab" href="#handbag2">Handbag</a></li>
					</ul>
			</div>
			<!-- /title -->
			<!-- Home-Garden-Kitchen -->
			<div class="electonics">

				<div class="brd2 col-xs-12 col-sm-3 col-md-3">
					<div id="home-slider4" class="carousel slide carousel-fade" data-ride="carousel">
						<!-- .home-slider -->
						<div class="carousel-inner">
							<div class="item active">
								<a class="ads" href="#">
									<img src="/jiuyexiangmu/home/assets/images/hgk-add-banner.jpg" alt="add-banner" />
								</a>
							</div>
							<div class="item">
								<a class="ads" href="#">
									<img src="/jiuyexiangmu/home/assets/images/hgk-add-banner.jpg" alt="add-banner" />
								</a>
							</div>
						</div>
						<!-- indicators -->
						<ol class="carousel-indicators">
							<li data-target="#home-slider4" data-slide-to="0" class="active"></li>
							<li data-target="#home-slider4" data-slide-to="1"></li>
						</ol>
						<!-- /indicators -->
						<!-- /.home-slider -->
					</div>
				</div>
				<div class="col-xs-12 col-sm-9 col-md-9">
					<div class="row">
						<!-- tab-content -->
						<div class="tab-content">
							<!-- tab-pane -->
							<div id="men2" class="tab-pane fade in active">
									<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo10" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>


							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="women2" class="tab-pane fade in">
								<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo22" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="kid2" class="tab-pane fade in">
								<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo23" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="clothing2" class="tab-pane fade in">
								<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo24" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="shoes2" class="tab-pane fade in">
								<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo25" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="handbag2" class="tab-pane fade in">
								<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo26" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/hgk-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/hgk-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /tab-pane -->
						</div>
						<!-- /tab-content -->

					</div>
				</div>
			</div>
			<!-- Home-Garden-Kitchen -->
			<!-- half-banner -->
			<div class="half-banner">
				<div class="row">
					<a href="#" class="col-xs-12 col-sm-6 col-md-6">
						<img src="/jiuyexiangmu/home/assets/images/half-banner3.jpg" alt="half-banner3" />
					</a>
					<a href="#" class="col-xs-12 col-sm-6 col-md-6">						
							<img src="/jiuyexiangmu/home/assets/images/half-banner4.jpg" alt="half-banner3" />
					</a>
				</div>
			</div>
			<!-- /half-banner -->
			<!-- title -->
			<div class="title">
				<h2>
					GIFT & HAND MADE						
				</h2>
				<ul class="nav nav-tabs etabs">
						<li class="active"><a data-toggle="tab" href="#men3">Men’s</a></li>
						<li><a data-toggle="tab" href="#women3">Women’s</a></li>
						<li><a data-toggle="tab" href="#kid3">Kid’s</a></li>
						<li><a data-toggle="tab" href="#clothing3">Clothing</a></li>
						<li><a data-toggle="tab" href="#shoes3">Shoes</a></li>
						<li><a data-toggle="tab" href="#handbag3">Handbag</a></li>
					</ul>
			</div>
			<!-- /title -->
			<!-- GIFT -->
			<div class="electonics">

				<div class="brd2 col-xs-12 col-sm-3 col-md-3">
					<div id="home-slider5" class="carousel slide carousel-fade" data-ride="carousel">
						<!-- .home-slider -->
						<div class="carousel-inner">
							<div class="item active">
								<a class="ads" href="#">
									<img src="/jiuyexiangmu/home/assets/images/home-design-add-banner.jpg" alt="add-banner" />
								</a>
							</div>
							<div class="item">
								<a class="ads" href="#">
									<img src="/jiuyexiangmu/home/assets/images/home-design-add-banner.jpg" alt="add-banner" />
								</a>
							</div>
						</div>
						<!-- indicators -->
						<ol class="carousel-indicators">
							<li data-target="#home-slider5" data-slide-to="0" class="active"></li>
							<li data-target="#home-slider5" data-slide-to="1"></li>
						</ol>
						<!-- /indicators -->
						<!-- /.home-slider -->
					</div>
				</div>
				<div class="col-xs-12 col-sm-9 col-md-9">
					<div class="row">
						<!-- tab-content -->
						<div class="tab-content">
							<!-- tab-pane -->
							<div id="men3" class="tab-pane fade in active">									
								<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo11" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>


							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="women3" class="tab-pane fade in">
								<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo27" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/elec-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="kid3" class="tab-pane fade in">
								<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo28" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="clothing3" class="tab-pane fade in">
								<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo29" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="shoes3" class="tab-pane fade in">
								<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo30" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /tab-pane -->
							<!-- tab-pane -->
							<div id="handbag3" class="tab-pane fade in">
								<div class="owl-demo-outer">
									<!-- #owl-demo -->
									<div id="owl-demo31" class="deals-wk2">
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="new-tag">NEW</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
										<div class="item">
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<sup class="sale-tag">sale!</sup>
														<img src="/jiuyexiangmu/home/assets/images/ghm-img1.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
														<a href="#" class="add-btn2"><i class="icon-heart icons" aria-hidden="true"></i></a>
														<a href="#" class="add-btn2"><i class="icon-refresh icons"></i></a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img2.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img3.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
											<div class="bdr col-xs-12 col-sm-12 col-md-6">
												<!-- e-product -->
												<div class="e-product">
													<div class="pro-img">
														<img src="/jiuyexiangmu/home/assets/images/ghm-img4.jpg" alt="2">
														<div class="hover-icon">
															<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="pro-text-outer">
														<span>Macbook, Laptop</span>
														<a href="#">
															<h4> Apple Macbook Retina 23’ </h4>
														</a>
														<p class="wk-price">$290.00 </p>
														<a href="#" class="add-btn">Add to cart</a>
													</div>
												</div>
												<!-- /e-product -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /tab-pane -->
						</div>
						<!-- /tab-content -->

					</div>
				</div>
			</div>
			<!-- /GIFT -->
			<!-- full-banner -->
			<div class="half-banner">
				<div class="row">
					<a href="#" class="col-xs-12 col-sm-12 col-md-12">
						<img src="/jiuyexiangmu/home/assets/images/add-banner-large2.jpg" alt="add-banner-large2" />
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /all-product -->
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
					<input name="submit" type="button" value="Submit" />
				</div>
			</div>
		</div>
	</div>
</section>


<div style="border-top:4px solide red; height:1px;"></div>
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
<p id="back-top">
	<a href="#top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
</p>
@include('/home.laouts.js')

<script>
@if(request('action') == 'login')
$('.modal').modal();
@endif
</script>
</body>
</html>