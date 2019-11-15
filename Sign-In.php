<!-- php  -->
<?php
include("../school-cms/resours/config.php");
rememberme();
if (isset($_POST['login'])) {
    SignIn($_POST['email'], $_POST['password'], empty($_POST['rememberme']));
}
?>
<!-- end php -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>:: Swift - University Admin ::</title>
    <!-- Favicon-->
    <link rel="icon" href="public/assets/icons/favicon.ico" type="image/x-icon">
    <link href="public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Custom Css -->
    <link href="public/assets/css/main.css" rel="stylesheet">
    <link href="public/assets/css/login.css" rel="stylesheet">

    <link href="public/assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="login-page authentication">

    <div class="container">
        <div class="card-top"></div>
        <div class="card">
                <?php PrintErrors("<div class='alert bg-red'>The Email Or Password Incorrect</div>", $error_array); ?>
            <h1 class="title"><span>Swift University</span>Login <span class="msg">Sign in to start your session</span></h1>
            <div class="col-sm-12">
                <form id="sign_in" method="POST" action="Sign-in.php">
                    <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>
                    <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Remember Me</label>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-raised waves-effect g-bg-blush2" value="SIGN IN" name="login">
                        <a href="sign-up.php" class="btn btn-raised waves-effect">SIGN UP</a>
                    </div>
                    <div class="text-center"> <a href="forgot-password.php">Forgot Password?</a></div>
                </form>
            </div>
        </div>
    </div>
    <div class="theme-bg"></div>
    <!-- Jquery Core Js -->
    <script src="public/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="public/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="public/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
</body>

</html>