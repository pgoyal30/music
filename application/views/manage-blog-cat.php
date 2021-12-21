<div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                        <h1 class="mt-4">Manage Blog Category</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Blog Category</li>
                        </ol>
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Title</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if(count($bcat) > 0){
                                            echo "<tbody>";
                                            $i = 1;
                                            foreach($bcat as $cat){
                                        ?>
                                        <tr>
                                                <td><?=$i?></td>
                                                <!-- <td><=$cat->id?></td> -->
                                                <td><?=$cat->name?></td>
                                                
                                                <td><a href = "<?=base_url()?>AdminController/editbcat/<?=$cat->id?>">Edit</a></td>
                                                <td><a href = "<?=base_url()?>AdminController/deletebcat/<?=$cat->id?>">Delete</a></td>
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
