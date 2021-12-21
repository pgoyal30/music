
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>User Panel</title>
        <link href="<?=base_url()?>public/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
		<style>
			.error{
				color: red;
			}
		</style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">User Panel</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            
            
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?=base_url()?>Welcome/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                           
                            <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                            <a class="nav-link collapsed" href="<?=base_url()?>Welcome/order" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Orders
                               
                            </a>
                          

                            <a class="nav-link" href="<?=base_url()?>Welcome/links" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Add Links
                               
                            </a>
                            
							<a href="<?=base_url()?>Welcome/statuswhitelist" class="nav-link">
							<div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                WhiteList Status
							</a>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                My Account
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseThree" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="<?=base_url()?>Welcome/profile" >
                                       Profile
                                    </a>
                                    
									<a class="nav-link" href="<?=base_url()?>Welcome/changepassword" >Change Password</a>

                                    <a class="nav-link collapsed" href="<?=base_url()?>Welcome/logout" >
                                        Logout
                                        
                                    </a>
                                </nav>
                            </div>

                           
                           
                        </div>
                    </div>
                </nav>
            </div>
