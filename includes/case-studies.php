<div class="container">
	<div class="row justify-content-center">
		<div class="col-12">
			<div class="about-content">
				<div class="row">
					<div class="col-12 text-center">
						<h3 class="ask_free_demo">Case Studies</h3>									
						<div class="case_study_block">
							<?php foreach ($case_studies as $cs_one){?>
							<a href="<?php echo $cs_one['url'];?>" target="case_studies">
								<img src="<?php echo $cs_one['img_url'];?>" alt="<?php echo $cs_one['alt_text'];?>" class="bottom"/>
								<br><span><?php echo $cs_one['text'];?></span>
							</a>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
