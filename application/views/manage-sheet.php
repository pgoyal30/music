<div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                        <h1 class="mt-4">Manage Sheet</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Sheet</li>
                        </ol>
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <th>S.No</th>
                                                <th>Id</th>
												<th>Product Id</th>
                                                <th>File</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if(count($sheet) > 0){
                                            echo "<tbody>";
                                            $i = 1;
                                            foreach($sheet as $s){
                                        ?>
                                        <tr>
                                                <td><?=$i?></td>
                                                <td><?=$s->sid?></td>
                                                <td><?=$s->product_id?></td>
                            
                                                <td><a href = "<?=base_url()?>upload/Sheet/<?=$s->sheetname?>" download = "<?=$s->sheetname?>">Download</a></td>
                                                <td><a href = "<?=base_url()?>AdminController/deletesheetfile/<?=$s->sid?>">Delete</a></td>
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
