<?php
ob_start(); // Start output buffering to prevent headers already sent
include("config.php");
require_once "includes/general-func.php";

if($_POST['mode']=='submit-app'){
    $name=trim($_POST['name']);
    $email=trim($_POST['email']);
    $phone=trim($_POST['phone']);
    $mobile=trim($_POST['mobile']);
    $position=trim($_POST['position']);
    $interview_time=trim($_POST['interview_time']);
    $join_time=trim($_POST['join_time']);
    $cv=$_FILES['app_cv'];
    $resp=['error'=>0];
    do{
        if($name==''){
            $resp['error']=1;
            $resp['msg']='Please enter your name.';
            break;
        }
        if($email==''){
            $resp['error']=1;
            $resp['msg']='Please enter your email address.';
            break;
        }
        if($phone==''){
            $resp['error']=1;
            $resp['msg']='Please enter your phone number.';
            break;
        }
        if($mobile==''){
            $resp['error']=1;
            $resp['msg']='Please enter your mobile number.';
            break;
        }
        if($position==''){
            $resp['error']=1;
            $resp['msg']='Please select position.';
            break;
        }
        if($interview_time==''){
            $resp['error']=1;
            $resp['msg']='Please select interview time.';
            break;
        }
        if($join_time==''){
            $resp['error']=1;
            $resp['msg']='Please select joining time.';
            break;
        }
        if($cv['error']!=0){
            $resp['error']=1;
            $resp['msg']='Please upload your CV.';
            break;
        }else{
            $ext = strtolower(pathinfo($cv['name'], PATHINFO_EXTENSION));
            if(!in_array($ext, ['doc','docx','pdf'])){
                $resp['error']=1;
                $resp['msg']='Only .doc, .docx and .pdf files are allowed.';
                break;
            }
        }
    }while(FALSE);
    if($resp['error']!=0){
        echo "<script type='text/javascript' >\n";
        echo "parent.handleAppSubmit(".json_encode($resp).");\n";
        echo "</script>";
    } else {
        $data['name']=$name;
        $data['email']=$email;
        $data['phone']=$phone;
        $data['mobile']=$mobile;
        $data['position']=$position;
        $data['interview_time']=$interview_time;
        $data['join_time']=$join_time;

        $emailsignature=CONST_EMAIL_SIGNATURE;
        include_once("includes/request-email-body.php");
        include_once("includes/email-handler.php");
        $to=explode(',',CONST_DOWNLOAD_ADMIN_EMAIL_TO);
        $cc=explode(',',CONST_DOWNLOAD_ADMIN_EMAIL_CC);
        $bcc=explode(',',CONST_DOWNLOAD_ADMIN_EMAIL_BCC);
        $from=CONST_MAIL_SENDERS_EMAIL;
        $fromname=CONST_MAIL_SENDERS_NAME;

        $success = true;
        // Email to the applicant
        $subject="RanceLab - We have received your application";
        $htmlmessage=$careerNotifyUser;
        $applicant_email_sent = sendCareerEmail($email, $subject, $htmlmessage, $from, $fromname);
        error_log("Applicant email sent: " . ($applicant_email_sent ? "true" : "false"));
        if (!$applicant_email_sent) {
            $success = false;
            $resp['error'] = 1;
            $resp['msg'] = 'Failed to send confirmation email to applicant.';
        }

        // Email to the admin/HR team with CV attachment
        if ($success) {
            $subject='Rancelab - You have received a new application from '.$name;
            $htmlmessage=$careerNotifyAdmin;
            $attachments=[
                [
                    'attachment_filenamepath' => $cv['tmp_name'],
                    'attachment_name' => preg_replace('/[\r\n]/', '', $cv['name']) // Sanitize filename
                ]
            ];
            $admin_email_sent = sendCareerEmail($to, $subject, $htmlmessage, $from, $fromname, $cc, $bcc, $attachments);
            error_log("Admin email sent: " . ($admin_email_sent ? "true" : "false"));
            if (!$admin_email_sent) {
                $success = false;
                $resp['error'] = 1;
                $resp['msg'] = 'Failed to send application email to admin.';
            }
        }

        ob_end_clean(); // Clear output buffer before redirect or response
        if ($success) {
            // JavaScript redirect to ensure main window redirects
            echo "<script type='text/javascript'>window.top.location.href = 'thankyou.php';</script>";
            exit;
        } else {
            // Output error response
            echo "<script type='text/javascript' >\n";
            echo "parent.handleAppSubmit(".json_encode($resp).");\n";
            echo "</script>";
        }
    }
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Careers | Retail Software  for POS & Restaurant | Stores Management Software</title>
<meta name="keywords" content="POS, Point of Sale, Retail Management, Retail Software, Retail Management Software, Retail Point of Sale Software, Barcode Label Printers, Barcode Label Software, POS Software , Restaurant Software, Food Court Software, Restaurant POS, POS Food Court, CRM POS Inventory, tally, tally 9, POS Software Tally, Export data to tally, barcode retail tally, pos tally, garment shop tally, restaurant pos tally, touch screen pos tally accounting software, Software for India, Material Requirement Planning, tally 7.2, tally download, POS system, POS Solution, tally 6.3, retail accounting software, ERP Solution for retail, ERP Solution for restaurant, POS ERP, download POS tally, tally solutions, tally accounting package, retail software with VAT, tally package pos, retail accounts barcode,  receipt printer pos tally software, how to export data to tally, download pos software, vat India, how to manage restaurant, how to integrate tally with barcode, tally accounting software with barcode, tally for restaurant, tally software for food court, Barcode Scanner" />
<meta name="description" content="Best place to buy Ready-to-Use Software for Retail Store, Restaurant and Food Court. Includes POS | Inventory Management | Financial Accounting |CRM with Loyalty Cards | MIS | Chain Store and Franchisee Store Management | Tally Link | Good Support and Guidelines" />
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
<link rel="canonical" href="<?php echo CONST_APP_ABSURL;?>/careers.php"/>
<?php $pagename="downloads"; ?>
</head>
<body>
<header id="header" class="header header-hide">
    <?php include("includes/common-header.php"); ?>
</header>
<section id="hero">
    <div class="hero-container">
        <div class="container">
            <h1 class="text-center">Careers</h1>
            <div class="row text-center">
                <div class="col-12 ">
                </div>
            </div>
        </div>
    </section>
<section id="contact_us_section" class="about-us padd-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-content">
                    <p>At present, we are looking for the following skill-set.</p>
                    <h4>1. Business Consultants</h4>
                    <ul>
                        <li><strong>Code: RLBBUS410</strong></li>
                        <li>Location: Kolkata | Lake Town</li>
                        <li>Experience: 1-3 Years </li>
                        <li>Education: M.Com or CA </li>
                        <li>Key Skills: Accounting and Inventory Concepts, Taxation, Tally and MS Office. Excellent computer & Internet skills are must </li>
                        <li>Role: Business Consultants </li>
                        <li>Job Profile: This job requires lots of travelling, may be 15 days in a month </li>
                    </ul>
                    <p>You need to do the system study and make implementation plans. Map customer's requirement with RanceLab® RanceLab™. Analysis and audit of customer's business data. </p>
                    <div class="mt-2">
                        <a href="#apply-section" class="btn button-green rounded mb-3">Apply Now</a>
                    </div>
                    <hr>
                    <h4>2. Software Support Executive</h4>
                    <ul>
                        <li><strong>Code: RLBSSE410</strong></li>
                        <li>Location: Kolkata | Lake Town</li>
                        <li>Experience: 2-3 Years </li>
                        <li>Education: B.Com or CA </li>
                        <li>Key Skills: Accounting and Inventory Concepts, Taxation, Tally and MS Office. Excellent computer & Internet skills</li>
                        <li> Role: Software support and implementation executive </li>
                        <li>Job Profile: Your job requires lots of travelling, may be 20 days in a month. You need to install RanceLab® at customer place and implement it according to the need of customer. </li>
                        <li> Training: We provide full training for the job </li>
                    </ul>
                    <span id="#apply-section"> </span>
                    <div class="mt-2">
                        <a href="#apply-section" class="btn button-green rounded mb-3">Apply Now</a>
                    </div>
                    <hr>
                    <h4>3. Public Relations Executive</h4>
                    <ul>
                        <li><strong>Code: RLBPRE410</strong></li>
                        <li>Location: Kolkata | Lake Town</li>
                        <li>Candidate: Female</li>
                        <li>Experience: 0-3 Years </li>
                        <li>Education: Graduate / Mass Com </li>
                        <li>Key Skills: Excellent verbal, writing and editing skills in English, Computers, Content Design/Distribution</li>
                        <li>Role: Public Relations Executive </li>
                        <li>Job Profile: Developing PR programs, writing compelling stories, corporate communication, events & tradeshow management</li>
                        <li>Training: We provide full training for the job</li>
                    </ul>
                    <span id="#apply-section"> </span>
                    <div class="mt-2">
                        <a href="#apply-section" class="btn button-green rounded mb-3">Apply Now</a>
                    </div>
                    <span id="apply-section"> </span>
                    <hr>
                    <p><strong>Please fill up the form below to apply.</strong></p>
                    <p>(Fields marked with <span class="mandatory_red">*</span>are mandatory)</p>
                    <div class="col-md-8 col-lg-8">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" onsubmit="return appSubmit(this);" target="ifrm_submit">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="app_name">Name<span class="mandatory_red">*</span>:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" id="app_name" placeholder="Enter name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="app_email">Primary Email<span class="mandatory_red">*</span></label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" id="app_email" placeholder="Enter email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="app_phone">Phone<span class="mandatory_red">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="phone" id="app_phone" placeholder="Enter Phone" pattern="^\d{10}$">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="app_mobile">Mobile<span class="mandatory_red">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="mobile" id="app_mobile" placeholder="Enter Mobile" pattern="^\d{10}$">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="app_position">Position<span class="mandatory_red">*</span></label>
                                <div class="col-sm-9">
                                    <select name="position" class="form-control" id="app_position" title="Please select your position.">
                                        <option value="" selected="selected">Select One</option>
                                        <option value="Business Consultants (RLBBUS410)">Business Consultants</option>
                                        <option value="Business Consultants (RLBBUS410)">Customer Support Executive</option>
                                        <option value="Software Support Executive (RLBSSE410)">Others (RLBLEADER0410)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="app_interview_time">Preferred Time for Interview<span class="mandatory_red">*</span></label>
                                <div class="col-sm-9">
                                    <select name="interview_time" class="form-control" id="app_interview_time" title="Please select the preferred time for interview.">
                                        <option value="" selected="selected">Select One</option>
                                        <option value="Mon - 09.30 to 11.30">Mon - 09.30 to 11.30</option>
                                        <option value="Wed - 09.30 to 11.30">Wed - 09.30 to 11.30</option>
                                        <option value="Sat - 09.30 to 11.30">Sat - 09.30 to 11.30</option>
                                        <option value="Sat - 05.30 to 07.30">Sat - 05.30 to 07.30</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="app_join_time">I can join within<span class="mandatory_red">*</span></label>
                                <div class="col-sm-9">
                                    <input type="radio" name="join_time" id="app_join_time_1" title="Please select your joining time." value="1 Week"> 1 Week
                                    <input type="radio" name="join_time" id="app_join_time_2" title="Please select your joining time." value="2 Week"> 2 Week
                                    <input type="radio" name="join_time" id="app_join_time_3" title="Please select your joining time." value="3 Week"> 3 Week
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="app_cv">CV Upload<span class="mandatory_red">*</span></label>
                                <div class="col-sm-9">
                                    <input name="app_cv" type="file" class="form-control" id="app_cv" size="29" title="Please upload your cv." accept=".pdf,.doc,.docx">
                                    <div>(Upload only .doc, .docx & .pdf file) </div>
                                </div>
                            </div>
                            <button type="submit" class="btn button-green rounded mb-3" name="mode" value="submit-app">Submit</button>
                        </form>
                        <p><strong>Privacy Policy:</strong> We do not sell or rent your email address to any one at any time, at any cost. We only use your details to provide you the requested information.</p>
                    </div>
                    <iframe name="ifrm_submit" id="ifrm_submit" class="d-none"></iframe>
                    <h4 class="text-center">Future Ideas</h4>
                    <p class="text-center"><strong>"The above situations are not for me. BUT I can make a difference at RanceLab®."</strong></p>
                    <p class="text-center">Write to us at <strong><a href="mailto:career@rancelab.com">career@rancelab.com</a></strong> using code: RLBLEADER0410 if you feel like making a great difference at RanceLab®.</p>
                </div>
            </div>
        </div>
    </section>
<footer class="footer">
    <?php include("includes/common-footer.php"); ?>
</footer>
<?php include("includes/mobile-slicky-footer.php");?>
<?php include("includes/common-footer-scripts.php"); ?>
<script type="text/javascript">
    function appSubmit(f){
        let app_name=document.getElementById('app_name').value.trim();
        let app_email=document.getElementById('app_email').value;
        let app_phone=document.getElementById('app_phone').value;
        let app_mobile=document.getElementById('app_mobile').value;
        let app_position=document.getElementById('app_position').value;
        let app_interview_time=document.getElementById('app_interview_time').value;
        let app_join_time=document.querySelector('input[name="join_time"]:checked') && document.querySelector('input[name="join_time"]:checked').value;
        let app_cv=document.getElementById('app_cv').value;
        if(!app_name){
            alert('Please enter your name.');
            document.getElementById('app_name').focus();
            return false;
        }
        if(!app_email){
            alert('Please enter your email address.');
            document.getElementById('app_email').focus();
            return false;
        }
        if(!app_phone){
            alert('Please enter your phone number.');
            document.getElementById('app_phone').focus();
            return false;
        }if(!app_mobile){
            alert('Please enter your mobile number.');
            document.getElementById('app_mobile').focus();
            return false;
        }if(!app_position){
            alert('Please select position.');
            document.getElementById('app_position').focus();
            return false;
        }if(!app_interview_time){
            alert('Please select interview time.');
            return false;
        }if(!app_join_time){
            alert('Please enter joining time.');
            return false;
        }if(!app_cv){
            alert('Please attach your CV.');
            document.getElementById('app_cv').focus();
            return false;
        }
        return true;
    }
    function handleAppSubmit(r){
        if(!r.error){
            window.top.location.href = 'thankyou.php'; // Redirect on client-side success
        }else{
            alert(r.msg);
        }
    }
</script>
</body>
</html>
