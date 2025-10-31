<?php
	include('../config.php');
	require_once "../includes/PHPMailer/PHPMailerAutoload.php";
	require_once '../includes/formtokenCls.php';
	require_once "../includes/general-func.php";
	$tm=time();
	
	$data=array();
	$data['fullname']=trim($_POST['fullname']);
	$fullname=trim($_POST['fullname']);
	$data['phone']=trim($_POST['phone']);
	$data['email']=trim($_POST['email']);
	$email=trim($_POST['email']);
	$data['restaurant-name']=trim($_POST['restaurant-name']);
	
	

   if($data['fullname']=='' || $data['email']=='' || $data['phone']=='' || $data['restaurant-name']==''){
   	print_r($data);
		$_SESSION['frmerrmsg']='Those marked with <strong class="text-danger">*</strong> are required please.';
		//header("location:index.html");
		die("aa");
		exit();
	}
	if(formtoken::validateToken($_POST)) {
		$data['datetime']=date('Y-m-d H:i:s',$tm);
		$datadatetime=date('d-m-Y H:i:s',strtotime($data['datetime']));
		$ipaddress=$_SERVER['REMOTE_ADDR'];
		$useragent=$_SERVER['HTTP_USER_AGENT'];
		$userreferer=$_SERVER['HTTP_REFERER'];
		$emailsignature=CONST_EMAIL_SIGNATURE;
		//include_once("../includes/request-email-body.php");
		$to=explode(',',CONST_DOWNLOAD_ADMIN_EMAIL_TO);
		$cc=explode(',',CONST_DOWNLOAD_ADMIN_EMAIL_CC);
		$bcc=explode(',',CONST_DOWNLOAD_ADMIN_EMAIL_BCC);
		//$replyto=explode(',',CONST_DEMO_REQUEST_REPLY_TO);
		//$to=['mr.sheikhazad@gmail.com'];
		$replyto=[['email_id'=>$email,'name'=>$fullname]];
		$from=CONST_MAIL_SENDERS_EMAIL;
		$fromname=CONST_MAIL_SENDERS_NAME;
		$subject="RanceLab - NRAI offer form by ".$fullname;
		$htmlmessage="
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
	<tr>
		<td>
			<table width='100%' border='0' cellspacing='0' cellpadding='10' align='center' style='font-family:Helvetica CE Narrow, Arial, Helvetica, sans-serif; font-size:15px; line-height:22px; color:#555;'>
			<tr>
				<td colspan='2' bgcolor='#f2f0f0' style='border-top:1px solid #fff;'>Hi<br><br>
				There is a new demo request from the website:
				</td>
			</tr>
			<tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'>Full Name:</strong></td>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$data['fullname']."</td>
			</tr>
			<tr>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'><strong style='line-height:26px;'>Restaurant Name:</strong></td>
				<td bgcolor='#f2f0f0' style='border-bottom:1px solid #fff;'>".$data['restaurant-name']."</td>
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
</table>";
		$textmessage='';
		
		// Mail to Rancelab
		sendAMail($to,$subject,$htmlmessage,$textmessage='',$from,$fromname,$html=true,$type='',$smtpdetails=array(),$cc=array(),$bcc,$replyto=array(),$inlineimages=array(),$attachments=array());
		

		//Mail to user
		$userto=explode(',',$data['email']);
		//$usersubject="RanceLab - Download Link - FusionRetail";
		$usersubject="RanceLab - NRAI offer thanks";
		$userhtmlmessage="
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
	<tr>
		<td colspan='2'>Hello ".$data['fullname'].",<br><br>
		Thank you for contacting us.<br>We will shortly call you to schedule a personalized demo.</td>
	</tr>
	<tr>
		<td colspan='2'><br>---<br>Regards,<br>".$emailsignature."<br>+91 98319 26662<br>RanceLab Team</td>
	</tr>
</table>";
		$usertextmessage='';
		sendAMail($userto,$usersubject,$userhtmlmessage,$usertextmessage='',$from,$fromname,$html=true,$type='',$smtpdetails=array(),$cc=array(),$bcc=array(),$replyto=array(),$inlineimages=array(),$attachments=array());
		
		$_SESSION['fullname']=$data['fullname'];
		header("location:thanks.php");
		
	}else {
		die('The form is not valid or has expired.');
	}

?>
