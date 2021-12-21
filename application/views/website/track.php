<div class="audio-player text-center" style = "background-color: #F1F3F4;">
	<audio controls> <source src = "" autoplay></audio>
</div>

<div class = "header" >
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?=base_url()?>Website/index">Premium Beats</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Music</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
        </ul>
        <div class="d-flex">
         <ul class = "navbar-nav">
           <li class="nav-item"><a href="<?=base_url()?>Welcome/register" class = "nav-link">Sign Up</a></li>
           <li class="nav-item"><a href="<?=base_url()?>Welcome/login" class = "nav-link">Login</a></li>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              English
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Punjabi</a></li>
              <li><a class="dropdown-item" href="#">Hindi</a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="#" class="nav-link">License</a></li>
          <li class="nav-item"><a href="#" class="nav-link">FAQ</a></li>
          <li class="nav-item"><a href="#" class="nav-link">License</a></li>
          <li class="nav-item cart-bar" ><a href="<?=base_url()?>Website/cart" class="nav-link" style = "position: relative"><i class="fas fa-shopping-cart"></i>
					<span class = "cart-item">
						<?php 
						if(isset($_SESSION['cart'])){
							 echo count($_SESSION['cart']); 
							}else{
								 echo 0; 
							} 
						?>
					</span>
				</a></li>
         </ul>
      </div>
    </div>
  </nav>
</div>


<div id ="banner">
   <div class="container-fluid">
      <div class="row">
		   <div class="col-md-8">
			   <div class="latest-release">
				   <h1>Latest Release</h1>
				</div>

				
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="<?=base_url()?>public/static/img/trackBanner.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="<?=base_url()?>public/static/img/trackBanner2.jpg" class="d-block w-100" alt="...">
						</div>
				    </div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
					</button>
				</div>
              
			</div>

			<div class="col-md-4">
				<img src="<?=base_url()?>public/static/img/product-img2.jpg" alt="" class = "img-fluid h-50 h-100 d-none d-md-block">
			</div>
            
		</div>
	</div>
</div>

<div class="recent-release">
    <div class="container">
        <h2 class = "my-3">Recent Release</h2>
		<?php
			if(count($track) > 0){
		?>
			
        <div class="row text-center">
			<?php
				$i = 1;
				foreach($track as $t){
					if($i >= 12){
						break;
					}
			?>
				
            <div class = "col-lg-3 col-md-4 col-sm-6 col-xs-10  my-3 px-5">
				<a href = "<?=base_url()?>Website/track_detail/<?=$t->id?>">
                <img src="<?=base_url()?>upload/Product/<?=$t->photo?>" alt="" class = "img-fluid">
                <p><strong><?=$t->title?></strong></p>
				</a>
                <!-- <p>by: <span class = "text-primary">Loopmasters</span></p> -->
            </div>
			<?php
				$i++;
				}
			?>

            <!-- <div class = "col-lg-3 col-md-4  col-sm-6 col-xs-10 my-3 p-3">
                <img src="<?=base_url()?>public/static/img/album.jpg" alt="" class = "img-fluid">
                <p><strong>Robbie Rivera - Demo House</strong></p>
                <p>by: <span class = "text-primary">Loopmasters</span></p>
            </div>

            <div class = "col-lg-3 col-md-4  col-sm-6 col-xs-10  my-3 p-3">
                <img src="<?=base_url()?>public/static/img/album.jpg" alt="" class = "img-fluid">
                <p><strong>Robbie Rivera - Demo House</strong></p>
                <p>by: <span class = "text-primary">Loopmasters</span></p>
            </div>

            <div class = "col-lg-3 col-md-4 col-sm-6 col-xs-10  my-3 p-3">
                <img src="<?=base_url()?>public/static/img/album.jpg" alt="" class = "img-fluid">
                <p><strong>Robbie Rivera - Demo House</strong></p>
                <p>by: <span class = "text-primary">Loopmasters</span></p>
            </div>

            <div class = "col-lg-3 col-md-4 col-sm-6 col-xs-10  my-3 p-3">
                <img src="<?=base_url()?>public/static/img/album.jpg" alt="" class = "img-fluid">
                <p><strong>Robbie Rivera - Demo House</strong></p>
                <p>by: <span class = "text-primary">Loopmasters</span></p>
            </div>

            <div class = "col-lg-3 col-md-4  col-sm-6 col-xs-10 my-3 p-3">
                <img src="<?=base_url()?>public/static/img/album.jpg" alt="" class = "img-fluid">
                <p><strong>Robbie Rivera - Demo House</strong></p>
                <p>by: <span class = "text-primary">Loopmasters</span></p>
            </div>

            <div class = "col-lg-3 col-md-4  col-sm-6 col-xs-10  my-3 p-3">
                <img src="<?=base_url()?>public/static/img/album.jpg" alt="" class = "img-fluid">
                <p><strong>Robbie Rivera - Demo House</strong></p>
                <p>by: <span class = "text-primary">Loopmasters</span></p>
            </div>

            <div class = "col-lg-3 col-md-4 col-sm-6 col-xs-10  my-3 p-3">
                <img src="<?=base_url()?>public/static/img/album.jpg" alt="" class = "img-fluid">
                <p><strong>Robbie Rivera - Demo House</strong></p>
                <p>by: <span class = "text-primary">Loopmasters</span></p>
            </div>

            <div class = "col-lg-3 col-md-4 col-sm-6 col-xs-10  my-3 p-3">
                <img src="<?=base_url()?>public/static/img/album.jpg" alt="" class = "img-fluid">
                <p><strong>Robbie Rivera - Demo House</strong></p>
                <p>by: <span class = "text-primary">Loopmasters</span></p>
            </div>

            <div class = "col-lg-3 col-md-4  col-sm-6 col-xs-10 my-3 p-3">
                <img src="<?=base_url()?>public/static/img/album.jpg" alt="" class = "img-fluid">
                <p><strong>Robbie Rivera - Demo House</strong></p>
                <p>by: <span class = "text-primary">Loopmasters</span></p>
            </div>

            <div class = "col-lg-3 col-md-4  col-sm-6 col-xs-10  my-3 p-3">
                <img src="<?=base_url()?>public/static/img/album.jpg" alt="" class = "img-fluid">
                <p><strong>Robbie Rivera - Demo House</strong></p>
                <p>by: <span class = "text-primary">Loopmasters</span></p>
            </div>

            <div class = "col-lg-3 col-md-4 col-sm-6 col-xs-10  my-3 p-3">
                <img src="<?=base_url()?>public/static/img/album.jpg" alt="" class = "img-fluid">
                <p><strong>Robbie Rivera - Demo House</strong></p>
                <p>by: <span class = "text-primary">Loopmasters</span></p>
            </div> -->


        </div>

		<?php
			}
		?>
    </div>
</div>


<div class="recent-release">
    <div class="container">
        <h2 class = "my-3">All Tracks</h2>
		<?php
			if(count($track) > 0){
		?>
			
        <div class="row text-center">
			<?php
				
				foreach($track as $t){
					
			?>
				
            <div class = "col-lg-3 col-md-4 col-sm-6 col-xs-10  my-3 px-5">
				<a href = "<?=base_url()?>Website/track_detail/<?=$t->id?>">
                <img src="<?=base_url()?>upload/Product/<?=$t->photo?>" alt="" class = "img-fluid">
                <p><strong><?=$t->title?></strong></p>
				</a>
                <!-- <p>by: <span class = "text-primary">Loopmasters</span></p> -->
            </div>
			<?php
				$i++;
				}
			?>

           

           

			</div>

		<?php
			}
		?>
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

