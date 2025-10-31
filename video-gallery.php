<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <title>Video Gallery | Retail Software for POS &amp; Restaurant | Stores Management Software</title>
      <meta name="keywords" content="POS, Point of Sale, Retail Management, Retail Software, Retail Management Software, Retail Point of Sale Software, Barcode Label Printers, Barcode Label Software, POS Software , Restaurant Software, Food Court Software, Restaurant POS, POS Food Court, CRM POS Inventory" />
      <meta name="description" content="RanceLab works with wide range of POS hardware from barcode label printers, barcode scanner (CCD, laser, flat bed and bluetooth), RFID, data capturing units, standard dot matrix printers to fast and efficient thermal receipt printers, electronic cash drawers, customer display, magnetic card readers, touch screens and electronic weighing scales." />
      <?php include("includes/common-top-scripts.php"); ?>
      <link href="css/form.css" rel="stylesheet">
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
      <link href="<?php echo CONST_APP_ABSURL;?>/css/video-gallery.css" rel="stylesheet">
      <?php $pagename="downloads"; ?>
      <link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/video-gallery.php"/>
   </head>
   <body>
      <header id="header" class="header header-hide">
         <?php include("includes/common-header.php"); ?>
      </header>
      <!-- #header -->
      <!--==========================
         About Us Section
         ============================-->
      <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <!--<h4 class="modal-title" id="myModalLabel">Modal title</h4>-->
               </div>
               <div class="modal-body">
                  <div class="embed-container">
                     <iframe width="100%" height="350" src="" frameborder="0" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!----------------------->
      <!----------------------->
      <section id="hero">
         <div class="hero-container">
            <div class="container">
               <h1 class="text-center">Video Gallery</h1>
               <!--<h2 class="text-center">RanceLab® FusionResto
                  <br />Complete software for restaurant management!
                  </h2>-->
               <div class="row text-center mt-5 mb-5 about_us_heading">
                  <div class="col-12 ">
                     <a href="<?php echo CONST_APP_ABSURL;?>/downloads.php" class="btn ctabtn button-green rounded">Download Free Trial</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="video-gallery" class="photo-gallery">
         <div class="about-section-content">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-lg-4">
                     <div class="text-center mb-4">
                        <a rel="group" class="tip4 video-modal" data-video="https://www.youtube.com/embed/3RDOcxg5x2g" data-toggle="modal" data-target="#videoModal" title="Interview of Pranit Kumar (F&amp;B Manager of Bika Food palace)">
                        <img src="img/bika-interview-thumb.jpg" alt="Interview of Pranit Kumar (F&amp;B Manager of Bika Food palace)" title="Interview of Pranit Kumar (F&amp;B Manager of Bika Food palace)" class="imgborder" width="223" height="141"><br>
                        <span class="inner_screenshots_col_txt">Interview of Pranit Kumar<br>(F&amp;B Manager of Bika Food palace)</span></a>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <div class="text-center mb-4">
                        <a rel="group" class="tip4 video-modal" data-video="https://www.youtube.com/embed/7wmKtpndsDQ" data-toggle="modal" data-target="#videoModal" title="Interview of Vijay Mittal (Director of Biscotti)">
                        <img src="img/biscotti-interview-thumb.jpg" alt="Interview of Vijay Mittal (Director of Biscotti)" title="Interview of Vijay Mittal (Director of Biscotti)" class="imgborder" width="223" height="141"><br>
                        <span class="inner_screenshots_col_txt">Interview of Vijay Mittal<br>(Director of Biscotti)</span></a>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <div class="text-center mb-4">
                        <a rel="group" class="tip4 video-modal" data-video="https://www.youtube.com/embed/U61CMrwAnTM" data-toggle="modal" data-target="#videoModal" title="Interview of Rahul Chaurasia (Partner of Ganguram)" >
                        <img src="img/ganguram-interview-thumb.jpg" alt="Interview of Rahul Chaurasia (Partner of Ganguram)" title="Interview of Rahul Chaurasia (Partner of Ganguram)" class="imgborder" width="223" height="141"><br>										
                        <span class="inner_screenshots_col_txt">Interview of Rahul Chaurasia<br>(Partner of Ganguram)</span></a>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <div class="text-center mb-4">
                        <a rel="group" class="tip4 video-modal" data-video="https://www.youtube.com/embed/_rapsjipkbg" data-toggle="modal" data-target="#videoModal" title="Interview of Rajesh Lachwani (Owner of Jailakshmi's Heritage)" >
                        <img src="img/jailakshmi-interview-thumb.jpg" alt="Interview of Rajesh Lachwani (Owner of Jailakshmi's Heritage)" title="Interview of Rajesh Lachwani (Owner of Jailakshmi's Heritage)" class="imgborder" width="223" height="141"><br>
                        <span class="inner_screenshots_col_txt">Interview of Rajesh Lachwani<br>(Owner of Jailakshmi's Heritage)</span></a>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <div class="text-center mb-4">
                        <a rel="group" class="tip4 video-modal" data-video="https://www.youtube.com/embed/UwdLeb3PtZA" data-toggle="modal" data-target="#videoModal" title="Interview of Babita Agarwal (Store Incharge of La Lingerie)" >
                        <img src="img/la-lingerie-interview-thumb.jpg" alt="Interview of Babita Agarwal (Store Incharge of La Lingerie)" title="Interview of Babita Agarwal (Store Incharge of La Lingerie)" class="imgborder" width="223" height="141"><br>
                        <span class="inner_screenshots_col_txt">Interview of Babita Agarwal<br>(Store Incharge of La Lingerie)</span></a>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <div class="text-center">
                        <a rel="group" class="tip4 video-modal" data-video="https://www.youtube.com/embed/sPqR0DZSbmY" data-toggle="modal" data-target="#videoModal" title="Interview of Anil Singhania (Store Incharge of Mega Baazar)" >
                        <img src="img/mega-baazar-interview-thumb.jpg" alt="Interview of Anil Singhania (Store Incharge of Mega Baazar)" title="Interview of Anil Singhania (Store Incharge of Mega Baazar)" class="imgborder" width="223" height="141"><br>
                        <span class="inner_screenshots_col_txt">Interview of Anil Singhania<br>(Store Incharge of Mega Baazar)</span></a>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <div class="text-center mb-4">
                        <a rel="group" class="tip4 video-modal" data-video="https://www.youtube.com/embed/wu6rYKi3rWU" data-toggle="modal" data-target="#videoModal" title="Interview of Vikash Agarwal (Owner of Shishu)" >
                        <img src="img/shishu-interview-thumb.jpg" alt="Interview of Vikash Agarwal (Owner of Shishu)" title="Interview of Vikash Agarwal (Owner of Shishu)" class="imgborder" width="223" height="141"><br>
                        <span class="inner_screenshots_col_txt">Interview of Vikash Agarwal<br>(Owner of Shishu)</span></a>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <div class="text-center mb-4">
                        <a rel="group" class="tip4 video-modal" data-video="https://www.youtube.com/embed/GIAcS95Spnk" data-toggle="modal" data-target="#videoModal" title="Interview of Pronab Bor (Manager of Tandoor Park)" >
                        <img src="img/tandoor-park-interview-thumb.jpg" alt="Interview of Pronab Bor (Manager of Tandoor Park)" title="Interview of Pronab Bor (Manager of Tandoor Park)" class="imgborder" width="223" height="141"><br>
                        <span class="inner_screenshots_col_txt">Interview of Pronab Bor<br>(Manager of Tandoor Park)</span></a>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4" style="margin:auto;">
                     <div class="text-center mb-4">
                        <a rel="group" class="tip4 video-modal" data-video="https://www.youtube.com/embed/JUj3MxobU0k" data-toggle="modal" data-target="#videoModal" title="Interview of Naina Badiani (Owner of Tress Talk)" >
                        <img src="img/tress-talk-interview-thumb.jpg" alt="Interview of Naina Badiani (Owner of Tress Talk)" title="Interview of Naina Badiani (Owner of Tress Talk)" class="imgborder" width="223" height="141"><br>
                        <span class="inner_screenshots_col_txt">Interview of Naina Badiani<br>(Owner of Tress Talk)</span></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="mt-2 pb-4 text-center">    		
               <a href="<?php echo CONST_APP_ABSURL;?>/contact-us.php" class="btn ctabtn button-green rounded mb-3">Get a no obligation proposal now!</a>
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
         $(".video-modal").click(function () {
           var theModal = $(this).data("target"),
               videoSRC = $(this).attr("data-video"),
               videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
           $(theModal + ' iframe').attr('src', videoSRCauto);
           $(theModal).on('hidden.bs.modal', function () {
             $(theModal + ' iframe').attr('src', videoSRC);
           });
         });
      </script>
   </body>
</html>

