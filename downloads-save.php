<?php include("config.php"); ?>
<?php
ob_start();
require_once 'includes/formtokenCls.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Download Retail Software for POS &amp; Restaurant | Stores Management Software</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="restaurant software, pos software, restaurant point of sale, retail pos software, Store Management Software, retail software" name="keywords">
	<meta content="For restaurateurs or retailers who own a standalone outlet or a chain of stores, RanceLab Software software provides POS billing, inventory control, financial accounting, payroll, customer loyalty program and mobile based reporting." name="description">
	<?php include("includes/common-top-scripts.php"); ?>
	<link href="css/form.css" rel="stylesheet">
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
			"streetAddress": "P-912, P-240, near Milan Sangha Club"
		},
		"name": "Rance Computer Pvt. Ltd. - Software Development Company from India",
		"telephone": "+91 (33) 4054 6100",
		"url": "https://www.rancelab.com/",
		"email": "info@rancelab.com"
	}
	{
		"@context": "https://schema.org",
		"@type": "Organization",
		"url": "https://www.rancelab.com",
		"logo": "https://www.rancelab.com/images/logo.png"
	}
	</script>
	<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Rance Computer Pvt. Ltd. - Software Development Company from India",
		"url": "https://www.rancelab.com",
		"sameAs": [
			"https://twitter.com/rancelab","https://www.facebook.com/fusionretail", "/"
		]
	}
	</script>
	<link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/downloads.php"/>
	<?php $pagename="downloads"; ?>
</head>
<body>
	<header id="header" class="header header-hide">
	<?php include("includes/common-header.php"); ?>
	</header><!-- #header -->

<section id="hero">
	<div class="hero-container">
		<div class="container">
			<h1 class="text-center">Download RanceLab Software</h1>		
		</div>
	</div>
</section>
  <section id="contact_us_section" class="about-us padd-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 col-lg-8">
					<div class="about-content">
						
						<p><strong>Congratulations!</strong> You have indeed taken the first step towards streamlining your business operations.</p>
						

						<form name="frmDownload" action="submitDownload.php" onsubmit="return download_validation();" method="post" autocomplete="on">
							<div class="form-group row">
								<label for="inputName" class="col-sm-3 col-form-label">Full Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="fullname" name="fullname" aria-describedby="name-format" placeholder="eg: Deepak Khaitan" required aria-required="true" pattern="[A-Za-z-0-9 '-]+" maxlength="50" autofocus="autofocus">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail" class="col-sm-3 col-form-label">Primary Email</label>
								<div class="col-sm-9">
									<input type="email" class="form-control" id="inputEmail" name="email" placeholder="eg: deepak@khaitan.com" value="" required aria-required="true" pattern="*@-.-">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPhone" class="col-sm-3 col-form-label">Phone Number</label>
								<div class="col-sm-9">
									<input type="tel" class="form-control" id="phone" name="phone" placeholder="eg: 9812345678" pattern="^(\+\d{10,12}|\d{10,14})$" minlength="10" required>
								</div>
							</div>
							<button type="submit" class="btn button-green rounded mb-3">Download Now!</button>
							<input type='hidden' name='tok' value='' id='demofrmtok' />
							<p><strong>Privacy Policy:</strong> We do not sell or rent your email address to anyone at any time. We only use your details to provide you with the requested information.</p>
						</form>
					</div>
					<div>
						<h4>What you will get?</h4>
						<ul>
							<li>Best national & international practices that helps you stay ahead of your competition</li>
<li>Easy-to-use awesome interface that gets more work done in the same time
<li>Scalable technology that requires minimum IT expertise to operate</li>
<li>Reduced total cost of ownership and increased returns on investment</li>
					</div>
				</div>
				<div class="col-md-4 col-lg-4">
					<!--<img src="images/hero-img.png" alt="" class="">-->
				</div>
			</div>
		</div>
	</section>

	<!--==========================
	Footer
	============================-->
	<footer class="footer">
	<?php include("includes/common-footer.php"); ?>
	</footer>
	<?php include("includes/mobile-slicky-footer.php");?>
	<?php include("includes/common-footer-scripts.php"); ?>
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
