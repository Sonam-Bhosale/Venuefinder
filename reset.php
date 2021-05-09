
<!DOCTYPE html>
<!-- saved from url=(0053)https://www.weddingwire.in/users-recover-password.php -->
<html lang="en-IN" prefix="og: http://ogp.me/ns#"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Reset password</title>
<link rel="stylesheet" href="Style/css/base.css">
<link rel="stylesheet" href="Style/css/sprite_set_community_group.css">
        <script type="text/javascript" async="" src="Style/js1/f.txt"></script>
        <script type="text/javascript" async="" src="Style/js1/ec.js.download"></script>
        <script async="" defer="" src="Style/js1/beacon.js.download"></script>
<body class="layout-auth layout-auth-template">

<div class="header">
    <div class="mt30 text-center">
        <a href="index.php" title="Wedding">
            <img src="Style/logo.png" alt="venuefinder" height="60px" width="200px">
        </a>
    </div>
</div>


<div class="wrapper-auth-recovery">
    <div class="white border-light p40 text-center mb30">
        <p class="layout-auth-title">Reset Password</p>
        <p class="strong">Enter your email address for instructions to reset your password.</p>
     <div class="app-common-ajaxform-section">
            <form class="form-line" method="post" action="controller/forgot.php">
                <div class="mt20">
                    <input name="email" place class="pure-u-1" type="email" placeholder="E-mail">
                </div>
                <div class="mt20">
                <input type="password" placeholder="New Password" required name="pass" id="pass" onchange="callfunction()">
                </div>
                <div class="mt20">
                    <input type="password" placeholder="Enter Confirm Password" required name="cpass" id="cpass" onkeyup="check()">
                </div>
                <button class="mt10 btn-flat red mt20" type="submit" name="btnUserConfirm">Reset password</button>
            </form>
        </div>
    </div>
</div>

<div class="layout-auth-footer" style="background-color:white "><br>
    <ul>
        <li class="pure-u"><a rel="nofollow" href="register_user.php">Sign up with VenueFinder</a> | </li>
        <li class="pure-u"><a rel="nofollow" href="venue.php">Register your business</a> | </li>
        <li class="pure-u"><a rel="nofollow" href="contact.php">Contact Us</a> | </li>
        <li class="pure-u"><a rel="nofollow" href="">Terms &amp; Privacy</a> | </li>
        <li class="pure-u"><a rel="nofollow" href="about.php">About Us</a> | </li>
     </ul><br>
        <p class="layout-auth-footer-copyright">© 2020 VenueFinder</p>
</div>
<script>
    var pageGlobals = {
                                            common:{"environment":{"countryCode":"IN","locale":"en_IN"},"platform":{"reducedPlatform":"","mobilePlatform":"mobile","isMobile":false,"isApp":false,"appVersion":null,"apps":{"vendorsApp":{"isCurrentPlatform":false,"isAndroid":false,"isIOS":false,"proxy":{"isProxyBarsEnabled":false}},"usersApp":{"isCurrentPlatform":false,"isAndroid":false,"isIOS":false}}},"remarketing":{"facebook":{"isPixelEnabled":true,"isEnabled":false,"tracker":"bodas"},"pinterest":{"isEnabled":false}},"analytics":{"isEcommerceEnabled":true,"isMigrationEnabled":false,"migrationTracker":false,"code":"UA-65182462-1","reducedCode":"UA-65182462-2"}}            
                                    };
</script><script defer="" src="Style/common.js.download"></script>
<script defer="" src="Style/js1/WebBundleDesktopUsers.js.download"></script>
</body>
</html>
<script>
     function callfunction()
        {
            var textBox = document.getElementById("pass");
            var textLength = textBox.value.length;
                if(textBox.value=='' || textLength<=6)
                {
                  alertify.success('Please entered more than 6 characters for password');
                }
        }

        function check()
            {
                var pass=document.getElementById('pass').value;
                var cpass=document.getElementById('cpass').value;
                var plength=length.pass;
                var clength=length.cpass;
                if(plength!= clength || pass!=cpass)
                {
                   //alertify.success('Password do not match');
                }
                else
                {
                    alertify.success('Password is matched'); 
                }
            }</script>
            <!-- Begin Page Snippets -->