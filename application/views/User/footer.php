<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; <?=date('Y')?> 
						   Solutions1313 </div>
                            <div>
                              Designed and Developed by <a href = "https://solutions1313.com/">Solutions1313</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>public/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>public/assets/demo/chart-area-demo.js"></script>
        <script src="<?=base_url()?>public/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>public/assets/demo/datatables-demo.js"></script>
		<script src = "<?=base_url()?>public/ckeditor/ckeditor.js"></script>

<script>
	CKEDITOR.replace('description');
</script>
<script>
            $(document).ready(function(){
                $("#changeBtn").on("click", function(e){
                    e.preventDefault();
                    $("#newPswdError").html("");
                    $("#conPswdError").html("");
                    var newPswd = $("#newPswd").val();
                    var confirmPswd = $("#confirmPswd").val();

                    // console.log(currentPswd + " " + newPswd + " " + confirmPswd);
                   
                    if(newPswd == ""){
                        newPswdError = "Please enter new password";
                        $("#newPswdError").html(newPswdError);

                    }

                    if(confirmPswd == ""){
                        conPswdError = "Please enter confirm password";
                        $("#conPswdError").html(conPswdError);
                    }

					console.log( newPswd + " " + confirmPswd);

                    if( newPswd != "" && confirmPswd != ""){
                        if(confirmPswd != newPswd){
                            $("#conPswdError").html("Confirm password doesn't match.");
                        }else{
                            $.post(
								"<?=base_url()?>Welcome/updatepassword",
								 {password: newPswd},
								  function(response){
                                    if(response == "Yes"){
                                        $("#changePswd").trigger('reset');
                                        alert("Password Changed Successfully");
                                        // alert(data);
                                    }else{
                                        alert("Try Again");
                                    }
                                } 
                            );
                        }
                    }
                });
            });

			
			var platform = `    <div class = "platform">
			<div class = "form-group">
											<label for="platform">Platform</label>
											<select name="platform[]" id="platform" class="form-control" required>
												<option value="">--Select Platform--</option>
												<option value="Youtube">Youtube</option>
												<option value="Facebook">Facebook</option>
												<option value="Instagram">Instagram</option>
											</select>
                                        </div>

										<div class="form-group">
											<label for="channelName">Channel Name</label>
											<input type="text" name="channelname[]" id="channelname" class = "form-control" required>
										</div>

										<div class="form-group">
											<label for="channelName">Channel Url</label>
											<input type="text" name="channelurl[]" id="channelurl" class = "form-control" required>
										</div>


										<div class="form-group">
											<label for="url">Add Url</label>
											<input type="text" name="url[]" id="url" class = "form-control" required>
										</div>

										
										<button type = "button" id = "remove-platform" class  = "btn btn-danger">X</button>
								</div>
										`;
			
			$("#more-links").on('click', function(){
				
				$(".more-items").append(platform);
			});

			$(document).on('click', '#remove-platform', function(){
				$(this).closest(".platform").remove();
			});

			
        </script>
    </body>
</html>
