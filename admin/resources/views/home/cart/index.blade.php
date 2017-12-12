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
							<li class="breadcrumb-item active">cart</li>
						</ol>
					</div>
					
					<div class="col-md-12">
				
	                  <h2>You cart items</h2>
	                  <form method="post" action="/dingdan/confirm">
	                  <table>
	                     <tr>
	                        <th>&nbsp;</th>
	                        <th>Product pic</th>
	                        <th>Product name</th>
	                        <th>Description</th>
	                        <th>Price</th>
	                        <th>Quantity</th>
	                        <th>Total Price</th>
	                        <th></th>
	                     </tr>
	                     @foreach($goods as $k=>$v)
	                     <tr>
	                        <th scope="row">
	                            <input type="checkbox" name="data[{{$v->id}}][id]" value="{{$v->id}}">
	                        </th>
	                        <td><img width="50" height="50" src="{{$v->pic}}" alt="13"></td>
	                        <td>{{$v->detail->title}}</td>
	                        <td>Lorem Ipsum is simply dummy text of the printing<br/> and typesetting industry.</td>
	                        <td><strong>${{$v->detail->price}}</strong></td>
	                        <td><input type="text" name="data[{{$v->id}}][num]" min="1" max="500" value="{{$v->num}}"></td>
	                        <td><strong>$160.00</strong></td>
	                        <td><span class="red" ><i class="fa fa-times del" cid="{{$v->id}}" aria-hidden="true"></i></span></td>
	                     </tr>
	                     @endforeach
	                  </table>

                      </form>
	                  <div class="col-sm-6 col-md-6">
	                     <a href="#" class="button red">CONTINUE SHOPPING</a>
	                  </div>
	                  <div class="col-sm-6 col-md-6 text-right">
	                     <a href="#" class="button">UPDATE SHOPPING CART</a>
	                     <a href="#" class="button">CLEAR SHOPPING CART</a>
	                  </div>
	                  <div class="col-sm-4 col-md-4">
	                     <div class="shipping-outer">
	                        <h2>Calculate shipping</h2>
	                        <div class="row">
	                           <div class="col-md-12 counttry">
	                              <div class="lable">Select your Counttry:</div>
	                              <input name="counttry" placeholder="United States (USA)" type="text">
	                           </div>
	                           <div class="col-sm-6 col-md-6">
	                              <div class="lable">Select your State:</div>
	                              <div class="size State">
	                                 <div class="select-option">
	                                    <select>
	                                       <option value="28">28</option>
	                                       <option value="32">32</option>
	                                       <option value="34">34</option>
	                                       <option value="36">36</option>
	                                       <option value="Featured Pots">State / City</option>
	                                    </select>
	                                 </div>
	                              </div>
	                           </div>
	                           <div class="col-sm-6 col-md-6">
	                              <div class="lable">Zip Code:</div>
	                              <input name="counttry" placeholder="Zip Code" type="text">
	                           </div>
	                        </div>
	                        <a href="#" class="button2">Update Shipping</a>
	                     </div>
	                  </div>
	                  <div class="col-sm-4 col-md-4">
	                     <div class="shipping-outer">
	                        <h2>Coupon code</h2>
	                        <div class="row">
	                           <div class="col-md-12">
	                              <div class="lable">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
	                              <input name="counttry" type="text">
	                           </div>
	                           <div class="col-md-12">
	                              <div class="lable">Coupon Code:</div>
	                              <input name="Coupon Code" placeholder="Coupon Code" type="text">
	                           </div>
	                        </div>
	                        <a href="#" class="button2">REdeem code</a>        		
	                     </div>
	                  </div>
	                  <div class="col-sm-4 col-md-4">
	                     <div class="shipping-outer">
	                        <h2>Cart totals</h2>
	                        <ul>
	                           <li>Cart Subtotal: <strong>$640.00</strong></li>
	                           <li>Shipping and Handling: <strong>$10.00</strong></li>
	                           <li>Cart Totals: <strong>$650.00</strong></li>
	                           <li class="text-center">
	                              <a href="#" class="redbutton">Proceed to checkout</a>
	                              <a href="#">Checkout with mutilple adresses</a>
	                           </li>
	                        </ul>
	                     </div>
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
<script>
    $('.del').click(function(){
        //获取相关信息
        var cid = $(this).attr('cid');
        var tr = $(this).parents('tr');
        //发送请求
        $.ajax({
            type:'get',
            url: '/cart/delete',
            data: {'cid':cid},
            success: function(data){
                if(data == 1) {
                    tr.fadeOut(1000);
                }
            }

        })

    });
</script>

