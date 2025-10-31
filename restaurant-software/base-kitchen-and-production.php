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
	<?php
	$faqs = [
		[
			'q' => 'What results to expect from the Base Kitchen and Production module?',
			'a' => ['Calculate the stock of raw materials needed to produce items. It comprises production & yield management, food costing, centralized recipe management, forecasting and production.']
		],
		[
			'q' => 'Do you have a Recipe Management?',
			'a' => ['Yes, we have a multi layered recipe management system where you can keep and manage inventory of raw materials > semi-finished goods > final product. You can also manage the stock of items in multiple units of measure.']
		],
		[
			'q' => 'Can we calculate food costing per portion or plate?',
			'a' => ['Yes, a robust recipe management and cost sheet helps you derive cost per portion.']
		],
		[
			'q' => 'You have any option of centralised kitchen?',
			'a' => ['Yes. We have a centralized kitchen solution.You purchase all raw products in centralize and make production after that you transfer your finished foods to your all branches.']
		],
		[
			'q' => 'I want a proper Food costing report when i make any item',
			'a' => ['Yes. We have Food costing reports. It\'s based on your Recipe . You can make recipes for any product  then you can see total profit margin in food costing reports.']
		],
		[
			'q' => 'Can Software manage the process of Production of sweets from Raw Goods to Finished Goods?',
			'a' => ['Yes software has the entire build process to manage a proper production unit.']
		],
		[
			'q' => 'Can we manage the wastage of raw materials to reuse it again in Sweet shop?',
			'a' => ['Yes , We can keep the track of Wastage items.']
		],
		[
			'q' => 'Can we manage multiple departments in the kitchen and separate kot for the same?',
			'a' => ['Yes, We can manage multiple departments and separate KOT for the same.']
		]
	];
	include_once '../includes/faq-schema.php';
	?>
	<link href="<?php echo CONST_APP_ABSURL;?>/css/restaurant-software.css" rel="stylesheet">
	<link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/restaurant-software/base-kitchen-and-production.php"/>
</head>
<body>
	<header id="header" class="header header-hide">
	<?php include("../includes/common-header.php"); ?>
	</header>
	<section id="hero">
	<div class="hero-container">
		<div class="container">
			<h1 class="text-center">Most Advanced Restaurant Management Software</h1>
			<h2 class="text-center">with Advanced Point of Sale Features</h2>
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
				Most Advanced Restaurant Management Software<br>with Advanced Point of Sale Features
			</div>
		</div>
	</section>
	
	<section id="hero" class="restaurant_software_header fadeIn">
		<div class="hero-container">
			<div class="container text-center">
				<div class="row text-center mt-5 mb-5">
					<div class="col">
						<a href="<?php echo CONST_APP_ABSURL;?>/about-us.php" class="btn ctabtn button-green rounded try_for_free home_read_more">View Demo</a>&nbsp;&nbsp; 
						<a href="<?php echo CONST_APP_ABSURL;?>/contact-us.php" class="btn ctabtn button-green rounded try_for_free home_free_trial">Need a Quote</a>
					</div>
				</div>
			</div>
		</div>
	</section>
