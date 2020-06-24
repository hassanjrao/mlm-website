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
                    <form class="card auth_form" method="post" enctype="multipart/form-data">
                        <div class="header">
                            <img class="logo" src="assets/images/logo.svg" alt="">
                            <h5>Update</h5>
                        </div>
                        <?php

                        $id = $_GET['id'];

                        $query = $conn->prepare("SELECT * FROM cities_tb where id='$id'");
                        $query->execute();

                        $result = $query->fetch(PDO::FETCH_ASSOC);


                        ?>

                        <div class="body">
                            <div class="input-group mb-3">
                                <input type="text" name="name" class="form-control" placeholder="City Name" value="<?php echo $result['city']; ?>" />
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="email" class="form-control" placeholder="City Name" value="<?php echo $result['email']; ?>" />
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="phone" class="form-control" placeholder="City Name" value="<?php echo $result['phone']; ?>" />
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="url" class="form-control" placeholder="City Name" value="<?php echo $result['url']; ?>" />
                            </div>


                            <input type="submit" name="submit" class="btn btn-primary btn-block waves-effect waves-light" value="Update">

                        </div>

                    </form>
                    <?php

                    if (isset($_POST['submit'])) {


                        $city = $_POST['name'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $url = $_POST['url'];
                    
                    
            
                    
                        $stmt = $conn->prepare("UPDATE `cities_tb` SET city='$city', email='$email', phone='$phone', url='$url' where id='$id'");

                        $stmt->execute();

                        header("location:all_city.php");
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