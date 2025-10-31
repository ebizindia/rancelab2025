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
    <link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/restaurant-software/food-court.php"/>
</head>
<body>
	<header id="header" class="header header-hide">
	<?php include("../includes/common-header.php"); ?>
	</header>
	<section id="hero">
	<div class="hero-container">
		<div class="container">
			<h1 class="text-center">Most Advanced Restaurant Management Software <br>for Your Canteen</h1>
			<h2 class="text-center">We bring consistency in your service through process automation, <br>organize your system and bring growth to your business.</h2>
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
			Most Advanced Restaurant Management Software<br/>for Your Canteen
			</div>
		</div>
	</section>

	<section id="hero" class="restaurant_software_header">
		<div class="hero-container">
			<div class="container text-center">
				<div class="row text-center mt-5 mb-5">
					<div class="col-12 ">
						<p>We bring consistency in your service through process automation, organize your system and bring growth to your business.</p>
						
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
							<li>Mobile Apps and Tab based ordering</li>
							<li>Card and Coupon based cashless operations</li>
							<li>Fixed Item Hotkey</li>
							<li>Detailed customer and transaction history</li>
							<li>Integrate barcode, magnetic or smart card</li>
							<li>Corporate sales with monthly billing</li>
							<li>Reduces waste from spoilage and ordering mistakes</li>
							<li>Lowest training curve for higher productivity</li>
							<li>Customer loyalty program and point generation</li>
							<li>Graphs and Chart for better analysis</li>
							<li>Tenant or Vendor specific menus</li>
							<li>Tag each item with photo for easy identification</li>
							<li>Promote the most profitable items on your menu</li>
							<li>Access report in real time from any device </li>
							<li>Card fill, refill and refund option</li>
							<li>Compare and evaluate business performance</li>
							<li>Physical Stock taking and Variance reporting</li>
							<li>Tenant wise day-end and register reports</li>
							<li>Food Costing and Menu Engineering</li>
							<li>Built-in payroll and financial account</li>
							<li>Generate revenue and commissions</li>
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
						<p>Food Courts and Corporate Canteens are some of the busiest food joints. Fixed items, limited time and a huge number of orders best defines this category of food outlets. High footfall at food courts demands a technology that can accommodate and serve a huge number of orders.</p>
						<p>FusionResto is ready-to-use software for food courts and fast food joints. Be it a single outlet or a chain, it connects all the end-to-end business functions and keeps you ahead of the competition from other similar and large formats. Unlike others, it makes you profits sooner, reach break-even faster and open new outlets quicker.</p>
						<p>FusionResto comes with easy-to-setup tenant outlet, outlet specific menu, forced question, modifiers, item prices, combo offers, service modes and void reasons. Its intelligent prepaid system offers a cashless transaction for smooth and fast PoS operations. Touch point of sale with lowest learning curve ensures that you cope up with issues like high labour turnover and relatively low computer literate people.</p>
						<p>Accurate sales and merchant transactions can be collected and audited, through the adequate tenant and contract management system configuration. Strict process control helps keep clear records for loyalty points credited and deduction reducing human errors and frauds. Tenant sales and profit sharing can be accurately calculated with cross verification.</p>
						<p>It provides comprehensive statistical analysis for customers' and tenants' performance evaluation. Multi-level user right and security control management helps prevention of fake card acceptance and increases system safety and data reliability. Reduction of tedious training cycle and increase front end transaction speed as no physical cash is involved. Countless features designed specifically for the food court environment make communications and cash management much more efficient.</p>
						<p>Card technology flexibility enables business to use from a variety of plain plastic and barcode to magnetic and high secured MiFare and HiD cards. Configuring and realizing deposit and credit management through cards or a payment gateway comes easier with FusionResto. Managing a food court is much easier with FusionResto extensive reporting features like real-time sales statistics and product mix reports you're able to spend less time in management and still keep up with the latest profit margins and performance measures.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php 
	$blog_links = [
				[
				'url' => 'https://www.rancelab.com/blog/5-things-take-food-court-restaurant-good-great/',
				'title' => '5 Things that Can Take Your Food Court Restaurant from Good to Great',
				'alt_text' => '5 Things that Can Take Your Food Court Restaurant from Good to Great',
				'text' => '5 Things that Can Take Your Food Court Restaurant from Good to Great',
				'img_url' => CONST_APP_ABSURL.'/img/5-things-to-take-your-food-court-restaurant-good-to-great-800x400.jpg'
				],
				[
				'url' => 'https://www.rancelab.com/blog/8-ways-restaurant-loyalty-program-build-regular-clientele/',
				'title' => '8 Ways a Restaurant Loyalty Program Helps Build Regular Clientele',
				'alt_text' => '8 Ways a Restaurant Loyalty Program Helps Build Regular Clientele',
				'text' => '8 Ways a Restaurant Loyalty Program Helps Build Regular Clientele',
				'img_url' => CONST_APP_ABSURL.'/img/8-ways-a-restaurant-loyalty-program-helps-build-regular-clientele.jpg'
				],
				[
				'url' => 'https://www.rancelab.com/blog/calculate-food-cost-decide-menu-pricing/',
				'title' => 'Tips to Calculate Food Cost and Decide Menu Pricing',
				'alt_text' => 'Tips to Calculate Food Cost and Decide Menu Pricing',
				'text' => 'Tips to Calculate Food Cost and Decide Menu Pricing',
				'img_url' => CONST_APP_ABSURL.'/img/Tips-to-Calculate-Food-Cost-and-Decide-Menu-Pricing.jpg'
				]
			];

	$video_links = [
				[
				'url' => 'https://www.youtube.com/watch?v=otcCLhTNVdo',
				'title' => 'Quick Service Restaurant Management System by FusionResto - Best Restaurant Software For QSR',
				'alt_text' => 'Quick Service Restaurant Management System by FusionResto - Best Restaurant Software For QSR',
				'text' => 'Quick Service Restaurant Management System by FusionResto - Best Restaurant Software For QSR',
				'img_url' => 'https://img.youtube.com/vi/otcCLhTNVdo/mqdefault.jpg'
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
						'alt_text' => 'Peter Donut',
						'img_url' => CONST_APP_ABSURL.'/images/peter-donut.svg'
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