
<div class = "contact-header" style = "background: url('<?=base_url()?>public/static/img/about-banner.jpg');  background-repeat: no-repeat; background-size:cover; box-shadow: inset 0 0 0 4000px rgba(0,0,0,.5) !important; position: relative;">
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?=base_url()?>index">Premium Beats</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link active" aria-current="page" href="#">Music</a>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link" href="#">Blog</a>-->
          <!--</li>-->
          <li class = "nav-item"><a class = "nav-link" href = "<?=base_url()?>index">Home</a></li>
           <li class = "nav-item"><a class = "nav-link" href = "<?=base_url()?>track">Albums</a></li>
            <li class = "nav-item"><a class = "nav-link" href = "<?=base_url()?>about">About</a></li>
            <li class = "nav-item"><a class = "nav-link" href = "<?=base_url()?>contact">Contact</a></li>
        </ul>
        <div class="d-flex">
         <ul class = "navbar-nav">
           <?php
              if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
						?>
						<li class="nav-item"><a href="javascript:void(0)" class = "nav-link" id = "register">Sign Up</a></li>
            <li class="nav-item"><a href="javascript:void(0)" class = "nav-link" id = "login">Login</a></li> 
						<?php
							}
						?>
						<?php
							if(isset($_SESSION['id']) && isset($_SESSION['email'])){
						?>
						 <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						   <li><a class="dropdown-item" href = "<?=base_url()?>order">Orders</a></li>
              <li><a class="dropdown-item" href="<?=base_url()?>profile">Profile</a></li>
			       <li><a class="dropdown-item" href = "<?=base_url()?>links">Add Links</a></li>
			       <li><a class="dropdown-item" href = "<?=base_url()?>whitelist">Whitelist Status</a></li>
              <li><a class="dropdown-item" href="<?=base_url()?>change-password">Change Password</a></li>
			        <li><a class = "dropdown-item" href = "<?=base_url()?>Website/logout">Logout</a></li>
            </ul>
          </li>
						<?php
							}
						?>
          <!-- <li class="nav-item dropdown">-->
          <!--  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
          <!--    English-->
          <!--  </a>-->
          <!--  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
          <!--    <li><a class="dropdown-item" href="#">Punjabi</a></li>-->
          <!--    <li><a class="dropdown-item" href="#">Hindi</a></li>-->
          <!--  </ul>-->
          <!--</li>-->
          <!--<li class="nav-item"><a href="#" class="nav-link">License</a></li>-->
          <!--<li class="nav-item"><a href="#" class="nav-link">FAQ</a></li>-->
          <!--<li class="nav-item"><a href="#" class="nav-link">License</a></li>-->
          <li class="nav-item cart-bar" ><a href="<?=base_url()?>cart" class="nav-link" style = "position: relative"><i class="fas fa-shopping-cart"></i>
					<span class = "cart-item">
						<?php 
						echo $this->cart->total_items();
				// 		if(isset($_SESSION['cart'])){
				// 			 echo count($_SESSION['cart']); 
				// 			}else{
				// 				 echo 0; 
				// 			} 
						?>
					</span>
				</a></li>
         </ul>
      </div>
    </div>
  </nav>

  <div class = "contact-banner">
    <div class="container">
      <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>About Us</h2>
            <p>PremiumBeat, a Shutterstock company, provides exclusive, high-quality tracks and sound effects for use in new and traditional media projects, including videos, films, apps, games, and television programming.</p>
          </div>
      </div>
     
    </div>
  </div>
</div>

<div class="contact">
  <div class = "container offer-container">
    <div class="contact-box">
      <div class="row text-center">
        <div class = "col-md-4 p-4 contact-email">
          <img src="<?=base_url()?>public/static/img/about-music-2.png" alt="">
          <h4>What We Offer</h4>
          <p>Our library of royalty free stock music gives you the polished feel of the big production houses. With an epic collection that spans multiple styles and genres, we’ve got your soundtrack sorted.</p>
        </div>
  
        <div class="col-md-4 p-4 contact-email">
            <img src="<?=base_url()?>public/static/img/about-music-1.png" alt="">
            <h4>How It Works</h4>
            <p>We’ve simplified music licensing. Browse our tracks, preview, and purchase a license online with a credit card or Paypal account. Then, download your music immediately. Our licenses are honored worldwide and are valid in perpetuity.</p>
        </div>

		<div class="col-md-4 p-4 contact-email">
            <img src="<?=base_url()?>public/static/img/about-music-3.png" alt="">
            <h4>Who We Are</h4>
            <p>We’re an international team of composers, designers, programmers, and writers with a passion for music. It’s our mission to share this passion with you through world-class customer service and the highest quality royalty free tracks.</p>
        </div>
      </div>
    </div>
  </div>
</div>




