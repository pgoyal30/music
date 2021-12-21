<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Premium Beats</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/ico" href="<?=base_url()?>public/album/assets/img/favicon.ico" />
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700%7cSource+Sans+Pro:400,600,700" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/album/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/album/assets/css/nivo-lightbox.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/album/assets/owl-carousel/assets/owl.carousel.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/album/assets/css/style.css">
</head>
<body>
	
	<!-- Header -->
	<header id="site-header">
		<div class="container nav-wrapper">
			<!-- Logo -->
			<div class="site-branding">
				<a href="<?=base_url()?>">
					<span class="first-word colored">Premium</span>
					<span class="second-word">Beats</span>
				</a>
			</div>
			<!-- Main Mneu -->
			<nav id="site-navigation" class="site-navigation">
				<ul id="main-menu">
					    <li>
							<a href="<?=base_url()?>">Home</a>
						</li>
						<li>
							<a href="<?=base_url()?>track">Albums</a>
						</li>
						
						<li>
							<a href="<?=base_url()?>about">About US</a>
						</li>
						<li><a href="<?=base_url()?>contact">Contact</a></li>
				</ul>
			</nav>
			<!-- Extra Nav -->
			<div class="extra-nav">
				<a href = "<?=base_url()?>cart" id="mini-cart-toggle"><i class="fa fa-shopping-cart"></i> <span class="mini-cart-count">
				   <?=$this->cart->total_items()?>
				 </span></a>
				
				<button id="menu-toggle"><i class="fa fa-bars"></i></button>
				<!-- Mini Cart Widget -->
				
			</div>
		</div>
	</header>
	
	<!-- Site Content -->
	<div class="site-content">
		
		<!-- Page Header -->
		<div class="page-header">
			<div class="overlay-section">
				<div class="container page-header-section">
					<h1 class="page-title">Cart</h1>
				</div>
			</div>
		</div>
		
		<!-- Cart Page -->
		<div class="cart-page-wrapper">
			<div class="container section">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">	
						<div class="top-bar">
							<table class="cart">
								<thead>
									<tr>
										<th class="product-thumbnail">#</th>
										<th class="product-name">Product Name</th>
										<th class="product-price">Price</th>
										<th></th>
									</tr>
								</thead>
							
								<tbody>
									<?php
										$cart = $this->cart->contents();
										$total = 0;
										$i = 1;
										 foreach($cart as $cartitem){
										     $total = $total + $cartitem['price'];
											
									?>
									<tr class="cart-item">
										<td class="product-thumbnail"><?=$i?></td>
										<td class="product-name"><a href="<?=base_url()?>track/<?=$cartitem['id']?>"><?=$cartitem['name']?></a></td>
										<td class="product-price"><span><?=$cartitem['price']?></span></td>
										
										
										<td class="product-remove"><a href="<?=base_url()?>Website/removeitem/<?=$cartitem['rowid']?>" class="fa fa-close"></a></td>
									</tr>

									<?php
									        $i++;
											 
										 }
									?>


									
									<tr>
										<td colspan="6" class="actions">
											<div class="coupon clearfix">
												Total
											</div>
											<div class="update">
											   <?=$total?>
											</div>
										</td>
									</tr>
								</tbody>

								<!-- <tfoot>
									<tr>
										<th class="product-subtotal">Total</th>
										<th class="product-price">$450</th>
										<th class="product-remove">&nbsp;</th>
									</tr>
								</tfoot> -->
								

							</table>
							
						</div>
					</div>

					<!-- <div class="col-md-12">
						<button class="btn big" style = "float: right;">Checkout</button>
					</div> -->
				</div>
			</div>
		</div>
		
		<!-- Newsletter  -->
		

	</div>
	
	<!-- Footer -->
	<footer id="colophon">
		<div class="container">
			<div class="row">
				<div class="widget col-sm-4 about-widget ">
					<h4 class="widget-title">About US</h4>
					<div class="widget-content">
						<p>Lorem ipsum dolor sit amet, consectetur  adipiscing eli esent massa libero, tristiq ue placerat sapien in, tincidmollis dui. Curabitur gravida felis turpis, non malesua est placerat eget. Cras vel fringilla mi. </p>
						<ul class="social-networks bg clearfix">
							<li><a class="fa fa-facebook" href="http://facebook.com/"></a></li>
							<li><a class="fa fa-facebook" href="http://plus.google.com/"></a></li>
							<li><a class="fa fa-facebook" href="http://twitter.com/"></a></li>
							<li><a class="fa fa-facebook" href="http://spotify.com/"></a></li>
							<li><a class="fa fa-facebook" href="http://soundcloud.com/"></a></li>
							<li><a class="fa fa-facebook" href="http://youtube.com/"></a></li>
						</ul>
					</div>
				</div>
				<div class="widget col-sm-4 twitter-widget">
					<h4 class="widget-title">Twitter</h4>
					<div id="twitter-feed"></div>
				</div>	
				<div class="widget col-sm-4 instagram-widget">
					<h4 class="widget-title">Instagram</h4>
					<ul id="footer-insta" class="clearfix"></ul>
				</div>
			</div>
		</div>
		<div class="footer-bar">
			<div class="container relative-pos z-index">
				<p class="col-sm-6">Copyright 2016 <a href="#">Premium Beats</a> | Allrights Reserved</p>
			</div>
		</div>
	</footer>

	<!-- Go to top button -->
	<div id="back-to-top" class="fa fa-arrow-circle-up"></div>
	<div id="pause-player" class="fa fa-play-circle"></div>

	<!-- Scripts -->
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/js/jquery2.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/jplayer/jplayer/jquery.jplayer.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/jplayer/add-on/jplayer.playlist.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/owl-carousel/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/js/countdown.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/js/twitterFetcher.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/js/instafeed.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/js/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/js/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/js/nivo-lightbox.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/js/mc.validate.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/js/custom_js.js"></script>
</body>
</html>
