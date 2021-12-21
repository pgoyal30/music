<div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                        <h1 class="mt-4">Manage After Zip</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage After Zip</li>
                        </ol>
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <h3>After Zip</h3>
                                <div class="table-responsive">
                                    <table class="table table-bordered"  width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <th>S.No</th>
                                                <th>Zip</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            <?php
                                                if(!empty($product->azip1)){
                                                    $azip1Arr = explode(",", $product->azip1);
                                                    for($i = 0; $i < count($azip1Arr); $i++){
                                            ?>
                                                      <tr>
                                                        <td><?=$i+1?></td>
                                                        <td><a href = "<?=base_url()?>upload/AfterZip/<?=$azip1Arr[$i]?>" target = "_blank">View</a></li></td>
                                                        <td><a href = "<?=base_url()?>AdminController/deletea1zip/<?=$product->id?>/<?=$azip1Arr[$i]?>">Delete</a>
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
