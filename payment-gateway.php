<?php include("config.php"); ?>
<?php
ob_start();
//require_once 'tracking.php'; 
require_once 'includes/formtokenCls.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Restaurant &amp; Retail POS Software - Be More profitable | RanceLab</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="restaurant software, pos software, restaurant point of sale, retail pos software, Store Management Software, retail software" name="keywords">
<meta content="For restaurateurs or retailers who own a standalone outlet or a chain of stores,  RanceLab software provides POS billing, inventory control, financial accounting, payroll, customer loyalty program and mobile based reporting." name="description">

<?php include("includes/common-top-scripts.php"); ?>
<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "Organization",
	
	  "address": {
		"@type": "PostalAddress",
		"addressLocality": "Kolkata",
		"addressRegion": "West Bengal",
		"postalCode": "700089",
		"streetAddress": "P-912, P-240, Lake Town, near Milan Sangha Club"
	  },
	  
	  "name": "Rance Computer Private Limited",
	  "telephone": "+91 (33) 4054 6100",
	  "url": "https://www.rancelab.com/",
	  "email": "info@rancelab.com"
	}
	{
	  "@context": "https://schema.org",
	  "@type": "Organization",
	  "url": "https://www.rancelab.com",
	  "logo": "https://www.rancelab.com/../img/logo.png"
	}
</script>
<script type="application/ld+json">
	{
	  "@context": "http://schema.org",
	  "@type": "Organization",
	  "name": "Rance Computer Private Limited",
	  "url": "https://www.rancelab.com",
	  "sameAs": [
	  "https://twitter.com/rancelab","https://www.facebook.com/fusionretail", "/"
	  ]
	}
</script>
<link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/payment gateway.php"/>
</head>
<body>
<header id="header" class="header header-hide">
	<?php include("includes/common-header.php"); ?>
</header>
<!-- #header -->
<section id="hero">
	<div class="hero-container">
		<div class="container">                    
			<h1 class="text-center">&nbsp;</h1>
			<!--<h2 class="text-center">RanceLab® FusionResto
				<br />Complete software for restaurant management!
			</h2>-->
			<div class="row text-center mt-5 mb-5">
				<div class="col-12 ">
					<!--<a href="<?php echo CONST_APP_ABSURL;?>/downloads.php" class="btn ctabtn button-green rounded">Download Free Trial</a>-->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- #hero -->
<section id="contact_us_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="text-center pb-4">
					<a href="#" class="btn rounded buy_now_button">BUY Now</a>	
				</div>		
				<!--<h4 class="text-center">Please let us know about your requirement & we will get back with a no-obligation proposal soon.</h4>-->
				<p class="text-center"></p>	
			</div>           
		</div>
	</div>			
</section>
<!--
<div class="contact_us_detail">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">						
				<p class="text-center"></p>				
				<p class="text-center"></p>						
			</div>
		</div>		
	</div>
</div>-->
<footer class="footer">
	<?php include("includes/common-footer.php"); ?>
</footer>
<?php include("includes/mobile-slicky-footer.php");?>
<?php include("includes/common-footer-scripts.php"); ?>
<script src="<?php echo CONST_APP_ABSURL;?>/js/validate-form.js"></script>
<script>
  window.addEventListener('DOMContentLoaded', function() {
  var tok_elem = document.getElementById('demofrmtok');
  $.ajax({
	async:true,
	type:'post',
	dataType:'json',
	data:{mode:'stok'},
	cache:false,
	url:''
  }).done(function(resp,status,xhrobj){
	tok_elem.value=resp.tk;
  }).fail(function(xhrobj,status,error){
	tok_elem.value='';
  });
});
</script>
</body>
</html>