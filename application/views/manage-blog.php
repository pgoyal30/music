<div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                        <h1 class="mt-4">Manage Blog</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Blog</li>
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
                                        if(count($allblog) > 0){
                                            echo "<tbody>";
                                            $i = 1;
                                            foreach($allblog as $blog){
                                        ?>
                                        <tr>
                                                <td><?=$i?></td>
                                                <!-- <td><$prod->id?></td> -->
                                                <td><?=$blog->title?></td>
                                                <td><a href = "<?=base_url()?>AdminController/editblog/<?=$blog->id?>">Edit</a></td>
                                                <td><a href = "<?=base_url()?>AdminController/deleteblog/<?=$blog->id?>">Delete</a></td>
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
