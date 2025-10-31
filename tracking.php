<?php
require_once realpath($_SERVER['DOCUMENT_ROOT']).CONST_APP_PATH_FROM_ROOT."/includes/trackerCls.php";
/*
define('PPC_LIST','GOOGLE,GOOGLE_REMARKETING,BING,MSN,MIVA,WEBFINDER,YAHOO,YELL,MIRAGO');
define('ORGANIC_LIST',"GO_MAIL_RU,GOOGLE,BING,YAHOO,ASK,AOL,SEARCH_RESULTS,CONDUIT,COMCAST,YANDEX,LYCOS,VIRGILIO,BT_SEARCH,BABYLON,KVASIR,SEZNAM,VOILA,BAIDU,SKY,AVG");
define('ORGANIC_LIST_REGEXP',"^https?:\/\/go\.mail\.ru\/search,^https?:\/\/([a-z0-9]+\.)*google(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*bing(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*yahoo(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*ask(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*aol(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*search-results(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*conduit(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*comcast(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)?yandex(\.[a-z]+)+\/yandsearch,^https?:\/\/([a-z0-9]+\.)*lycos(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*virgilio(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*bt(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*babylon(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*kvasir(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*seznam(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*voila(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*baidu(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*sky(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*avg(\.[a-z]+)+\/?");
define('ORGANIC_LIST_CORRSP_QUERY_TERM_PARAM','q,q,q,p,q,q,q,q,q,text,q,qs,p,q,q,q,rdata,wd,term,q');
*/

define('PPC_LIST','GOOGLE'); //,BING,MSN,MIVA,WEBFINDER,YAHOO,YELL,MIRAGO');
define('ORGANIC_LIST',"GO_MAIL_RU,GOOGLE,BING,YAHOO,ASK,AOL,SEARCH_RESULTS,CONDUIT,COMCAST,YANDEX,LYCOS,VIRGILIO,BT_SEARCH,BABYLON,KVASIR,SEZNAM,VOILA,BAIDU,SKY,AVG");
define('ORGANIC_LIST_REGEXP',"^https?:\/\/go\.mail\.ru\/search,^https?:\/\/([a-z0-9]+\.)*google(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*bing(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*yahoo(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*ask(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*aol(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*search-results(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*conduit(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*comcast(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)?yandex(\.[a-z]+)+\/yandsearch,^https?:\/\/([a-z0-9]+\.)*lycos(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*virgilio(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*bt(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*babylon(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*kvasir(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*seznam(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*voila(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*baidu(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*sky(\.[a-z]+)+\/?,^https?:\/\/([a-z0-9]+\.)*avg(\.[a-z]+)+\/?");
define('ORGANIC_LIST_CORRSP_QUERY_TERM_PARAM','q,q,q,p,q,q,q,q,q,text,q,qs,p,q,q,q,rdata,wd,term,q');

define('PPC_SOURCE_VAR_FOR_TRACKING','r');
define('PPC_KEYWORDS_VAR_FOR_TRACKING','kw');
define('BOT_LIST',"bot|slurp|archive|spider|crawler|TalkTalk Virus Alerts Scanning Engine|siteuptime.com|bingPreview|Ruby|InternetSeer.com|genieo.com");
// define('COOKIEDOMAIN','.rancelab.com');

define('OTHER_PPC_IDENTIFICATION_VARS','gclid');

if(!defined('VISITOR_SOURCE_KEYWORD_COOKIE_LIFE')){
	define('VISITOR_SOURCE_KEYWORD_COOKIE_LIFE',90*24*60*60);
}

if(!defined('AFFID_COOKIE_LIFE')){
	define('AFFID_COOKIE_LIFE',365*24*60*60);
}

$tracker= new tracker();

if($tracker->isIpDisallowed())
	die();

//&& !$tracker->isThisSitesReferer()
if(!$tracker->isBot() && !$tracker->isUserAgentBlank()  && (!isset($_SESSION['nvid']) || $_SESSION['nvid']=='' || !isset($_SESSION['nvisitid']) || $_SESSION['nvisitid']=='')){
	$tracker->trackSender();
	//record visitor
	if($tracker->isNewVisitor()){
		unset($_SESSION['nvisitid']);  // if recording a new visitor just remove the visitid from session. 
		if(!$tracker->recordAVisitor()){
			die('Tracking error 1.'); // visitor id could not be created
		}
	}else{
		$tracker->setVisitorIdInSession();
	}
	
	// record visit
	if($_SESSION['nvid']!='' && (!isset($_SESSION['nvisitid']) || $_SESSION['nvisitid']=='')){
		$sourcedetails=$tracker->getTrackedSourceDetails(); // storing the medium, source and keywords in the session
		// if(!isset($_COOKIE['visitorssource']) || $sourcedetails['medium']!='DIRECT'){
			// if(!headers_sent()){
				// $tracker->setVisitorSourceCookie();
			// }	
		// }
		if(!$tracker->recordAVisit()){
			die('Tracking error 2.'); // visit could not be recorded 
		}
	}elseif($_SESSION['nvid']==''){
		die('Tracking error 3.');
	}
}

// record this page in page visit history
// if(!isset($_SESSION['do_not_record_page']) || $_SESSION['do_not_record_page']!=1){
	$tracker->recordCurrentPageInHistory();
// }else{	
	// unset($_SESSION['do_not_record_page']);
// }	

/********* Get the site referer if any and store in cookie *****************/
// if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']!=''){
	// $parts=parse_url($_SERVER['HTTP_REFERER']);
	// if($parts['host']!=$_SERVER['HTTP_HOST'] && !array_key_exists('visitorssource',$_COOKIE)){
		// setcookie('source',$_SERVER['HTTP_REFERER'],time()+SITE_REFERER_COOKIE_LIFE,'/');
	// }
// }
/*************************************************************************/
function encodeString($string){
	$string_encoded=base64_encode($string);
	$strlen=strlen($string_encoded);
	for($i=1; $i<$strlen; $i+=2){
		$ch1=ord($string_encoded[$i-1]);
		$ch2=ord($string_encoded[$i]);
		$ch1=$ch1+$ch2;
		$ch2=$ch1-$ch2;
		$ch1=$ch1-$ch2;
		$string_encoded[$i-1]=chr($ch1);
		$string_encoded[$i]=chr($ch2);
	}
	return $string_encoded;
}

function decodeString($string_encoded){
	$strlen=strlen($string_encoded);
	for($i=1; $i<$strlen; $i+=2){
		$ch1=ord($string_encoded[$i-1]);
		$ch2=ord($string_encoded[$i]);
		$ch1=$ch1+$ch2;
		$ch2=$ch1-$ch2;
		$ch1=$ch1-$ch2;
		$string_encoded[$i-1]=chr($ch1);
		$string_encoded[$i]=chr($ch2);
	
	}
	$string=base64_decode($string_encoded);
	return $string;
}

?>
