<?php
    require_once('captcha/src/autoload.php');
    $privatekey = "6LdqTiUTAAAAAHVv4TpCZ8yvuHf8RXp0Wv71agZt";

    $recaptcha = new \ReCaptcha\ReCaptcha($privatekey);
    $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER["REMOTE_ADDR"]);
    if ($resp->isSuccess()) {
        die('Thank you. Captcha verified correctly');
    } else {
        $errors = $resp->getErrorCodes();
        print_r($errors);
    }
?>
