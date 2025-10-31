<?php
	include('config.php');
	require_once "includes/PHPMailer/PHPMailerAutoload.php";
	require_once 'includes/formtokenCls.php';
	require_once "includes/general-func.php";
	$tm=time();
	
	$data=array();
	$data['fullname']=trim($_POST['fullname']);
	$fullname=trim($_POST['fullname']);
	$data['phone']=trim($_POST['phone']);
	$data['email']=trim($_POST['email']);
	$email=trim($_POST['email']);
	
	

   if($data['fullname']=='' || $data['email']=='' || $data['phone']==''){
		$_SESSION['frmerrmsg']='Those marked with <strong class="text-danger">*</strong> are required please.';
		header("location:index.php");
		exit();
	}
	if(formtoken::validateToken($_POST)) {
		$data['datetime']=date('Y-m-d H:i:s',$tm);
		$datadatetime=date('d-m-Y H:i:s',strtotime($data['datetime']));
		$ipaddress=$_SERVER['REMOTE_ADDR'];
		$useragent=$_SERVER['HTTP_USER_AGENT'];
		$userreferer=$_SERVER['HTTP_REFERER'];
		$emailsignature=CONST_EMAIL_SIGNATURE;
		include_once("includes/request-email-body.php");
		$to=explode(',',CONST_DOWNLOAD_ADMIN_EMAIL_TO);
		$cc=explode(',',CONST_DOWNLOAD_ADMIN_EMAIL_CC);
		$bcc=explode(',',CONST_DOWNLOAD_ADMIN_EMAIL_BCC);
		//$replyto=explode(',',CONST_DEMO_REQUEST_REPLY_TO);
		$replyto=[['email_id'=>$email,'name'=>$fullname]];
		$from=CONST_MAIL_SENDERS_EMAIL;
		$fromname=CONST_MAIL_SENDERS_NAME;
		$subject="RanceLab - Download by ".$data['fullname'];
		$htmlmessage=$downloadAlertAdmin;
		$textmessage='';
		
		// Mail to Rancelab
		sendAMail($to,$subject,$htmlmessage,$textmessage='',$from,$fromname,$html=true,$type='',$smtpdetails=array(),$cc=array(),$bcc,$replyto=array(),$inlineimages=array(),$attachments=array());
		

		//Mail to user
		$userto=explode(',',$data['email']);
		//$usersubject="RanceLab - Download Link - FusionRetail";
		$usersubject="RanceLab - Download Link";
		$userhtmlmessage=$downloadNotfyUser;
		$usertextmessage='';
		sendAMail($userto,$usersubject,$userhtmlmessage,$usertextmessage='',$from,$fromname,$html=true,$type='',$smtpdetails=array(),$cc=array(),$bcc=array(),$replyto=array(),$inlineimages=array(),$attachments=array());
		
		$_SESSION['fullname']=$data['fullname'];
		header("location:thanks-download.php");
		
	}else {
		die('The form is not valid or has expired.');
	}

?>
