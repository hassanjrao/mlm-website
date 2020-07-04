<?php
include('../database/db.php');
ob_start();
session_start();
?>
<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from www.wrraptheme.com/templates/aero/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 10:15:03 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Aero Bootstrap4 Admin :: Sign In</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="theme-blush">

    <div class="authentication">
        <div class="container">
            <div class="row justify-content-center">
                <div class=" col-md-4 col-sm-12">
                    <form class="card auth_form" method="post">
                        <div class="header">
                            <img class="logo" src="assets/images/logo.svg" alt="">
                            <h5>Log in</h5>
                        </div>
                        <div class="body">
                            <?php



                            if (isset($_POST['submit_login'])) {

                                $name = $_POST['username'];
                                $pass = $_POST['pass'];
                                $remember = $_POST['remember_me'];

                                $query_user = $conn->prepare("SELECT * FROM admin_login WHERE username = '$name' AND password = '$pass'");
                                $query_user->execute();
                                $result11 = $query_user->fetch(PDO::FETCH_ASSOC);

                                if ($result11['username'] == $name && $result11['password'] == $pass) {

                            ?>
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        <strong>Congrats!</strong>Login Successful.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <?php
                                    if (!empty($remember)) {
                                        setcookie("remember_me", $result11['id'], time() + (86400 * 30), "/"); // 86400 = 1 day
                                        $_SESSION['user_id'] = $result11['id'];
                                    } else {
                                        $_SESSION['user_id'] = $result11['id'];
                                    }

                                    header("location:index.php");
                                } else {
                                    ?>
                                    <br>
                                    <div class="alert alert-dismissible alert-danger" role="alert">
                                        <strong>Oops!</strong> Invalid Username or Password.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                            <?php
                                }
                            }

                            ?>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Username" name="username">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="pass">
                                <div class="input-group-append">
                                    <span class="input-group-text"><a href="#" class="forgot" title="Forgot Password"><i class="zmdi zmdi-lock"></i></a></span>
                                </div>
                            </div>
                            <div class="checkbox">
                                <input id="remember_me" name="remember_me" type="checkbox">
                                <label for="remember_me">Remember Me</label>
                            </div>
                            <button type="submit" name="submit_login" class="btn btn-primary btn-block waves-effect waves-light">SIGN IN</button>
                            <!-- <div class="signin_with mt-3">
                                <p class="mb-0">or Sign Up using</p>
                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round facebook"><i class="zmdi zmdi-facebook"></i></button>
                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round twitter"><i class="zmdi zmdi-twitter"></i></button>
                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round google"><i class="zmdi zmdi-google-plus"></i></button>
                            </div> -->
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
</body>

<!-- Mirrored from www.wrraptheme.com/templates/aero/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 10:15:03 GMT -->

</html>