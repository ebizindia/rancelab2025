<?php
session_start();

define('CONST_HASH_FUNCTION', 'sha256');
define('CONST_SALT', 'rancelab-form-salt');

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
            if (isset($_SESSION['formtoken'][$posted])) {
                if ($_SESSION['formtoken'][$posted] >= time() - 7200) {
                    $valid = true;
                }
                if ($clear) unset($_SESSION['formtoken'][$posted]);
            }
        }
        return $valid;
    }

    protected static function _generateToken()
    {
        $time = time();
        $hash = hash(CONST_HASH_FUNCTION, uniqid(microtime(), true) . CONST_SALT);
        $token = $hash;
        $_SESSION['formtoken'][$token] = $time;
        return $token;
    }
}

// AJAX endpoint to return token
if (filter_has_var(INPUT_POST, 'mode') && $_POST['mode'] == 'stok') {
    ob_clean();
    header("Access-Control-Allow-Origin: https://www.rancelab.com");
    header('Content-type: application/json', true);
    echo json_encode(['tk' => formtoken::getField()]);
    exit;
}
?>
