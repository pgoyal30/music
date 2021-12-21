<div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                        <h1 class="mt-4">View Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">View Product</li>
                        </ol>
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered"  width="100%" cellspacing="0">
                                        
                                       
                                        <tr>
                                           <th>Title</th>   
                                           <td><?=$product->title?></td>    
                                        </tr>


                                        <tr>
                                           <th>Catalog No.</th>   
                                           <td><?=$product->catalogno?></td>    
                                        </tr>

                                        <tr>
                                           <th>Description</th>   
                                           <td><?=$product->description?></td>    
                                        </tr>

                                        <tr>
                                           <th>Track</th>   
                                           <td><?=$product->track?></td>    
                                        </tr>


                                        <tr>
                                           <th>Usages</th>   
                                           <td><?=$product->usages?></td>    
                                        </tr>


                                        <tr>
                                           <th>Key</th>   
                                           <td><?=$product->key?></td>    
                                        </tr>


                                        <tr>
                                           <th>BPM</th>   
                                           <td><?=$product->bpm?></td>    
                                        </tr>

                                        <tr>
                                           <th>Price 1</th>   
                                           <td><?=$product->price1?></td>    
                                        </tr>


                                        <tr>
                                           <th>Price 2</th>   
                                           <td><?=$product->price2?></td>    
                                        </tr>

                                        
                                        <tr>
                                           <th>Price 3</th>   
                                           <td><?=$product->price3?></td>    
                                        </tr>


                                        <tr>
                                           <th>Discount</th>   
                                           <td><?=$product->discount?></td>    
                                        </tr>

                                        <tr>
                                            <th>Photo</th>
                                            <td><a href = "<?=base_url()?>upload/Product/<?=$product->photo?>" target="_blank">View</a></td>
                                        </tr>


                                        <tr>
                                            <th>Sheet</th>
                                            <td><a href = "<?=base_url()?>upload/Product/<?=$product->sheet?>" target="_blank">View</a></td>
                                        </tr>

                                        <tr>
                                            <th>License 1</th>
                                            <td><a href = "<?=base_url()?>upload/Product/<?=$product->license1?>" target="_blank">View</a></td>
                                        </tr>

                                        <tr>
                                            <th>License 2</th>
                                            <td><a href = "<?=base_url()?>upload/Product/<?=$product->license2?>" target="_blank">View</a></td>
                                        </tr>


                                        <tr>
                                            <th>License 3</th>
                                            <td><a href = "<?=base_url()?>upload/Product/<?=$product->license3?>" target="_blank">View</a></td>
                                        </tr>

                                        <tr>
                                            <th>Demo Track</th>
                                            <td>
                                                <?php
                                                    if(!empty($product->demotrack)){
                                                        $demotrackArr = explode(",", $product->demotrack);
                                                        for($i = 0; $i < count($demotrackArr); $i++){
                                                ?>
                                                            <a href = "<?=base_url()?>upload/Demotrack/<?=$demotrackArr[$i]?>" target = "_blank">Demo Track <?=($i+1)?></a> 
                                                            
                                                <?php
                                                            if($i != count($demotrackArr) - 1){
                                                                echo " , ";
                                                            }
                                                        }
                                                    }
                                                ?>
                                            </td>
                                        </tr>


                                        <tr>
                                            <th>Preview Zip</th>
                                            <td>
                                                <?php
                                                    if(!empty($product->pzip1)){
                                                        $pzip1Arr = explode(",", $product->pzip1);
                                                        for($i = 0; $i < count($pzip1Arr); $i++){
                                                ?>
                                                            <a href = "<?=base_url()?>upload/PreviewZip/<?=$pzip1Arr[$i]?>" target = "_blank">Zip <?=($i+1)?></a> 
                                                            
                                                <?php
                                                            if($i != count($pzip1Arr) - 1){
                                                                echo " , ";
                                                            }
                                                        }
                                                    }
                                                ?>
                                            </td>
                                        </tr>

                                     




                                        <tr>
                                            <th>After Zip</th>
                                            <td>
                                                <?php
                                                    if(!empty($product->azip1)){
                                                        $azip1Arr = explode(",", $product->azip1);
                                                        for($i = 0; $i < count($azip1Arr); $i++){
                                                ?>
                                                            <a href = "<?=base_url()?>upload/AfterZip/<?=$azip1Arr[$i]?>" target = "_blank">Zip <?=($i+1)?></a> 
                                                            
                                                <?php
                                                            if($i != count($azip1Arr) - 1){
                                                                echo " , ";
                                                            }
                                                        }
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        
                                       

                                       
                                      




                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
