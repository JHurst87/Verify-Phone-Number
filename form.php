<html>
<head>
    <title>Phone Number Verification in PHP</title>
</head>
<body>

    <div class="container">
        <div class="error"></div>
        <form id="frm-mobile-verification" method="post" action="submit.php">
            <div class="form-heading">Mobile number verification</div>

            <div class="form-row">
                <input type="tel" id="mobile" class="input" name="phonenumber"
                    placeholder="Enter the 10 digit mobile" />
            </div>
            <button type="submit" name="button">Send Verification</button>
        </form>
    </div>
    
</body>
</html>