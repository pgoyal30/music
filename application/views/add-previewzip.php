<div id="layoutSidenav_content">
           <main>
                    
                
                    <div class="container-fluid">
                        <h1 class="mt-3 mb-5 text-center">Add Preview Zip</h1>
                        
                           <div>
                                <form action = "<?=base_url()?>AdminController/add_previewzip/<?=$product->id?>" id = "user-info" method = "POST" enctype = "multipart/form-data">

										<div class="form-group">
                                            <label for="pzip1">Zip</label>
                                            <input type="file" name="pzip1[]" id="pzip1" class = "form-control"  multiple>
                                        </div>
										<!-- <div class="form-group">
                                            <label for="pzip2">Zip2</label>
                                            <input type="file" name="pzip2[]" id="pzip2" class = "form-control" multiple>
                                        </div>
										<div class="form-group">
                                            <label for="pzip3">Zip3</label>
                                            <input type="file" name="pzip3[]" id="pzip3" class = "form-control"  multiple>
                                        </div> -->

										

										<input type = "reset" value = "Reset" class = "btn btn-danger">
                                        <input type="submit" value="Submit" class = "btn  btn-primary" id = "submit" name = "submit">
                                </form>
                           </div>
                    </div>
                </main>
