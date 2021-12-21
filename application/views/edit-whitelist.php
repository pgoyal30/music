<div id="layoutSidenav_content">
           <main>
                    
                
                    <div class="container-fluid">
                        <h1 class="mt-3 mb-5 text-center">Edit White List Status</h1>
                        
                           <div>
                                <form action = "<?=base_url()?>AdminController/edit_whitelist/<?=$status->wid?>" id = "user-info" method = "POST">

                                        
										<div class = "form-group">
											<label for="Status">Status</label>
											<br>
											<?php
												$approve = "";
												$disapprove  = "";
												$rejected  = "";
												$waiting  = "";
												if($status->status == 0){
													$approve = "selected";
												}elseif($status->status == 1){
													$disapprove = "selected";
												}elseif($status->status == 2){
													$rejected = "selected";
												}elseif($status->status == 3){
													$waiting = "selected";
												}
											?>
											<select name="status" id="status" required class = "form-control">
												<option value="0" <?=$approve?> >Approve</option>
												<option value="1" <?=$disapprove?> >Disapprove</option>
												<option value="2" <?=$rejected?> >Reject</option>
												<option value="3" <?=$waiting?> >Waiting for Confirmation</option>
											</select>
											
											<br>
										</div>
                                        <input type="submit" value="Submit" class = "btn  btn-primary" id = "submit" name = "submit">
                                </form>
                           </div>
                        
                        
                            
                        
                    </div>
                </main>
