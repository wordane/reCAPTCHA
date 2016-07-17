<?php
    require_once('captcha/src/autoload.php');
    $privatekey = "6LdqTiUTAAAAAHVv4TpCZ8yvuHf8RXp0Wv71agZt";

    $recaptcha = new \ReCaptcha\ReCaptcha($privatekey);
    $resp = $recaptcha->verify($gRecaptchaResponse, $_SERVER["REMOTE_ADDR"]);
    if ($resp->isSuccess()) {
        die('Captcha verified');
    } else {
        $errors = $resp->getErrorCodes();
        echo 'Errors found =>'.$errors;
    }
?>
