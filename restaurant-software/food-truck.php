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
	<link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/restaurant-software/food-truck.php"/>
</head>
<body>
	<header id="header" class="header header-hide">
	<?php include("../includes/common-header.php"); ?>
	</header>
<section id="hero">
	<div class="hero-container">
		<div class="container">
			<h1 class="text-center">We speed up your process and increase your customer engagement We help you handle rush hours and ensure customer delight</h1>
			<h2 class="text-center">We propel your food trucks’s engine with tech fuel We add motor to your wheels</h2>
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
			We speed up your process and increase your customer engagement<br/>We help you handle rush hours and ensure customer delight<br/>We propel your food trucks’s engine with tech fuel<br/>We add motor to your wheels 
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
							<li>Mobile Apps and Tab based ordering</li>
							<li>Anytime, anywhere access to reports </li>
							<li>Real time access to sales reports</li>
							<li>Bluetooth Printer Billing</li>
							<li>Digital Payment, EDC Machine Integration</li>
							<li>Pre-defined customer based discounts</li>
							<li>OTP based discounts</li>
							<li>Increases ticket size with cross-promotions</li>
							<li>Customer loyalty program with points or cashback</li>
							<li>Increased customer satisfaction and retention</li>
							<li>Easy capture of excess, shortage and wastage</li>
							<li>SMS and Email alerts for customer and owners</li>
							<li>Customer loyalty program with points, cash-back</li>
							<li>Faster than Cash Register and any other solution</li>
							<li>Recipe management with Production</li>
							<li>Rate Contract and Price List for monthly supplies</li>
							<li>Food Costing and Menu Engineering</li>
							<li>Synchronize and analyse data across chain</li>
							<li>Compare and evaluate business performance</li>
							<li>Scheme and Promotion Management</li>
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
						<p>Running a profitable business in the closed confined spaces of a food truck with limited resources makes it difficult for the owners to constantly adapt to the changing food trends of the people and attract new customers. Besides, it requires more than just good food, fancy locations and unique designing concepts to attract customers.To succeed in the mobile food business, food truck owners must adopt the right technologies that would not only simplify their business and helps them serve more customers at a time but would also guarantee them a flourishing business ahead.</p>
						<p>FusionResto is ready-to-use software for your food truck business. Be it a single outlet or a chain, it connects all the end-to-end business functions and keeps you ahead of the competition from other similar and large formats. Unlike others, it makes you profits sooner, reach break-even faster and open new outlets quicker.</p>
						<p>It comes with a robust system that seamlessly manages the  multiple operations of the business at one place and brings in more revenue to the business. It facilitates speedy transactions, faster bills and help serve multiple customers at the same time thereby ensuring smooth business during rush hours. It facilitates effortless payments and invites payments from multiple channels like debit & credit cards, cash, online payments through Paytm, JioMoney, Mobiquick etc. which can be tracked from a single report and ensures zero wait time during service. It also welcomes orders from numerous online ordering platforms and captures their data thereby giving better business insights by analyzing sales through different mediums.</p>
						<p>It also allows mobile customer feedback and offers an advanced customer relationship management system (CRM) that provides detailed information about existing and new customers like their contact details, buying history, list of preferences, frequency of visits and many more that helps in delivering a better customer experience by sending personalized messages, promotional offers, special discounts through e-mails and SMS, by processing coupons or gift cards for regular customers, by creating customized orders based on consumer preference and many more.</p>
						<p>Fusionresto synchronizes the data effectively and keeps the business organized. Its mobile application, brings business owners a set of finest management reports that offers day-end summary, detailed inventory reports, real time sales reports and other business analytics ensuring that they are always connected to their business even when they are travelling.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php 
	$blog_links = [
				[
				'url' => 'https://www.rancelab.com/blog/food-truck-design-ideas/',
				'title' => 'Hack The Eye Balls Of Your Customers With These Food Truck Design Ideas',
				'alt_text' => 'Hack The Eye Balls Of Your Customers With These Food Truck Design Ideas',
				'text' => 'Hack The Eye Balls Of Your Customers With These Food Truck Design Ideas',
				'img_url' => CONST_APP_ABSURL.'/img/hack-the-eye-balls-of-your-customers-with-these-food-truck-design-ideas.jpg'
				],
				[
				'url' => 'https://www.rancelab.com/blog/start-food-truck-business-guide/',
				'title' => 'Step-By-Step Guide To Start A Food Truck Business',
				'alt_text' => 'Step-By-Step Guide To Start A Food Truck Business',
				'text' => 'Step-By-Step Guide To Start A Food Truck Business',
				'img_url' => CONST_APP_ABSURL.'/img/Step-By-Step-Guide-To-Start-A-Food-Truck-Business.jpg'
				]
			];

	$video_links = [
				/*[
				'url' => 'https://www.youtube.com/watch?v=2Ql8eBXgQPs',
				'title' => 'Best Home Delivery Software for Restaurants - FusionResto Restaurant Management Software',
				'alt_text' => 'Best Home Delivery Software for Restaurants - FusionResto Restaurant Management Software',
				'text' => 'Best Home Delivery Software for Restaurants - FusionResto Restaurant Management Software',
				'img_url' => 'https://img.youtube.com/vi/2Ql8eBXgQPs/mqdefault.jpg'
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