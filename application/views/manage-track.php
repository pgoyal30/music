<div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                        <h1 class="mt-4">Manage Track</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Track</li>
                        </ol>
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <th>S.No</th>
                                                <th>Track Id</th>
												<th>Product Id</th>
                                                <th>Track</th>
												<th>Download</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if(count($track) > 0){
                                            echo "<tbody>";
                                            $i = 1;
                                            foreach($track as $t){
                                        ?>
                                        <tr>
                                                <td><?=$i?></td>
                                                <td><?=$t->trackid?></td>
                                                <td><?=$t->product_id?></td>
                            
                                                <td><audio controls><source src = "<?=base_url()?>upload/Track/<?=$t->track?>"></audio></td>
												<td><a href = "<?=base_url()?>upload/Track/<?=$t->track?>" download = "<?=base_url()?>upload/Track/<?=$t->track?>">Download</td>
                                                <td><a href = "<?=base_url()?>AdminController/deletetrack/<?=$t->tid?>">Delete</a></td>
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
