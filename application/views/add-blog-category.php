<div id="layoutSidenav_content">
           <main>	   
                    <div class="container-fluid">
                        <h1 class="mt-3 mb-5 text-center">Create Blog Category</h1>
                        
                           <div>
                                <form action = "<?=base_url()?>AdminController/add_bcat"  method = "POST" enctype = "multipart/form-data">

                                        <div class="form-group">
                                            <label for="name">Name:<span class = "requried">*</span> </label>
                                            <input type="text" name="name" id="name" class = "form-control" required>
                                        </div>


										<input type = "reset" value = "Reset" class = "btn btn-danger">
                                        <input type="submit" value="Submit" class = "btn  btn-primary" id = "submit" name = "submit">
                                </form>
                           </div>
                    </div>
                </main>
