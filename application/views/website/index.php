
<div class = "header" style = "background: url('<?=base_url()?>public/static/img/banner.jpg');">
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

  <div class = "banner">
    <div class="container">
      <h2>Score the Perfect Music</h2>
      <h4>Exclusive music library. Stress-free licensing.</h4>
      <input type = "text" placeholder = "Search by genre, mood, instrument, keyword..." name = "search" class = "search-bar">
    </div>
  </div>
</div>

<div class="offer">
  <div class = "container offer-container">
    <div class="offer-box">
      <div class="row">
        <div class = "col-md-5">
          <div class="offer-price">
            <img src="<?=base_url()?>public/static/img/music.png" alt="">
          <h4>GET 5 TRACKS <br> <span>PER MONTH FOR</span></h4>
          <span class = "price-dollar">$</span> <span class = "price">12.</span> <span class = "price-point">99</span> / Track
          <p>$64.5/month,billed monthly</p>
          </div>
        </div>
  
        <div class="col-md-7 offer-content">
          <h4 class = "subscribe-new">New</h4>
          <h2>Subscribe now and save over 70%</h2>
          <p>Get 5 tracks every month for just $12.99 each. That’s over 70% in savings. All downloads include full tracks, loops, stems, shorts, and Standard License.
          </p>
          <a href = "#" class = "btn-custom">Subscribe</a>
          <a href="#" class = "subscribe-detail-btn">See details</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="music-category">
  <div class="container">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Browse</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Collections</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Genres</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-mode-tab" data-bs-toggle="pill" data-bs-target="#pills-mode" type="button" role="tab" aria-controls="pills-mode" aria-selected="false">Modes</button>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class = "row">
          <div class = "col-md-4">
            <h3>Curated by Experts</h3>
            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>


          </div>

          <div class = "col-md-4">
            <h3>Curated by Experts</h3>
            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            
          </div>

          <div class = "col-md-4">
            <h3>Curated by Experts</h3>
            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            
          </div>


        </div>
      </div>

      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class = "row">
          <div class = "col-md-4">
            <h3>Curated by Experts</h3>
            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>


          </div>

          <div class = "col-md-4">
            <h3>Curated by Experts</h3>
            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            
          </div>

          <div class = "col-md-4">
            <h3>Curated by Experts</h3>
            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            
          </div>

          
        </div>
      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class = "row">
          <div class = "col-md-4">
            <h3>Curated by Experts</h3>
            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>


          </div>

          <div class = "col-md-4">
            <h3>Curated by Experts</h3>
            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            
          </div>

          <div class = "col-md-4">
            <h3>Curated by Experts</h3>
            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            
          </div>

          
        </div>
      </div>
      <div class="tab-pane fade" id="pills-mode" role="tabpanel" aria-labelledby="pills-mode-tab">
        <div class = "row">
          <div class = "col-md-4">
            <h3>Curated by Experts</h3>
            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>


          </div>

          <div class = "col-md-4">
            <h3>Curated by Experts</h3>
            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            
          </div>

          <div class = "col-md-4">
            <h3>Curated by Experts</h3>
            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
              </div>

              <div class="col-8">
                <h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
              </div>
            </div>

            
          </div>

          
        </div>
      </div>
    </div>
  </div>
</div>


