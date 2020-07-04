<?php
include('../database/db.php');
ob_start();
session_start();

if (empty($_COOKIE['remember_me'])) {
    if (empty($_SESSION['user_id'])) {

        header('location:sign-in.php');
    }
}
?>
<!doctype html>
<html class="no-js " lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Admin</title>
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
                    <form class="card auth_form" method="post" enctype="multipart/form-data">
                        <div class="header">
                            <img class="logo" src="assets/images/logo.svg" alt="">
                            <h5>Update</h5>
                        </div>

                        <?php

                      
                        ?>

                        
                        <div class="body">
                            <div class="input-group mb-3">
                                <input type="password" name="c-pswrd" class="form-control" placeholder="Current Password" required=""/>
                            </div>

                            <div class="input-group mb-3">
                                <input type="password" name="n-pswrd" class="form-control" placeholder="New Password" required=""/>
                            </div>

                            <input type="submit" name="submit" class="btn btn-primary btn-block waves-effect waves-light" value="Update">

                        </div>

                    </form>
                    <?php

                    if (isset($_POST['submit'])) {


                        $id=$_GET["id"];
                        $c_pswrd = $_POST['c-pswrd'];
                        $n_pswrd = $_POST['n-pswrd'];


                        $query = $conn->prepare("SELECT * FROM admin_login where id='$id'");
                        $query->execute();

                        $result = $query->fetch(PDO::FETCH_ASSOC);

                        if ($result["password"] == $c_pswrd) {

                            $stmt = $conn->prepare("UPDATE `admin_login` SET password='$n_pswrd'");

                            $stmt->execute();

                    ?>

                            <div class="alert alert-success alert-dismissible" role="alert">
                                <strong>Success!</strong> Password Updated
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button><br>
                                <a href="index.php">Go Back to Dashboard</a>
                            </div>





                        <?php


                        } else {
                        ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <strong>Fail!</strong> Incorrect Current Password
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
<br>
                                <a href="index.php">Go Back to Dashboard</a>
                            </div>

                    <?php

                        }
                    }

                    ?>

                </div>

            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
</body>


</html>