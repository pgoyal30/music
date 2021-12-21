<div id="layoutSidenav_content">
           <main>
                    
                
                    <div class="container-fluid">
                        <h1 class="mt-3 mb-5 text-center">Create Product</h1>
                        
                           <div>
                                <form action = "<?=base_url()?>StaffController/add_product" id = "user-info" method = "POST" enctype = "multipart/form-data">

                                        <div class="form-group">
                                            <label for="name">Title <span class = "requried">*</span> </label>
                                            <input type="text" name="title" id="title" class = "form-control" required>
                                        </div>

										<div class = "form-group">
											<label for="catalogno">Catalog Number</label>
											<input type="text" name="catalogno" id="catalogno" class = "form-control" required>
                                        </div>

										<div class="form-group">
											<label for="category">Category</label>
											<select name="categoryid" id="categoryid" class = "form-control">
											  <?php
													if(count($category)){
														foreach($category as $cat){
                                                ?>
													<option value="<?=$cat->id?>"><?=$cat->title?></option>

                                               <?php
														}
													}
											  ?>
												
											</select>
										</div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                           <textarea name="description" id="description"  rows="10" class = "form-control"></textarea>
                                        </div>

										<div class="form-group">
                                            <label for="track">Total Track <span class = "requried">*</span> </label>
                                            <input type="text" name="track" id="track" class = "form-control" required>
                                            
                                        </div>

										<div class="form-group">
                                            <label for="usages">Usage <span class = "requried">*</span> </label>
                                            <input type="text" name="usages" id="usages" class = "form-control" required>     
                                        </div>

										<div class="form-group">
                                            <label for="key">keys <span class = "requried">*</span> </label>
                                            <input type="text" name="key" id="key" class = "form-control" placeholder = "Enter Keys" required>     
                                        </div>

										<div class="form-group">
                                            <label for="bpm">BPM Range Usage <span class = "requried">*</span> </label>
                                            <input type="text" name="bpm" id="bpm" class = "form-control" placeholder = "Enter Keys" required>     
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="photo">Photo <span class = "requried">*</span></label>
                                            <input type="file" name="photo" id="photo" class = "form-control"  required>
                                        </div>

										<div class="form-group">
                                            <label for="price1">Price 1 <span class = "requried">*</span></label>
                                            <input type="text" name="price1" id="price1" class = "form-control"  required>
                                        </div>


										<div class="form-group">
                                            <label for="price2">Price 2 <span class = "requried">*</span></label>
                                            <input type="text" name="price2" id="price2" class = "form-control"  required>
                                        </div>

										<div class="form-group">
                                            <label for="price3">Price 3 <span class = "requried">*</span></label>
                                            <input type="text" name="price3" id="price3" class = "form-control"  required>
                                        </div>


										<div class="form-group">
                                            <label for="demotrack">Upload Demo Tracks<span class = "requried">*</span></label>
                                            <input type="file" name="demotrack" id="demotrack" class = "form-control"  required>
                                        </div>

										<div class="form-group">
                                            <label for="discount">Discount(%)<span class = "requried">*</span></label>
                                            <input type="text" name="discount" id="discount" class = "form-control"  required>
                                        </div>



                                        <div class="form-group">
                                            <label for="status">Status <span class = "requried">*</span></label>
                                            <select name = "status" id="status" class = "form-control" required>
                                                <option value="0">Active</option>
                                                <option value="1">Inactive</option>
                                            </select>
                                        </div>

										<input type = "reset" value = "Reset" class = "btn btn-danger">
                                        <input type="submit" value="Submit" class = "btn  btn-primary" id = "submit" name = "submit">
                                </form>
                           </div>
                        
                        
                            
                        
                    </div>
                </main>
