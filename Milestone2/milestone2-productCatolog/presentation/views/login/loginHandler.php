<?php


require_once 'header.php';

require_once 'SecurityService.php';

require_once 'Autoloader.php';

$attemptedLoginName = $_POST['username'];
$attemptedPassword = $_POST['password'];

echo "you tried to log in with " . $attemptedLoginName . " " . $attemptedPassword . "<br>";

$service = new SecurityService($attemptedLoginName, $attemptedPassword);

$loggedIn = $service->authenticate();

if($loggedIn){
    $_SESSION['principal'] = true;
    include "loginSuccess.php";
}
else{
    $_SESSION['principal'] = false;
    include "loginFailed.php";
    
}



