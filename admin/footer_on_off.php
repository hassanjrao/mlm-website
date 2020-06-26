<?php
include('../database/db.php');
ob_start();
session_start();
if (empty($_SESSION['user_id'])) {

    header('location:sign-in.php');
}
?>


<!doctype html>
<html class="no-js " lang="en">

<?php include("head.php") ?>


<body class="theme-blush">

    <!-- Page Loader -->
    <?php include("page_loder.php"); ?>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>


    <!-- Left Sidebar -->
    <?php include("leftbar.php") ?>



    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Footer</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> Courses</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Footer</a></li>
                            <li class="breadcrumb-item active">ON/OFF</li>
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
                                <h2 class="card-inside-title">Footer ON/OFF</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">


                                        <?php

                                        if (isset($_POST['submit'])) {



                                            $switch = $_POST["switch"];



                                            $stmt = $conn->prepare("UPDATE `footer_on_off_tb` SET switch='$switch' where id='1'");

                                            $stmt->execute();


                                        }



                                        $query1 = $conn->prepare("SELECT * FROM footer_on_off_tb");
                                        $query1->execute();
                                        $result1 = $query1->fetch(PDO::FETCH_ASSOC);

                                        ?>

                                        <br>
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            Footer is <?php echo $result1["switch"] ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <form method="post" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <select name="switch" class="form-control">
                                                    <option disable>ON/OFF</option>
                                                    <option>ON</option>
                                                    <option>OFF</option>
                                                </select>

                                            </div>




                                            <button name="submit" type="submit" style="float: right;" class="btn btn-success btn-sm">Submit</button>
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


</html>