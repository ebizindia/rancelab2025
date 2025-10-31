<?php
include("config.php");
function request() {
    
   $url = "https://test.oppwa.com";
   $url.=$_GET['resourcePath'];
   $url .= "?entityId=8a8294174b7ecb28014b9699220015ca";
    


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                   'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $responseData = curl_exec($ch);
    if(curl_errno($ch)) {
        return curl_error($ch);
    }
    curl_close($ch);
    return $responseData;
}
$responseData = request();
//echo "Print Response Data";
//print_r($responseData);
$obj = json_decode($responseData, true);

//echo $arr["result"]["description"];

$description=$obj["result"]["description"];
//echo "<br>".$description;
$shopperResultUrl="thank-you-purchase.php";
//die();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>Restaurant &amp; Retail POS Software - Be More profitable | Rancelab</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="restaurant software, pos software, restaurant point of sale, retail pos software, Store Management Software, retail software" name="keywords">
  <meta content="For restaurateurs or retailers who own a standalone outlet or a chain of stores, FusionRetail software provides POS billing, inventory control, financial accounting, payroll, customer loyalty program and mobile based reporting." name="description">


  <?php include("includes/common-top-scripts.php"); ?>

<link href="<?php echo CONST_APP_ABSURL;?>/css/home-page.css" rel="stylesheet">
<link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/"/>
</head>
<body>
<header id="header" class="header header-hide">
    <?php include("includes/common-header.php"); ?>
    
</header>

<section id="about-us" class="about-us padd-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-6">
                <div class="about-content">
                    <h2>Payment Status</h2>
                    <?php echo $description; ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <!--<img src="images/hero-img.png" alt="" class="">-->
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