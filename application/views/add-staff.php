<div id="layoutSidenav_content">
           <main>	   
                    <div class="container-fluid">
                        <h1 class="mt-3 mb-5 text-center">Create Staff Account</h1>
                        
                           <div>
                                <form action = "<?=base_url()?>AdminController/add_staff" id = "user-info" method = "POST" enctype = "multipart/form-data">

                                        <div class="form-group">
                                            <label for="name">Name:<span class = "requried">*</span> </label>
                                            <input type="text" name="name" id="name" class = "form-control" required>
                                        </div>

										<div class = "form-group">
											<label for="email">Email:</label>
											<input type="email" name="email" id="email" class = "form-control" required>
                                        </div>

										
										<div class="form-group">
											<label for="mobile">Mobile:</label>
											<input type="tel" name="mobile" id="mobile" class = "form-control" required>
										</div>


										<div class="form-group">
											<label for="password">Password:</label>
											<input type="password" name="password" id="password" class = "form-control" required>
										</div>
                                        <!-- <div class="form-group">
                                            <label for="status">Status <span class = "requried">*</span></label>
                                            <select name = "status" id="status" class = "form-control" required>
                                                <option value="0">Active</option>
                                                <option value="1">Inactive</option>
												<option value="2">Upcoming</option>
                                            </select>
                                        </div> -->

										<input type = "reset" value = "Reset" class = "btn btn-danger">
                                        <input type="submit" value="Submit" class = "btn  btn-primary" id = "submit" name = "submit">
                                </form>
                           </div>
                    </div>
                </main>