-->
	<section id="fusionErpTwo" class="fusion-erp fusion_erp_margin_top padd-section green_bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col">
					<div class="about-content">
						<h2 class="fusion_erp_heading">RanceERP has advanced POS features that trump other software having just the POS billing module.</h2>
						<div class="block_grid">
							<div class="grid gtc-lg-3 gtc-md-2 gtc">
								<div class="item">
									<div class="fusionErp_heading">High-Performance POS</div>
									<div>Works on POS, Desktop, Laptop, Tablet & Mobile, Onsite & Cloud, Online and Offline</div>
								</div>
								<div class="item">
									<div class="fusionErp_heading">Multiple Service Modes</div>
									<div>Dining, Take Away, Delivery, Self-ordering Kiosk & Reservation. All works seamlessly, together</div>
								</div>
								<div class="item">
									<div class="fusionErp_heading">KOT & KDS</div>
									<div>Eliminates kitchen nightmare Robust KOT printing and display mechanism, both works perfectly</div>
								</div>
								<div class="item">
									<div class="fusionErp_heading">Marketplace Integration</div>
									<div>Website or App, Zomato, Swiggy, Food Panda and Uber Eats. Connects all to POS</div>
								</div>
								<div class="item">
									<div class="fusionErp_heading">Fully Digital, Say No to Paper</div>
									<div>Contribute to the environment, go paperless. Digital receipts will be sent on SMS & email</div>
								</div>
								<div class="item">
									<div class="fusionErp_heading">Everything You Need</div>
									<div>Join & Move table, Split by Item, Seat or Amount, Multiple Modes of Paymen</div>
								</div>
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<section id="menuRestaurant" class="menu-restaurant padd-section" style="visibility: visible;">
	<?php include("../includes/industry-verticals.php"); ?>
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

	<section id="restaurantDetail" class="restaurant_detail padd-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col">
					<div class="about-content">
						<h3>Recipe Management </h3>
						<h4>The crucial ingredient to your restaurant’s success</h4>
						<p>FusionResto recipe management system centrally captures all the recipes for each of the menu items. It also supports semi-finished items, which are used to produce the final items. It also supports entering the recipe for numbers or portions. While planning a buffet breakfast for a day or running a full kitchen, you also get the list of raw materials required by the kitchen. Other than prime costs, you also get to feed and get a report of overhead needed to produce a portion. It designates a plan for daily preparation and manages staff’s time more efficiently. Following a daily production list makes it easier to track usage and set par levels. Proper planning helps to ensure that you won't run out of product. With an effective recipe management system in place, it is easier to train a new hire and inspect quality and status of completion.</p>
						<h3>Food Cost and Variance Control</h3>
						<h4>Increases profitability with accurate food costing</h4>
						<p>A profitable restaurant typically generates a 28%-35% food cost. Alongwith labor costs, these expenses consume 50%-75% of total sales. Because of the impact food cost makes on an operation, food cost is one of the first things restaurants examine and control regularly. FusionResto provides simple yet powerful ways to manage and review the food cost and keep your bottom-line in place. It generates the food costing report on the real-time sales and stock journal entries. FusionResto supports two methods of viewing food costing: food costing based on total sales and based on cost of goods sold (COGS).</p>
						<h3>Shortage, Wastage and Excess</h3>
						<h4>Improves inventory management, reduces waste</h4>
						<p>One of the many ways to book inventory of finished items at a restaurant or a food-joint is stock journal. Outlet managers often report inventory under shortage or wastage or spoilt head; sometimes even excess. They do this as they have to reconcile the inventory to match the count. With FusionResto Stock Journal, one can record the same in the system under their respective head and analyse the same on regular intervals to avoid loss of inventory and keep it sync with books. It includes procedures for disposal and writing-off stock with a proper recording and auditing system.</p>
						<h3>Auto Consumption</h3>
						<h4>Automatic production and consumption entry based on recipe</h4>
						<p>FusionResto effectively manages your base kitchen and production. Recipe management system automatically calculates the actual stock needed for consumption and keeps your food cost under control. Powerful production module auto calculates raw material consumption and auto posts consumption entries as and when sale happens. Built-in stock journal effectively lets you post and book process excess, wastage and shortage during the process</p>
						<h3>Menu Engineering</h3>
						<h4>Increases profit per guest without compromising the quality</h4>
						<p>The simple objective of menu engineering is to increase profit per guest at a restaurant. This is achieved through a careful analysis of the profitability and popularity of individual menu items, followed by the placement of items on the menu to encourage guests to choose particular dishes. These include making decisions based on data rather than intuition and results that can be easily tracked and modified. </p>
						<p>FusionResto uses the menu mix and gross profit margin to determine the relative performance of each menu item and classifies them in a profit-popularity index as high-high, high-low, low-low and low-high. It also gives you a way of refreshing your menu without the fear of losing profit.  This helps you to balance the menu with popular items and profitable items. You also get to see how your signature items are performing as compared to other items in the menu with high sales quantity.</p>
						<h3>Physical Stock and Discrepancy</h3>
						<h4>Keeps your inventory health check up, reduces pilferage and theft</h4>
						<p>It allows you to regularly monitor and increase gross profit, reduce pilferage, theft and waste. Stock taking allows you to keep an accurate track of the physical stock you have, what’s been issued to the kitchen or store, what’s been consumed, and what hasn’t. It’s all about comparing the physical stock to what the report says then finding any discrepancies. Stock taking also allows you to see if there’s a significant discrepancy between what you think you should have and what you actually have. Your stocktake can highlight a number of problems including theft and shrinkage issues.</p>
						<p>FusionResto helps to record the physical stock of items based on warehouse, category, bin location, or even an item, etc. The physical stock check is reconciled with the inventory records and helps to handle discrepancies, such as missing stock. It also allows the necessary correction with automatic adjustment for excess or shortage with proper documentation.</p>
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
				'title' => '5 Tips and Tricks to Improve the Ambience of Your Restaurant',
				'alt_text' => '5 Tips and Tricks to Improve the Ambience of Your Restaurant',
				'text' => '5 Tips and Tricks to Improve the Ambience of Your Restaurant',
				'img_url' => CONST_APP_ABSURL.'/img/5-tips-and-tricks-to-improve-the-ambience-of-your-restaurant.jpg'
				],
				[
				'url' => 'https://www.rancelab.com/blog/fusionresto-helps-restaurants-achieve-success/',
				'title' => 'How FusionResto Helps Restaurants Achieve Business Success',
				'alt_text' => 'How FusionResto Helps Restaurants Achieve Business Success',
				'text' => 'How FusionResto Helps Restaurants Achieve Business Success',
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
	<section id="Resources" class="resources_block padd-section">
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

	<section id="request_demo">
	<?php include("../includes/request-demo.php");?>
	</section>
	
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