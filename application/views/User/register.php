<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register</title>
        <link href="<?=base_url()?>public/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            .error{
                color: red;
            }
        </style>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form>

                                            <div class="form-group">
                                                <label class="small mb-1" for="fullName">Full Name</label>
                                                <input class="form-control py-4" id="fullName" type="text" placeholder="Enter full name"/>
                                                <div id = "nameError" class = "error"></div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label class="small mb-1" for="email">Email</label>
                                                <input class="form-control py-4" id="email" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                                <div id = "emailError" class = "error"></div>
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="mobile">Mobile No.</label>
                                                <input class="form-control py-4" id="mobile" type="tel" placeholder="Enter mobile no." />
                                                <div id = "mobileError" class = "error"></div>
                                            </div>


                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="password">Password</label>
                                                        <input class="form-control py-4" id="password" type="password" placeholder="Enter password" />
                                                        <div id = "passwordError" class = "error"></div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                <button class="btn btn-primary btn-block" id = "register">Create Account</button></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="<?=base_url()?>Welcome/login">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Solutions1313 <?=date('Y')?></div>
                            <div>
                                Developed by <a href  = "https://solutions1313.com/">Solution1313</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script> -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>public/js/scripts.js"></script>

        <script>
            $(document).ready(function(){
				$("#register").on("click", function(e){
            e.preventDefault();
            var nameError = "";
            var emailError = "";
            var mobileError = "";
            var passwordError = "";
            var fullName = $("#fullName").val();
            fullName = fullName.trim();
            var email = $("#email").val();
            email = email.trim();
            var mobile = $("#mobile").val();
            mobile = mobile.trim();
            var password = $("#password").val();
            password = password.trim();
            $("#nameError").html("");
            $("#emailError").html("");
            $("#mobileError").html("");
            $("#passwordError").html("");
            
            // console.log("Hello World");
           
           
            // console.log(fullName + " " + email + " " + mobile + " " + password);
            if(fullName == ""){
                nameError = "Name is Required";
                // console.log(nameError);
                $("#nameError").html(nameError);
            }
            if(email == ""){
                emailError = "Email is Required";
                // console.log(emailError);
                $("#emailError").html(emailError);
            }

            if(mobile == ""){
                mobileError = "Mobile is Required";
                // console.log(mobileError);
                $("#mobileError").html(mobileError);
            }
            if(password == ""){
                passwordError = "Password is Required";
                // console.log(passwordError);
                $("#passwordError").html(passwordError);
            }
           
		
 
            if(nameError == "" && emailError == "" && mobileError == "" && passwordError == ""){
                $.ajax({
                    url: "<?=base_url()?>Welcome/checkemail",
                    type: "POST",
                    data: {user_email: email},
                    success: function(response){
                        console.log(response);
						if(response == "Yes"){
							$("#emailError").html("Email already exist");
						}else{
							insert(fullName, email, mobile, password);
						}        
                    }
                });
               
                
            }
        });

         function insert(fullName, email, mobile, password){
            console.log(fullName + " " + email + " " + mobile + " " + password);
            $.ajax({
            url: "<?=base_url()?>Welcome/insertuserinfo",
            type: "POST", 
             data: {name: fullName, email: email, mobile: mobile, password: password},
                success: function(response){
					console.log(response);
                    if(response == "Yes"){
                        alert("You registered Successfully");
                        window.location.href = "<?=base_url()?>Welcome/login";
                    }else{
                        alert("Registration Failed Try Again");
                    }
                }

            });
        } 
});
        </script>
    </body>
</html>
