<div class="container">
	<div class="col-12">
		<div class="row justify-content-center">
			<div class="section-title text-center">
				<h3>FAQ</h3>
			</div>
			<?php foreach ($faqs as $faq_one){?>
			<button class="faqaccordion"><?php echo $faq_one['q'];?></button>
			<div class="faqpanel">
				<?php echo implode('', array_map(function($txt){ return implode('', ['<p>', $txt, '</p>']);}, $faq_one['a']));?>
			</div>
			<?php }?>
		</div>
	</div>
</div>