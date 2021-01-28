<?php

require __DIR__ . '/vendor/autoload.php';

//Starts session to pull the phone number
session_start();

function submit(){
    $verifyCode = $_POST['verifycode'];
    $authy_API = new Authy\AuthyApi('INSERT YOUR AUTHY API KEY HERE');

    //Pulls the phone number saved to the session
    //Submits both phone number and verification code
    $res = $authy_API->phoneVerificationCheck($_SESSION["phoneNumber"], '1', $verifyCode);

    //Prints out if code was accepted
    if ($res->ok()) {
        print $res->message();
    }
}
submit();
?>