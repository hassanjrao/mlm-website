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


<!DOCTYPE html>
<html lang="en">

<?php include("head.php"); ?>


<body class="theme-blush">

    <!-- Page Loader -->
    <?php include("page_loder.php"); ?>


    <!-- Left Sidebar -->
    <?php include("leftbar.php") ?>

    <!-- Right Sidebar -->
    <?php include("rightbar.php")?>


    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>All Cities</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> Aero</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">City</a></li>
                            <li class="breadcrumb-item active">All Cities</li>
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



                        <div class="container-fluid">
                            <div class="row clearfix">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>

                                                        <th data-breakpoints="xs">ID</th>
                                                        <th data-breakpoints="xs">City</th>
                                                        <th data-breakpoints="xs">Email</th>
                                                        <th data-breakpoints="xs">Phone</th>
                                                        <th data-breakpoints="xs">URL</th>
                                                        <th data-breakpoints="xs sm md">Edit/Delete</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    $a = 1;

                                                    $query = $conn->prepare("SELECT * FROM cities_tb");
                                                    $query->execute();

                                                    while ($result = $query->fetch(PDO::FETCH_ASSOC)) {


                                                    ?>



                                                        <tr>
                                                            <td>
                                                                <p class="c_name"><?php echo $a++; ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="c_name"> <?php echo ucwords($result['city']) ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="c_name"> <?php echo $result['email'] ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="c_name"> <?php echo $result['phone'] ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="c_name"> <?php echo $result['url'] ?></p>
                                                            </td>
                                                            <td>
                                                                <a href="edit_city.php?id=<?php echo $result['id'] ?>" class="btn btn-primary btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                                                <a href="delete_city.php?id=<?php echo $result['id'] ?>" class="btn btn-danger btn-sm"><i class="zmdi zmdi-delete"></i></a>
                                                            </td>
                                                        </tr>

                                                    <?php } ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>

    <script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

    <!-- Jquery DataTable Plugin Js -->
    <script src="assets/bundles/datatablescripts.bundle.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

    <script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
    <script src="assets/js/pages/tables/jquery-datatable.js"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/aero/html/basic-form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 10:13:41 GMT -->

</html>