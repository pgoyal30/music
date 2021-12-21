<div id="layoutSidenav_content">
           <main>
                    
                
                    <div class="container-fluid">
                        <h1 class="mt-3 mb-5 text-center">Add Demo Track</h1>
                        
                           <div>
                                <form action = "<?=base_url()?>AdminController/add_demotrack" id = "user-info" method = "POST" enctype = "multipart/form-data">

										<div class="form-group">
											<label for="product_id">Product:</label>
											
											<select name="product_id" id="product_id" class = "form-control" required>
											<?php
												if(isset($product)){
													foreach($product as $p){
												
											?>
												<option value="<?=$p->id?>">Id: <?=$p->id?> {<?=$p->title?>}</option>
											
											<?php
													}
												}
											?>
											</select>

										</div>

										<div class="form-group">
                                            <label for="demotrack">Demo Track<span class = "requried">*</span></label>
                                            <input type="file" name="demotrack[]" id="demotrack" class = "form-control"  multiple required>
                                        </div>

										

										<input type = "reset" value = "Reset" class = "btn btn-danger">
                                        <input type="submit" value="Submit" class = "btn  btn-primary" id = "submit" name = "submit">
                                </form>
                           </div>
                    </div>
                </main>
