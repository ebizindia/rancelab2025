<?php

$downloadAlertAdmin="
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
	<tr>
    	<td>
            <table width='100%' border='0' cellspacing='0' cellpadding='10' align='center' style='font-family:Helvetica CE Narrow, Arial, Helvetica, sans-serif; font-size:15px; line-height:22px; color:#555;'>

		    <tr>
				<td colspan='2' bgcolor='#f2f0f0' style='border-top:1px solid #fff;'>Hi<br><br>
				There is a new download request from the website:
				</td>
              </tr>
			  <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'>Full Name:</strong></td>
                <td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$data['fullname']."</td>
			  </tr>
			  <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'> Contact Number:</strong></td>
                <td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$data['phone']."</td>
			  </tr>
			  <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'> Email:</strong></td>
                <td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$data['email']."</td>
			  </tr>
			  <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'>Entry page:</strong></td><td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$visitorsourcedetails['entry_page']."</td>
			  </tr>
			  <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'>Site referrer:</strong></td><td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$visitorsourcedetails['referrer']."</td>
			  </tr>
              <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'>Medium:</strong></td><td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$visitorsourcedetails['medium']."</td>
			  </tr>
			  <tr>
                <td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'>Source:</strong></td><td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$visitorsourcedetails['source']."</td>
              </tr>
              <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'>Keywords:</strong></td><td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$visitorsourcedetails['keyword']."</td>
			  </tr>
			  <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'> Request Submitted On:</strong></td>
                <td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$datadatetime."</td>
			  </tr>
			  <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'>IP Address:</strong></td>
                <td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><a href='http://whois.domaintools.com/".$ipaddress."' >". $ipaddress. "</a></td>
			  </tr>
			  <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'>User Agent:</strong></td>
                <td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$useragent."</td>
			  </tr>
			  <tr>
				<td colspan='2' bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>Regards,<br>".$emailsignature."</td>
              </tr>

			</table>
		</td>
	</tr>
</table>
\n";

$downloadNotfyUser="<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
<tr>
<td colspan='2'>Hello ".$data['fullname'].",<br><br>
Please click on the given link to download the evaluation copy of RanceLab&reg; FusionRetail&trade; 6:<br><br></td>
</tr>
<tr>
<td><a href='/downloads-fusionretail.php'>http://www.rancelab.com/downloads-fusionretail.php</a><br><br></td>
</tr>
<tr>
<td>We also carry a wide range of <a href='http://www.rancelab.com/hardware-products.php'>POS Hardware</a>.<br><br></td>
</tr>
<tr>
<td colspan='2'><br>---<br>Regards,<br>".$emailsignature."<br>RanceLab Team</td>
</tr>
</table>
\n";


$contactAlertAdmin="
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
	<tr>
    	<td>
            <table width='100%' border='0' cellspacing='0' cellpadding='10' align='center' style='font-family:Helvetica CE Narrow, Arial, Helvetica, sans-serif; font-size:15px; line-height:22px; color:#555;'>

		    <tr>
				<td colspan='2' bgcolor='#f2f0f0' style='border-top:1px solid #fff;'>Hi<br><br>
				There is a new download request from the website:
				</td>
              </tr>
			  <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'>Full Name:</strong></td>
                <td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$data['fullname']."</td>
			  </tr>
			  <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'> Contact Number:</strong></td>
                <td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$data['phone']."</td>
			  </tr>
			  <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'> Email:</strong></td>
                <td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$data['email']."</td>
			  </tr>
			  <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'> Requirements:</strong></td>
                <td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$data['requirements']."</td>
			  </tr>
			  <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'>Entry page:</strong></td><td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$visitorsourcedetails['entry_page']."</td>
			  </tr>
			  <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'>Site referrer:</strong></td><td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$visitorsourcedetails['referrer']."</td>
			  </tr>
              <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'>Medium:</strong></td><td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$visitorsourcedetails['medium']."</td>
			  </tr>
			  <tr>
                <td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'>Source:</strong></td><td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$visitorsourcedetails['source']."</td>
              </tr>
              <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'>Keywords:</strong></td><td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$visitorsourcedetails['keyword']."</td>
			  </tr>
			  <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'> Request Submitted On:</strong></td>
                <td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$datadatetime."</td>
			  </tr>
			  <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'>IP Address:</strong></td>
                <td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><a href='http://whois.domaintools.com/".$ipaddress."' >". $ipaddress. "</a></td>
			  </tr>
			  <tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'>User Agent:</strong></td>
                <td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$useragent."</td>
			  </tr>
			  <tr>
				<td colspan='2' bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>Regards,<br>".$emailsignature."</td>
              </tr>

			</table>
		</td>
	</tr>
</table>
\n";

$contactNotfyUser="<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
<tr>
<td colspan='2'>Hello ".$data['fullname'].",<br><br>
Thank you for contacting us – we will get back to you soon!</td>
</tr>
<tr>
<td colspan='2'><br>---<br>Regards,<br>".$emailsignature."<br>RanceLab Team</td>
</tr>
</table>
\n";
?>
