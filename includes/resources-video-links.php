<h5 class="text-center">Videos</h5>	
<div class="block_grid video_posts_grd">
	<div class="grid gtc-lg-3 gtc-md-2 gtc">
		<?php foreach($video_links as $vl_one){?>
		<a href="<?php echo $vl_one['url'];?>" title="<?php echo $vl_one['title'];?>" target="_blank"><img src="<?php echo $vl_one['img_url'];?>" alt="<?php echo $vl_one['alt_text'];?>" width="250" height="141" /> <br><?php echo $vl_one['text'];?></a>
		<?php }?>
	</div>
</div>	