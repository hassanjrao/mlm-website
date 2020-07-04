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

<!-- Mirrored from www.wrraptheme.com/templates/aero/html/basic-form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 10:12:36 GMT -->
<?php include("head.php") ?>


<body class="theme-blush">

    <!-- Page Loader -->
    <?php include("page_loder.php"); ?>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>


    <!-- Left Sidebar -->
    <?php include("leftbar.php") ?>

    <!-- Right Sidebar -->
    <?php include("rightbar.php")?>




    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Add City </h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> Aero</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">City</a></li>
                            <li class="breadcrumb-item active">Add City</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <!-- Input -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">

                        <div class="card">
                            <div class="body">
                                <h2 class="card-inside-title">Add City</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">


                                        <?php

                                        if (isset($_POST['submit'])) {


                                            $city = strtolower($_POST['city']);
                                            $email = strtolower($_POST['email']);
                                            $phone = strtolower($_POST['phone']);
                                            $url = strtolower($_POST['url']);


                                            $stmt = $conn->prepare("INSERT INTO `cities_tb`(`city`,`email`,`phone`,`url`) VALUES (:city,:email,:phone,:url)");


                                            $stmt->bindParam(':city', $city);
                                            $stmt->bindParam(':email', $email);
                                            $stmt->bindParam(':phone', $phone);
                                            $stmt->bindParam(':url', $url);

                                            if ($stmt->execute()) {

                                        ?>
                                                <br>
                                                <div class="alert alert-success alert-dismissible" role="alert">
                                                    <strong>Congrats!</strong> Successfully Submit
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                        <?php

                                            }
                                        }

                                        ?>

                                        <form method="post">
                                            <div class="form-group">
                                                <input type="text" name="city" class="form-control" placeholder="City Name" required="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control" placeholder="City Email" required="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="phone" class="form-control" placeholder="City Phone" required="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="url" class="form-control" placeholder="City URL" required="" />
                                            </div>
                                            <button name="submit" type="submit" style="float: right;" class="btn btn-success btn-sm">Add</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

    <script src="assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js -->
    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
    <script src="assets/js/pages/forms/basic-form-elements.js"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/aero/html/basic-form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 10:13:41 GMT -->

</html>