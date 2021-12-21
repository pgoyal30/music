<div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                        <h1 class="mt-4">Manage Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Product</li>
                        </ol>
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <th>S.No</th>
                                                <!-- <th>Id</th> -->
                                                <th>Title</th>
                                                <th>Demo Track</th>
                                                <th>Preview Zip</th>
                                                <th>After Zip</th>
                                                <th>Status</th>
                                                <th>View</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if(count($product) > 0){
                                            echo "<tbody>";
                                            $i = 1;
                                            foreach($product as $prod){
                                        ?>
                                        <tr>
                                                <td><?=$i?></td>
                                                <!-- <td><$prod->id?></td> -->
                                                <td><?=$prod->title?></td>
                                                <td><a href = "<?=base_url()?>AdminController/manageproductdemo/<?=$prod->id?>">Manage</a> | 
                                                    <a href = "<?=base_url()?>AdminController/addproductdemo/<?=$prod->id?>">Add</a>
                                                </td>
                                                <td>
                                                    <a href="<?=base_url()?>AdminController/managepreviewzip/<?=$prod->id?>">Manage</a> | 
                                                    <a href = "<?=base_url()?>AdminController/addpreviewzip/<?=$prod->id?>">Add</a>
                                                </td>
                                                <td>
                                                    <a href="<?=base_url()?>AdminController/manageafterzip/<?=$prod->id?>">Manage</a> | 
                                                    <a href = "<?=base_url()?>AdminController/addafterzip/<?=$prod->id?>">Add</a>
                                                </td>
                                                <td>
													<?php if($prod->status == 0){
													echo "Active";
												     }elseif($prod->status == 1){
														echo "Inactive";
													}elseif($prod->status == 2){
														echo "Upcoming";
													}
													?>
												</td>
                                                <td><a href = "<?=base_url()?>AdminController/viewproduct/<?=$prod->id?>">View</a></td>
                                                <td><a href = "<?=base_url()?>AdminController/editproduct/<?=$prod->id?>">Edit</a></td>
                                                <td><a href = "<?=base_url()?>AdminController/deleteproduct/<?=$prod->id?>">Delete</a></td>
                                        </tr>
                                        
                                        <?php
                                            $i++;
                                            }
                                            echo "</tbody>";
                                        }
                                        ?>
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
