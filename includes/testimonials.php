<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="testimonials-content">
				<h2>Testimonials</h2>
				<div class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<?php 
						$active = true;
						foreach ($testimonials as $t_one){?>
						<div class="carousel-item <?php echo $active ? 'active' : '';$active=false;?>">
							<?php echo implode('', array_map(function($txt){ return implode('', ['<p>', $txt, '</p>']);}, $t_one['text']));?>
							<h4><?php echo $t_one['by'];?></h4>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
