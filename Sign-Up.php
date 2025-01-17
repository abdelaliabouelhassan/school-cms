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
            <h1 class="title"><span>Swift University</span>Register <span class="msg">Register a new membership</span></h1>
            <div class="col-sm-12">
                <form id="sign_up" method="POST">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-account"></i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="namesurname" placeholder="Name Surname" required="" autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required="">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                    </div>
                    <div class="text-center">
                        <a href="#" class="btn btn-raised g-bg-blush2 waves-effect">SIGN UP</a>
                    </div>
                    <div class="m-t-10 m-b--5 align-center">
                        <a href="sign-in.php">You already have a membership?</a>
                    </div>
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