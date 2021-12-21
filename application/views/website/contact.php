
<div class = "contact-header" style = "background: url('<?=base_url()?>public/static/img/contact-banner.jpg');  background-repeat: no-repeat; background-size:cover; box-shadow: inset 0 0 0 4000px rgba(0,0,0,.5) !important; position: relative;">
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
          <div class="col-lg-4 col-md-4 col-sm-12">
            <h2>Let's Get In Touch</h2>
            <p>Got a licensing question? Or just want some great music recommendations? We’re always on hand to help. Drop us a line and we’ll get back to you as quickly as possible.</p>
          </div>
      </div>
     
    </div>
  </div>
</div>

<div class="contact">
  <div class = "container offer-container">
    <div class="contact-box">
      <div class="row text-center">
        <div class = "col-md-6 contact-email">
          <img src="<?=base_url()?>public/static/img/gmail.png" alt="">
          <h4>Reach Us by Email</h4>
          <p>You can write us at <a href = "mailto:support@premiumbeat.com">support@premiumbeat.com</a></p>
          <p>To submit music, go to <br><a href = "https://www.premiumbeat.com/new-artist">https://www.premiumbeat.com/new-artist</a></p>
          <p>We will respond as soon as possible</p>
        </div>
  
        <div class="col-md-6">
            <img src="<?=base_url()?>public/static/img/postal.png" alt="">
            <h4>Our Postal Address</h4>
            <p>PremiumBeat.com<br>Shutterstock Canada, ULC</p>
            <p><address>4398, Boul. Saint-Laurent, Suite 103<br>Montreal, Quebec H2W 1Z5<br> Canada</address></p>
        </div>
      </div>
    </div>
  </div>
</div>




<div class = "section-3 contact-section-3">
  <div class = "container">
     <div class = "row">
       <div class = "col-md-6">
         <img src = "<?=base_url()?>public/static/img/contact-questions.jpg" class = "img-fluid">
       </div>
       <div class="col-md-6">
         <h2>Common Questions</h2>
         <ul>
             <li><a href=""><i class="fas fa-greater-than"></i> How am I allowed to use the music I license from PremiumBeat?
             </a> </li>
             <li><a href=""><i class="fas fa-greater-than"></i> What is royalty free Music?</a> </li>
             <li><a href=""><i class="fas fa-greater-than"></i> Where can I obtain an invoice?
             </a> </li>
             <li><a href=""><i class="fas fa-greater-than"></i> Help! My payment was declined!
             </a> </li>
         </ul>
         <a href="" class = "btn-custom" style = "margin-top: 25px !important">See All Questions</a>
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
