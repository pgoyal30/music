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
                <div class="container">
                    
                      
                        <h1 class="mt-4">Whitelist Status</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>Website/index">Home</a></li>
                            <li class="breadcrumb-item active">Whitelist Status</li>
                        </ol>
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="whitelist-table" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <th>S.No</th>
                                                <th>Id</th>
                                                <th>Channel Name</th>
                                                <th>Channel Url</th>
                                                <th>Links</th>
											                        	<th>Track Id</th>
                                                <th>Platform</th>
												
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if(count($whitelist) > 0){
                                            echo "<tbody>";
                                            $i = 1;
                                            foreach($whitelist as $l){
                                        ?>
                                        <tr>
                                                <td><?=$i?></td>
                                                <td><?=$l->wid?></td>
                                                <td><?php
                                                    $nameArr = explode(",", $l->channelname);
                                                    echo "<ul>";
                                                    foreach($nameArr as $name){
                                                        echo "<li>{$name}</li>";
                                                    }
                                                    echo "</ul>";
                                                ?></td>

                                               <td><?php
                                                    $urlArr = explode(",", $l->channelurl);
                                                    echo "<ul>";
                                                    foreach($urlArr as $url){
                                                        echo "<li>{$url}</li>";
                                                    }
                                                    echo "</ul>";
                                                ?></td>


                                                <td>
													<?php
														$links = explode(",", $l->links);
														
														echo "<ul>";
														foreach($links as $link){
															echo "<li>{$link}</li>";
														}	
														echo "</ul>";

													?>
												</td>
												<td><?=$l->trackuid?></td>
                                                <td>
												<?php
														$platforms = explode(",", $l->platform);
														
														echo "<ul>";
														foreach($platforms as $platform){
															echo "<li>{$platform}</li>";
														}	
														echo "</ul>";

													?>
													
												</td>
                                               
												<td>
													<?php
														if($l->status == 0){
															echo "Approved";
														}elseif($l->status == 1){
															echo "Disapprove";
														}elseif($l->status == 2){
															echo "Rejected";
														}elseif($l->status == 3){
															echo "Waiting for confirmation";
														}
													?>
													
												</td>
                                              
                                        </tr>
                                        
                                        <?php
                                            $i++;
                                            }
                                            echo "</tbody>";
                                        }
                                        ?>
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
    </main>
