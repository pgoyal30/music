<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Admin Panel</title>
        <link href="<?=base_url()?>public/css/styles.css" rel="stylesheet" />
        <scrip src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></scrip>

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
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                    <div id="invalidError" class = "error"></div>
                                        <form method = "POST">
                                            <div class="form-group">
                                                <label class="small mb-1" for="email">Email</label>
                                                <input class="form-control py-4" id="email" type="email" placeholder="Enter email address" />
                                                <div id="emailError" class = "error"></></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="password">Password</label>
                                                <input class="form-control py-4" id="password" type="password" placeholder="Enter password" />
                                                <div id="pswdError" class = "error"></></div>
                                            </div>
                                         
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type = "submit" class="btn btn-primary" id = "loginBtn">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="<?=base_url()?>StaffController/register">Need an account? Sign up!</a></div>
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
                            <div class="text-muted">Copyright &copy;  <?=date('Y')?></div>
                            <div>
                                Developed by <a href  = "https://solutions1313.com/">Solution1313</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>public/js/scripts.js"></script>

        <script>
            $(document).ready(function(){
                $("#loginBtn").on('click', function(e){
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
                            url: "<?=base_url()?>StaffController/checklogin",
                            type: "POST",
                            data: {email: user_email, password: user_pswd},
                            success: function(response){
								console.log(response);
                                if(response == "Yes"){
                                    window.location.href ="<?=base_url()?>StaffController/managecategory";
                                }else{
                                    $("#invalidError").html("Invalid Email and Password");
                                }
                            }
                        });
                    }
         });
 });
        </script>
    </body>
</html>
