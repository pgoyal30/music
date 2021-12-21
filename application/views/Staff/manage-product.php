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
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Status</th>
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
                                                <td><?=$prod->id?></td>
                                                <td><?=$prod->title?></td>
                                                <td>
													<?php if($prod->status == 0){
													echo "Active";}else{
														echo "Inactive";
													}
													?>
												</td>
                                                <td><a href = "<?=base_url()?>StaffController/editproduct/<?=$prod->id?>">Edit</a></td>
                                                <td><a href = "<?=base_url()?>StaffController/deleteproduct/<?=$prod->id?>">Delete</a></td>
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
