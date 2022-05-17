<!DOCTYPE html>
<html lang="en">

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>The HyperCommunity</title>
    <link href="{{ asset('assets/images/favicon.png') }}" rel="icon">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
    <div class="thankyou-page">
        <div class="_header">
            <div class="logo">
                <img src="{{ asset('assets/images/logos/navlogo.png') }}" alt="">
            </div>
            <h1>Thank You!</h1>
        </div>
        <div class="_body">
            <div class="_box">

                <p>
                    Thank you for joining The HyperCommunity member website! Before you can login, please check your
                    email and click <strong>Verify Email Address.</strong>
                    to enable your account and to log in for the first time.
                </p>
                <h2>
                    <strong>Please check your email</strong> for further instructions on how to complete your account
                    setup.
                </h2>
            </div>
        </div>
        <div class="_footer">
            <p>Having trouble? <a href="https://mail.google.com/mail/u/0/#inbox">Contact us</a> </p>
            <a class="btn" href="{{ route('site-home') }}">Back to homepage</a>
        </div>
    </div>
</body>

</html>
