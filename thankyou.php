<?php
session_start();
include("config.php");

// Retrieve applicant's name from session, default to "Applicant" if not set
$applicant_name = isset($_SESSION['applicant_name']) ? htmlspecialchars($_SESSION['applicant_name']) : 'Applicant';
// Clear session data to prevent persistence
unset($_SESSION['applicant_name']);
unset($_SESSION['email_success']);
unset($_SESSION['email_error']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Thank You | RanceLab</title>
    <meta name="keywords" content="Retail Point of Sale (POS) Software, Restaurant Software, Job Application, Career Opportunities, RanceLab" />
    <meta name="description" content="Thank you for submitting your resume to RanceLab. Our HR team will contact you soon regarding career opportunities." />
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
    <link rel="canonical" href="<?php echo CONST_APP_ABSURL; ?>/thankyou.php"/>
    <?php $pagename="careers"; ?>
</head>
<body>
    <header id="header" class="header header-hide">
        <?php include("includes/common-header.php"); ?>
    </header>
    <section id="hero" style="visibility: visible; animation-name: fadeIn;">
        <div class="hero-container">
            <div class="container">
                <h1 class="text-center">Thank you for submitting your resume.</h1>
            </div>
        </div>
    </section>
    <section id="contact_us_section" class="about-us padd-section download-fusionretail">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-content" style="width:300px;margin:auto;">          
                        <h4>Dear <?php echo $applicant_name; ?></h4>
                        We have received your application. <br>
                        Our HR team will reach out to you soon. <br><br>
                        Thanks
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
