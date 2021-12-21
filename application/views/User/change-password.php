<div id="layoutSidenav_content">
                <main style = "max-width: 450px; margin: 0 auto;">
                    <div class="container-fluid">
                        <h1 class="mt-3 mb-5">Change Password</h1>
                        
                           <div>
                                <form id = "changePswd" method = "POST">
                                        <div class="form-group">
                                            <label for="newPswd">New Password:</label>
                                            <input type="password" name="newPswd" id="newPswd" class = "form-control">
                                            <div id = "newPswdError" class = 'error'></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="confirmPswd">Confirm Password:</label>
                                            <input type="password" name="confirmPswd" id="confirmPswd" class = "form-control">
                                            <div id = "conPswdError" class = 'error'></div>
                                        </div>

                                        <input type="submit" value="Save" class = "btn btn-block btn-primary" id = "changeBtn">
                                </form>
                           </div>
                        
                        
                            
                        
                    </div>
                </main>


