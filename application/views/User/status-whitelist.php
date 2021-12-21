<div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                        <h1 class="mt-4">Whitelist Status</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">WhiteList Status</li>
                        </ol>
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="status-table" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <th>S.No</th>
                                                <th>Id</th>
                                                <th>Channel Name</th>
                                                <th>Channel Url</th>
                                                <th>Links</th>
												<th>Track Id</th>
                                                <th>Platform</th>
												
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if(count($whitelist) > 0){
                                            echo "<tbody>";
                                            $i = 1;
                                            foreach($whitelist as $l){
                                        ?>
                                        <tr>
                                                <td><?=$i?></td>
                                                <td><?=$l->wid?></td>
                                                <td><?php
                                                    $nameArr = explode(",", $l->channelname);
                                                    echo "<ul>";
                                                    foreach($nameArr as $name){
                                                        echo "<li>{$name}</li>";
                                                    }
                                                    echo "</ul>";
                                                ?></td>

                                               <td><?php
                                                    $urlArr = explode(",", $l->channelurl);
                                                    echo "<ul>";
                                                    foreach($urlArr as $url){
                                                        echo "<li>{$url}</li>";
                                                    }
                                                    echo "</ul>";
                                                ?></td>


                                                <td>
													<?php
														$links = explode(",", $l->links);
														
														echo "<ul>";
														foreach($links as $link){
															echo "<li>{$link}</li>";
														}	
														echo "</ul>";

													?>
												</td>
												<td><?=$l->trackid?></td>
                                                <td>
												<?php
														$platforms = explode(",", $l->platform);
														
														echo "<ul>";
														foreach($platforms as $platform){
															echo "<li>{$platform}</li>";
														}	
														echo "</ul>";

													?>
													
												</td>
                                               
												<td>
													<?php
														if($l->status == 0){
															echo "Approved";
														}elseif($l->status == 1){
															echo "Disapprove";
														}elseif($l->status == 2){
															echo "Rejected";
														}elseif($l->status == 3){
															echo "Waiting for confirmation";
														}
													?>
													
												</td>
                                              
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
