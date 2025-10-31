<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Restaurant &amp; Retail POS Software - Be More profitable | Rancelab</title>
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
        <link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/search.php"/>
    </head>
    <body>
        <header id="header" class="header header-hide">
            <?php include("includes/common-header.php"); ?>
        </header>
        <!-- #header -->
        <section id="hero" class="wow fadeIn">
            <div class="hero-container">
                <div class="container">
                    <h1 class="text-center">Search</h1>
                    <!--<h2 class="text-center">RanceLab® FusionResto
                        <br />Complete software for restaurant management!
                    </h2>-->
                    <div class="row text-center mt-5 mb-5">
                        <div class="col-12 ">
                            <a href="<?php echo CONST_APP_ABSURL;?>/downloads.php" class="btn ctabtn button-green rounded">Download Free Trial</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- #hero -->
        <section id="search_page_section">
            <div class="container">
                <div class="row">
					<div class="col-lg-12">
						<form class="search_form">
							<div class="card-body row no-gutters align-items-center">								
								<div class="col">
									<input class="search_text form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
								</div>
								<div class="col-auto">
									<button class="search_button btn btn-lg btn-success" type="submit"><i class="fa fa-search h4 text-body"></i></button>
								</div>
							</div>
                        </form>						
					</div>
                </div>
            </div>
        </section>
        <section class="search_content">
			<div class="container">
                <div class="row">
					<div class="col-lg-12">
						<div class="search_block">
							<h4>Topic 1</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ed not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
						</div>
						<div class="search_block">
							<h4>Topic 2</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
						</div>
						<div class="search_block">
							<h4>Topic 3</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
						</div>
						<div class="search_block">
							<h4>Topic 4</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>	
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when any of type and scrambled it to make a type specimen book. It has survived nturies, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
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