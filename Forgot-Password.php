
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
            <h1 class="title"><span>Swift University</span>Forgot Password? <div class="msg">Enter your e-mail address below to reset your password.</div>
            </h1>
            <div class="col-sm-12">
                <form id="sign_in" method="POST">
                    <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-email"></i> </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <a href="index.html" class="btn btn-raised g-bg-blush2">RESET MY PASSWORD</a>
                        </div>
                        <div class="col-sm-12 text-center"> <a href="sign-in.php">Sign In!</a> </div>
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