<div class = "section-3">
  <div class = "container">
     <div class = "row">
       <div class = "col-md-6">
        <iframe height="315" width = "100%" src="https://www.youtube.com/embed/xBfBYfPNXqE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
       <div class="col-md-6">
         <h2>Real Music For Real Stories</h2>
         <p>With meticulous attention to detail, Evan MacDonald crafts cinematic music that is both evocative and timeless. Each composition is a call to write unique and sincere melodies that enhance the storytelling experience. By blending orchestral elements with organic soundscapes, he hopes to bring listeners on a journey inspiring them to meld their dreams with reality.</p>
         <a href="" class = "btn-custom" style = "margin-top: 25px !important">Browse Evan MacDonald’s Music</a>
       </div>
     </div>
  </div>

  <div class="container-fluid popular-music">
    <h2>Popular Music Searches</h2>
    <div class="row">
      <div class="col-lg-2 col-md-3 col-sm-6 mt-2">
        <ul>
          <li>Technology</li>
          <li>happy</li>
          <li>upbeat</li>
          <li>epic</li>
          <li>rock</li>
          <li>piano</li>
          <li>funny</li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 mt-2">
        <ul>
          <li>Technology</li>
          <li>happy</li>
          <li>upbeat</li>
          <li>epic</li>
          <li>rock</li>
          <li>piano</li>
          <li>funny</li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 mt-2">
        <ul>
          <li>Technology</li>
          <li>happy</li>
          <li>upbeat</li>
          <li>epic</li>
          <li>rock</li>
          <li>piano</li>
          <li>funny</li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 mt-2">
        <ul>
          <li>Technology</li>
          <li>happy</li>
          <li>upbeat</li>
          <li>epic</li>
          <li>rock</li>
          <li>piano</li>
          <li>funny</li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 mt-2">
        <ul>
          <li>Technology</li>
          <li>happy</li>
          <li>upbeat</li>
          <li>epic</li>
          <li>rock</li>
          <li>piano</li>
          <li>funny</li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 mt-2">
        <ul>
          <li>Technology</li>
          <li>happy</li>
          <li>upbeat</li>
          <li>epic</li>
          <li>rock</li>
          <li>piano</li>
          <li>funny</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class = "about">
  <div class = "container about-box">
    <div class = "row about-service">
      <div class = "col-md-6">
        <div class = "row">
          <div class = "col-md-6 col-sm-12 about-offer-box">
            <img src = "<?=base_url()?>public/static/img/music1.png">
            <h3>Exclusive Music</h3>
          </div>

          <div class = "col-md-6 col-sm-12 about-offer-box">
            <img src = "<?=base_url()?>public/static/img/music2.png">
            <h3>Play Once, Use Forever!</h3>
          </div>

          <div class = "col-md-6 col-sm-12 about-offer-box">
            <img src = "<?=base_url()?>public/static/img/badge.png">
            <h3>100% Copyright Clear</h3>
          </div>

          <div class = "col-md-6 col-sm-12 about-offer-box">
            <img src = "<?=base_url()?>public/static/img/film.png">
            <h3>Safe for Youtube & Vimeo</h3>
          </div>


        </div>
      </div>

      <div class = "col-md-6 about-service-content">
        <h3>Incredible Music.</h3>
        <h3>Simple Licenses.</h3>
        <p>Our curated library of royalty free music gives you the polished feel of the big production houses.
          Plus, all our tracks are 100% exclusive and copyright clear.</p>
          <a href = "#" class = "btn-custom">Discover our Licenses</a>
      </div>
    </div>

    <div class = "trusted">
      <div class = "row">
        <div class = "col-md-6 trusted-content">
          <p>Trusted by the World’s Best Companies and Creative Professionals.</p>
        </div>
        <div class="col-md-6 trusted-company">
          <div class = 'row'>
            <div class="col-lg-4 col-md-6  trusted-company-box">
              <img src="<?=base_url()?>public/static/img/company1.svg" alt="">
            </div>
            <div class="col-lg-4 col-md-6  trusted-company-box">
              <img src="<?=base_url()?>public/static/img/company1.svg" alt="">
            </div>
            <div class="col-lg-4 col-md-6  trusted-company-box">
              <img src="<?=base_url()?>public/static/img/company1.svg" alt="">
            </div>
            <div class="col-lg-4 col-md-6  trusted-company-box">
              <img src="<?=base_url()?>public/static/img/company1.svg" alt="">
            </div>
            <div class="col-lg-4 col-md-6  trusted-company-box">
              <img src="<?=base_url()?>public/static/img/company1.svg" alt="">
            </div>
            <div class="col-lg-4 col-md-6  trusted-company-box">
              <img src="<?=base_url()?>public/static/img/company1.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
 


</div>

<div class = "subscribiton" style = "background: url('<?=base_url()?>public/static/img/subscribtion-banner.jpg');">
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

