<div class="container">
	<div class="row justify-content-center mb-3">
		<h2 class="text-center">Few of Our Esteemed Customers</h2>
	</div>
	<div class="row justify-content-center">
		<div class="col sliderbody">
			<div class="slider">
				<div class="slide-track">
					<?php foreach ($esteemed_customers as $ec_one){?>
					<div class="slide">
						<img src="<?php echo $ec_one['img_url'];?>" alt="<?php echo $ec_one['alt_text'];?>"/>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>
