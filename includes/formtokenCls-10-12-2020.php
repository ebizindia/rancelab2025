<?php
class formtoken
{
	const FIELDNAME = 'tok';
	const DO_NOT_CLEAR = FALSE;
	public static function getField()
	{
		$token = self::_generateToken();
		return $token;
		
	}
	public static function validateToken($request, $clear = true)
	{
		$valid = false;
		$posted = isset($request[self::FIELDNAME]) ? $request[self::FIELDNAME] : '';
		if (!empty($posted)) {
			if (isset($_SESSION[CONST_SESSION_INDEX]['formtoken'][$posted])) {
				 if ($_SESSION[CONST_SESSION_INDEX]['formtoken'][$posted] >= time() - 7200) {
					$valid = true;
				 }
				 if ($clear) unset($_SESSION[CONST_SESSION_INDEX]['formtoken'][$posted]);
			}
		}
		return $valid;
	}
	protected static function _generateToken()
	{
		$time = time();
		//$hash = hash(CONST_HASH_FUNCTION,mt_rand(0, 1000000).CONST_SALT); 
		$hash = hash(CONST_HASH_FUNCTION,uniqid(microtime(), true).CONST_SALT);
		$token = $hash;
		$_SESSION['CONST_SESSION_INDEX']['formtoken'][$token] = $time;
		return $token;
	}
}
// generate and return security token
if(filter_has_var(INPUT_POST, 'mode') && $_POST['mode']=='stok'){
	ob_clean();
	header("Access-Control-Allow-Origin:https:///demo7.ebizindia.com");
	header('Content-type:application/json', true);
	die('{"tk":"'.formtoken::getField().'"}');
}

?>