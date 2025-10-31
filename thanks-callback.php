<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Thanks for Download | Retail Software for POS &amp; Restaurant | Stores Management Software</title>
<meta name="keywords" content="Retail Point of Sale (POS) Software, Restaurant Software, Pizza &amp; Cake Shop Software, Barcode, Hardware, Solution, POS Terminal, Anti Theft, Data Capturing Unit" />
<meta name="description" content="RanceLab offers, RanceLab Software - Point of Sale (POS) Software for Retail &amp; Restaurant Businesses" />
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
    <link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/thanks-download.php"/>
    <?php $pagename="downloads"; ?>
</head>
<body>
  <header id="header" class="header header-hide">
    <?php include("includes/common-header.php"); ?>
  </header><!-- #header -->
<section id="hero" style="visibility: visible; animation-name: fadeIn;margin-top: ;">
	<div class="hero-container">
		<div class="container">
			<h1 class="text-center">Thank you, <?php echo $_SESSION['fullname']; ?></h1>			
			<!--<h2 class="text-center">RanceLab® FusionResto
				<br />Complete software for restaurant management!
			</h2>-->
		</div>
	</div>
</section>
  <section id="contact_us_section" class="about-us padd-section">
    <div class="container">
      <div class="row"> 
        <div class="col-md-8 col-lg-8">
          <div class="about-content"> 
						<p>We have received your request and we will call you back soon.</p>
						<p><strong> Meanwhile you may like to explore</strong></p>
						<a href="https://www.rancelab.com/video-gallery.php" class="btn button-green rounded mb-3">Video</a>&nbsp;
						<a href="https://www.rancelab.com/blog" class="btn button-green rounded mb-3">Blog </a>
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
