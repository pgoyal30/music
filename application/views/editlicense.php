<div id="layoutSidenav_content">
           <main>
                    
                
                    <div class="container-fluid">
                        <h1 class="mt-3 mb-5 text-center">Edit License</h1>
                        
                           <div>
                                <form action = "<?=base_url()?>AdminController/edit_license/<?=$license->lid?>" id = "user-info" method = "POST">

                                        <div class="form-group">
										<label for="license">License:</label>
										<input type="text" name="licenseno" id="license" class="form-control" required placeholder = "License" value = "<?=$license->licenseno?>">
										</div>
										
											
								
                                        <input type="submit" value="Submit" class = "btn  btn-primary" id = "submit" name = "submit">
                                </form>
                           </div>
                        
                        
                            
                        
                    </div>
                </main>
