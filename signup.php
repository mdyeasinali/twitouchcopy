<?php
require_once('core/init.php');
$users = new Users();
if(isset($_POST["action"])) {
    if (empty($_REQUEST['un']) ||
        empty($_REQUEST['pw']) ||
        empty($_REQUEST['em'])) {
        $users->url_return(array('signup.php', 'Some of fields is empty', 'error'));
    } else {

        $un = Input::get('un');
        $pw = Input::get('pw');
        $cpw = Input::get('cpw');
        $em = Input::get('em');
        $phn = Input::get('phn');
        $add = Input::get('add');
        $ref = Input::get('ref');
        if($pw == $cpw) {
            $pass = md5(sha1($password));
        }
        else
        {
            echo "<script>alert('Password Doesnt match')</script>";
            die();
            $users->url_return(array('signup.php', 'Some of fields is empty', 'error'));
        }
        $users->add_user($un,$pass,$em, $phn, $add,$ref);
    }
}
?>

<!--Design by MaterialMe-->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Start HTML document-->
<!DOCTYPE html>

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--HTML-->
<html lang="en">

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
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
    <title>Signup - MaterialMe</title>

    <!-- google font  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- materialize CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet"/>
    <!--app css-->
    <link href="css/app-style.css" type="text/css" rel="stylesheet"/>
    <link href="theme/app-theme.css" type="text/css" rel="stylesheet"/>

</head>
<!-- End head-->
<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--body-->

<body>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- pre page loader-->
<!--Page Loader-->
<div id="pre-page-loader">
    <div id="pre-page-loader-center">
        <div id="pre-page-loader-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
            <div class="object" id="object_five"></div>
            <div class="object" id="object_six"></div>
            <div class="object" id="object_seven"></div>
            <div class="object" id="object_eight"></div>
            <div class="object" id="object_big"></div>
        </div>
    </div>
</div>
<!--End pre page loader-->
<!-- //////////////////////////////////////////////////////////////////////////// -->


<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Page Body-->
<main>
    <div id="brand-banner">
        <div class="section">
            <div class="row">
                <div class="col s12">
                    <a href="index.php" class="brand">SignUp</a>
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
                            <span class="card-title login-title">Create your account.</span>
                            <div class="row">
                                <form method="POST" action="">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix_username" type="text" name="un">
                                        <label for="icon_prefix_username" class="">Username</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="password" type="password" name="pw">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">lock_outline</i>
                                        <input id="confirm-password" type="password" name="cpw">
                                        <label for="confirm-password">Confirm Password</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">email</i>
                                        <input id="icon_prefix_email" type="email" name="em">
                                        <label for="icon_prefix_email">E-mail</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">Mobile</i>
                                        <input id="number" type="number" name="phn">
                                        <label for="number">Mobile Number</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">message</i>
                                        <textarea id="icon_prefix_message" name="add" class="materialize-textarea"></textarea>
                                        <label for="icon_prefix_message">Address</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">Reference</i>
                                        <input id="reference" type="text" name="ref">
                                        <label for="reference">Reference ID</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <button class="col s12 btn waves-effect waves-light default" type="submit"
                                                name="action">Create your account
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 center">
                    <div class="refer-form-page">
                        <a href="login.html">Already have an account? <span>Sign in</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<!--End page body-->
<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Footer-->
<footer class="form-footer">

    <div class="row">
        <div class="col s12 center">
            <ul class="footer-list">
                <li><a href="reset.html">Forgot your password?</a></li>
            </ul>
        </div>
    </div>
</footer>
<!--End footer-->
<!-- //////////////////////////////////////////////////////////////////////////// -->


<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--  Scripts-->
<!-- Jquery -->
<script src="js/jquery.min.js"></script>
<!-- Materializecss js -->
<script src="js/materialize.js"></script>
<!-- gradientify Gradients jquery plugins -->
<script src="js/jquery.gradientify.min.js"></script>
<!-- Custom Js -->
<script src="js/init.js"></script>

<script type="text/javascript">
    $(document).ready(function () {


        /*background ingradient section*/
        $("body").gradientify({
            gradients: [{
                start: [237, 238, 240],
                stop: [246, 246, 246]
            }, {
                start: [246, 246, 246],
                stop: [228, 228, 228]
            }, {
                start: [228, 228, 228],
                stop: [246, 246, 246]
            }]
        });
    });
</script>

<!--End scripts-->
<!-- //////////////////////////////////////////////////////////////////////////// -->
</body>
<!--End body-->
<!-- //////////////////////////////////////////////////////////////////////////// -->

</html>
<!--End HTML-->
<!-- //////////////////////////////////////////////////////////////////////////// -->