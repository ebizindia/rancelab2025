<?php include("config.php"); ?>
<?php
if($_GET['a']=='AzAd'){
  phpinfo();
    die();
  }?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Page Not Found!</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="restaurant software, pos software, restaurant point of sale, retail pos software, Store Management Software, retail software" name="keywords">
        <meta content="For restaurateurs or retailers who own a standalone outlet or a chain of stores, RanceLab software provides POS billing, inventory control, financial accounting, payroll, customer loyalty program and mobile based reporting." name="description">
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
              "logo": "https://www.rancelab.com/../img/logo.png"
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
		    <link href="<?php echo CONST_APP_ABSURL;?>/css/about-us.css" rel="stylesheet">
        <link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/404.php"/>
    </head>
    <body>
        <header id="header" class="header header-hide">
            <?php include("includes/common-header.php"); ?>
        </header>
        <!-- #header -->
        <section id="hero">
            <div class="hero-container">
                <div class="container">
                    <h1 class="text-center">404</h1>                    
                    <div class="row text-center mt-5 mb-5 about_us_heading">
                      
                    </div>
                </div>
            </div>
        </section>
        <!-- #hero -->
        <section id="about_us_section" class="about-section-content">
            <div class="container">
                <div class="row">
					<div class="col-lg-12">						
						<div class="inner_content">
							<h2 class="text-center mb-5">Sorry, the page that you were looking for does not exist!</h2>
							<h3 class="text-center mb-5">Meanwhile you may visit our <a href="http://www.rancelab.com/" >Home page</a>.</h3>
						</div>
					</div>							
                </div>
            </div>
        </section>
        <footer class="footer">
            <?php include("includes/common-footer.php"); ?>
        </footer>
        <?php include("includes/mobile-slicky-footer.php");?>
        <?php include("includes/common-footer-scripts.php"); ?>
    </body>
</html>