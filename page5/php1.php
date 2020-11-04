<?php
require_once ('autoload.php');
if(isset($_POST['submitpost'])){
if(isset($_POST['g-recaptcha-reponse'])){
$recaptcha = new \ReCaptcha\ReCaptcha('6Lfzl90ZAAAAAGB5ZLdPfOILymmohcF8iFytPvi1');
$resp = $recaptcha->setExpectedHostname('recaptcha-demo.appspot.com')
                  ->verify($_POST['g-recaptcha-reponse']);
if ($resp->isSuccess()) {
    var_dump('Captcha Valide');
} else {
    $errors = $resp->getErrorCodes();
    var_dump('Captcha Invalide');
    var_dump('$errors');
}
} else {
 var_dump('Captcha non rempli');
}
}
?>
