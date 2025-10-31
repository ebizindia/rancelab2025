<?php 
include("../config.php"); 
$sw_section='restaurant';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Restaurant Management Software - Be More profitable | Rancelab</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="restaurant software, pos software, restaurant point of sale" name="keywords">
	<meta content="For restaurateurs who own a standalone outlet or a chain of stores, RanceLab software provides POS billing, inventory control, financial accounting, payroll, customer loyalty program and mobile based reporting." name="description">
	<link rel="preload" as="image" href="<?php echo CONST_APP_ABSURL;?>/img/restaurant-software.jpg">
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
    <link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/restaurant-software/quick-service-restaurant.php"/>
</head>
<body>
	<header id="header" class="header header-hide">
	<?php include("../includes/common-header.php"); ?>
	</header>
<section id="hero">
	<div class="hero-container">
		<div class="container">
			<h1 class="text-center">Most Advanced Restaurant Management Software</h1>
			<h2 class="text-center">for Your Ice Cream Shop </h2>
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
			Most Advanced Restaurant Management Software<br/>for Your Ice Cream Shop
			</div>
		</div>
	</section>

	<section id="hero" class="restaurant_software_header">
		<div class="hero-container">
			<div class="container text-center">
				<div class="row text-center mb-5">
					<div class="col-12 ">
						<p>We speed up your dining service and increase sales, ensure fast service, quick sales, happy takeaways and repeated / increased sales</p>
						
						<a href="<?php echo CONST_APP_ABSURL;?>/contact-us.php" class="btn ctabtn button-green rounded try_for_free home_free_trial">Get a Quote</a>
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
						<ul class="truncated-list pl-80px">
							<li>Touch screen Order (KOT) and Billing</li>
							<li>Unlimited forced questions and modifiers</li>
							<li>Pickup or Takeaway order processing</li>
							<li>Manages employee hours and manage payroll</li>
							<li>Recall items by numbers in cash register mode</li>
							<li>Increase in ticket size with cross-promotions</li>
							<li>Smart Kitchen Display System for Clear KOT</li>
							<li>Increase staff efficiency and increase revenue</li>
							<li>Analyses purchase patterns and eliminate unnecessary purchases</li>
							<li>Scan and Track retail items</li>
							<li>Customer loyalty program and point generation</li>
							<li>Graphs and Chart for better analysis</li>
							<li>Tag each item with photo for easy identification</li>
							<li>Printing KOT to remote kitchens</li>
							<li>Analyses your guest's eating habits for suggestive selling</li>
							<li>Generate reports with graphs for quick decision</li>
							<li>Physical Stock taking and Variance reporting</li>
							<li>Compare and evaluate business performance</li>
							<li>Analyses menu items and eliminate those are killing profits</li>
							<li>Food Costing and Menu Engineering</li>
							<li>Built-in financial account with GST</li>
							<li>Chain outlet management</li>
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
							'url' => CONST_APP_ABSURL.'/case-studies.php#gayatri-veg-culture',
							'alt_text' => 'Gayatri Veg Culture',
							'img_url' => CONST_APP_ABSURL.'/img/gayatri-veg-culture.jpg',
							'text' => 'Gayatri Veg Culture'
						],
						[
							'url' => CONST_APP_ABSURL.'/case-studies.php#m-s-papyrus-One-fat-belly',
							'alt_text' => 'M/s Papyrus One | Fat Belly',
							'img_url' => CONST_APP_ABSURL.'/img/ms-papyrus-one-fat-belly.jpg',
							'text' => 'M/s Papyrus One | Fat Belly'
						]*/
					];
	?>	
	<section id="caseStudies" class="case_studies padd-section green_bg">
	<?php include("../includes/case-studies.php");?>
	</section>

	<?php 
	$testimonials = [
						/*[
							'text' => ['Before RanceLab we used two different softwares to manage  our store and restaurant activities. RanceLab  has made our job easier by providing a single software where we can all our activities from one place and monitor all our reports.'],
							'by' => 'Mr Mahesh Kularni - Balaji (Manager, Gayatri Veg Culture)'
						],
						[
							'text' => ['RanceLab gives us detailed data of our customers and helps us analyze their likes and dislikes. It also helps us monitor our daily sales effectively. The product and the support service both are good, keep up the good job.'],
							'by' => 'Dhiraj Deka'
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
						<p>Along with great food, speed of service and fast checkout are the factors that ensures success and customer loyalty for a quick service restaurant. Customer are here for a quick bite or a pickup and expects quick service. Be it a latte or espresso, burger or a sandwich, they are very particular with their food preferences, modifiers and choice of toppings. FusionResto is designed to meet the needs and standards of the fast-paced environment of quick service restaurants.</p>
						<p>FusionResto is ready-to-use software for quick service restaurant, take away , ice cream parlors and coffee shops. Be it a single restaurant or a chain, it connects all the end-to-end business functions and keeps you ahead of the competition from other similar and large restaurants. Unlike others, it makes you profits sooner, reach break-even faster and open new outlets quicker</p>
						<p>With it’s intelligent point of sale system, ordering any item is just a few seconds away. It’s customizable menu screen, items with photographs, forced questions and modifiers will ensure that the server never go wrong in order taking. A Kitchen Display System will ensure clear display of KOT and enable server to serve more customers in the shortest time. It increases your productivity, improves customer satisfaction and streamlines your back-end processes.</p>
						<p>Powerful backend module of FusionResto, efficiently manages the recipe and production, food costing and menu engineering. It provides strict control on raw material purchase and supplier payments and ensures healthy supply chain management. An efficient physical stock taking and variance report system makes your kitchen staff more responsible. It handles complex discounts, gift vouchers, combo, happy-hour pricing, product or category based offers and seasonal or bill-value based promotions.</p>
						<p>FusionResto goes a step further and offers all your reporting and analysis in one place. A sales report provides an overview of all of the transactions you have completed during a selected time period. The summary report shows gross sales, tax collected, net sales, tips, total guests, table turn time, and a breakdown of all service types and payment methods</p>
						<p>FusionResto reports are designed to provide you with an overview of the sales metrics you really care about, at a high level. From there, it drills down to the transaction level to gain a more detailed insight into sales as they relate to orders, payments, shifts and accounts. These reports quickly surfaces all voids, discounts, and refunds. The reports also points to the servers and managers who are giving and approving these sales excetions.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php 
	$blog_links = [
				[
				'url' => 'https://www.rancelab.com/blog/6-tools-manage-quick-service-restaurant/',
				'title' => '6 Must Have Tools To Manage A Quick Service Restaurant',
				'alt_text' => '6 Must Have Tools To Manage A Quick Service Restaurant',
				'text' => '6 Must Have Tools To Manage A Quick Service Restaurant',
				'img_url' => CONST_APP_ABSURL.'/img/6-must-have-tools-to-manage-a-quick-service-restaurant.jpg'
				],
				[
				'url' => 'https://www.rancelab.com/blog/increase-sales-qsr/',
				'title' => 'Tips to Multiply Sales in your Quick Service Restaurant(QSR)',
				'alt_text' => 'Tips to Multiply Sales in your Quick Service Restaurant(QSR)',
				'text' => 'Tips to Multiply Sales in your Quick Service Restaurant(QSR)',
				'img_url' => CONST_APP_ABSURL.'/img/multiply-sales-QSR.jpg'
				],
				[
				'url' => 'https://www.rancelab.com/blog/6-ways-optimise-labour-costs-quick-service-restaurant/',
				'title' => '6 Ways To Optimise Labour Costs in your Quick Service Restaurant',
				'alt_text' => '6 Ways To Optimise Labour Costs in your Quick Service Restaurant',
				'text' => '6 Ways To Optimise Labour Costs in your Quick Service Restaurant',
				'img_url' => CONST_APP_ABSURL.'/img/6-Ways-To-Optimise-Labour-Costs-in-your-Quick-Service-Restaurant.jpg'
				]
			];

	$video_links = [
				[
				'url' => 'https://www.youtube.com/watch?v=kL5g26oB2PQ',
				'title' => 'MasterChef to a Successful Restaurateur with FusionResto - Best Restaurant Software',
				'alt_text' => 'MasterChef to a Successful Restaurateur with FusionResto - Best Restaurant Software',
				'text' => 'MasterChef to a Successful Restaurateur with FusionResto - Best Restaurant Software',
				'img_url' => 'https://img.youtube.com/vi/kL5g26oB2PQ/mqdefault.jpg'
				],
				[
				'url' => 'https://www.youtube.com/watch?v=5sEiGw04Nm8',
				'title' => 'How to Track & Manage Restaurant Chains - FusionResto Restaurant Chains Management',
				'alt_text' => 'How to Track & Manage Restaurant Chains - FusionResto Restaurant Chains Management',
				'text' => 'How to Track & Manage Restaurant Chains - FusionResto Restaurant Chains Management',
				'img_url' => 'https://img.youtube.com/vi/5sEiGw04Nm8/mqdefault.jpg'
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
						[
							'alt_text' => 'Peter Donut',
							'img_url' => CONST_APP_ABSURL.'/images/peter-donut.svg'
						],
						[
							'alt_text' => 'Chai Break',
							'img_url' => CONST_APP_ABSURL.'/images/chai-break.svg'
						],
						[
							'alt_text' => 'Peter Donut',
							'img_url' => CONST_APP_ABSURL.'/images/peter-donut.svg'
						],
						[
							'alt_text' => 'Havmor Ice Cream',
							'img_url' => CONST_APP_ABSURL.'/images/havmor.svg'
						],
						[
							'alt_text' => 'Pizzavito',
							'img_url' => CONST_APP_ABSURL.'/images/pizzavito.svg'
						],
						[
							'alt_text' => 'Momo I Am',
							'img_url' => CONST_APP_ABSURL.'/images/momo-i-am.svg'
						],
						[
							'alt_text' => 'Tea Post',
							'img_url' => CONST_APP_ABSURL.'/images/tea-post.svg'
						]
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