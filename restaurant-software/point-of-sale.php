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
			'q' => 'What results to expect from using your POS?',
			'a' => ['RanceLab POS uses deep learning algorithms to capture and analyze user data and recommend personalized content in real-time with impeccable accuracy. This means that any new user with limited or no experience can start taking orders from the guests. RanceLab POS comes with an AI powered recommendation engine that will help with recommendations resulting in upselling high margin items, thus increasing revenue. Built-in machine learning engines evaluates data based on social selling and content selling and prompts additional items resulting in better customer experience and service.']
		],
		[
			'q' => 'Does it support multiple service modes?',
			'a' => ['Yes it supports dine-in, take away, home delivery and online sales / service modes.']
		],
		[
			'q' => 'Can I see the sales report on the mobile?',
			'a' => ['Yes, you can view all sales, purchase, stock, finance and related reports on your mobile 24x7.']
		],
		[
			'q' => 'Can the sales bill be sent to the customer’s phone directly?',
			'a' => ['Yes, we provide digital receipts with which a sales bill can be sent to mobile phone.']
		],
		[
			'q' => 'How user-friendly is your POS?',
			'a' => ['Our POS is touch based and works perfectly on both touch and non-touch enabled devices. It works on mouse-clicks as well as you can operate it only with the keyboard. It helps you put item photographs and descriptions to easily identify items. It has multi-lingual support, so you can choose a preferred language that your operator understands.']
		],
		[
			'q' => 'Which kind of given support to your customers?',
			'a' => ['We provide 24x7 multi channel support - Phone, Email, Chat, Online, Onsite & Video calls. We provide self-ticketing portal access to our customers where they can raise service tickets. We also provide access to our huge data bank of DIY (do-it-yourself) section in case you prefer to do things yourself.']
		],
		[
			'q' => 'What kind of  hardware is required?',
			'a' => ['A mobile phone or a tab to do the billing and a basic computer or laptop is all you need to perform admin/backend tasks, like managing stock, finance, loyalty programs, analysis.']
		],
		[
			'q' => 'Can I use multiple KOT printers?',
			'a' => ['Yes, it supports multiple KOT printing channels such as Indian, Chinese, Bar, etc.']
		],
		[
			'q' => 'Can I use your software on my phone only?',
			'a' => ['Yes, if you want to just make invoices. You need a computer for admin related tasks.']
		],
		[
			'q' => 'Is your software integrated with third party aggregators, i.e. Swiggy, Zomato?',
			'a' => ['Yes, software is integrated with third party aggregators. Integration is free of cost. No additional charges, no hidden fees.']
		],
		[
			'q' => 'Can your POS be integrated with other inventory management or CRM software?',
			'a' => ['RanceLab is an end-to-end software with in-built inventory management, finance, loyalty, supply chain, payroll and many other features. Ideally you will get everything you want. However, to make it easier, we have done integration with popular business applications such as Tally, SAP B1, Sun Accounting, etc. for the seamless operation of your business.']
		],
		[
			'q' => 'Does software support credit sale entry for selected customers?',
			'a' => ['Yes, you may sell goods and services on credit to your customers. You may set their credit limit and credit days to ensure you do not sell over the limit and payment is received well in time from them.']
		],
		[
			'q' => 'Does your Software support multiple discounts and tax?',
			'a' => ['Yes it supports multiple discounts and taxes. It is compliant with the local requirements of India, South East Asia, Middle East (GCC) and Africa.']
		],
		[
			'q' => 'Does it have a table reservation module?',
			'a' => ['Yes, it comes with a table reservation system where you can reserve / pre-book your guests on their favorite spot, like poolside or by the bar.']
		],
		[
			'q' => 'How to give bill discount after tax?',
			'a' => ['From sale invoice touch pos On tender screen Press U.']
		],
		[
			'q' => 'How to auto calculate tax slab after discount in sale invoice scan pos?',
			'a' => ['From sale invoice scan pos Press Alt+O.', 'Check tax slab after discount set Yes then save by Pressing Alt+S to save.']
		],
		[
			'q' => 'How to define tax slab in product master',
			'a' => ['From Product Management', 'Product field > Press Alt+L to select Product > Subgroup > Press Alt+ Enter > Tax slab > define tax slab below 1000 tax 5%. Above 1000 tax 12% by Pressing Alt+S to save.']
		],
		[	
			'q' => 'How to calculate TCS in a sales Scan ?',
			'a' => ['Create TCS from Charges master then add TCS in Sale voucher option and in charges field.And also change currency from 2 to 3 Enter TCS amount in other charges.']
		]
	];
	include '../includes/faq-schema.php';
	?>

	<link href="<?php echo CONST_APP_ABSURL;?>/css/restaurant-software.css" rel="stylesheet">
	<link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/restaurant-software/point-of-sale.php"/>
