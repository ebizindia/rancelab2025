<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Restaurant &amp; Retail POS Software - Be More profitable | RanceLab</title>
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
        <link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/price.php"/>
    </head>
    <body>
        <header id="header" class="header header-hide">
            <?php include("includes/common-header.php"); ?>
        </header>
        <!-- #header -->
        <section id="hero">
            <div class="hero-container">
                <div class="container">
                    <h1 class="text-center">Price List</h1>  
					<h4 class="text-center">Silver Jubilee Celebrations</h4>
                    <div class="row text-center mt-5 mb-5">
                        <div class="col-12 ">
                            <a href="<?php echo CONST_APP_ABSURL;?>/contact-us.php" class="btn ctabtn button-green rounded">Get no Obligation Proposal</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- #hero -->
        <!--<section id="benefits_section_one" class="text-center wow fadeInUp clearfix pt-2">
            <div class="container">
                <div class="section-title text-center">
                    <h1>FusionRetail works with a wide range of POS hardware</h1>
                    <h4>From barcode scanner, printer, card reader to data capturing unit</h4>
                </div>
            </div>
        </section>-->        
        <section id="price_section_detail" class="price-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="price_block">
                            <img src="img/rest.png" alt="" />
                            <h4>Restaurant Software Pricing</h4>
                            <p><a href="<?php echo CONST_APP_ABSURL;?>/restaurant-software/"><strong>more...</strong></a></p>
                        </div>
                    </div>
					<div class="col-md-4 col-lg-4">
                        <div class="price_block">
                            <img src="img/retail.png" alt="" />
                            <h4>Retail Software Pricing</h4>
                            <p><a href="<?php echo CONST_APP_ABSURL;?>/retail-software/"><strong>more...</strong></a></p>
                        </div>
                    </div>
					<!--<div class="col-md-4 col-lg-4">
                        <div class="price_block">
                            <img src="img/hotel.png" alt="" />
                            <h4>Hotel Software Pricing</h4>
                            <p><a href="#"><strong>more...</strong></a></p>
                        </div>
                    </div>-->
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