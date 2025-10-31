<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sitemap | Rance Computer Pvt. Ltd.</title>
<meta content="restaurant software, pos software, restaurant point of sale, retail pos software, Store Management Software, retail software" name="keywords">
<meta content="For restaurateurs or retailers who own a standalone outlet or a chain of stores, RanceLab software provides POS billing, inventory control, financial accounting, payroll, customer loyalty program and mobile based reporting." name="description">

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
    <link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/sitemap.php"/>
    <?php $pagename="downloads"; ?>
</head>
<body>
  <header id="header" class="header header-hide">
    <?php include("includes/common-header.php"); ?>
  </header><!-- #header -->
<section id="hero">
	<div class="hero-container">
		<div class="container">
			<h1 class="text-center">Site Map</h1>
		</div>
	</div>
</section>
  <section id="contact_us_section" class="about-us padd-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="about-content">      
			<p><h4>Last updated: 2011, September 1</h4></p>	
			<hr>			
			
			<div class="row"> 			
				<div class="col-lg-6 col-md-6">
					<ul>
						<li><a href="<?php echo CONST_APP_ABSURL;?>/">Home</a></li>
						<li><a href="<?php echo CONST_APP_ABSURL;?>/restaurant-software/">Restaurant Software</a></li>
						<li><a href="retail-software/">Retail Software</a></li>
						<li><a href="<?php echo CONST_APP_ABSURL;?>/pos-hardware.php">Hardware Products</a></li>
						<li><a href="<?php echo CONST_APP_ABSURL;?>/contact.php">Contact us</a></li>
						<li><a href="<?php echo CONST_APP_ABSURL;?>/about-us.php">About Us</a></li>
						<li><a href="https://www.rancelab.com/blog/">Blog</a></li>						
						<li><a href="<?php echo CONST_APP_ABSURL;?>/online-support.php">Online Support</a></li>
						<li><a href="https://www.rancelab.com/help/">Online Manual</a></li>
						<li><a href="<?php echo CONST_APP_ABSURL;?>/faq.php">Online FAQ</a></li>	
						
					</ul>				
				</div>
				<div class="col-lg-6 col-md-6">				
					<ul>							
						<li><a href="<?php echo CONST_APP_ABSURL;?>/testimonials.php">Testimonials</a></li>
						<li><a href="<?php echo CONST_APP_ABSURL;?>/photo-gallery.php">Photo Gallery</a></li>
						<li><a href="<?php echo CONST_APP_ABSURL;?>/video-gallery.php">Video Gallery</a></li>
						<li><a href="<?php echo CONST_APP_ABSURL;?>/dealership.php">Dealership</a></li>
						<li><a href="<?php echo CONST_APP_ABSURL;?>/careers.php">Careers</a></li>						
						<li><a href="<?php echo CONST_APP_ABSURL;?>/faq.php">FAQ</a></li>
						<li><a href="<?php echo CONST_APP_ABSURL;?>/sitemap.php">Sitemap</a></li>
						<li class='<?php if($pagename=="downloads"){ echo "menu-active"; } ?>' ><a href="<?php echo CONST_APP_ABSURL;?>/downloads.php">Download</a></li>			
						<li><a href="<?php echo CONST_APP_ABSURL;?>/case-studies.php">Case Studies</a></li>		
						<li><a href="https://www.rancelab.com/help/">Manual</a></li>
					</ul>				
				</div>
			</div>
			
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
</body>
</html>
