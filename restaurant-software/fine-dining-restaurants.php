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
	<link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/restaurant-software/fine-dining-restaurants.php"/>
</head>
<body>
	<header id="header" class="header header-hide">
	<?php include("../includes/common-header.php"); ?>
	</header>

<section id="hero">
	<div class="hero-container">
		<div class="container">
			<h1 class="text-center">We convert your Good Restaurant into a Great Business</h1>
			<h2 class="text-center">We help you serve Good food and Great experience </h2>
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
			We convert your Good Restaurant into a Great Business<br/>We help you serve Good food and Great experience
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
							<li>Touch screen, Mobile and Tab Order (KOT) and Billing</li>
							<li>Smart feedback tracking system for customers</li>
							<li>Single order routed to multiple kitchen and bar</li>
							<li>Business Intelligence Reports on your key tips</li>
							<li>Multiple modes of payment and e-wallets for quick settlement</li>
							<li>Various work modes, Dine-in, Takeaway and Delivery</li>
							<li>Tip accounting and Reservation system</li>
							<li>Graphical Layout of Restaurant floor</li>
							<li>Strict control on raw material purchase</li>
							<li>Loyalty program with reward points and cashback</li>
							<li>Identifies trends, best selling items, high margin and underselling items</li>
							<li>Multiple color-coded Menus with Item Photo and Today's Special</li>
							<li>Integrated SMS that sends Thank You notes to customers</li>
							<li>Add modifiers like "Less Spicy" and "No Onion"</li>
							<li>Kitchen Display System for smart execution of orders</li>
							<li>Manage stock of premium liquor in tots and bottles</li>
							<li>Recipe management with Production</li>
							<li>Physical Stock taking and Variance reporting</li>
							<li>Rate Contract and Price List for monthly supplies</li>
							<li>Food Costing and Menu Engineering</li>
							<li>Built-in payroll and financial account with GST</li>
							<li>Manage single and chain of Restaurant</li>
						</ul>
						<a class="show-more" onclick="this.previousElementSibling.classList.remove('truncated-list');" href="javascript:void(0);">Show more</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php 
	$case_studies = [
						[
							'url' => CONST_APP_ABSURL.'/case-studies.php#gayatri-veg-culture',
							'alt_text' => 'Gayatri Veg Culture',
							'img_url' => CONST_APP_ABSURL.'/img/gayatri-veg-culture.jpg',
							'text' => 'Gayatri Veg Culture'
						],
						[
							'url' => CONST_APP_ABSURL.'/case-studies.php#m-s-papyrus-one-fat-belly',
							'alt_text' => 'M/s Papyrus One | Fat Belly',
							'img_url' => CONST_APP_ABSURL.'/img/ms-papyrus-one-fat-belly.jpg',
							'text' => 'M/s Papyrus One | Fat Belly'
						]
					];
	?>	
	<section id="caseStudies" class="case_studies padd-section green_bg">
	<?php include("../includes/case-studies.php");?>
	</section>

	<?php 
	$testimonials = [
						[
							'text' => ['"Before RanceLab we used two different softwares to manage  our store and restaurant activities. RanceLab  has made our job easier by providing a single software where we can all our activities from one place and monitor all our reports"'],
							'by' => 'Mr Mahesah Kularni - Balaji (Manager, Gayatri Veg Culture)'
						],
						[
							'text' => ['RanceLab gives us detailed data of our customers and helps us analyze their likes and dislikes. It also helps us monitor our daily sales effectively. The product and the support service both are good, keep up the good job.'],
							'by' => 'Dhiraj Deka'
						]
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
						<p>Running a fine dining restaurant requires a lot of hard work and long hours. Keeping customers happy and coming back, tracking which menu items are profitable, ordering the correct amount of stock and supervising employees are the key ingredients to a successful restaurant.</p>
						<p>FusionResto is ready-to-use software for restaurants and bar. Be it a single restaurant or a chain, it connects all the end-to-end business functions and keeps you ahead of the competition from other similar and larger restaurants. Unlike others, it makes you profits sooner, reach break-even faster and open new outlets quicker.</p>
						<p>FusionResto comes with easy-to-setup tables section and seats, user-defined color-coded menu, forced question, modifiers, item prices, taxes, combo offers, cancellation, void reasons, split check (bill) and join tables. Its intelligent touch point of sale with mobile or tab (handheld) ordering system enhances your guests’ experience. It enables captains to take orders faster and accurately and process them more efficiently.</p>
						<p>With kitchen display system, orders are displayed on the screen along with modifiers. Clear display of KOT on display screens increases the efficiency of chef which results into a faster service. Alternatively, it prints order tickets (kot) to multiple kitchens and beverage counters. It effectively manages the stock of premium liquor in tots and bottles. It works on all service modes, such as dine-in, takeaway and delivery.</p>
						<p>Bills can be settled at the table itself through any mode of payment, including e-wallets. Smart customer feedback encourages customer to give prompt feedback, helping service staff to settle the dispute within the premises and understand the areas of improvement. With powerful reservation system and graphical layout of restaurant floor, your reservation manager can check the current status of every table and other activities performed in-house and easily manage the waiting guests or weekend rush. Integrated alert system sends out thank you sms to your guests, giving them a perfect dining experience.</p>
						<p>It’s robust inventory management system efficiently manages the recipe and production, food costing and menu engineering, leaving almost no scope of malpractices or leakages. It comes with a strict control on raw material purchase and vendor payments. Built-in physical stock taking and variance report compares and reports the actual consumption with that of defined in recipe and keeps the kitchen health at an optimum level.</p>
						<p>FusionResto simplifies business work process and increases business efficiency and performance by administering a tightly integrated system that takes care of numerous managerial activities.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php 
	$blog_links = [
				[
					'url' => 'https://www.rancelab.com/blog/quick-guide-start-a-restaurant-india-2018/',
					'title' => 'A Quick Guide to Start a Restaurant in India - 2018',
					'alt_text' => 'A Quick Guide to Start a Restaurant in India - 2018',
					'text' => 'A Quick Guide to Start a Restaurant in India - 2018',
					'img_url' => CONST_APP_ABSURL.'/img/a-quick-guide-to-start-a-restaurant-in-india-2018.jpg'
				],
				[
					'url' => 'https://www.rancelab.com/blog/8-tips-manage-restaurant-employees/',
					'title' => '8 Incredible Tips to Manage Restaurant Employees Better',
					'alt_text' => '8 Incredible Tips to Manage Restaurant Employees Better',
					'text' => '8 Incredible Tips to Manage Restaurant Employees Better',
					'img_url' => CONST_APP_ABSURL.'/img/8-incredible-tips-to-manage-restaurant-employees-better.jpg'
				],
				[
					'url' => 'https://www.rancelab.com/blog/5-tips-tricks-improve-ambience-restaurant/',
					'title' => 'How FusionResto Helps Restaurants Achieve Business Success',
					'alt_text' => 'How FusionResto Helps Restaurants Achieve Business Success',
					'text' => 'How FusionResto Helps Restaurants Achieve Business Success',
					'img_url' => CONST_APP_ABSURL.'/img/5-tips-and-tricks-to-improve-the-ambience-of-your-restaurant.jpg'
				],
				[
					'url' => 'https://www.rancelab.com/blog/fusionresto-helps-restaurants-achieve-success/',
					'title' => '5 Tips and Tricks to Improve the Ambience of Your Restaurant',
					'alt_text' => '5 Tips and Tricks to Improve the Ambience of Your Restaurant',
					'text' => '5 Tips and Tricks to Improve the Ambience of Your Restaurant',
					'img_url' => CONST_APP_ABSURL.'/img/how-FusionResto-helps-restaurants-achieve-business-success.jpg'
				]
			];
	$video_links = [
				[
					'url' => 'https://www.youtube.com/watch?v=b9frf1S0V2M',
					'title' => 'How to Overcome Restaurant Challenges - FusionResto Restaurant Management Software',
					'alt_text' => 'How to Overcome Restaurant Challenges - FusionResto Restaurant Management Software',
					'text' => 'How to Overcome Restaurant Challenges - FusionResto Restaurant Management Software',
					'img_url' => 'https://img.youtube.com/vi/b9frf1S0V2M/mqdefault.jpg'
				],
				[
					'url' => 'https://www.youtube.com/watch?v=K5Kz2jxnO58',
					'title' => 'Success Story of Restaurateur by FusionResto - Restaurant Software',
					'alt_text' => 'Success Story of Restaurateur by FusionResto - Restaurant Software',
					'text' => 'Success Story of Restaurateur by FusionResto - Restaurant Software',
					'img_url' => 'https://img.youtube.com/vi/K5Kz2jxnO58/mqdefault.jpg'
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
							'alt_text' => 'Havmor',
							'img_url' => CONST_APP_ABSURL.'/images/havmor.svg'
						],
						[
							'alt_text' => 'Fuji',
							'img_url' => CONST_APP_ABSURL.'/images/fuji.svg'
						],
						[
							'alt_text' => 'Fly Kouzina',
							'img_url' => CONST_APP_ABSURL.'/images/kouzina.svg'
						],
						[
							'alt_text' => 'Koshe Kosha',
							'img_url' => CONST_APP_ABSURL.'/images/koshe-kosha.svg'
						],
						[
							'alt_text' => 'Kailash Parvat',
							'img_url' => CONST_APP_ABSURL.'/images/kailash.svg'
						],
						[
							'alt_text' => 'Jassi De Parathe',
							'img_url' => CONST_APP_ABSURL.'/images/jassi.svg'
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