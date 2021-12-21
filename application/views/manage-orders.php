<div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                        <h1 class="mt-4">Manage Orders</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Orders</li>
                        </ol>
                        
                        <div class="card mb-4">
						
                            <div class="card-body">
                                <div class="table-responsive">
								<a href = "javascript:void(0)" onclick = "exportfile()" class = "mb-2 btn btn-info">Export</a>
                                    <table class="export-table table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
											
                                            <tr>
												
												</td>
                                               <th>S.No</th>
                                                <th>Order Id</th>
												<th>Product Id</th>
												<th>Product Name</th>
                                                <th>Client Id</th>
												<th>Order Status</th>
												<th>Payment Status</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if(count($clientorder) > 0){
                                            echo "<tbody>";
                                            $i = 1;
                                            foreach($clientorder as $client){
                                        ?>
                                        <tr>
                                                <td><?=$i?></td>
                                                <td><?=$client->id?></td>
                                                <td><?=$client->pid?></td>
                                                <td><?=$client->title?></td>
                                                <td><?=$client->user_id?></td>
                                                <td><?=$client->order_status?></td>
                                                <td><?=$client->payment_status?></td>
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
