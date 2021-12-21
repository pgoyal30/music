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
                                                <th>Demo Track</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            <?php
                                                if(!empty($product->demotrack)){
                                                    $demotrackArr = explode(",", $product->demotrack);
                                                    for($i = 0; $i < count($demotrackArr); $i++){
                                            ?>           
                                                      <tr>
                                                        <td><?=$i+1?></td>
                                                        <td><a href = "<?=base_url()?>upload/DemoTrack/<?=$demotrackArr[$i]?>" target = "_blank">View</a></li></td>
                                                        <td><a href = "<?=base_url()?>AdminController/deleteproductdemo/<?=$product->id?>/<?=$demotrackArr[$i]?>">Delete</a>
                                                      </tr>
                                            <?php
                                                    }
                                            ?>


                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
