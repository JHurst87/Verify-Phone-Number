<?php

require __DIR__ . '/vendor/autoload.php';

//Starts a session in order to save phone number for later use
session_start();

function submit(){
    $_SESSION["phoneNumber"] = $_POST['phonenumber'];
    $authy_API = new Authy\AuthyApi('INSERT YOUR AUTHY API KEY HERE');

    //Submits phone number to Twilio Authy to recieve a verification code
    $res = $authy_API->phoneVerificationStart($_SESSION["phoneNumber"],'1','sms');

    //Prints that the verification was sent to the phone number entered
    if ($res->ok()) {
        print $res->message();
    }
}
submit();
?>

<html>
<head>
    <title>Phone Number Verification in PHP</title>
</head>
<body>
    <br/><br/>
    <div class="container">
        <div class="error"></div>        
        <form id="frm-mobile-verification" method="post" action="verify.php">
            
            <div class="form-row">
                <label>Verification Code</label>
            </div>

            <div class="form-row">
                <input type="number" id="mobileOtp" class="input" placeholder="Enter the verification code" 
                       name="verifycode"/>
            </div>

            <div class="row">
                <button type="submit" name="button">Verify Code</button>
            </div>
        </form>
    </div>
</body>
</html>

