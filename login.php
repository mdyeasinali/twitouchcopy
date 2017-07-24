<?php
require_once('core/init.php');
$admin = new Admin();

if(isset($_POST["action"])) {
    $user = Input::get('user');
    $password= Input::get('password');
    $pass = md5(sha1($password));
    $admin->admin_login($user,$password);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Favicon icon-->
    <link href="theme/favicon.png" type="image/png" rel="icon">
    <!--Browser navbar color for mobile-->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#1a54de">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#1a54de">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#1a54de">

    <!--Page title-->
    <title>Login - MaterialMe</title>

    <!-- google font  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- materialize CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet">
    <!--app css-->
    <link href="css/app-style.css" type="text/css" rel="stylesheet">
    <link href="theme/app-theme.css" type="text/css" rel="stylesheet">

</head>

<body>

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Page Body-->
<div class="container">
    <div id="brand-banner">
        <div class="section">
            <div class="row">
                <div class="col s12">
                    <a href="#" class="brand">Twitouch</a>
                </div>
            </div>
        </div>
    </div>

    <div id="form-banner">
        <div class="section">
            <div class="row">
                <div class="col s12">
                    <div class="card form-box">
                        <div class="card-content">
                            <span class="card-title login-title">Welcome back&#33;</span>
                            <div class="row">
                                <form method="POST" action="">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">mail</i>
                                        <input id="user" type="text" name="user">
                                        <label for="user">Username</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="password" type="password" name="password">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="col s12 extra-info-link">
                                        <span class="rem-pass">
                                            <input type="checkbox" id="checkbox1" class="filled-in default">
                                            <label for="checkbox1">Remember me</label>
                                        </span>
                                        <span class="ref-form-link right-float"><a href="reset.html">Forgot your password?</a></span>
                                    </div>
                                    <div class="input-field col s12">
                                        <button class="col s12 btn waves-effect waves-light default" type="submit" name="action">Sign in to your account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 center">
                    <div class="refer-form-page">
                        <a href="signup.html">Don't have an account? <span>Sign up</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--End page body-->
<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Footer-->
<footer class="form-footer">

    <div class="row">
        <div class="col s12 center">
            <ul class="footer-list">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">&copy;  MaterialMe</a></li>
            </ul>
        </div>
    </div>
</footer>
<!--End footer-->
<!-- //////////////////////////////////////////////////////////////////////////// --

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">
    <?php
    if($errorMsg != '') {
    ?>
    Materialize.toast('<?php echo $errorMsg?>', 4000);
    <?php
    }
    ?>
</script>
</body>
</html>