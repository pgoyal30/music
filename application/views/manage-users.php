<div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                        <h1 class="mt-4">Manage Users</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Users</li>
                        </ol>
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <th>S.No</th>
                                                <th>Client Id</th>
												<th>Name</th>
                                                <th>Email</th>
												<th>Mobile</th>
												<th>View</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if(count($allusers) > 0){
                                            echo "<tbody>";
                                            $i = 1;
                                            foreach($allusers as $users){
                                        ?>
                                        <tr>
                                                <td><?=$i?></td>
                                                <td><?=$users->id?></td>
                                                <td><?=$users->name?></td>
                                                <td><?=$users->email?></td>
                                                <td><?=$users->mobile?></td>
												<td><a href = "<?=base_url()?>AdminController/viewclient/<?=$users->id?>">View</a></td>
                                               
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
