<div id="layoutSidenav_content">
           <main>
                    
                
                    <div class="container-fluid">
                        <h1 class="mt-3 mb-5 text-center">Edit Product</h1>
                        
                           <div>
                                <form action = "<?=base_url()?>AdminController/edit_product/<?=$product->id?>" id = "user-info" method = "POST" enctype = "multipart/form-data">

                                        <div class="form-group">
                                            <label for="name">Title <span class = "requried">*</span> </label>
                                            <input type="text" name="title" id="title" class = "form-control" value = "<?=$product->title?>" required>
                                        </div>

										<div class = "form-group">
											<label for="catalogno">Catalog Number</label>
											<input type="text" name="catalogno" id="catalogno" value = "<?=$product->catalogno?>" class = "form-control" required>
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
                                            <label for="description">Description</label>
                                           <textarea name="description" id="description"  rows="10" class = "form-control"><?=$product->description?></textarea>
                                        </div>

										<div class="form-group">
                                            <label for="track">Total Track <span class = "requried">*</span> </label>
                                            <input type="text" name="track" id="track" class = "form-control" value = "<?=$product->track?>" required>
                                            
                                        </div>

										<div class="form-group">
                                            <label for="usages">Usage <span class = "requried">*</span> </label>
                                            <input type="text" name="usages" id="usages" class = "form-control"  value = "<?=$product->usages?>" required>     
                                        </div>

										<div class="form-group">
                                            <label for="key">Keys <span class = "requried">*</span> </label>
                                            <input type="text" name="key" id="key" class = "form-control" placeholder = "Enter Keys" value = "<?=$product->key?>"  required>     
                                        </div>

										<div class="form-group">
                                            <label for="bpm">BPM Range Usage <span class = "requried">*</span> </label>
                                            <input type="text" name="bpm" id="bpm" class = "form-control"    value = "<?=$product->bpm?>" required>     
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="photo">Photo <span class = "requried">*</span></label>
                                            <input type="file" name="photo" id="photo" class = "form-control">
											<input type="hidden" name="oldphoto" id="" value = "<?=$product->photo?>">
                                        </div>

										<div class="form-group">
                                            <label for="price1">Price 1 <span class = "requried">*</span></label>
                                            <input type="text" name="price1" id="price1" class = "form-control" value = "<?=$product->price1?>" required>
                                        </div>


										<div class="form-group">
                                            <label for="price2">Price 2 <span class = "requried">*</span></label>
                                            <input type="text" name="price2" id="price2" class = "form-control" value = "<?=$product->price2?>"  required>
                                        </div>

										<div class="form-group">
                                            <label for="price3">Price 3 <span class = "requried">*</span></label>
                                            <input type="text" name="price3" id="price3" class = "form-control"  value = "<?=$product->price3?>" required>
                                        </div>



                                        <div class="form-group">
                                            <label for="license1">License 1</label>
                                            <input type="file" name="license1" id="license1" class = 'form-control'>
                                            <input type="hidden" name="oldlicense1" value = "<?=$product->license1?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="license2">License 2</label>
                                            <input type="file" name="license2" id="license2" class = 'form-control'>
                                            <input type="hidden" name="oldlicense2" value = "<?=$product->license2?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="license3">License 3</label>
                                            <input type="file" name="license3" id="license3" class = 'form-control'>
                                            <input type="hidden" name="oldlicense3" value = "<?=$product->license3?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="sheet">Sheet</label>
                                            <input type="file" name="sheet" id="sheet" class = 'form-control'>
                                            <input type="hidden" name="oldsheet" value = "<?=$product->sheet?>">
                                        </div>

										

										<div class="form-group">
                                            <label for="discount">Discount(%)<span class = "requried">*</span></label>
                                            <input type="text" name="discount" id="discount" class = "form-control"  value = "<?=$product->discount?>" required>
                                        </div>



                                        <div class="form-group">
                                            <label for="status">Status <span class = "requried">*</span></label>
                                            <select name = "status" id="status" class = "form-control" required>
											<?php if($product->status == 0){
													echo " <option value='0' selected>Active</option> <option value='1'>Inactive</option> <option value = '2'>Upcoming</option>";
												}elseif($product->status == 1){
													echo " <option value='1' selected>Inactive</option> <option value='0'>Active</option><option value = '2'>Upcoming</option>";
												}else{
													echo " <option value='0' >Active</option> <option value='1'>Inactive</option> <option value = '2' selected>Upcoming</option>";
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
