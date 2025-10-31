<?php
include("config.php");

function request() {
	$url = "https://test.oppwa.com/v1/checkouts";
	$data = "entityId=8a8294174b7ecb28014b9699220015ca"."&amount=0.05"."&currency=EUR"."&paymentType=DB";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                   'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
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
$obj = json_decode($responseData);

$checkoutId=$obj->id;
$_SESSION["checkoutid"] = $checkoutId;
$shopperResultUrl="/thank-you-purchase.php";
//die();
//https://zionpayments.docs.oppwa.com/tutorials/integration-guide



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
<style>
   .cnpBillingCheckoutWrapper {position:relative;}
    .cnpBillingCheckoutHeader {width:100%;border-bottom: 1px solid #c0c0c0;margin-bottom:10px;}
    .cnpBillingCheckoutLeft {width:240px;margin-left: 5px;margin-bottom: 10px;border: 1px solid #c0c0c0;display:inline-block;vertical-align: top;padding:10px;}
    .cnpBillingCheckoutRight {width:50%;margin-left: 5px;border: 1px solid #c0c0c0;display:inline-block;vertical-align: top;padding:10px;}
    .cnpBillingCheckoutOrange {font-size:110%;color: rgb(255, 60, 22);font-weight:bold;}
    div.wpwl-wrapper, div.wpwl-label, div.wpwl-sup-wrapper { width: 100% }
    div.wpwl-group-expiry, div.wpwl-group-brand { width: 30%; float:left }
    div.wpwl-group-cvv { width: 68%; float:left; margin-left:2% }
    div.wpwl-group-cardHolder, div.wpwl-sup-wrapper-street1, div.wpwl-group-expiry { clear:both }
    div.wpwl-sup-wrapper-street1 { padding-top: 1px }
    div.wpwl-wrapper-brand { width: auto }
    div.wpwl-sup-wrapper-state, div.wpwl-sup-wrapper-city { width:32%;float:left;margin-right:2% }
    div.wpwl-sup-wrapper-postcode { width:32%;float:left }
    div.wpwl-sup-wrapper-country { width: 66% }
    div.wpwl-wrapper-brand, div.wpwl-label-brand, div.wpwl-brand { display: none;}
    div.wpwl-group-cardNumber { width:60%; float:left; font-size: 20px;  }
    div.wpwl-group-brand { width:35%; float:left; margin-top:28px }
    div.wpwl-brand-card  { width: 65px }
    div.wpwl-brand-custom  { margin: 0px 5px; background-image: url("https://oppwa.com/v1/paymentWidgets/img/brand.png") }
</style>  
<script type="text/javascript">
      var wpwlOptions = {
      style: "plain",
      billingAddress: {
       billingAddress: {},
        mandatoryBillingFields:{
            country: true,
            state: true,
            city: true,
            postcode: true,
            street1: true,
            street2: false
        }
      },
      forceCardHolderEqualsBillingName: true,
      showCVVHint: true,
      brandDetection: true,
      brandDetectionType: "binlist",
      brandDetectionPriority: ["CARTEBANCAIRE","VISA","MAESTRO","MASTER"],


      onReady: function(){ 
        $(".wpwl-group-cardNumber").after($(".wpwl-group-brand").detach());
        $(".wpwl-group-cvv").after( $(".wpwl-group-cardHolder").detach());
        var visa = $(".wpwl-brand:first").clone().removeAttr("class").attr("class", "wpwl-brand-card wpwl-brand-custom wpwl-brand-VISA")
        var master = $(visa).clone().removeClass("wpwl-brand-VISA").addClass("wpwl-brand-MASTER");
        $(".wpwl-brand:first").after( $(master)).after( $(visa));
      },
      onChangeBrand: function(e){
        $(".wpwl-brand-custom").css("opacity", "0.3");
        $(".wpwl-brand-" + e).css("opacity", "1"); 
      }
    }
</script>
<script src="https://test.oppwa.com/v1/paymentWidgets.js?checkoutId=<?php echo $checkoutId; ?>"></script>
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
                    <h2>Payment</h2>
                    <form action="<?php echo $shopperResultUrl; ?>" class="paymentWidgets" data-brands="VISA MASTER AMEX"></form>
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