<div class="container">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="#body" class="scrollto"><span>e</span>Startup</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/" class="rance_logo"><img src="<?php echo CONST_APP_ABSURL;?>/images/logo.png" alt="Rancelab" title="Rancelab" width=162 height=44 /></a>
        <!--<a href="/" class="dispmob"><img src="<?php echo CONST_APP_ABSURL;?>/images/logo-mob.png" alt="Rancelab" title="Rancelab" /></a>-->

        <a href="<?php echo CONST_APP_ABSURL;?>/restaurant-software/" class="menu-link-left <?php echo $sw_section=='restaurant'?'active-link':'';?> ml-2">Restaurant</a><span class="top_menu_line sepright"></span><a href="<?php echo CONST_APP_ABSURL;?>/retail-software/" class="menu-link-left <?php echo $sw_section=='retail'?'active-link':'';?>">Retail</a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class='<?php if($pagename=="home"){ echo "menu-active"; } ?>'><a href="<?php echo CONST_APP_ABSURL;?>/">Home</a></li>
          <li class='<?php if($pagename=="downloads"){ echo "menu-active"; } ?>' ><a href="<?php echo CONST_APP_ABSURL;?>/downloads.php">Download</a></li>
          <li class='menu-has-children <?php if($pagename=="case-studies"){ echo "menu-active"; } ?>'><a href="#">Case Studies</a>
          	<ul>
              <li><a href="<?php echo CONST_APP_ABSURL;?>/case-studies.php">Case Studies</a></li>
              <li><a href="<?php echo CONST_APP_ABSURL;?>/photo-gallery.php">Photo Gallery</a></li>
              <li><a href="<?php echo CONST_APP_ABSURL;?>/video-gallery.php">Video Gallery</a></li>
              <li><a href="<?php echo CONST_APP_ABSURL;?>/testimonials.php">Testimonials</a></li>
              <li><a href="<?php echo CONST_APP_ABSURL;?>/video-testimonials.php">Video Testimonials</a></li>
            </ul>
          </li>
          <li class='menu-has-children <?php if($pagename=="faq"){ echo "menu-active"; } ?>'><a href="#">Support</a>
          	<ul>
              <li><a href="<?php echo CONST_APP_ABSURL;?>/online-support.php">Online Support</a></li>
              <li><a href="https://www.rancelab.com/help/" target="_blank">Online Manual</a></li>
              <li><a href="https://www.rancelab.com/faq/" target="_blank">Online FAQ</a></li>
            </ul>
          </li>
          <!--<li><a href="<?php echo CONST_APP_ABSURL;?>/blog">Blog</a></li>-->
          <li><a href="https://www.rancelab.com/blog/" target="_blank">Blog</a></li>
          <li class='<?php if($pagename=="contact"){ echo "menu-active"; } ?>'><a href="<?php echo CONST_APP_ABSURL;?>/contact-us.php">Contact</a></li>
          <li><a href="tel:+919831926662"><i class="fa fa-phone" aria-hidden="true"></i>
 +91 98319 26662</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>