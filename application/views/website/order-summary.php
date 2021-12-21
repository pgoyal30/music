<div class="container cart">
	<div class="row">
		<div class="col-md-12">
			<h2>In Your Cart:</h2>
			<div class="row">
				<?php
				if(isset($_SESSION['cart'])){
					// foreach($_SESSION['cart'] as $cart){
					// 	print_r($cart);
					// 	echo $cart['id'];
					// }
					// die();
					// echo "<pre>";
					// print_r($_SESSION['cart']);
					// echo "</pre>";
					// die();
					foreach($_SESSION['cart'] as $cart){
					  foreach($tracks as $t){
						if($t->id == $cart['id']){
				?>
				<div class="col-12 p-3 my-4" style = "background: #E4E4E4;">
				<span style = "float: right; margin-right: 20px"><a href = "<?=base_url()?>Website/removecart/<?=$cart['id']?>/<?=$cart['price']?>"><i class="fa fa-times" aria-hidden="true"></i></a></span>
				<a href = "<?=base_url()?>Website/track_detail/<?=$t->id?>">
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
				<h4 class="song-name"><?=$t->title?></h4>
				</a>
                <p class = "song-by">Production / Film Scores, Romantic</p>
				<p class = "total-price">Total: $ <?=$cart['price']?>

               </div>
				<?php
						}
					}
				}
				}else{
				?>
				<div class = "col-12">
					<h4>Empty</h4>
			    </div>
				<?php
				}
				?>
			   <!-- <div class="col-12 p-3 my-4" style = "background: #E4E4E4;">
				<span style = "float: right; margin-right: 20px"><i class="fa fa-times" aria-hidden="true"></i></span>
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
				<h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
               </div>        
			     
			   <div class="col-12 my-4 p-3" style = "background: #E4E4E4;">
				<span style = "float: right; margin-right: 20px"><i class="fa fa-times" aria-hidden="true"></i></span>
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
				<h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
               </div>        


			   <div class="col-12 my-4 p-3" style = "background: #E4E4E4;">
				<span style = "float: right; margin-right: 20px"><i class="fa fa-times" aria-hidden="true"></i></span>
                <img src="<?=base_url()?>public/static/img/play-button.png" alt="">
				<h4 class="song-name">Reliving Memories</h4>
                <p class = "song-by">Production / Film Scores, Romantic</p>
               </div>         -->
			    
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-12">
			<p class = "total-price">Total: $ 
				<?php
					if(isset($_SESSION['cart'])){
						$amt = 0;
						foreach($_SESSION['cart'] as $cart){
							$amt += $cart['price'];
						}
						echo $amt;
						
					
					}else{
						echo 0;
					}


				?>

			</p>
		</div>
	</div>
</div>
