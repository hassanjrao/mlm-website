<?php
include('db.php');
ob_start();
session_start();
if (empty($_SESSION['user_id'])) {

    header('location:sign-in.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.wrraptheme.com/templates/aero/html/basic-form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 10:12:36 GMT -->
<?php include("head.php"); ?>


<body class="theme-blush">

    <!-- Page Loader -->
    <?php include("page_loder.php"); ?>

    <!-- Right Icon menu Sidebar -->
    <?php include("rightbar.php"); ?>

    <!-- Left Sidebar -->
    <?php include("leftbar.php") ?>



    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>All Deals</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> Aero</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Orders</a></li>
                            <li class="breadcrumb-item active">All Orders</li>
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
                                                        <th data-breakpoints="xs">Name</th>
                                                        <th data-breakpoints="xs sm md">Contact</th>
                                                        <th data-breakpoints="xs sm md">Email</th>
                                                        <th data-breakpoints="xs sm md">Address</th>
                                                        <th data-breakpoints="xs sm md">Products</th>
                                                        <th data-breakpoints="xs sm md">Company</th>
                                                        <th data-breakpoints="xs sm md">Order Price</th>
                                                        <th data-breakpoints="xs sm md">Delivered</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    $a = 1;
                                                    $resl = $conn->prepare("SELECT * FROM orders");
                                                    $resl->execute();

                                                    while ($reslt = $resl->fetch(PDO::FETCH_ASSOC)) {


                                                    ?>



                                                        <tr>

                                                            <td>
                                                                <p class="c_name"> <?php echo $a++;
                                                                                    ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="c_name"> <?php echo $reslt['customer_name'] ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="c_name"> <?php echo $reslt['customer_contact'] ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="c_name"> <?php echo $reslt['customer_email'] ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="c_name"> <?php echo $reslt['customer_address'] ?></p>
                                                            </td>


                                                            <?php

                                                            $products_arr = unserialize($reslt['products']);

                                                            $products = "";

                                                            for ($i = 0; $i < count($products_arr); $i++) {

                                                                $id = $products_arr[$i];

                                                                $resl1 = $conn->prepare("SELECT * FROM deals where id='$id'");
                                                                $resl1->execute();

                                                                $reslt1 = $resl1->fetch(PDO::FETCH_ASSOC);

                                                                $products .= $reslt1['name'] . ",  ";




                                                            ?>



                                                            <?php

                                                            }

                                                            ?>

                                                            <td>
                                                                <p class="c_name"> <?php echo $products; ?></p>
                                                            </td>







                                                            <?php



                                                            $id6 = $reslt['company'];
                                                            $resl2 = $conn->prepare("SELECT * FROM company where id='$id6'");
                                                            $resl2->execute();

                                                            while ($reslt2 = $resl2->fetch(PDO::FETCH_ASSOC)) {


                                                            ?>

                                                                <td>
                                                                    <p class="c_name"> <?php echo $reslt2['tital']; ?></p>
                                                                </td>
                                                            <?php
                                                            }
                                                            ?>

                                                            <td>
                                                                <p class="c_name"> <?php echo $reslt['order_price'] ?></p>
                                                            </td>
                                                            <?php
                                                            $delivered = $reslt['delivered'];

                                                            if ($delivered == 1) {
                                                            ?>

                                                                <td>
                                                                    <a class="btn btn-success btn-sm text-light">Dispatched <i class="zmdi zmdi-assignment-check"></i></a>
                                                                </td>

                                                            <?php

                                                            } else {

                                                            ?>


                                                                <td>
                                                                    <a href="dispatch_order.php?id=<?php echo $reslt['order_id']; ?>" class="btn btn-primary btn-sm text-light" id="dispatch">Dispatch <i class="zmdi zmdi-assignment-check"></i></a>
                                                                    <a href="cancel_order.php?id=<?php echo $reslt['order_id']; ?>" class="btn btn-danger btn-sm text-light" id="cancel"> Cancel <i class="zmdi zmdi-delete"></i></a>
                                                                </td>

                                                        <?php }
                                                        } ?>

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