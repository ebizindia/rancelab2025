<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "FAQPage",
	"mainEntity": <?php echo json_encode(array_map(function($f){return ['@type'=>'Question', 'name'=>$f['q'], 'acceptedAnswer'=>['@type'=>'Answer','text'=>implode(' ', $f['a'])]];}, $faqs));?>
}
</script>
<?php /*
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": <?php echo json_encode($faqs);?>
}

    {
      "@type": "Question",
      "name": "Q1",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A1"
      }
    },
    {
      "@type": "Question",
      "name": "Q2",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A2"
      }
    }
  ]
<?php }?>
</script>

			<?php foreach ($faqs as $faq_one){?>
			<button class="faqaccordion"><?php echo $faq_one['name'];?></button>
			<div class="faqpanel">
				<?php echo implode('', array_map(function($txt){ return implode('', ['<p>', $txt, '</p>']);}, $faq_one['acceptedAnswer']['text']));?>
			</div>
			<?php }?>
		</div>
	</div>
</div>
*/?>