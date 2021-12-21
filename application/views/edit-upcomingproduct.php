<div id="layoutSidenav_content">
           <main>
                    
                
                    <div class="container-fluid">
                        <h1 class="mt-3 mb-5 text-center">Edit Upcoming Product</h1>
                        
                           <div>
                                <form action = "<?=base_url()?>AdminController/edit_upcomingproduct/<?=$product->id?>" id = "user-info" method = "POST" enctype = "multipart/form-data">

                                        <div class="form-group">
                                            <label for="name">Title <span class = "requried">*</span> </label>
                                            <input type="text" name="title" id="title" class = "form-control" value = "<?=$product->title?>" required>
                                        </div>

										

										<div class="form-group">
											<label for="category">Category</label>
											<select name="categoryid" id="categoryid" class = "form-control">
											  <?php
													if(count($category)){
														foreach($category as $cat){
											              if($cat->id == $product->categoryid){
                                                            $select = "selected";
														}else{
															$select = "";
														}
                                                ?>
													<option value="<?=$cat->id?>" <?=$select?>><?=$cat->title?></option>

                                               <?php
														}
													}
											  ?>
												
											</select>
										</div>
                                        
                                        
                                        <div class="form-group">
                                            <label for="photo">Photo <span class = "requried">*</span></label>
                                            <input type="file" name="photo" id="photo" class = "form-control">
											<input type="hidden" name="oldphoto" id="" value = "<?=$product->photo?>">
                                        </div>

										


										<div class="form-group">
                                            <label for="demotrack">Upload Demo Tracks<span class = "requried">*</span></label>
                                            <input type="file" name="demotrack" id="demotrack" class = "form-control">
											<input type="hidden" name="olddemotrack" value = "<?=$product->demotrack?>">
                                        </div>

								

                                        <div class="form-group">
                                            <label for="status">Status <span class = "requried">*</span></label>
                                            <select name = "status" id="status" class = "form-control" required>
											<?php if($product->status == 0){
													echo " <option value='0' selected>Active</option> <option value='1'>Inactive</option>";
												}else{
													echo " <option value='1' selected>Inactive</option> <option value='0'>Active</option>";
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
