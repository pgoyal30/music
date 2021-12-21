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
	<!-- RS5.0 Styles -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/album/assets/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/album/assets/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/album/assets/revolution/css/navigation.css">
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
				<a href = "<?=base_url()?>cart" id="mini-cart-toggle"><i class="fa fa-shopping-cart"></i> <span class="mini-cart-count"> <?=$this->cart->total_items()?></span></a>
				
				<button id="menu-toggle"><i class="fa fa-bars"></i></button>
				<!-- Mini Cart Widget -->
				
			</div>
		</div>
	</header>
	
	<!-- Site Content -->
	<div class="site-content">
		
		<!-- Main Slider -->
		<div class="rev_slider_wrapper">
		 	<div id="main-slider" class="rev_slider"  data-version="5.0">
		 		<ul>	
		 			<!-- Slide 1 -->
					<li data-transition="fadefromleft" data-thumbnail="<?=base_url()?>public/album/assets/img/slides/slide-1.jpg">
						<!-- Main Image -->
						<img src="<?=base_url()?>public/album/assets/img/slides/slide-1.jpg" alt="">


						<!-- Layer 1 -->
						<!-- <div class="tp-caption big-caption tp-resizeme"
							id="slide-01-layer-01"
				       		data-x="center" data-hoffset="0" 
				        	data-y="top" data-voffset="240"
				        	data-width="['none']"
							data-height="['none']"  
				        	data-transform_idle="o:1;"
 							data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
				        	data-start="700"
				        	data-responsive_offset="on"><span>K-Project in Amsterdam</span>
				        </div> -->

				        <!-- Layer 2 -->
				        <!-- <div class="tp-caption normal-caption bordered-caption tp-resizeme"
							id="slide-01-layer-02"
				       		data-x="center" data-hoffset="0" 
				        	data-y="top" data-voffset="295"
				        	data-width="['none']"
							data-height="['none']"  
				        	data-transform_idle="o:1;"
 							data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
				        	data-start="700"
				        	data-responsive_offset="on"><span>Don't miss The Second K-Project Public Show</span>
				        </div> -->

				        <!-- Layer 3 -->
				        <!-- <div class="tp-caption btn big" 
				       		id="slide-01-layer-03"
				       		data-x="center" data-hoffset="0" 
				        	data-y="top" data-voffset="370"
				        	data-width="['none']"
							data-height="['none']"
							data-transform_idle="o:1;"
 							data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"   
				        	data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"event-single.html"}]'
				        	data-start="900"
				        	data-responsive_offset="on">Learn More
				        </div> -->

					</li>
					<!-- Slide 1 -->
					<li data-transition="fadefromleft" data-thumbnail="<?=base_url()?>public/album/assets/img/slides/slide-2.jpg">
						<!-- Main Image -->
						<img src="<?=base_url()?>public/album/assets/img/slides/slide-2.jpg" alt="">


						<!-- Layer 1 -->
						<!-- <div class="tp-caption big-caption tp-resizeme"
							id="slide-01-layer-01"
				       		data-x="center" data-hoffset="0" 
				        	data-y="top" data-voffset="240"
				        	data-width="['none']"
							data-height="['none']"  
				        	data-transform_idle="o:1;"
 							data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
				        	data-start="700"
				        	data-responsive_offset="on"><span>Titan Slayer Best Concert</span>
				        </div> -->

				        <!-- Layer 2 -->
				        <!-- <div class="tp-caption normal-caption bordered-caption tp-resizeme"
							id="slide-01-layer-02"
				       		data-x="center" data-hoffset="0" 
				        	data-y="top" data-voffset="295"
				        	data-width="['none']"
							data-height="['none']"  
				        	data-transform_idle="o:1;"
 							data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
				        	data-start="700"
				        	data-responsive_offset="on"><span>A concert That we never forget</span>
				        </div> -->

				        <!-- Layer 3 -->
				        <!-- <div class="tp-caption btn big" 
				       		id="slide-01-layer-03"
				       		data-x="center" data-hoffset="0" 
				        	data-y="top" data-voffset="370"
				        	data-width="['none']"
							data-height="['none']"
							data-transform_idle="o:1;"
 							data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"   
				        	data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"event-single.html"}]'
				        	data-start="900"
				        	data-responsive_offset="on">Learn More
				        </div> -->

					</li>
		 		</ul>
		 	</div>
		</div>
		
		<!-- Single Album Player -->
		<div class="home-player-wrapper">
			<div class="container relative-pos">
				<div id="jquery_jplayer_1" class="jp-jplayer"></div> 
				<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
					<div class="jp-type-playlist">
						<div class="jp-gui jp-interface left-controls">
							<div class="jp-controls">
								<button class="jp-previous" tabindex='0'><i class="fa fa-backward"></i></button>
								<button class="jp-play" tabindex='0'><i class="fa fa-play"></i></button>
								<button class="jp-next" tabindex="0"><i class="fa fa-forward"></i></button>
							</div>
						</div>
						<div id="nowPlaying" class="nowPlaying">
							<span class="artist-name"></span>
							<span class="track-name"></span>
						</div>
						<div class="jp-gui jp-interface right-controls">
							<div class="jp-controls">
								<button class="jp-mute" tabindex="0"><i class="fa fa-volume-up"></i></button>
								<div class="jp-volume-bar">
									<div class="jp-volume-bar-value"></div>
								</div>
								<button id="playlist-toggle"><i class="fa fa-bars"></i></button>
							</div>
						</div>
						<div id="main-player-playlist" class="jp-playlist fulscreen-playlist">
							<div class="container playlist-container">
								<div class="col-lg-10 col-lg-offset-1 playlist-btn-container"><button id="close-playlist"><i class="fa fa-close"></i></button></div>
								<ul class="col-lg-10 col-lg-offset-1">
									<li>&nbsp;</li>
								</ul>
							</div>
							
						</div>
						<div class="jp-progress">
							<div class="jp-seek-bar">
								<div class="jp-play-bar"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Albums -->
		<div class="albums-home-wrapper">
			<div class="overlay-section">
				<div class="container section">
					<div class="section-title pdb-30">
						<h2>Latest Albums</h2>
						
					</div>
					<div class="row albums">
					  <?php
					  	foreach($latest as $la){
					  ?>
						<div class="col-sm-4">
							<div class="album-container bordered
							hover-effect">
								<div class="overlay"></div>
								<a href = "<?=base_url()?>track/<?=$la->id?>"><img  class="img-responsive" src="<?=base_url()?>upload/Product/<?=$la->photo?>" alt=""></a>
								<div class="info-block">
									<div class="album-title">
										<!-- <h1>Lacuna Coil</h1> -->
										<h3><a href = "<?=base_url()?>track/<?=$la->id?>"><?=$la->title?></a></h3>
									</div>
									
								</div>
							</div>
						</div>

					<?php
						  }	
					?>
						
					</div>
					<!-- <div class="btn-wrapper pdt-70">
						<a href="albums.html" class="btn big"><i class="fa fa-dot-circle-o"></i>All Albums</a>
					</div> -->
				</div>
			</div>
		</div>
	
		
	

		<div class="radio-schedule-home-wrapper">
			<div class="overlay-section">
				<div class="container section">
					<div class="section-title pdb-60">
						<h2>
							<span class="title-lines left"></span>
							Albums
							<span class="title-lines right"></span>
						</h2>
					</div>
					<!-- Tabs -->
					
					<div class="tab-content radio-shows">
						<!-- Tab 1 -->
						<div id="sunday" class="tab-pane fade in active">
							<div class="radio-shows-slider">
								<?php
									foreach($album as $a){
								?>
								<a href = "<?=base_url()?>track/<?=$a->id?>">
								<div class="blog-post-home radio-show">
									<header>
										<h3 class="single"><?=$a->title?></h3>
										<!-- <h5><i class="fa fa-clock-o"></i>06:00am - 10:30am</h5> -->
									</header>
									<div class="img-wrapper">
										<div class="overlay"></div>
										<img class="img-responsive" src="<?=base_url()?>upload/Product/<?=$a->photo?>" alt="">
									</div>
									<p><?php $desc = strip_tags($a->description); echo substr($desc, 0, 250);?></p>
								</div>
								</a>
								<?php
									}
								?>
								
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

	
		
		<!-- Recent Prodcuts -->
		<!-- <div class="recent-products-home-wrapper ">
			<div class="container section">
				<div class="section-title pdb-30">
					<h2>Recent Products</h2>
					<div class="sep"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas enim diam, placerat sed ligula ia maximus enim. Nulla tincidunt turpis enim, eu commodo elit blandit ut</p>
				</div>
				<div class="row recent-products">
					<div class="col-md-3 col-sm-6">
						<div class="product">
							<div class="bordered product-image">
								<img class="img-responsive" src="<?=base_url()?>public/album/assets/img/shop/img-1.jpg" alt="">
								<div class="overlay">
									<div class="info-block">
										<a href="#" class="button"><i class="fa fa-shopping-cart"></i>Add To cart</a>
									</div>
								</div>
							</div>
							<a href="shop-single.html"><h5 class="product-title">Neo T-Shirt</h5></a>
							<div class="meta">
								<h6 class="product-cat">T-Shirts</h6>
								<ul class="rating">
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
								</ul>
								<h5 class="price">$25.00</h5>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="product">
							<div class="bordered product-image">
								<img class="img-responsive" src="<?=base_url()?>public/album/assets/img/shop/img-2.jpg" alt="">
								<div class="overlay">
									<div class="info-block">
										<a href="#" class="button"><i class="fa fa-shopping-cart"></i>Add To cart</a>
									</div>
								</div>
							</div>
							<a href="shop-single.html"><h5 class="product-title">Gorogot - MTBFest</h5></a>
							<div class="meta">
								<h6 class="product-cat">Tickets</h6>
								<ul class="rating">
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star empty"></i></li>
								</ul>
								<h5 class="price">$25.00</h5>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="product">
							<div class="bordered product-image">
								<img class="img-responsive" src="<?=base_url()?>public/album/assets/img/shop/img-5.jpg" alt="">
								<div class="overlay">
									<div class="info-block">
										<a href="#" class="button"><i class="fa fa-shopping-cart"></i>Add To cart</a>
									</div>
								</div>
							</div>
							<a href="shop-single.html"><h5 class="product-title">Lacuna Coil - Comalies</h5></a>
							<div class="meta">
								<h6 class="product-cat">Albums</h6>
								<ul class="rating">
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star empty"></i></li>
								</ul>
								<h5 class="price">$25.00</h5>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="product">
							<div class="bordered product-image">
								<img class="img-responsive" src="<?=base_url()?>public/album/assets/img/shop/img-8.jpg" alt="">
								<div class="overlay">
									<div class="info-block">
										<a href="#" class="button"><i class="fa fa-shopping-cart"></i>Add To cart</a>
									</div>
								</div>
							</div>
							<a href="shop-single.html"><h5 class="product-title">Titan Slayer - Sisters of Furry</h5></a>
							<div class="meta">
								<h6 class="product-cat">Albums</h6>
								<ul class="rating">
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star empty"></i></li>
								</ul>
								<h5 class="price">$25.00</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		
		<!-- Contact -->
		<div class="contact-home-wrapper">
			<div class="overlay-section">
				<div class="container section">
					<div class="section-title pdb-60">
						<h2>Get in Touch</h2>
						<div class="sep"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas enim diam, placerat sed ligula ia maximus enim. Nulla tincidunt turpis enim, eu commodo elit blandit ut</p>
					</div>
					<div class="row contact-from">
						<form class="col-xs-12 general-form clearfix" action="http://futurethemes.net/templates/musicbase/classic/contact.php" method="post" name="contact" id="contact-form">
							<div class="field-group row">
								<div class="field col-sm-4">
									<h5>Your Name <span>*</span></h5>
									<input name="name" type="text" class="required" title="Please type your name." placeholder="Name...">
								</div>
								<div class="field col-sm-4">
									<h5>Your Email <span>*</span></h5>
									<input name="email" type="text" class="required" title="Please type your email." placeholder="Email...">
								</div>
								<div class="field col-sm-4">
									<h5>Your Subject</h5>
									<input name="Subject" type="text" placeholder="Subject...">
								</div>
							</div>
							<div class="field">
								<h5>Your Message <span>*</span></h5>
								<textarea name="message" cols="15" rows="5" class="required" placeholder="Message..." title="Please type a message."></textarea>
							</div>
							<button class="btn big"><i class="fa fa-paper-plane"></i>Send Message</button>
						</form>
					</div>
				</div>
			</div>
		</div>

	    

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
				<p class="col-sm-6">Copyright <?=date("Y")?> <a href="#">Premium Beats</a> | Allrights Reserved</p>
			</div>
		</div>
	</footer>

	<!-- Go to top button -->
	<div id="back-to-top" class="fa fa-arrow-circle-up"></div>
	<!-- <div id="pause-player" class="fa fa-play-circle"></div> -->

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
	<!-- RS5.0 Core JS Files -->
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<!-- END RS5.0 Core JS Files -->
	<script type="text/javascript" src="<?=base_url()?>public/album/assets/js/custom_js.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
    	"use strict";
		// First Player
    	var changeTrack = function changeTrack(event) {
	        var current = myPlaylist.current,
	        	playlist = myPlaylist.playlist;       
	        $.each(playlist, function (index, obj) {
	            if (index == current) {
	                $("#nowPlaying .artist-name").html(obj.artist);
	                $("#nowPlaying .track-name").html(obj.title);
	            }
	        });
	    };

		var myPlaylist = new jPlayerPlaylist({
			jPlayer: "#jquery_jplayer_1",
			cssSelectorAncestor: "#jp_container_1",
		}, [
			<?php
				$i = 1;
				foreach($latestdemo as $ld){
			?>
			{
				title: "<?php echo "Track {$i} - {$ld->title}"; ?>",
				mp3: "<?=base_url()?>upload/Demotrack/<?=$ld->trackname?>",
            },
			<?php
			    $i++;
				}
			?>
			
		],{
			playlistOptions: {
			    enableRemoveControls: true
			},
			swfPath: "<?=base_url()?>public/album/assets/jplayer/jplayer",
			supplied: "oga, mp3",
			wmode: "window",
			useStateClassSkin: true,
			autoBlur: false,
			smoothPlayBar: false,
			keyEnabled: true,
			size: {
                width: "120px",
                height: "120px"
            },
            ready: changeTrack,
            play: function(event) {
            	changeTrack();
            	var $mythis = $(this);
            	$mythis.removeClass('spin-disk');
		    	setTimeout( function() { $mythis.addClass('spin-disk'); }, 100);
		    },
		    pause: function(event) {
		    	$(this).removeClass('spin-disk');
		    } 
		});
	});//end .ready
	</script>

</body>
</html>
