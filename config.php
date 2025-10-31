<?php
session_start();
define('CONST_TITLE_AFX', ' | Rance Lab');
define('CONST_HASH_FUNCTION','sha256');
define('CONST_SALT',')Ypg+\)%gX&4+RjsDVF4.d.!(JKT<+Tz&5[?bZ$~#rv+dk(arLG}hT#!V"85{E^t');
define('CONST_DOCUMENT_ROOT', preg_replace("/^(.*?)[\/\\\\]$/","$1",realpath($_SERVER['DOCUMENT_ROOT'])));
define('CONST_APP_FULL_PHYSICAL_PATH', preg_replace("/^(.*?)[\/\\\\]$/","$1",realpath(dirname(__FILE__))));
$temp=preg_split("/[\/\\\\]/", CONST_APP_FULL_PHYSICAL_PATH);
define('CONST_APP_DIR_NAME', array_pop($temp));
define('CONST_APP_PATH_FROM_ROOT', preg_replace("/[\\\\]+/",'/',str_ireplace(CONST_DOCUMENT_ROOT,'',CONST_APP_FULL_PHYSICAL_PATH)));
define('CONST_APP_ABSURL', 'http' . (( array_key_exists('HTTPS',$_SERVER) && $_SERVER['HTTPS'] != '' ? 's' : '' ). '://'.$_SERVER['HTTP_HOST'] ) . CONST_APP_PATH_FROM_ROOT);
define('CONST_ROOT',realpath(dirname(__FILE__)));
//define('CONST_WEB_ROOT',realpath(dirname(__FILE__)));

/*define('CONST_INCLUDES_DIR', CONST_APP_FULL_PHYSICAL_PATH.'/includes/');
define('CONST_JAVASCRIPT_DIR', CONST_APP_PATH_FROM_ROOT.'/js/');
define('CONST_CSS_DIR', CONST_APP_PATH_FROM_ROOT.'/js/');
define('CONST_LIB_DIR', CONST_APP_PATH_FROM_ROOT.'/js/');
define('CONST_IMAGE_DIR', CONST_APP_PATH_FROM_ROOT.'/image/');
*/

define('CONST_MAIL_SUBJECT_PREFIX','[Rancelab]');
define('CONST_MAIL_SENDERS_NAME','Rancelab');
define('CONST_MAIL_SENDERS_EMAIL','website@rancelab.com');
define('CONST_EMAIL_SIGNATURE', 'Ruma Biswas');
/* Setting For Email Request */
define('CONST_DOWNLOAD_ADMIN_EMAIL_TO','sales@rancelab.com,nl@rancelab.com,ns@rancelab.com');
define('CONST_DOWNLOAD_ADMIN_EMAIL_CC','');
define('CONST_DOWNLOAD_ADMIN_EMAIL_BCC','ebizindia@gmail.com,azad@ebizindia.com');
define('CONST_DOWNLOAD_REPLY_TO','ebizindia@gmail.com');
define('CONST_DOWNLOAD_REPLY_NAME','Ruma Biswas - Rancelab');
/* Setting For Contact */
define('CONST_CONTACT_ADMIN_EMAIL_TO','sales@rancelab.com,nl@rancelab.com,ns@rancelab.com');
define('CONST_CONTACT_ADMIN_EMAIL_CC','');
define('CONST_CONTACT_ADMIN_EMAIL_BCC','ebizindia@gmail.com,azad@ebizindia.com');
define('CONST_CONTACT_REPLY_TO','ebizindia@gmail.com');
define('CONST_CONTACT_REPLY_NAME','Ruma Biswas - Rancelab');

/* Setting For NEW DOWNLOAD - CALL BACK */
define('CONST_CALLBACK_ADMIN_EMAIL_TO','callback@rancelab.com,nl@rancelab.com');
define('CONST_CALLBACK_ADMIN_EMAIL_CC','');
define('CONST_CALLBACK_ADMIN_EMAIL_BCC','ebizindia@gmail.com,azad@ebizindia.com');
define('CONST_CALLBACK_REPLY_TO','ebizindia@gmail.com');
define('CONST_CALLBACK_REPLY_NAME','Ruma Biswas - Rancelab');


