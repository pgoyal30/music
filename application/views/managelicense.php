<div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                        <h1 class="mt-4">Manage License</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage License</li>
                        </ol>
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <th>S.No</th>
                                                <th>Id</th>
												<th>License No.</th>
												<th>Edit</th>
												<th>Delete</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if(count($license) > 0){
                                            echo "<tbody>";
                                            $i = 1;
                                            foreach($license as $ls){
                                        ?>
                                        <tr>
                                                <td><?=$i?></td>
                                                <td><?=$ls->lid?></td>
                                                <td><?=$ls->licenseno?></td>
												<td><a href = "<?=base_url()?>AdminController/editlicense/<?=$ls->lid?>">Edit</a></td>
												<td><a href = "<?=base_url()?>AdminController/deletelicense/<?=$ls->lid?>">Delete</a></td>
                                               
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
