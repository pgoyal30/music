

<div class="track-header">
    <div class = "container">
        <div class = "row">
            <div class = "col-md-4 col-sm-12 track-header-img">
                <img src = "<?=base_url()?>upload/Product/<?=$track->photo?>"  height = "350px" width = "100%">
            </div>
    
            <div class = "col-md-8 col-sm-12 track-header-content">
                <h2><?=$track->title?> - Demo House</h2>
                <hr>
                <p>Genre: <a href = "#">House</a></p>
                <p>Additional Styles:</p>
                <hr>
                <div class = "row">
                    <div class="col-md-6">
                        <a href="#">Download Taster Pack</a>
                        <br>
                        <a href="#">View all files from Loopmasters</a>
                    </div>
                    <div class = "col-md-6">
                        <a href = "#">Loops</a>
                        &nbsp;
                        <a href = "#">Loops</a>
                        &nbsp;
                        <br>
                        <a href = "#">Loops</a>
                        &nbsp;
                        <a href = "#">Loops</a>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class = 'track-detail'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <?=$track->description?>
                
            </div>

            <div class="col-md-4">
                <h3>Choose Your Format</h3>
                <div class="format">
                    <div class="row format-style">
                        <div class="col-md-6">
                            Ableton Live 9.7.5
							<audio controls>
						<source src="<?=base_url()?>upload/Product/<?=$track->demotrack?>" >
						
						Your browser does not support the audio tag.
                     </audio>
                        </div>
                        <div class="col-md-6">
                            <span class = "price-right">Rs. <?=$track->price1?> <a href="<?=base_url()?>Website/addtocart/<?=$track->id?>/<?=$track->price1?>" class = "btn btn-primary"><i class="fas fa-shopping-cart"></i></a></span>
                        </div>
                    </div>
                    <div class="row format-style">
                        <div class="col-md-6">
                            Ableton Live 9.7.5
                        </div>
                        <div class="col-md-6">
                            <span class = "price-right">Rs. <?=$track->price2?> <a href="<?=base_url()?>Website/addtocart/<?=$track->id?>/<?=$track->price2?>" class = "btn btn-primary"><i class="fas fa-shopping-cart"></i></a></span>
                        </div>
                    </div>
                    <div class="row format-style">
                        <div class="col-md-6">
                            Ableton Live 9.7.5
                        </div>
                        <div class="col-md-6">
                            <span class = "price-right">Rs. <?=$track->price3?> <a href="<?=base_url()?>Website/addtocart/<?=$track->id?>/<?=$track->price3?>" class = "btn btn-primary"><i class="fas fa-shopping-cart"></i></a></span>
                        </div>
                    </div>
                   
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="may-like">
    <div class="container">
        <h3 class = "my-3">You may also like</h3>
        <div class="row text-center">

		<?php
				foreach($tracks as $t){
			?>
				
            <div class = "col-lg-3 col-md-4 col-sm-6 col-xs-10  my-3 p-3">
				<a href = "<?=base_url()?>Website/track_detail/<?=$t->id?>">
                <img src="<?=base_url()?>upload/Product/<?=$t->photo?>" alt="" class = "img-fluid">
                <p><strong><?=$t->title?></strong></p>
				</a>
                <!-- <p>by: <span class = "text-primary">Loopmasters</span></p> -->
            </div>
			<?php
				}
			?>
            <!-- <div class = "col-lg-3 col-md-4 col-sm-6 col-xs-10  my-3 p-3">
                <img src="<?=base_url()?>public/static/img/album.jpg" alt="" class = "img-fluid">
                <p><strong>Robbie Rivera - Demo House</strong></p>
                <p>by: <span class = "text-primary">Loopmasters</span></p>
            </div>

            <div class = "col-lg-3 col-md-4  col-sm-6 col-xs-10 my-3 p-3">
                <img src="<?=base_url()?>public/static/img/album.jpg" alt="" class = "img-fluid">
                <p><strong>Robbie Rivera - Demo House</strong></p>
                <p>by: <span class = "text-primary">Loopmasters</span></p>
            </div>

            <div class = "col-lg-3 col-md-4  col-sm-6 col-xs-10  my-3 p-3">
                <img src="<?=base_url()?>public/static/img/album.jpg" alt="" class = "img-fluid">
                <p><strong>Robbie Rivera - Demo House</strong></p>
                <p>by: <span class = "text-primary">Loopmasters</span></p>
            </div>

            <div class = "col-lg-3 col-md-4 col-sm-6 col-xs-10  my-3 p-3">
                <img src="<?=base_url()?>public/static/img/album.jpg" alt="" class = "img-fluid">
                <p><strong>Robbie Rivera - Demo House</strong></p>
                <p>by: <span class = "text-primary">Loopmasters</span></p>
            </div> -->

        
        </div>
    </div>
</div>


