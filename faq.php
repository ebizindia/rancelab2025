<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
<title>RanceLab® FAQ -  powered by phpMyFAQ 2.7.5</title>
    <base href="https://www.rancelab.com/faq/" />
    <meta content="restaurant software, pos software, restaurant point of sale, retail pos software, Store Management Software, retail software" name="keywords">
    <meta name="description" content="This FAQ should be the answer for all questions on RanceLab®.">
    <meta name="author" content="A K Sharma">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
    <meta name="application-name" content="phpMyFAQ 2.7.5">
    <meta name="copyright" content="(c) 2001-2011 phpMyFAQ Team">
    <meta name="publisher" content="A K Sharma">
    <meta name="robots" content="INDEX, FOLLOW">
    <meta name="revisit-after" content="7 days">
    <meta name="MSSmartTagsPreventParsing" content="true">

    <!-- Share on Facebook -->
    <meta property="og:title" content="RanceLab® FAQ -  powered by phpMyFAQ 2.7.5" />
    <meta property="og:description" content="This FAQ should be the answer for all questions on RanceLab®." />
    <meta property="og:image" content="" />
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
  	<link href="<?php echo CONST_APP_ABSURL;?>/css/faq-page.css" rel="stylesheet">
    <link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/faq.php"/>
    <?php $pagename="downloads"; ?>
</head>
<body>
  <header id="header" class="header header-hide">
    <?php include("includes/common-header.php"); ?>
  </header><!-- #header -->
  
  <!--==========================
    About Us Section
  ============================-->
  <section id="about-us" class="mt-5 about-us padd-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="about-content">
			<div class="row">				
				<div class="col-md-6 col-lg-6 search_box_one">
					<input class="form-control" id="myInput" type="text" placeholder="Search.."> 
				</div>
				<div class="col-md-6 col-lg-4 search_box_two">
					<button type="submit" class="btn button-green rounded mb-3">Search</button>
				</div>	
			</div>
			<div><strong><a href="#">Advanced search</a></strong></div>
			
			
			<hr>
            <section id="faq-home" class="padd-section py-3">
    <div class="container">
    <div class="row">
    <div class="col-12">
      <div class="row justify-content-center">
          <div class="section-title text-center">
          <h3>FAQ</h3>
          </div>
	       <button class="faqaccordion active">Does it support multi location?</button>
          <div class="faqpanel" style="max-height: 130px;">
            <p>As soon as your organization grows, you will like to have a system that offers 360 degree solutions to your requirements. RanceLab perfectly fits into that and adapts to your business needs and offers modules that scale your business.</p>
          </div>
          <button class="faqaccordion">Can you briefly help me understand the product?</button>
          <div class="faqpanel">
            <p>For a single outlet or a chain, RanceLab is a ready-to-use software for Restaurant and Retail businesses. It takes care of your billing (POS), finance, inventory, customer loyalty, supply chain, payroll, analysis, promotions, and offers. Unlike other software, it makes you profit sooner, reach the break-even faster, and open new outlets quicker.</p>
          </div>
          <button class="faqaccordion">Is it available on cloud or desktop?</button>
          <div class="faqpanel">
            <p>RanceLab can be installed and used in various ways that suit your infrastructure. It can be installed on a local machine (desktop or pos) or network of machines. It can be hosted on the cloud and accessed from anywhere. It is a perfect companion for a single location or chain of locations.</p>
          </div>
		  
		   <button class="faqaccordion">Does it require the Internet to work?</button>
          <div class="faqpanel">
            <p>Desktop software does not require the Internet to function. However, the cloud-hosted application requires internet connectivity. You may use your own mobile data to keep the operations running.</p>
          </div>
		   <button class="faqaccordion">What kind of support do you offer?</button>
          <div class="faqpanel">
            <p>We offer 24/7 support via various support channels such as phone, email, online ticket, web FAQ, online manual, context-sensitive built-in help, dedicated support / account managers.</p>
          </div>
		  
        </div>
        </div>
        </div>
      </div>    
  </section>
			</p>
			<p>This section is updated frequently, and offers links to our most requested information about RanceLab®.</p>
			<p>2012-07-09 15:57</p>
			<p><strong><a href="?sid=3833053&amp;lang=en&amp;newsid=0">Show archived news.</a></strong></p>
			<p>There are 679 FAQs online</p>
          </div>
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
var acc = document.getElementsByClassName("faqaccordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var faqpanel = this.nextElementSibling;
    if (faqpanel.style.maxHeight) {
      faqpanel.style.maxHeight = null;
    } else {
      faqpanel.style.maxHeight = faqpanel.scrollHeight + "px";
    } 
  });
}
</script>
</body>
</html>
