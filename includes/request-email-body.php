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
                <td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><a href='//whois.domaintools.com/".$ipaddress."' >". $ipaddress. "</a></td>
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

$downloadNotfyUser="
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
<tr>
<td colspan='2'>Hello ".$data['fullname'].",<br><br>
Please click on following link to download your copy of RanceLab&reg;<br><br></td>
</tr>
<tr>
<td><a href='https://www.rancelab.com/downloads-fusionretail.php'>https://www.rancelab.com/downloads-fusionretail.php</a><br><br></td>
</tr>
<tr>
<td colspan='2'><br>---<br>Regards,<br>".$emailsignature."<br>+91 98319 26662<br>RanceLab Team</td>
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
                <td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><a href='//whois.domaintools.com/".$ipaddress."' >". $ipaddress. "</a></td>
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
Thank you for contacting us.<br>We will shortly call you to schedule a personalized demo.</td>
</tr>
<tr>
<td colspan='2'><br>---<br>Regards,<br>".$emailsignature."<br>+91 98319 26662<br>RanceLab Team</td>
</tr>
</table>
\n";


$callbackAlertAdmin="
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
	<tr>
    	<td>
            <table width='100%' border='0' cellspacing='0' cellpadding='10' align='center' style='font-family:Helvetica CE Narrow, Arial, Helvetica, sans-serif; font-size:15px; line-height:22px; color:#555;'>

		    <tr>
				<td colspan='2' bgcolor='#f2f0f0' style='border-top:1px solid #fff;'>Hi<br><br>
				There is a new call back request from the website:
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
                <td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><a href='//whois.domaintools.com/".$ipaddress."' >". $ipaddress. "</a></td>
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

$callbackNotfyUser="<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
<tr>
<td colspan='2'>Hello ".$data['fullname'].",<br><br>
Thank you for contacting us.<br>We have received your request and we will call you back soon.</td>
</tr>
<tr>
<td colspan='2'><br>---<br>Regards,<br>".$emailsignature."<br>+91 98319 26662<br>RanceLab Team</td>
</tr>
</table>
\n";

$careerNotifyUser="<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
<tr>
<td colspan='2'><p>Dear ".$data['name'].",</p>
    <p>We have received your application.</p>
    <p>Our HR team will reach out to you soon.</p>
    <p>Thanks</p>
</td>
</tr>
<tr>
<td colspan='2'><br>---<br>Regards,<br>".$emailsignature."<br>+91 98319 26662<br>RanceLab Team</td>
</tr>
</table>
";
$careerNotifyAdmin="<p>You  have received a new application. Please find the details below.</p>
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
<tr><td>Name:</td><td>".$data['name']."</td></tr>
<tr><td>Email:</td><td>".$data['email']."</td></tr>
<tr><td>Phone:</td><td>".$data['phone']."</td></tr>
<tr><td>Mobile:</td><td>".$data['mobile']."</td></tr>
<tr><td>Position:</td><td>".$data['position']."</td></tr>
<tr><td>Preferred Time For Interview:</td><td>".$data['interview_time']."</td></tr>
<tr><td>Can Join Within:</td><td>".$data['join_time']."</td></tr>
</table>
<p>The CV has been attached.</p>
";
?>
