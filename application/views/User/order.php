

<div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                        <h1 class="mt-4">Manage Account</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Account</li>
                        </ol>
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <th>S.No</th>
                                                <th>Order Id</th>
												<th>Product Title</th>
                                                <th>Payment Status</th>
                                                <th>Order Status</th>
												<th>Added On</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if(count($order)){
                                            echo "<tbody>";
                                            $i = 1;
                                            foreach($order as $or){
                                        ?>
                                        <tr>
                                                <td><?=$i?></td>
                                                <td><?=$or->id?></td>
                                                <td><?=$or->title?></td>
                                                <td><?=$or->payment_status?></td>
                                                <td>
													<?=$or->order_status?>
                                                </td>
                                                <td><?=date('d M Y', strtotime($or->added_on))?></td>
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

