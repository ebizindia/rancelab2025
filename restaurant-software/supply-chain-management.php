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
			'q' => 'What to expect from Supply Chain Management (SCM)?',
			'a' => ['FusionResto Supply Chain Management increases your competitiveness while keeping your costs low. It plays an integral role in your restaurant’s success. The purpose of SCM is to keep chaos at bay while synchronizing the activities of the network. It provides visibility, synchronization, and agility from menu items to raw materials, across distributors and suppliers.']
		],
		[
			'q' => 'Does it have a material management system?',
			'a' => ['Yes, it comes with a built-in materials management system that drives control for higher margins and profits. Plan, organize and control all the activities concerned with the flow of materials.']
		],
		[
			'q' => 'Can I auto send PO over mail to Supplier?',
			'a' => ['Yes, when a PO is saved, you have an option to auto mail it, to the supplier.']
		],
		[
			'q' => 'Does it generate an automated purchase order?',
			'a' => ['Yes, it allows you to define order levels. Once levels are set, it automatically generates a purchase order by considering order levels, current stock in hand, orders placed with suppliers and a few other factors.']
		],
		[
			'q' => 'Do you have an option to import purchase transactions from CSV files?',
			'a' => ['Yes, we have an option to import data from an excel or a csv file.']
		],
		[
			'q' => 'Do you have a price list and rate contracts?',
			'a' => ['Yes, we have supplier or customer specific price lists and rate contracts. It helps you from the hassle of approving or reviewing the rates billed by your supplier. It also saves you from the manual error your operators make while entering these data.']
		],
		[
			'q' => 'Do you have an approval system or process?',
			'a' => ['Yes, it has an approval process that follows a maker and checker process. It let’s to approve an order before sending it to the supplier and saves you from any unpleasant surprises.']
		]
	];
	include_once '../includes/faq-schema.php';
	?>
	<link href="<?php echo CONST_APP_ABSURL;?>/css/restaurant-software.css" rel="stylesheet">
	<link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/restaurant-software/supply-chain-management.php"/>
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
						<h3>Supply Chain Management</h3>
						<h4>Increases competitiveness, while keeping the costs low</h4>
						<p>Supply Chain Management (SCM) is important because it increases competitiveness and customer satisfaction. In this day and age, SCM plays an integral part of your restaurant's success. Efficiently run supply chains allow your brand to quickly deliver raw-materials and supplies to the base or remote kitchen for a low cost. The purpose of SCM is to keep chaos at bay while synchronizing the activities of the network. It provides visibility, synchronization, and agility from menu items to raw materials, across distributors and suppliers.</p>
						<p>FusinoResto creates a centralized or outlet wise purchase management system for your business. It maintains a list of items purchased from each supplier on negotiated prices. Creating orders and sending it to external suppliers. Items can be received in multiple goods received notice (GRN) against a single order with automatic update of stock in inventory. Multiple GRN can later be tagged to a single invoice for accounting purposes.</p>
						<h3>Advanced Material Management</h3>
						<h4>Drives control for higher margins and profits</h4>
						<p>FusionResto advanced material management drives control for higher margins and profits. Plan, organize and control all the activities concerned with the flow of materials. It allows you to receive materials of single order into multiple delivery receipt notes. For corporate and special customers, you can setup price list. Advanced material management system significantly reduces inventory holding costs upto 18 percent annually. Gain real time visibility with reduced cost of goods sold. </p>
						<h3>Work Order Management</h3>
						<h4>Simplifies communication ensures quality standards</h4>
						<p>FusionResto work order management creates effective planning, simplifies the coordination between kitchen and store. The built-in batch production system ensures high quality standards of each batch produced.</p>
						<h3>Automatic Stock Replenishment</h3>
						<h4>integrated demand forecasting, and automatic order generation</h4>
						<p>The FusionResto replenishment module automatically lists out the items that need to be procured with re-order quantity based on consumption during a specified period and pre-defined supply lead-time. FusionResto also ensures that receipt of the quantity and quality of goods are as specified in the purchase orders. It helps you with proper procedures to record damaged goods, short-delivery and over-delivery of goods - all backed by a robust audit system to ensure compliance with your business policy.</p>
						<h3>Purchase Order</h3>
						<h4>Streamlines incoming inventory, avoids surprises</h4>
						<p>Purchase Order is a vital document to any form of restaurant business. It allows you to clearly communicate your requirements to your supplier viz., items, quantities, prices and details of products. FusionResto lets you quickly and easily create purchase orders and link it to single or multiple purchase bills. This saves your time of putting a check on what inventories are coming in and also secures you from having the same bill entered more than once. In case of price changes between order and delivery time, it is purchase order that saves you from such surprises.</p>
						<h3>Sale Order</h3>
						<h4>Improve revenue cycle with advance orders</h4>
						<p>Sales Order lets you take the orders from your loyal customers and helps you set the effective delivery schedule. It contains the information like product details, price, discount, applicable tax, delivery and payment mode. It can then be linked to POS for making easy invoice entry. Users have the option to auto populate all the items in a sale order to avoid re-entry of data. Sales orders are useful in forecasting revenue and assure fixed business for a period of time. It also helps in streamlining the production process during festive rush.</p>
						<h3>Price List and Rate Contracts</h3>
						<h4>Pre-define terms of service, increase satisfaction</h4>
						<p>Any Supply Chain Management is incomplete without a price list and rate contracts. FusionResto price list and rate contracts are an effective tool to pre-set the rate, discount in percentage or amount, markup, margin and tax for single or multiple products. It also helps to fix the rate of supply for a time period. It is applicable at both purchase and sales and can be tagged to the customers as well as suppliers. Alternatively it can be set on a voucher type or can be selected during respective transaction entries.</p>
						<h3>Approval System</h3>
						<h4>Approval system to ensure integrity and accuracy of information</h4>
						<p>Since the restaurant operations generate voluminous data, such as storekeepers raising indents and managers generating orders, it needs to be duly approved by supervisors to ensure integrity and accuracy. FusionResto offers a one-click approval system to review each transaction to push it further up the supply chain.</p>
						<h3>Bulk Update</h3>
						<h4>Tools that simplifies your work</h4>
						<p>As the business grows, workload increases, number of transactions, quantity of inventory and area of business. We need a tool-box full of effective tools which reduces human effort and increases the efficiency of manpower. FusionResto provides a couple of tools that redirect your energy towards betterment of your business and lets you complete more work in less time.</p>
						<p>Bulk Update of business data allows you to change the categorization and grouping of single or multiple products at one go. It also allows you to change the hierarchy of single or multiple account ledgers at one time. You can also change the type and status of a single or group of customers. Copy Voucher allows you to copy a voucher instead of creating it again. It is useful for recurring nature of transactions like rent and salary payment. These tools are made to reduce human effort and increase efficiency.</p>
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