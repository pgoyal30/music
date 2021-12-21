<div id="layoutSidenav_content">
           <main>
                    
                
                    <div class="container-fluid">
                        <h1 class="mt-3 mb-5 text-center">Edit Category</h1>
                        
                           <div>
                                <form action = "<?=base_url()?>AdminController/edit_category/<?=$category->id?>" id = "user-info" method = "POST" enctype = "multipart/form-data">

                                        <div class="form-group">
                                            <label for="title">Title <span class = "requried">*</span> </label>
                                            <input type="text" name="title" id="title" class = "form-control"value = "<?=$category->title?>" required>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="summary">Summary</label>
                                           <textarea name="summary" id="summary"  rows="10" class = "form-control"><?=$category->summary?></textarea>
                                        </div>

                                        
                                        <div class="form-group">
                                            <label for="photo">Photo <span class = "requried">*</span></label>
                                            <input type="file" name="photo" id="photo" class = "form-control" >
											<input type="hidden" name="oldphoto" id = "oldphoto" value = "<?=$category->photo?>">
                                        </div>


                                        <div class="form-group">
                                            <label for="status">Status <span class = "requried">*</span></label>
                                            <select name = "status" id="status" class = "form-control" required>
												<?php if($category->status == 0){
													echo " <option value='0' selected>Active</option> <option value='1'>Inactive</option>";
												}else{
													echo " <option value='1' selected>Inactive</option> <option value='0'>Active</option>";
												}
												?>
                                                
                                                
                                            </select>
                                        </div>

                                        <input type="submit" value="Submit" class = "btn  btn-primary" id = "submit" name = "submit">
                                </form>
                           </div>
                        
                        
                            
                        
                    </div>
                </main>
