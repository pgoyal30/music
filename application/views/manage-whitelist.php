<div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                        <h1 class="mt-4">Manage Whitelist</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Whitelist</li>
                        </ol>
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
							
                                <div class="table-responsive">
								
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									
                                        <thead>
											<tr>
											
											<td colspan = "8">
											<div class="dropdown">
												<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													Bulk Actions
												</button>
												<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
													<a class="dropdown-item" href="javascript:void(0)" onclick = "activate_status('approve')">Approve</a>
													<a class="dropdown-item" href="javascript:void(0)" onclick = "activate_status('disapprove')">Disapprove</a>
													<a class="dropdown-item" href="javascript:void(0)" onclick = "activate_status('rejected')">Rejected</a>
												</div>
											</div>
												<!-- <a href="javascript:void(0)" onclick = "activate_status()" class = "btn btn-danger ">Activate Status</a> -->
											
											</td>
											</tr>
                                            <tr>
                                                <th><a href = "javascript:void(0)" id = "selectall" onclick = "selectall()"><input type = "checkbox" name = "allapprove" value = "all" id = "checkall"></a></th>
                                               <th>S.No</th>
                                                <th>Id</th>
												<th>Name</th>
												<!-- <th>Email</th> -->
                                                <th>URLs</th>
												<th>Track id </th>
                                                <th>Platform</th>
                                                <th>Client Id</th>
												<th>Added At</th>
                                                <th>Edit Status</th>
												<th>Status</th>
                                            </tr>

                                        </thead>
										
                                        <?php
                                        if(count($list) > 0){
                                            echo "<tbody>";
                                            $i = 1;
                                            foreach($list as $l){
                                        ?>
                                        <tr>
											    <td><input type = "checkbox" name = "status[]" value = "<?=$l->wid?>" id = "<?=$l->wid?>" class = "status-checkbox"></td>
                                                <td><?=$i?></td>
                                                <td><?=$l->wid?></td>
												<td><?=$l->name?></td>
												<!-- <td><=$l->email?></td> -->
                                                <td>
													<?php
												
														echo $l->links;
													?>
												</td>
												<td><?=$l->trackuid?></td>
                                                <td>
												<?php							
													echo $l->platform;
													?>
													
												</td>
                                                <td><?=$l->user_id?></td>
												<td><?=$l->added_at?></td>

												<td>
													<?php
														$approve = "";
														$disapprove = "";
														$rejected = "";
														$waiting = "";
														if($l->status == 0){
															// echo "Approved";
															$approve = "checked";
														}elseif($l->status == 1){
															// echo "Disapprove";
															$disapprove = "checked";
														}elseif($l->status == 2){
															// echo "Rejected";
															$rejected = "checked";
														}elseif($l->status == 3){
															// echo "Waiting for confirmation";
															$waiting = "checked";
														}
													?>
													<br>
													<form action="<?=base_url()?>AdminController/edit_whitelist/<?=$l->wid?>" method = "POST">
													<input type = "radio" name = "status" value = "0" <?=$approve?>>Approve
													<br>
													<input type = "radio" name = "status" value = "1" <?=$disapprove?>>Disapprove
													<br>
													<input type = "radio" name = "status" value = "2" <?=$rejected?>>Rejected
													<br>
													<input type = "radio" name = "status" value = "3" <?=$waiting?>>Waiting for confirmation
													<br>
														<input type="submit" value = "Edit" name = "submit" class = "mt-2 btn btn-primary">
													</form>
													
												</td>

												
												<td>
													<?php
														$approve = "";
														$disapprove = "";
														$rejected = "";
														$waiting = "";
														if($l->status == 0){
															echo "Approved";
														}elseif($l->status == 1){
															echo "Disapprove";
														}elseif($l->status == 2){
															echo "Rejected";
														}elseif($l->status == 3){
															echo "Waiting for confirmation";
														}
													?>
												</td>
                                              
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
