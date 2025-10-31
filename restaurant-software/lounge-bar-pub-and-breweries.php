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
	<link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/restaurant-software/lounge-bar-pub-and-breweries.php"/>
</head>
<body>
	<header id="header" class="header header-hide">
	<?php include("../includes/common-header.php"); ?>
	</header>
<section id="hero">
	<div class="hero-container">
		<div class="container">
			<h1 class="text-center">We make your Lounge Bar, a perfect place to party!!!</h1>
			<h2 class="text-center">We make every hour, a happy hour for your Bar</h2>
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
			We make your Lounge Bar, a perfect place to party!!!<br/>We make every hour, a happy hour for your Bar
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
							<li>Gift Vouchers, Discount Coupons and Happy Hours</li>
							<li>Item and Category based discount and promotions</li>
							<li>Strict control on raw material purchase</li>
							<li>Built-in loyalty program with reward points and cashback</li>
							<li>Identifies guest buying pattern and helps in suggestive selling.</li>
							<li>Multiple color-coded Menus with Item Photo </li>
							<li>Integrated SMS that sends Thank You notes to customers</li>
							<li>One-tap repeat orders increases the speed of order taking</li>
							<li>Kitchen Display System for smart execution of orders</li>
							<li>Manage stock of premium liquor in tots and bottles</li>
							<li>Rewards administration for bartenders</li>
							<li>Physical Stock taking and Variance reporting</li>
							<li>Manages weekend rush efficiently</li>
							<li>Single tap Move Table, Join Table and Split Check</li>
							<li>Built-in payroll and financial account with GST</li>
							<li>Manage single and chain of Outlets</li>
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
						<p>On the Rocks! Or Neat! A loyal customer or just a walk-in. Happy hour or late shift. Keeping the tab of everything in a fast-paced, cash rich bar environment often tests your limit. From tracking liquor performance to measuring the profitability and making a quick change to bar inventory, this business demands a lot. Managing the stock of premium liquor in tots and bottles and tallying it day-end is a nightmare.</p>						<p></p>
						<p>FusionResto is ready-to-use software for lounge bar, pub and restaurant. Be it a single outlet or a chain, it connects all the end-to-end business functions and keeps you ahead of the competition from other similar and large formats. Unlike others, it makes you profits sooner, reach break-even faster and open new outlets quicker.</p>
						<p>FusionResto improves throughput & efficiency of your manpower and processes. Your servers no longer need to panic, as they can move a table or split a check with just a tap. It’s smart and intelligent point of sales rewards your best bartenders. It identifies the bartenders that are driving revenue and the bartenders that might need some extra training. Be it a happy hour or a crowded weekend with hundreds of orders every hour, FusionResto has proven to be the trusted partner of industry’s leading brands.</p>
						<p>When it comes to operations, it keeps tab on your every transaction and item movement. It quickly captures customer data without having to fill up lengthy forms. Whether it is a serving of premium liquor or a side dish, all voids and discounts are controlled to ensure there is no human fraud. At the day-end it locks down cash reports and makes signout process comprehensive. </p>
						<p>It increases your sales in exciting new ways. Built-in loyalty programs makes the onboarding process a lot simpler and increases the signup by 10x. Fast order taking and one-tap repeat orders increases the table turnaround time resulting in more sales. It accepts multiple payments, handles gift vouchers & discount coupons, happy-hour pricing, product or category based offers, seasonal or bill-value based promos seamlessly.</p>
						<p>FusionResto reports are designed to provide you with an overview of the sales metrics you really care about, at a high level. From there, it drills down to the transaction level to gain a more detailed insight into sales as they relate to orders, payments, shifts and accounts. These reports quickly surfaces all voids, discounts, and refunds. The reports also points to the servers and managers who are giving and approving these sales exceptions.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php 
	$blog_links = [
				[
				'url' => 'https://www.rancelab.com/blog/grow-bar-profits-transparency/',
				'title' => 'Tips To Grow Profits In Your Bar With Consumer Transparency',
				'alt_text' => 'Tips To Grow Profits In Your Bar With Consumer Transparency',
				'text' => 'Tips To Grow Profits In Your Bar With Consumer Transparency',
				'img_url' => CONST_APP_ABSURL.'/img/tips-to-grow-profits-in-your-bar-with-consumer-transparency.jpg'
				],
				[
				'url' => 'https://www.rancelab.com/blog/5-things-to-look-for-when-hiring-front-staff-for-your-bar/',
				'title' => '5 Things to Look for When Hiring Front Staff for Your Bar',
				'alt_text' => '5 Things to Look for When Hiring Front Staff for Your Bar',
				'text' => '5 Things to Look for When Hiring Front Staff for Your Bar',
				'img_url' => CONST_APP_ABSURL.'/img/5-Things-to-Look-for-When-Hiring-Front-Staff-for-Your-Bar.jpg'
				],
				[
				'url' => 'https://www.rancelab.com/blog/6-ways-draught-beer-boost-pub-footfall/',
				'title' => '6 Ways Draught Beer Can Boost Your Pub Footfall',
				'alt_text' => '6 Ways Draught Beer Can Boost Your Pub Footfall',
				'text' => '6 Ways Draught Beer Can Boost Your Pub Footfall',
				'img_url' => CONST_APP_ABSURL.'/img/how-draught-beer-can-boost-your-pub-footfall.jpg'
				]
			];

	$video_links = [
				/*[
				'url' => 'https://www.youtube.com/watch?v=_LSzYdDoDa8',
				'title' => 'Santa Banta Sweet Shop Analysis by FusionResto - Restaurant ERP Software with POS',
				'alt_text' => 'Santa Banta Sweet Shop Analysis by FusionResto - Restaurant ERP Software with POS',
				'text' => 'Santa Banta Sweet Shop Analysis by FusionResto - Restaurant ERP Software with POS',
				'img_url' => 'https://img.youtube.com/vi/_LSzYdDoDa8/mqdefault.jpg'
				]*/
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
							'alt_text' => 'Raize The Bar',
							'img_url' => CONST_APP_ABSURL.'/images/raize-the-bar.svg'
						],
						[
							'alt_text' => 'Country Roads Kolkata',
							'img_url' => CONST_APP_ABSURL.'/images/country-roads-kolkata.svg'
						],
						[
							'alt_text' => 'Gabbars',
							'img_url' => CONST_APP_ABSURL.'/images/gabbars.svg'
						],
						[
							'alt_text' => 'Carpe Diem',
							'img_url' => CONST_APP_ABSURL.'/images/carpe-diem.svg'
						],
						[
							'alt_text' => 'Bottoms Up',
							'img_url' => CONST_APP_ABSURL.'/images/bottoms-up.svg'
						],
						[
							'alt_text' => 'Honey Suckle',
							'img_url' => CONST_APP_ABSURL.'/images/honeysuckle.svg'
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