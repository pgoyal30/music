<div id="layoutSidenav_content">
           <main>	   
                    <div class="container-fluid">
                        <h1 class="mt-3 mb-5 text-center">Create Blog</h1>
                        
                           <div>
                                <form action = "<?=base_url()?>AdminController/add_blog" id = "user-info" method = "POST" enctype = "multipart/form-data">

                                        <div class="form-group">
                                            <label for="name">Title <span class = "requried">*</span> </label>
                                            <input type="text" name="title" id="title" class = "form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="heading">Heading <span class = "requried">*</span> </label>
                                            <input type="text" name="heading" id="heading" class = "form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="url_slug">URL Slug <span class = "requried">*</span> </label>
                                            <input type="text" name="url_slug" id="url_slug" class = "form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="author">Author <span class="required">*</span></label>
                                            <input type="text" name = "author" id = "author" class = "form-control" required>
                                        </div>

										<div class="form-group">
											<label for="catid">Category <span class = "requried">*</span></label>
											<select name="catid" id="catid" class = "form-control" required>
											  <?php
													if(count($bcat)){
														foreach($bcat as $cat){
                                                ?>
													<option value="<?=$cat->id?>"><?=$cat->name?></option>

                                               <?php
														}
													}
											  ?>
												
											</select>
										</div>

                                        <div class="form-group">        
                                            <label for="description">Description</label>
                                           <textarea name="description" id="description"  rows="10" class = "form-control" required></textarea>
                                        </div>


                                        <div class="form-group">
                                            <label for="post">Post</label>
                                           <textarea name="post" id="post"  rows="10" class = "form-control" required></textarea>
                                        </div>

										
                                        <div class="form-group">
                                            <label for="featuredimage">Featured Image: <span class = "requried">*</span></label>
                                            <input type="file" name="featuredimage" id="featuredimage" class = "form-control"  required>
                                        </div>

									
										<input type = "reset" value = "Reset" class = "btn btn-danger">
                                        <input type="submit" value="Submit" class = "btn  btn-primary" id = "submit" name = "submit">
                                </form>
                           </div>
                    </div>
                </main>
