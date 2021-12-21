<div id="layoutSidenav_content">
           <main>
                    
                
                    <div class="container-fluid">
                        <h1 class="mt-3 mb-5 text-center">Add Link</h1>
                        
                           <div>
                                <form action = "<?=base_url()?>Welcome/addlink"  method = "POST" enctype = "multipart/form-data">

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
																<option value = "<?=$track->id?>"><?=$track->trackid?></option>
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
