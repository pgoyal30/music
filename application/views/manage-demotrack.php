<div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                        <h1 class="mt-4">Manage Demo Track</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Demo Track</li>
                        </ol>
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <th>S.No</th>
                                                <th>Demo Track Id</th>
												<th>Product Id</th>
                                                <th>Demo Track</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if(count($demotrack) > 0){
                                            echo "<tbody>";
                                            $i = 1;
                                            foreach($demotrack as $dt){
                                        ?>
                                        <tr>
                                                <td><?=$i?></td>
                                                <td><?=$dt->did?></td>
                                                <td><?=$dt->product_id?></td>
                            
                                                <td><audio controls><source src = "<?=base_url()?>upload/Demotrack/<?=$dt->demotrack?>"></audio></td>
                                                <td><a href = "<?=base_url()?>AdminController/deletedemotrack/<?=$dt->did?>">Delete</a></td>
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
