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
				<a href = "<?=base_url()?>cart" id="mini-cart-toggle"><i class="fa fa-shopping-cart"></i> <span class="mini-cart-count"> <?=$this->cart->total_items()?></span></a>
				
				<button id="menu-toggle"><i class="fa fa-bars"></i></button>
				<!-- Mini Cart Widget -->
				
			</div>
		</div>
	</header>

	<div class="site-content">
		
		<!-- Page Header -->
		<div class="page-header">
			<div class="overlay-section">
				<div class="container page-header-section">
					<h1 class="page-title"><?=$track->title?></h1>
				</div>
			</div>
		</div>


		<!-- Album Single -->
		<div class="album-single-page-wrapper">
			<div class="container section">
				<div class="row album-single">
					<h2 class="album-name col-xs-12"><?=$track->title?></h2>
					<div class="col-md-4 col-sm-5 clearfix">
						<div class="bordered">
							<img src="<?=base_url()?>upload/Product/<?=$track->photo?>" alt="" class="img-responsive">
						</div>
						<div class="description">
							<!-- <h4 class="title">Album Info</h4>
							<ul class="meta">
								<li class="clearfix"><span>Artist:</span><span>Titan Slayer</span></li>
								<li class="clearfix"><span>Release Date:</span><span>20 Jully, 2016</span></li>
								<li class="clearfix"><span>Genre:</span><span>Trance, Vocal, Uplifiting</span></li>
								<li class="clearfix"><span>Produced by:</span><span>Future Studios</span></li>
							</ul> -->
							<div class="buy clearfix">
								<h4 class="price">Price: $<?=$track->price1?></h4>
								<a href="<?=base_url()?>Website/add_cart/<?=$track->id?>/<?=$track->price1?>" class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-sm-7">
						<div class="default-player">
							<div id="jquery_jplayer_2" class="jp-jplayer"></div>
							<div id="jp_container_2" class="jp-audio" role="application" aria-label="media player">
								<div class="jp-type-playlist">
									<div class="jp-gui jp-interface_2">
										<div class="player-bar">
											<div class="jp-controls">
												<button class="jp-previous" tabindex='0'><i class="fa fa-backward"></i></button>
												<button class="jp-play" tabindex='0'><i class="fa fa-play"></i></button>
												<button class="jp-next" tabindex="0"><i class="fa fa-forward"></i></button>
												<button class="jp-mute" tabindex="0"><i class="fa fa-volume-up"></i></button>
											</div>
											<div id="nowPlaying_2" class="nowPlaying">
												<span class="artist-name"></span>
												<span class="track-name"></span>
											</div>
											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div class="jp-play-bar"></div>
												</div>
											</div>
										</div>
									</div>
									<div id="main-player-playlist-2" class="jp-playlist">
										<ul>
											<li class="clearfix">&nbsp;</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="description">
							<h4 class="title">Description</h4>
							<p><?=$track->description?></p>
						</div>
					</div>
				</div>
				<div class="row similar-albums">
					<h3 class="col-sm-12 title">Latest Albums</h3>
					<?php
						foreach($latest as $lt){
					?>
					<div class="col-sm-4">
						<a href="<?=base_url()?>track/<?=$lt->id?>">
							<div class="similar-album bordered hover-effect">
								<div class="info-block">
									<h4><?=$lt->title?></h4>
									<!-- <h5>K Project</h5> -->
								</div>
								<img src="<?=base_url()?>upload/Product/<?=$lt->photo?>" alt="" class="img-responsive">
							</div>
						</a>
					</div>
					<?php
						}
					?>
					
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
				<p class="col-sm-6">Copyright 2021 <a href="#">Premium Beats</a> | Allrights Reserved</p>
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
	<script type="text/javascript">
	jQuery(document).ready(function($) {
    	"use strict";
		// Second Player
		var changeTrack2 = function changeTrack(event) {
	        var current = myPlaylist_2.current,
	        	playlist = myPlaylist_2.playlist;       
	        $.each(playlist, function (index, obj) {
	            if (index == current) {
	                $("#nowPlaying_2 .artist-name").html(obj.artist);
	                $("#nowPlaying_2 .track-name").html(obj.title);
	            }
	        });
	    };
		
		var myPlaylist_2 = new jPlayerPlaylist({
			jPlayer: "#jquery_jplayer_2",
			cssSelectorAncestor: "#jp_container_2",
		}, [
			// This playlist doesn't require poster image
			<?php
				$i = 1;
				foreach($demotrack as $dt){
			?>
			{
				title: "<?php echo "Demo Track - {$i}"; ?>",
				mp3: "<?=base_url()?>upload/Demotrack/<?=$dt->demotrack?>",
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
            ready: changeTrack2,
		    play: changeTrack2,
		});

	});//end .ready
	</script>

</body>

</html>