</head>
<body>
	<header id="header" class="header header-hide">
	<?php include("../includes/common-header.php"); ?>
	</header>
<section id="hero">
	<div class="hero-container">
		<div class="container">
			<h1 class="text-center">Most Advanced Restaurant Management Software</h1>
			<h2 class="text-center">with Advanced Point of Sale Features </h2>
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
						<h3>High-performance Point of Sale</h3>
						<h4>The future ready POS</h4>
						<p class="mb-3">Life inside the restaurant moves at a rapid speed, and that’s why every function of FusionResto has been carefully designed to require as few steps as possible. FusionResto POS is a high performance POS that offers many benefits for a restaurant business. This is a true touch that supports POS, smart phones as well as tablets. It is fully packed with a host of functions such as table management, walk-in reservations, multiple kitchen channels, food modifiers, forced questions, kitchen notes, void and cancellation, combo and offers, split and join tables, split checks by item or amount.</p>
						<h3>AI Powered Recommendation Engine</h3>
						<h4>Smart POS with Suggestive Sell</h4>
						<p class="mb-3">RanceLab POS uses deep learning algorithms to capture and analyze user data and recommend personalized content in real-time with impeccable accuracy. This means that any new user with limited or no experience can start taking orders from the guests. RanceLab POS will help with recommendations resulting in upselling high margin items, thus increasing revenue. Built-in machine learning engines evaluate data based on social selling and content selling and prompt additional items resulting in better customer experience and service.</p>
						<h3>Multiple Service Modes</h3>
						<h4>Dine-in, Take Away and Home Delivery</h4>
						<p class="mb-3">FusionResto gives you multiple service modes, such as dining (it can further be broken up into ac and non-ac seating), take-away and home delivery. The information is communicated to all KOT channels so that the kitchen staff can prepare for serving as per the service mode. Each mode is customized to address and capture relevant inputs that makes the system grow faster.</p>
						<h3>Robust KOT Printing Mechanism</h3>
						<h4>Manages priorities, differentiates orders</h4>
						<p class="mb-3">FusionResto comes with an innovative KOT printing mechanism that serves as a reliable communication channel between floor and kitchen. It eliminates human errors and reduces the efforts required to parse the handwriting by the barker or the chef. Well printed order tickets along with personalized requests by the guests, increases kitchen efficiency, and results in faster service. A single order, consisting of food and beverage gets printed at respective kitchen and bar channels.  A captain can specifically mark the seat position or meal course so that food can be prepared in chronological order and served to the right guest.</p>
						<h3>Kitchen Display System</h3>
						<h4>Perfect communication and timing</h4>
						<p class="mb-3">Every good chef knows the best kitchens are those that have perfected communication and timing. FusionResto Kitchen Display System perfects both. All orders taken by servers will be displayed on the display screen or tablets in real-time to the kitchen staff with specific requests and table numbers. Prioritize tickets easily with color-coded statuses so that food can be prepared and served on time. Easily track individual item cook times and view ticket history anytime. A new order ticket appears as soon as it is punched and followed by a loud buzzer so that it does not go unnoticed in a crowded and noisy kitchen. An automatic color change in the order display will alert the chef on the elapsed time and delays in the food preparation. Server gets the notification as the dish gets prepared so that customers can be served on time.</p>
						<h3>Marketplace Integrations and Online Connectivity</h3>
						<h4>Unleash the power of integration and connectivity</h4>
						<p class="mb-3">With FusionResto API, orders from your own website and mobile app are received directly to FusionResto POS. Receive orders from marketplace and aggregators, Zomato, Swiggy, Uber Eats, FoodPanda seamlessly on a single screen. Choose to print KOT or schedule it in the future time.</p> 
						<h3>Digital Receipts - Say No to Paper</h3>
						<h4>Sends receipts on SMS and Email, eliminates inefficiency and waste</h4>
						<p class="mb-3">FusionResto offers a unique paper-less process to operate your restaurant business, thereby preserving nature and making you a contributor to a healthy environment. FusionResto replaces each paper document with digital methods starting from digital menus to handheld ordering, from kitchen display system to receipt generating, from receiving digital payments to sending e-receipts, everything you need to run a paperless operation. FusionResto also offers a digital audit system, allowing your managers and accounts team to approve and audit transactions digitally. All the reports can be emailed to respective recipients, ensuring you don’t have to print it.</p>
						<h3>Split Bill and Multiple Modes of Payments</h3>
						<h4>Increased customer satisfaction, increased revenue</h4>
						<p class="mb-3">FusionResto comes with multiple ways to split a receipt. Split by guest or seat, split equally or split as ordered. Some guests might even ask for a separate check for food and drink. A no-tax bill might be required by diplomats or government officials. FusionResto supports multiple modes of payment like cash, credit card, discount card, gift vouchers and coupons. It even supports split payments like half in cash and half in credit card. FusionResto helps the restaurant staff take care of all of those requests without making mistakes, even in high pressure hours.</p>
						<h3>Table Reservation </h3>
						<h4>Reservation system that increases your table turn</h4>
						<p class="mb-3">A unified table booking system to record reservations from walk-ins and via phone calls. Smart capacity based reservation system that helps maximize revenue for your seating capacity. See real-time table availability with different legends and duration of occupancy to manage the guests waiting for the table. Create and manage multiple layouts to match your restaurant’s floor plan. Auto status and colour segmentation update, helps to reserve a table for a future date for your esteemed guests.</p>
						<h3>Customer Feedback</h3>
						<h4>Measures and improves customer happiness index</h4>
						<p class="mb-3">FusionResto customer feedback system helps you efficiently manage your brand reputation. It also helps nurture customers in the short-term and long-term. You will gain insights into customer’s dining behaviour thereby improving the restaurant’s menu. You may also make positive changes to service and ambience based on customer’s feedback and train your staff to treat customers better.</p>
						<h3>Electronic Payment & Mobile Wallets</h3>
						<h4>Increased sales and reduced transaction time and cost</h4>
						<p class="mb-3">Electronic payment allows your guests to make cashless payments through cards or a mobile phone. It presents a number of advantages, including cost and time savings, increased sales and reduced transaction costs. FusionResto supports all modes of online payments including credit and debit cards and popular digital wallets including PayTM, QuikWallet, Jio, Binge, Momoe and credit / debit card processing devices.</p>
						<h3>Most Secured Customer Discount</h3>
						<h4>Improves guest happiness index, builds loyalty</h4>
						<p class="mb-3">FusionResto categorizes guests into various categories, such as corporate, groups, individuals, etc. and based on the category, one can pre-define the discount. The POS system will send an OTP to the guest as soon as the operator hits the discount option. Discount will be applied to the receipt upon successful verification of OTP received from the guests. This saves you from any human errors and malpractices and increases your guests’ happiness index. The day-end reports clearly show the amount of discount given for the day and to whom. Since the discount is fully controlled by the system, it eliminates the audit time and efforts.</p>
						<h3>API (Web & App)</h3>
						<h4>Integration with API</h4>
						<p class="mb-3">RanceLab offers its own API for you so that you can connect and receive orders for your own web store or brand app.</p>
						<h3>Weighing Scale Integration</h3>
						<h4>Sell items by weight or count</h4>
						<p class="mb-3">FusionResto is integrated with all types of digital weighing scales that weigh and print barcode or product tickets. Once an item is placed on the scale, the user can punch item code and FusionResto will pull weight directly from the scale leaving no scope of duplicate entries or human errors. Alternatively, it also connects with barcode scale and prints barcode stickers for each unique item or box. With FusionResto, you can smoothly sell any item by weight or by count making your point of sale quick and increasing your customer’s happiness index.</p>
						<h3>Guest History, Preferences and Favorites.</h3>
						<h4>Know your guests and enhance their dining experience</h4>
						<p class="mb-3">With FusionResto, you can easily access the preferences and favorites that are required to make the guest feel important and satisfied. A guest’s favorite food, menu preferences and details of last visits and average spent are readily available to the wait staff. This information plays a vital role for taking care of a regular guest, even if their preferred wait staff or bartender is on leave.</p>
						<h3>Home Delivery Management</h3>
						<h4>Get food delivered to customer’s doorstep</h4>
						<p class="mb-3">FusionResto delivery app can help you optimize your field delivery operations. Assign the orders to the field delivery staff based on the delivery locations. Orders going to the nearby delivery locations can be assigned to the same delivery person. Delivery staff can see the customer's contact and find directions on built-in Google maps. Delivery staff can post the payment information and update the delivery status to inform both the back office and the customer.</p>
						<h3>Business Accounting</h3>
						<h4>Integration with Accounting System</h4>
						<p class="mb-3">RanceLab comes with a built-in financial accounting system that helps you manage from a ledger creation till balance sheet. However, it also offers seamless integration with a few of the best accounting system of the world including Tally ERP and Sun Accounting System</p>
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