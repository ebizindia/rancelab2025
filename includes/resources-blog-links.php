<h5 class="text-center">Blog posts</h5>						
<div class="block_grid blog_posts_grd">
	<div class="grid gtc-lg-3 gtc-md-2 gtc">
		<?php foreach($blog_links as $bl_one){?>
			<a title="<?php echo $bl_one['title'];?>" href="<?php echo $bl_one['url'];?>" target="_blank"><img src="<?php echo $bl_one['img_url'];?>" alt="<?php echo $bl_one['alt_text'];?>" width="250" height="117" /> <br><?php echo $bl_one['text'];?></a>
		<?php }?>                        
	</div>
</div>