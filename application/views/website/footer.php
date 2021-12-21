<div class="modal modal-login" id = "modal-login" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background: white; border: 0;" id = "close-login">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form id = "login-form" method = "POST">
				<span id="invalidError" class = "error my-3"></span>
				<div class="form-group">
				    <label for="email">Email:</label>
					<input type="email" name="email" id="email" class = "form-control">
					<span id="emailError" class = "error my-3"></span>
				</div>
				
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" class = "form-control">
					<span id="pswdError" class = "error my-3"></span>
				</div>

				<input type="submit" value="Login" name = "login" class = "btn w-100 btn-primary mt-3">
			</form>	
      </div>
      
    </div>
  </div>
</div>


<div class="modal modal-register" id = "modal-register" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background: white; border: 0;" id = "close-register">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form id = "register-form" method = "POST">
			<div class="form-group">
				    <label for="rname">Full Name:</label>
					<input type="text" name="rname" id="rname" class = "form-control">
					<span id="rnameError" class = "error my-3"></span>
					
				</div>
				<div class="form-group">
				    <label for="remail">Email:</label>
					<input type="email" name="remail" id="remail" class = "form-control">
					<span id="remailError" class = "error my-3"></span>
				</div>
				<div class="form-group">
				    <label for="rmobile">Mobile:</label>
					<input type="tel" name="rmobile" id="rmobile" class = "form-control">
					<span id="rmobileError" class = "error my-3"></span>
				</div>
				
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" id="rpassword" class = "form-control">
					<span id="rpasswordError" class = "error my-3"></span>
				</div>

				<input type="submit" value="Sign Up" name = "register" class = "btn w-100 btn-primary mt-3">
			</form>	
      </div>
      
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
<script src = "//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready( function () {
             $('#order-table').DataTable();
             $('#whitelist-table').DataTable();
  });
</script>

<script>
	$(document).ready(function(){
		$("#login").on('click', function(event){
			$("#modal-login").modal('show');
		});

		$("#close-login").on('click', function(event){
			$("#modal-login").modal('hide');
		});


		$("#register").on('click', function(event){
			$("#modal-register").modal('show');
		});

		$("#close-register").on('click', function(event){
			$("#modal-register").modal('hide');
		});

		$("#login-form").on('submit', function(e){
                    e.preventDefault();
                    var emailError = "";
                    var pswdError = "";
                    var user_email = $("#email").val();
                    var user_pswd = $("#password").val();
                    $("#emailError").html("");
                    $("#pswdError").html("");
                    $("#invalidError").html("");
                    if(user_email == ""){
                        emailError = "Email is required";
                        $("#emailError").html(emailError);
                    }
                    if(user_pswd == ""){
                        pswdError = "Password is required";
                        $("#pswdError").html(pswdError);
                    }

                    if(emailError == "" && pswdError == ""){
                        $.ajax({
                            url: "<?=base_url()?>Website/checklogin",
                            type: "POST",
                            data: {email: user_email, password: user_pswd},
                            success: function(response){
								console.log(response);
                                if(response == "Yes"){
                                    window.location.href ="<?=base_url()?>Website/profile";
                                }else{
                                    $("#invalidError").html("Invalid Email and Password");
                                }
                            }
                        });
                    }
        });


		
        
	})


	$(document).ready(function(){
		$("#register-form").on("submit", function(e){
            e.preventDefault();
            var rnameError = "";
            var remailError = "";
            var rmobileError = "";
            var rpasswordError = "";
            var rname = $("#rname").val();
            rname = rname.trim();
            var remail = $("#remail").val();
            remail = remail.trim();
            var rmobile = $("#rmobile").val();
            rmobile = rmobile.trim();
            var rpassword = $("#rpassword").val();
            rpassword = rpassword.trim();
            $("#rnameError").html("");
            $("#remailError").html("");
            $("#rmobileError").html("");
            $("#rpasswordError").html("");
            
            // console.log("Hello World");
           
           
            // console.log(rname + " " + remail + " " + rmobile + " " + rpassword);
            if(rname == ""){
                rnameError = "Name is Required";
                // console.log(nameError);
                $("#rnameError").html(rnameError);
            }
            if(remail == ""){
                remailError = "Email is Required";
                // console.log(emailError);
                $("#remailError").html(remailError);
            }

            if(rmobile == ""){
                rmobileError = "Mobile is Required";
                // console.log(mobileError);
                $("#rmobileError").html(rmobileError);
            }
            if(rpassword == ""){
                rpasswordError = "Password is Required";
                // console.log(passwordError);
                $("#rpasswordError").html(rpasswordError);
            }
           
		
		    // if(rnameError == "" && remailError == "" && rmobileError == "" && rpasswordError == ""){
			// 	$.ajax({
            //         url: "<?=base_url()?>Website/checkemail",
            //         type: "POST",
            //         data: {user_email: remail},
            //         success: function(response){
            //             console.log(response);
			// 			if(response == "Yes"){
			// 				$("#remailError").html("Email already exist");
			// 			}else{
			// 				alert("Hello World");
			// 			}
			// 		}
			// 	});
			// }
 
            if(rnameError == "" && remailError == "" && rmobileError == "" && rpasswordError == ""){
                $.ajax({
                    url: "<?=base_url()?>Website/checkemail",
                    type: "POST",
                    data: {user_email: remail},
                    success: function(response){
                        // console.log(response);
						if(response == "Yes"){
							$("#remailError").html("Email already exist");
						}else{
							// insert(rname, remail, rmobile, rpassword);
							$.ajax({
								url: "<?=base_url()?>Website/insertuserinfo",
								type: "POST", 
								data: {name: rname, email: remail, mobile: rmobile, password: rpassword},
								success: function(response){
									console.log(response);
									if(response == "Yes"){
											alert("You registered Successfully");
											window.location.href = "<?=base_url()?>Website/index";
									}else{
											alert("Registration Failed Try Again");
									}
								}

							});
						}        
                    }
                });
               
                
            }

            

        });
	});

	$("#change-password").on("submit", function(e){
      e.preventDefault();
      $("#newPswdError").html("");
      $("#conPswdError").html("");
      var newPswd = $("#newPswd").val();
      var confirmPswd = $("#confirmPswd").val();
           
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
            $.ajax({
							url: "<?=base_url()?>Website/updatepassword",
							data: "password=" +  newPswd,
							type: "POST",
							success: function(response){
								  console.log(response);
                  if(response == "Yes"){
                      $("#change-password").trigger('reset');
                      alert("Password Changed Successfully");
                                        // alert(data);
                  }else{
                        alert("Try Again");
                  }
              } 
						});
        }
      }
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

	// function insert(fullName, email, mobile, password){
    //             console.log(fullName + " " + email + " " + mobile + " " + password);
	// 			$.ajax({
	// 				url: "<?=base_url()?>Website/insertuserinfo",
	// 				type: "POST", 
	// 				data: {name: fullName, email: email, mobile: mobile, password: password},
	// 				success: function(response){
	// 					console.log(response);
	// 					if(response == "Yes"){
	// 							alert("You registered Successfully");
	// 							window.location.href = "<?=base_url()?>Website/index";
	// 					}else{
	// 							alert("Registration Failed Try Again");
	// 					}
	// 				}

	// 			});
    // }


	 
</script>
</body>
</html>
