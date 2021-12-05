<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    
<!-- Nulled by http://www.baobinh.net by tieulonglanh -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Chicken</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
		
		<!-- FONTS
		============================================ -->	
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'> 
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
				
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/animate.css')}}">		
		
		<!-- FANCYBOX CSS
		============================================ -->			
        <link rel="stylesheet" href="{{asset('public/frontend/css/jquery.fancybox.css')}}">	
		
		<!-- BXSLIDER CSS
		============================================ -->			
        <link rel="stylesheet" href="{{asset('public/frontend/css/jquery.bxslider.css')}}">			
				
		<!-- MEANMENU CSS
		============================================ -->			
        <link rel="stylesheet" href="{{asset('public/frontend/css/meanmenu.min.css')}}">	
		
		<!-- JQUERY-UI-SLIDER CSS
		============================================ -->			
        <link rel="stylesheet" href="{{asset('public/frontend/css/jquery-ui-slider.css')}}">		
		
		<!-- NIVO SLIDER CSS
		============================================ -->			
        <link rel="stylesheet" href="{{asset('public/frontend/css/nivo-slider.css')}}">
		
		<!-- OWL CAROUSEL CSS 	
		============================================ -->	
        <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.css')}}">
		
		<!-- OWL CAROUSEL THEME CSS 	
		============================================ -->	
         <link rel="stylesheet" href="{{asset('public/frontend/css/owl.theme.css')}}">
		<!-- CSS -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
		<!-- Default theme -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
		<!-- Semantic UI theme -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
		<!-- BOOTSTRAP CSS 
		============================================ -->	
        <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
		
		<!-- FONT AWESOME CSS 
		============================================ -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">
		
		<!-- NORMALIZE CSS 
		============================================ -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/normalize.css')}}">
		
		<!-- MAIN CSS 
		============================================ -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/main.css')}}">
		
		<!-- STYLE CSS 
		============================================ -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
		
		<!-- RESPONSIVE CSS 
		============================================ -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">
		
		<!-- IE CSS 
		============================================ -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/ie.css')}}">
		
		<!-- MODERNIZR JS 
		============================================ -->
        <script src="{{asset('public/fronend/js/vendor/modernizr-2.6.2.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		
		<!-- HEADER-TOP START -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<!-- HEADER-LEFT-MENU START -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="header-left-menu">
							<div class="welcome-info">
								Chào mừng đến với cửa hàng
							</div>
							<div class="currenty-converter">
								<form method="post" action="#" id="currency-set">
									<div class="current-currency">
										<span class="cur-label">Tiền tệ : </span><strong>VND</strong>
									</div>
									
								</form>									
							</div>
							<div class="selected-language">
								<div class="current-lang">
									<span class="current-lang-label">Ngôn ngữ : </span><strong>Việt Nam</strong>
								</div>
																	
							</div>
						</div>
					</div>
					<!-- HEADER-LEFT-MENU END -->
					<!-- HEADER-RIGHT-MENU START -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="header-right-menu">
							<nav>
								<ul class="list-inline">
									
									@if(Session::has('customer_id'))
									<li><a href="my-account.html">{{(Session::get('customer_id')->customer_name)}}</a></li>
									<li><a href="{{URL::to('/logout')}}">Đăng xuất</a></li>
									
									@endif
								</ul>									
							</nav>
						</div>
					</div>
					<!-- HEADER-RIGHT-MENU END -->
				</div>
			</div>
		</div>
		<!-- HEADER-TOP END -->
		<!-- HEADER-MIDDLE START -->
		<section class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<!-- LOGO START -->
						<div class="logo">
							<a href="{{URL::to('/')}}"><img src="{{asset('public/frontend/img/logo.png')}}" alt="bstore logo" /></a>
						</div>
						<!-- LOGO END -->
						<!-- HEADER-RIGHT-CALLUS START -->
						<div class="header-right-callus">
							<h3>HỔ TRỢ</h3>
							<span>0123-456-789</span>
						</div>
						<!-- HEADER-RIGHT-CALLUS END -->
						<!-- CATEGORYS-PRODUCT-SEARCH START -->
						<div class="categorys-product-search">
							<form action="{{URL::to('/tim-kiem')}}" method="post" class="search-form-cat">
							{{csrf_field()}}
								<div class="search-product form-group">
									
									<input type="text" class="form-control search-form" style="width:100%" name="keysearch" placeholder="Nhập từ muốn tìm ... " />
									<button class="search-button" value="Search" name="s" type="submit">
										<i class="fa fa-search"></i>
									</button>									 
								</div>
							</form>
						</div>
						<!-- CATEGORYS-PRODUCT-SEARCH END -->
					</div>
				</div>
			</div>
		</section>
		<!-- HEADER-MIDDLE END -->
		<!-- MAIN-MENU-AREA START -->
		<header class="main-menu-area">
			<div class="container">
				<div class="row">
					<!-- SHOPPING-CART START -->
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right shopingcartarea">
						<div class="shopping-cart-out pull-right">
							<div class="shopping-cart">
								<a class="shop-link" href="{{URL::to('/view-cart')}}" title="View my shopping cart">
									<i class="fa fa-shopping-cart cart-icon"></i>
									<b>GIỎ HÀNG</b>
									<span class="ajax-cart-quantity">2</span>
								</a>
								<div class="shipping-cart-overly" style="height: auto;">
									<div id="change-item-cart">
										
									</div>
									
								</div>
							</div>
						</div>
					</div>	
					<!-- SHOPPING-CART END -->
					<!-- MAINMENU START -->
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
						<div class="mainmenu">
							<nav>
								<ul class="list-inline mega-menu">
									<li class="active"><a href="{{URL::to('/')}}">TRANG CHỦ</a>
									
									</li>
									<li><a href="{{URL::to('/thuc-don')}}">THỰC ĐƠN</a></li>
									<li><a href="#">TIN TỨC</a></li>
									<li><a href="#">LIÊN HỆ</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- MAINMENU END -->
				</div>
				<div class="row">
					<!-- MOBILE MENU START -->
					<div class="col-sm-12 mobile-menu-area">
						<div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
							<span class="mobile-menu-title">MENU</span>
							<nav>
								<ul>
									<li><a href="{{URL::to('/')}}">TRANG CHỦ</a>
																							
									</li>								
									<li><a href="{{URL::to('/thuc-don')}}">THỰC ĐƠN</a></li>
									<li><a href="#">TIN TỨC</a></li>
									<li><a href="about-us.html">LIÊN HỆ</a></li>
								</ul>
							</nav>
						</div>						
					</div>
					<!-- MOBILE MENU END -->
				</div>
			</div>
		</header>
		<!-- MAIN-MENU-AREA END -->
		
		<!-- MAIN-CONTENT-SECTION START -->
		<section class="main-content-section">
		@yield('content')
		</section>
		<!-- MAIN-CONTENT-SECTION END -->
		<!-- LATEST-NEWS-AREA START -->
		
		<!-- LATEST-NEWS-AREA END -->
		<!-- BRAND-CLIENT-AREA START -->
		
		<!-- BRAND-CLIENT-AREA END -->
		<!-- COMPANY-FACALITY START -->
		<section class="company-facality">
			<div class="container">
				<div class="row">
					<div class="company-facality-row">
						<!-- SINGLE-FACALITY START -->
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-rocket"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">MIỄN PHÍ GIAO HÀNG</h3>
									
								</div>
							</div>
						</div>
						<!-- SINGLE-FACALITY END -->
						<!-- SINGLE-FACALITY START -->
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-umbrella"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">HỔ TRỢ 16/24 </h3>
									
								</div>
							</div>
						</div>
						<!-- SINGLE-FACALITY END -->
						<!-- SINGLE-FACALITY START -->						
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-calendar"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">DAILY UPDATES</h3>
									
								</div>
							</div>
						</div>
						<!-- SINGLE-FACALITY END -->
						<!-- SINGLE-FACALITY START -->						
						
						<!-- SINGLE-FACALITY END -->					
					</div>
				</div>
			</div>
		</section>
		<!-- COMPANY-FACALITY END -->
		<!-- FOOTER-TOP-AREA START -->
		<section class="footer-top-area">
			<div class="container">
				<div class="footer-top-container">
					<div class="row">
						
						<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
							<!-- FOOTER-TOP-RIGHT-1 START -->
							<div class="footer-top-right-1">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 hidden-sm">
										<!-- STATICBLOCK START -->
										<div class="staticblock">
											<h2>Giới thiệu</h2>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s<br />when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
										</div>
										<!-- STATICBLOCK END -->
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
										<!-- STORE-INFORMATION START -->
										<div class="Store-Information">
											<h2>Thông tin cửa hàng</h2>
											<ul>
												<li>
													<div class="info-lefticon">
														<i class="fa fa-map-marker"></i>
													</div>
													<div class="info-text">
														<p>Địa chỉ: </p>
													</div>
												</li>
												<li>
													<div class="info-lefticon">
														<i class="fa fa-phone"></i>
													</div>
													<div class="info-text call-lh">
														<p>Liên hệ : 0123-456-789</p>
													</div>
												</li>
												<li>
													<div class="info-lefticon">
														<i class="fa fa-envelope-o"></i>
													</div>
													<div class="info-text">
														<p>Email : <a href="mailto:sales@yourcompany.com"><i class="fa fa-angle-double-right"></i> sales@yourcompany.com</a></p>
													</div>
												</li>
											</ul>
										</div>
										<!-- STORE-INFORMATION END -->
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
										<!-- GOOGLE-MAP-AREA START -->
										<div class="google-map-area">
											<div class="google-map">
												<div id="googleMap" style="width:100%;height:150px;"></div>
											</div>
										</div>
										<!-- GOOGLE-MAP-AREA END -->
									</div>
									<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 hidden-sm">
										<!-- STATICBLOCK START -->
										<div class="about-us-area">
									<h2>Vê chúng tôi</h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								</div>
								<!-- ABOUT-US-AREA END -->
								<!-- FLLOW-US-AREA START -->
								<div class="fllow-us-area">
									<h2>Kết nối</h2>
									<ul class="flow-us-link">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-rss"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
										<!-- STATICBLOCK END -->
									</div>
									
								</div>
							</div>
							<!-- FOOTER-TOP-RIGHT-1 END -->
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- FOOTER-TOP-AREA END -->
		<!-- COPYRIGHT-AREA START -->
		 
		<!-- COPYRIGHT-AREA END -->
		<!-- JS 
		===============================================-->
		<!-- jquery js -->
		<script src="{{asset('public/frontend/js/vendor/jquery-1.11.3.min.js')}}"></script>
		
		<!-- fancybox js -->
        <script src="{{asset('public/frontend/js/jquery.fancybox.js')}}"></script>
		
		<!-- bxslider js -->
        <script src="{{asset('public/frontend/js/jquery.bxslider.min.js')}}"></script>
		
		<!-- meanmenu js -->
        <script src="{{asset('public/frontend/js/jquery.meanmenu.js')}}"></script>
		
		<!-- owl carousel js -->
        <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
		
		<!-- nivo slider js -->
        <script src="{{asset('public/frontend/js/jquery.nivo.slider.js')}}"></script>
		
		<!-- jqueryui js -->
        <script src="{{asset('public/frontend/js/jqueryui.js')}}"></script>
		
		<!-- bootstrap js -->
        <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
		
		<!-- wow js -->
        <script src="{{asset('public/frontend/js/wow.js')}}"></script>		
		<script>
			new WOW().init();
		</script>

		<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>	
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 8,
				scrollwheel: false,
				center: new google.maps.LatLng(35.149868, -90.046678)
			  };
			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);
			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				map: map
			  });

			}
			google.maps.event.addDomListener(window, 'load', initialize);				
		</script>
		<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
		<!-- main js -->
        <script src="{{asset('public/frontend/js/main.js')}}"></script>
		<script type="text/javascript">
			function AddCart(id){
				$.ajax({
					url: 'add-cart/'+id,
					type: 'GET',
				}).done(function(response){
					
					$("#change-item-cart").empty();
					$("#change-item-cart").html(response);
					alertify.success('Đã thêm sản phẩm vào giỏ hàng');
				})
			}
			$("#change-item-cart").on("click",".cross-icon i", function(){
				$.ajax({
					url: 'delete-item-cart/'+$(this).data("id"),
					type: 'GET',
				}).done(function(response){
					
					$("#change-item-cart").empty();
					$("#change-item-cart").html(response);
					alertify.error('đã xóa sản phẩm ra giỏ hàng');
				})
			})
			function category(id){
				$.ajax({
					url: 'product-cate/'+id,
					type: 'GET',
				}).done(function(response){
					
					$("#category").empty();
					$("#category").html(response);
					
				})
			}
			
		</script>
		
    </body>

<!-- Nulled by http://www.baobinh.net by tieulonglanh -->
</html>