<div id="layoutSidenav_content">
           <main>	   
                    <div class="container-fluid">
                        <h1 class="mt-3 mb-5 text-center">Create Product</h1>
                        
                           <div>
                                <form action = "<?=base_url()?>AdminController/add_product" id = "user-info" method = "POST" enctype = "multipart/form-data">

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
                                            <label for="photo">Artwork <span class = "requried">*</span></label>
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
                                            <label for="demotrack">Demo Tracks<span class = "requried">*</span></label>
                                            <input type="file" name="demotrack[]" id="demotrack" class = "form-control" multiple required>
                                        </div>

                                        <div class="form-group">
                                            <label for="license1">License 1</label>
                                            <input type="file" name="license1" id="license1" class = 'form-control' required>
                                        </div>

                                        <div class="form-group">
                                            <label for="license2">License 2</label>
                                            <input type="file" name="license2" id="license2" class = 'form-control' required>
                                        </div>

                                        <div class="form-group">
                                            <label for="license3">License 3</label>
                                            <input type="file" name="license3" id="license3" class = 'form-control' required>
                                        </div>
                                        <div class="form-group">
                                            <label for="sheet">Sheet</label>
                                            <input type="file" name="sheet" id="sheet" class = 'form-control' required>
                                        </div>

                                        <fieldset>
                                            <legend>Preview Zip</legend>
                                                <div class="form-group">
                                                   <label for="pzip1">Zip<span class = "requried">*</span></label>
                                                   <input type="file" name="pzip1[]" id="pzip1" class = "form-control" multiple required>
                                                </div>
                                                <!-- <div class="form-group">
                                                   <label for="pzip2">Zip2<span class = "requried">*</span></label>
                                                   <input type="file" name="pzip2[]" id="pzip2" class = "form-control" multiple required>
                                                </div>
                                                <div class="form-group">
                                                   <label for="pzip3">Zip3<span class = "requried">*</span></label>
                                                   <input type="file" name="pzip3[]" id="pzip3" class = "form-control" multiple required>
                                                </div> -->
                                        </fieldset>


                                        <fieldset>
                                            <legend>After Zip</legend>
                                                <div class="form-group">
                                                   <label for="azip1">Zip<span class = "requried">*</span></label>
                                                   <input type="file" name="azip1[]" id="azip1" class = "form-control" multiple required>
                                                </div>
                                                <!-- <div class="form-group">
                                                   <label for="azip2">Zip2<span class = "requried">*</span></label>
                                                   <input type="file" name="azip2[]" id="azip2" class = "form-control" multiple required>
                                                </div>
                                                <div class="form-group">
                                                   <label for="azip3">Zip3<span class = "requried">*</span></label>
                                                   <input type="file" name="azip3[]" id="azip3" class = "form-control" multiple required>
                                                </div> -->
                                        </fieldset>
                                       

										<div class="form-group">
                                            <label for="discount">Discount(%)<span class = "requried">*</span></label>
                                            <input type="text" name="discount" id="discount" class = "form-control"  required>
                                        </div>



                                        <div class="form-group">
                                            <label for="status">Status <span class = "requried">*</span></label>
                                            <select name = "status" id="status" class = "form-control" required>
                                                <option value="0">Active</option>
                                                <option value="1">Inactive</option>
												<option value="2">Upcoming</option>
                                            </select>
                                        </div>

										<input type = "reset" value = "Reset" class = "btn btn-danger">
                                        <input type="submit" value="Submit" class = "btn  btn-primary" id = "submit" name = "submit">
                                </form>
                           </div>
                    </div>
                </main>
