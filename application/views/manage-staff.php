<div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                        <h1 class="mt-4">Manage Staff</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Staff</li>
                        </ol>
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
							
                                <div class="table-responsive">
								
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									
                                        <thead>
											
                                            <tr>
                                              
                                               <th>S.No</th>
                                                <th>Id</th>
												<th>Name</th>
												<th>Email</th>
                                                <th>Mobile</th>
												<th>Edit</th>
												<th>Delete</th>
                                            </tr>

                                        </thead>
										
                                        <?php
                                        if(count($staff) > 0){
                                            echo "<tbody>";
                                            $i = 1;
                                            foreach($staff as $st){
                                        ?>
                                        <tr>
											<td><?=$i?></td>
											<td><?=$st->id?></td>
											<td><?=$st->name?></td>
											<td><?=$st->email?></td>
											<td><?=$st->mobile?></td>
											<td><a href = "<?=base_url()?>AdminController/editstaff/<?=$st->id?>">Edit</td>
											<td><a href = "<?=base_url()?>AdminController/deletestaff/<?=$st->id?>">Delete</td>
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