<div class = "section-3 contact-section-3">
  <div class = "container">
     <div class = "row">
       <div class = "col-md-6">
         <img src = "<?=base_url()?>public/static/img/about-1.jpg" class = "img-fluid">
       </div>
       <div class="col-md-6">
         <h2 style = "margin-bottom: 20px;">Part of the Shutterstock Family</h2>
        <p>
		Shutterstock, a global technology company, has created the largest and most vibrant two-sided marketplace where professionals can license content - including images, videos, and music - and access innovative tools that power the creative process.
		</p>

		<p>
		Along with PremiumBeat, the company has expanded its portfolio to include Bigstock, a value-oriented stock media agency; Rex Features, a premier source of editorial images for the world’s media; and Offset, a high-end image collection.

		</p>
       </div>
     </div>
  </div>
</div>

<div class="section-4" style = "background: url('<?=base_url()?>public/static/img/about-2.jpg'); background-size: cover; padding: 50px 0; color: white;">
	<div class = "container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
			<h2>Passionate About Our Work</h2>
			<p>PremiumBeat is more than just a website. It’s a team of hard working programmers, designers, and music lovers. It’s a group of world-class composers who put their hearts and souls into the music they create. And it’s you - our passionate and creative clients.</p>
			<p>We aim to provide you with the best possible experience with high-quality music, simple licensing, and a commitment to world-class support.</p>
		</div>
	</div>
	</div>
</div>


<div class="section-4" style = "background: url('<?=base_url()?>public/static/img/about-3.jpg'); background-size: cover; padding: 110px 0; color: white; box-shadow: inset 0 0 0 4000px rgba(0,0,0,.5) !important;">
	<div class = "container">
	<div class="row">
		<div class="col-12 text-center">
			<h2 style = "font-size: 50px;">World-Class,<br>
             Professional Composers</h2>
			<p class = "px-5 mt-4">We’ve assembled a team of the world’s leading composers for film, video, and media. Coming from a range of eclectic backgrounds, PremiumBeat musicians are members of professional performing rights organizations including ASCAP, BMI, PRS, SESAC and SOCAN. We are honored to make their music available to you.</p>
		</div>
	</div>
	</div>
</div>

<div class = "section-3 contact-section-3">
  <div class = "container">
     <div class = "row">
       <div class = "col-md-6">
         <img src = "<?=base_url()?>public/static/img/about-4.jpg" class = "img-fluid">
       </div>
       <div class="col-md-6">
         <h2 style = "margin-bottom: 40px;">Handpicked Exculsive Music</h2>
        <p style = "font-size: 20px; line-height: 1.5;">
		We’re particular about the tracks and musicians we accept into our library. We hand-pick leading composers from around the world and select only their finest tracks. That way, we can be sure that all the music in our collection is high-quality and 100% exclusive.
		</p>

		<a href="#" class="btn-custom">Browse Our Music</a>
       </div>
     </div>
  </div>
</div>




<div class = "subscribiton" style = "background: url('<?=base_url()?>public/static/img/subscribtion-banner.jpg')">
  <div class="container subscribition-content">
    <h3>Never Miss a Beat</h3>
    <p>Get industry news, insights, and tips sent right to your inbox.</p>
    <input type="email" placeholder="Your Email *" id="" name = "email" class = "subscribe-email-box"> 
    <br>
    <input type = "submit" class = "btn-custom">
  </div>
</div>

<footer>
  <div class="container">
    <div class="footer-links">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <h3>General</h3>
          <ul>
            <li>Home</li>
            <li>Royalty-Free Music</li>
            <li>Music Genres</li>
            <li>Music Moods</li>
            <li>Music Instruments</li>
            <li>Artists</li>
            <li>Songs</li>
            <li>After Effects Templates</li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h3>General</h3>
          <ul>
            <li>Home</li>
            <li>Royalty-Free Music</li>
            <li>Music Genres</li>
            <li>Music Moods</li>
            <li>Music Instruments</li>
            <li>Artists</li>
            <li>Songs</li>
            <li>After Effects Templates</li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h3>General</h3>
          <ul>
            <li>Home</li>
            <li>Royalty-Free Music</li>
            <li>Music Genres</li>
            <li>Music Moods</li>
            <li>Music Instruments</li>
            <li>Artists</li>
            <li>Songs</li>
            <li>After Effects Templates</li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h3>General</h3>
          <ul>
            <li>Home</li>
            <li>Royalty-Free Music</li>
            <li>Music Genres</li>
            <li>Music Moods</li>
            <li>Music Instruments</li>
            <li>Artists</li>
            <li>Songs</li>
            <li>After Effects Templates</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-social-links">
      <div class="row">
        <div class="col-12 text-center">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></i></a>
        </div>
      </div>
    </div>

    <div class="copyright">
      <div class="row">
        <div class="col-12 text-center">
          <p>PremiumBeat.com copyright © 2005–2021 Shutterstock Canada, ULC</p>
           <p> All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
