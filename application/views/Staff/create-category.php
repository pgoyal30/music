<div id="layoutSidenav_content">
           <main>
                    
                
                    <div class="container-fluid">
                        <h1 class="mt-3 mb-5 text-center">Create Category</h1>
                        
                           <div>
                                <form action = "<?=base_url()?>StaffController/create_category" id = "user-info" method = "POST" enctype = "multipart/form-data">

                                        <div class="form-group">
                                            <label for="name">Title <span class = "requried">*</span> </label>
                                            <input type="text" name="title" id="title" class = "form-control" required>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="summary">Summary</label>
                                           <textarea name="summary" id="summary"  rows="10" class = "form-control"></textarea>
                                        </div>

                                        
                                        <div class="form-group">
                                            <label for="photo">Photo <span class = "requried">*</span></label>
                                            <input type="file" name="photo" id="photo" class = "form-control"  required>
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
