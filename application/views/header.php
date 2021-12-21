
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Panel</title>
        <link href="<?=base_url()?>public/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Panel</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            
            
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?=base_url()?>AdminController/logout">Logout</a>
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
                            <!-- <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a> -->
                            <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>AdminController/createcategory">Create Category</a>
                                    <a class="nav-link" href="<?=base_url()?>AdminController/managecategory">Manage Category</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Products
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="<?=base_url()?>AdminController/addproduct" >
                                       Add Product
                                    </a>
                                    
									<a class="nav-link collapsed" href="<?=base_url()?>AdminController/manageproduct" >
                                        Manage Product
                                        
                                    </a>

									<!-- <a class="nav-link collapsed" href="<?=base_url()?>AdminController/uploadsheet" >
                                       Upload Sheet
                                    </a>

									<a class="nav-link collapsed" href="<?=base_url()?>AdminController/managesheet" >
                                       Manage Sheet
                                    </a>

									<a class="nav-link collapsed" href="<?=base_url()?>AdminController/adddemotrack" >
                                       Add Demotrack
                                    </a>

									<a class="nav-link collapsed" href="<?=base_url()?>AdminController/managedemotrack" >
                                       Manage Demotrack
                                    </a>


									<a class="nav-link collapsed" href="<?=base_url()?>AdminController/addtrack" >
                                       Add Track
                                    </a>

									<a class="nav-link collapsed" href="<?=base_url()?>AdminController/managetrack" >
                                       Manage Track
                                    </a> -->

                                   
                                </nav>
                            </div>

							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#clients" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Clients
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="clients" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>AdminController/manageusers">View Clients</a>
                                    
                                </nav>
                            </div>


                            <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#upcomingproducts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Upcoming Products
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="upcomingproducts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>AdminController/addupcomingproduct">Add Product</a>

									<a class="nav-link" href="<?=base_url()?>AdminController/manageupcomingproduct">Manage Product</a>
                                    
                                </nav>
                            </div> -->
                           
                            <?php
                            if($_SESSION['role'] == 0){
                            ?>
							<!-- <a class="nav-link" href="AdminController/whitelist">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                WhiteList
                            </a> -->

							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#whitelist" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Whitelist
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="whitelist" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>AdminController/whitelist">Whitelist</a>

									<a class="nav-link" href="<?=base_url()?>AdminController/allwhitelist">All Whitelist</a>
                                    
                                </nav>
                            </div>
                            <?php
                            }
                            ?>
                           
                           

							<!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#license" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                License
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="license" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>AdminController/createlicense">Create License</a>
                                    <a class="nav-link" href="<?=base_url()?>AdminController/managelicense">Manage License</a>
                                </nav>
                            </div> -->


							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStaff" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Staff
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseStaff" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>AdminController/createstaff">Add Staff</a>
                                    <a class="nav-link" href="<?=base_url()?>AdminController/managestaff">Manage Staff</a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseblogcategory" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Blog Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseblogcategory" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>AdminController/manage_bcat">Manage</a>
                                    <a class="nav-link" href="<?=base_url()?>AdminController/addbcat">Add</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseblog" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Blog
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseblog" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>AdminController/manageblog">Manage</a>
                                    <a class="nav-link" href="<?=base_url()?>AdminController/addblog">Add</a>
                                </nav>
                            </div>

							<a class="nav-link" href="<?=base_url()?>AdminController/manageorder">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Sales
                            </a>

                            <a class="nav-link" href="<?=base_url()?>AdminController/logout">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
