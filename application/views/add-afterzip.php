<div id="layoutSidenav_content">
           <main>
                    
                
                    <div class="container-fluid">
                        <h1 class="mt-3 mb-5 text-center">Add AfterZip</h1>
                        
                           <div>
                                <form action = "<?=base_url()?>AdminController/add_afterzip/<?=$product->id?>" id = "user-info" method = "POST" enctype = "multipart/form-data">

										<div class="form-group">
                                            <label for="azip1">Zip</label>
                                            <input type="file" name="azip1[]" id="azip1" class = "form-control"  multiple>
                                        </div>
										<!-- <div class="form-group">
                                            <label for="azip2">Zip2</label>
                                            <input type="file" name="azip2[]" id="azip1" class = "form-control" multiple  >
                                        </div>
										<div class="form-group">
                                            <label for="azip3">Zip3</label>
                                            <input type="file" name="azip3[]" id="azip3" class = "form-control"  multiple>
                                        </div> -->

										

										<input type = "reset" value = "Reset" class = "btn btn-danger">
                                        <input type="submit" value="Submit" class = "btn  btn-primary" id = "submit" name = "submit">
                                </form>
                           </div>
                    </div>
                </main>
