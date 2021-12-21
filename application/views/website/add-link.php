<div>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?=base_url()?>Website/index">Premium Beats</a>
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

</div>


           <main>
                    
                
                    <div class="container-fluid">
                        <h1 class="mt-3 mb-5 text-center">Add Link</h1>
                        
                           <div>
                                <form action = "<?=base_url()?>Website/addlink"  method = "POST" enctype = "multipart/form-data">

								        <div class = "form-group">
											<label for="platform">Platform</label>
											<select name="platform[]" id="platform" class="form-control" required>
												<option value="">--Select Platform--</option>
												<option value="Youtube">Youtube</option>
												<option value="Facebook">Facebook</option>
												<option value="Instagram">Instagram</option>
											</select>
                                        </div>

										<div class="form-group">
											<label for="channelName">Channel Name</label>
											<input type="text" name="channelname[]" id="channelname" class = "form-control" required>
										</div>

										<div class="form-group">
											<label for="channelName">Channel Url</label>
											<input type="text" name="channelurl[]" id="channelurl" class = "form-control" required>
										</div>


										<div class="form-group">
											<label for="url">Add Url</label>
											<input type="text" name="url[]" id="url" class = "form-control" required>
										</div>


										
										<div class = "more-items">

                                        </div>

										<div class="row my-3">
											<div class="col-12">
											<button type = "button" id = "more-links" class = "btn btn-primary">+</button>
											</div>
										</div>

										
										<div class="form-group">
											<label for="track">Select Track</label>
											<?php

													
											?>
											<select name="trackid" id="track" class = "form-control" required>
											<option value="">--Select Track Id --
													
													</option>
										   <?php
											if(count($tracks) > 0){
													foreach($tracks as $track){
											?>
																<option value = "<?=$track->tid?>"><?=$track->trackid?></option>
											<?php
													}
												}
															
											?>
												
											</select>
										</div>
                                        

										<input type = "reset" value = "Reset" class = "btn btn-danger">
                                        <input type="submit" value="Submit" class = "btn  btn-primary" id = "submit" name = "submit">
                                </form>
                           </div>
                        
                        
                            
                        
                    </div>
                </main>
