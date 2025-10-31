<?php
	include('config.php');
	require_once "includes/PHPMailer/PHPMailerAutoload.php";
	require_once 'includes/formtokenCls.php';
	require_once "includes/general-func.php";
	$tm=time();
	
	$data=array();
	$data['name']=$name=trim($_POST['name']);
	$data['company']=trim($_POST['company']);
	$data['address']=trim($_POST['address']);
	$data['city']=trim($_POST['city']);
	$data['phone']=trim($_POST['phone']);
	$data['email']=$email=trim($_POST['email']);
	$data['description']=trim($_POST['description']);

   if($data['name']=='' || $data['company']=='' || $data['address']=='' || $data['city']=='' || $data['phone']=='' || $data['email']=='' || $data['description']==''){
		$_SESSION['frmerrmsg']='Those marked with <strong class="text-danger">*</strong> are required please.';
		header("location:".CONST_APP_ABSURL."/description.php");
		exit();
	}
	if(formtoken::validateToken($_POST)) {
		$data['datetime']=date('Y-m-d H:i:s',$tm);
		$datadatetime=date('d-m-Y H:i:s',strtotime($data['datetime']));
		$ipaddress=$_SERVER['REMOTE_ADDR'];
		$useragent=$_SERVER['HTTP_USER_AGENT'];
		$userreferer=$_SERVER['HTTP_REFERER'];
		$emailsignature=CONST_EMAIL_SIGNATURE;
		include_once("includes/dealership-request-email-body.php");
		$to=explode(',',CONST_CONTACT_ADMIN_EMAIL_TO);
		$cc=explode(',',CONST_CONTACT_ADMIN_EMAIL_CC);
		//$replyto=explode(',',CONST_DEMO_REQUEST_REPLY_TO);
		$replyto=[['email_id'=>$email,'name'=>$name]];
		$from=CONST_MAIL_SENDERS_EMAIL;
		$fromname=CONST_MAIL_SENDERS_NAME;
		$subject="RanceLab - Contact request by ".$data['name'];
		$htmlmessage=$contactAlertAdmin;
		$textmessage='';
		
		// Mail to Rancelab
		sendAMail($to,$subject,$htmlmessage,$textmessage='',$from,$fromname,$html=true,$type='',$smtpdetails=[],$cc,$bcc=[],$replyto=[],$inlineimages=[],$attachments=[]);

		//Mail to user
		$userto=explode(',',$data['email']);
		$usersubject="RanceLab - Your dealership request";
		$userhtmlmessage=$contactNotfyUser;
		$usertextmessage='';
		sendAMail($userto,$usersubject,$userhtmlmessage,$usertextmessage='',$from,$fromname,$html=true,$type='',$smtpdetails=[],$cc=[],$bcc=[],$replyto=[],$inlineimages=[],$attachments=[]);
		
		$_SESSION['name']=$data['name'];
		header("location:thanks-dealership-request.php");
		
	}else {
		die('The form is not valid or has expired.');
	}

?>
