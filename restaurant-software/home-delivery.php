<?php include("../config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Restaurant Management Software - Be More profitable | Rancelab</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="restaurant software, pos software, restaurant point of sale" name="keywords">
	<meta content="For restaurateurs who own a standalone outlet or a chain of stores, RanceLab software provides POS billing, inventory control, financial accounting, payroll, customer loyalty program and mobile based reporting." name="description">
	<?php include("../includes/common-top-scripts.php"); ?>
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
	"logo": "https://www.rancelab.com/images/logo.svg"
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
	<link href="<?php echo CONST_APP_ABSURL;?>/css/restaurant-software.css" rel="stylesheet">
	<link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/restaurant-software/home-delivery.php"/>
</head>
<body>
	<header id="header" class="header header-hide">
	<?php include("../includes/common-header.php"); ?>
	</header>
<section id="hero">
	<div class="hero-container">
		<div class="container">
			<h1 class="text-center">We make your delivery business efficient, smart and safe <br>We create delightful delivery experience for your customers</h1>
			<h2 class="text-center">We help you deliver happiness We deliver happy customers </h2>
			<div class="row text-center mt-5 mb-5">
				<div class="col-12 ">
					 <a href="<?php echo CONST_APP_ABSURL;?>/downloads.php" class="btn ctabtn button-green rounded try_for_free">View Demo</a>&nbsp;&nbsp; 
                    <a href="tel:+919831926662" class="btn ctabtn button-green rounded try_for_free btn_display_block">Call an Expert</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--
	<section class="restaurant_software_container text-center">
		<div class="restaurant_software_banner">
			<div class="restaurant_software_banner_text">
			We make your delivery business efficient, smart and safe<br/>We create delightful delivery experience for your customers<br/>We help you deliver happiness<br/>We deliver happy customers
			</div>
		</div>
	</section>

	<section id="hero" class="restaurant_software_header fadeIn">
		<div class="hero-container">
			<div class="container text-center">
				<div class="row text-center mt-5 mb-5">
					<div class="col-12 ">
						<a href="<?php echo CONST_APP_ABSURL;?>/about-us.php" class="btn ctabtn button-green rounded try_for_free home_read_more">View Demo</a>&nbsp;&nbsp; 
						<a href="<?php echo CONST_APP_ABSURL;?>/contact-us.php" class="btn ctabtn button-green rounded try_for_free home_free_trial">Need a Quote</a>
					</div>
				</div>
			</div>
		</div>
	</section>
-->
	<section id="fusionErp" class="fusion-erp fusion_erp_heading_four padd-section green_bg">
	<?php include("../includes/restaurant-software-modules.php"); ?>
	</section>

	<section id="restaurantDetail" class="restaurant_detail padd-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="about-content">
						<h3 class="key_heighlight_one">Key highlights of the software</h3>
						<ul class="truncated-list">
							<li>Capture new customer data on the fly</li>
							<li>Easy lookup by mobile number or customer name</li>
							<li>One tap view of past orders and food preferences</li>
							<li>Phone order processing, integration with IPBX</li>
							<li>Invoices Notes and Instructions for Delivery</li>
							<li>Increases ticket size with cross-promotions</li>
							<li>Single screen to view online and offline locations</li>
							<li>Increase staff efficiency and increase revenue</li>
							<li>Lowest training curve for higher productivity</li>
							<li>Customer loyalty program with points or cashback</li>
							<li>Detailed analysis of sales proceedings</li>
							<li>Connects operators, customers and drivers</li>
							<li>Home delivery app for customers to place orders</li>
							<li>Reduce delivery cost and increase productivity</li>
							<li>Optimize service with specific instructions for each delivery</li>
							<li>SMS notification and order updates</li>
							<li>Compare and evaluate business performance</li>
							<li>Food Costing and Menu Engineering to increase profitability</li>
							<li>Built-in payroll and financial account</li>
							<li>Multiple remote kitchen management</li>
							<li>Optimize delivery routes based on customer grid</li>
							<li>Increased customer satisfaction and retention</li>
						</ul>
						<a class="show-more" onclick="this.previousElementSibling.classList.remove('truncated-list');" href="javascript:void(0);">Show more</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php 
	$case_studies = [
						/*[
							'url' => CONST_APP_ABSURL.'/case-studies.php#gokul-sweets',
							'alt_text' => 'Gokul Sweets',
							'img_url' => CONST_APP_ABSURL.'/img/gokul-sweets.jpg',
							'text' => 'Gokul Sweets'
						]*/
					];
	?>	
	<section id="caseStudies" class="case_studies padd-section green_bg">
	<?php include("../includes/case-studies.php");?>
	</section>

	<?php 
	$testimonials = [
						/*[
							'text' => ['RanceLab saves our time and is a very good software. It has reduced my tension and has given me a lot of free time to look after various other activities.'],
							'by' => 'Anand Keshari'
						]*/
					];
	?>
	<section id="testimonials" class="padd-section-testimonials text-center">
	<?php include("../includes/testimonials.php");?>
	</section>
	
	<section id="restaurantDetail" class="restaurant_detail padd-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="about-content">
						<p>When the phones are ringing with callers looking to place delivery orders, the responsiveness of the operator is important. Recall customer's name, address and pull out order history with phone number. Choose whether an order is to hold or go, add customer preferences and applicable delivery charges. Consolidate the process of preparing the food with remote printing and put the invoice on hold until the driver brings back the customer's payment. Synchronizing between outlet and customer and updating them with progress. Welcome to Home Delivery Business!</p>
						<p>FusionResto is ready-to-use software for home delivery business. Be it a single kitchen or a chain, it connects all the end-to-end business functions and keeps you ahead of the competition from other similar and large formats. Unlike others, it makes you profits sooner, reach break-even faster and open new outlets quicker.</p>
						<p>FusionResto provides the easiest way to lead an efficient delivery with happy customers.  It’s integrated customer relationship management (CRM) program captures the data points you’ve always needed such as the customers' contact information, food preferences, delivery addresses and the order history. It enables operator to extend more personalised experience to the caller while ordering. </p>
						<p>It creates a detailed profile of customers, their buying patterns, average ticket size, most preferred items and frequency to order. Over time, as it records the information about your customers, becomes the centralized database for your business. Using this data, FusionResto helps create personalised offers and send it via customized messages. It also identifies the customer who is regular and who haven’t ordered in a while and enables you to easily leverage it in the most profitable way.</p>
						<p>FusionResto goes a step further and offers all your reporting and analysis in one place. A sales report provides an overview of all of the transactions you have completed during a selected time period. The summary report shows gross sales, tax collected, net sales, total orders, and a breakdown of payment methods.</p>
						<p>FusionResto reports are designed to provide you with an overview of the sales metrics you really care about, at a high level. From there, it drills down to the transaction level to gain a more detailed insight into sales as they relate to orders, payments, shifts and accounts. These reports quickly surfaces all voids, discounts, and refunds. The reports also points to the servers and managers who are giving and approving these sales exceptions.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php 
	$blog_links = [
				[
				'url' => 'https://www.rancelab.com/blog/robust-restaurant-pos-quicken-food-deliveries/',
				'title' => 'How a Robust Restaurant POS Can Quicken Food Deliveries',
				'alt_text' => 'How a Robust Restaurant POS Can Quicken Food Deliveries',
				'text' => 'How a Robust Restaurant POS Can Quicken Food Deliveries',
				'img_url' => CONST_APP_ABSURL.'/img/how-a-robust-restaurant-POS-can-quicken-food-deliveries.jpg'
				],
				[
				'url' => 'https://www.rancelab.com/blog/tips-to-improve-your-restaurant-home-delivery-service/',
				'title' => 'Tips to improve your restaurant home delivery service',
				'alt_text' => 'Tips to improve your restaurant home delivery service',
				'text' => 'Tips to improve your restaurant home delivery service',
				'img_url' => CONST_APP_ABSURL.'/img/no-image.jpg'
				],
				[
				'url' => 'https://www.rancelab.com/blog/home-delivery-of-food-bon-appetit-at-the-doorstep-of-foodies/',
				'title' => 'Home Delivery of Food: Bon Appétit At The Doorstep Of Foodies',
				'alt_text' => 'Home Delivery of Food: Bon Appétit At The Doorstep Of Foodies',
				'text' => 'Home Delivery of Food: Bon Appétit At The Doorstep Of Foodies',
				'img_url' => CONST_APP_ABSURL.'/img/Home-Delivery.jpg'
				]
			];

	$video_links = [
				[
				'url' => 'https://www.youtube.com/watch?v=2Ql8eBXgQPs',
				'title' => 'Best Home Delivery Software for Restaurants - FusionResto Restaurant Management Software',
				'alt_text' => 'Best Home Delivery Software for Restaurants - FusionResto Restaurant Management Software',
				'text' => 'Best Home Delivery Software for Restaurants - FusionResto Restaurant Management Software',
				'img_url' => 'https://img.youtube.com/vi/2Ql8eBXgQPs/mqdefault.jpg'
				]
			];
	?>
	<section class="resources_block padd-section resources">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col">
					<div class="about-content">
						<div class="row">
							<div class="col">
								<h3 class="ask_free_demo text-center">Resources</h3>
								<?php
								include("../includes/resources-blog-links.php");
								include("../includes/resources-video-links.php");
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php 
	$esteemed_customers = [
						/*[
							'alt_text' => 'Raize The Bar',
							'img_url' => CONST_APP_ABSURL.'/images/raize-the-bar.svg'
						]*/
					];
	?>
	<section id="client-slider" class="esteemed-customers padd-section py-3">
	<?php include("../includes/esteemed-customers.php");?>
	</section>

	<section id="request_demo">
	<?php include("../includes/request-demo.php");?>
	</section>

	<?php
	$faqs = [
				[
					'q' => 'Can you briefly help me understand the product?',
					'a' => ['For a single outlet or a chain, RanceLab is a ready-to-use software for Restaurant businesses. It takes care of your billing (POS), finance, inventory, customer loyalty, supply chain, payroll, analysis, promotions, and offers. Unlike other software, it makes you profit sooner, reach the break-even faster, and open new outlets quicker.']
				],
				[
					'q' => 'Does it support multi location?',
					'a' => ['As soon as your organization grows, you will like to have a system that offers 360 degree solutions to your requirements. RanceLab perfectly fits into that and adapts to your business needs and offers modules that
	                        scale your business.']
				],
				[
					'q' => 'Is it available on cloud or desktop?',
					'a' => ['RanceLab can be installed and used in various ways that suit your infrastructure. It can be installed on a local machine (desktop or pos) or network of machines. It can be hosted on the cloud and accessed from
	                        anywhere. It is a perfect companion for a single location or chain of locations.']
				],
				[
					'q' => 'Does it require the Internet to work?',
					'a' => ['Desktop software does not require the Internet to function. However, the cloud-hosted application requires Internet connectivity. You may use your own mobile data to keep the operations running.']
				],
				[
					'q' => 'What kind of support do you offer?',
					'a' => ['We offer 24/7 support via various support channels such as phone, email, online ticket, web FAQ, online manual, context-sensitive built-in help, dedicated support / account managers.']
				]
			];
	?>
	<section id="faq-home" class="padd-section py-3">
	<?php include("../includes/faq.php");?>	
	</section>

	<section class="call-to-action padd-section green_bg">
	<?php include("../includes/free-demo-cta.php");?>
	</section>

	<footer class="footer">
	<?php include("../includes/common-footer.php"); ?>
	</footer>
	<?php include("../includes/mobile-slicky-footer.php");?>
	<?php include("../includes/common-footer-scripts.php"); ?>
	<?php include("../includes/faq-accordion-js.php"); ?>	
</body>
</html>