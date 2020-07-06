<?php include("database/db.php");
session_start();

$id = $_GET["id"];
$query = $conn->prepare("SELECT * FROM blog_tb where id='$id'");
$query->execute();

$result = $query->fetch(PDO::FETCH_ASSOC);

$title = $result["title"];
$body = $result["body"];
$image = $result["image"];

?>

<!DOCTYPE html>
<html lang="zxx">


<body>

    <!-- head start -->

   
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">


        <title><?php echo "MLM blog - $title" ?></title>
        <meta name="description" content="<?php echo "Network marketing blog - $title" ?>">
        <meta name="keywords" content="mlm blog, network marketing blog, mlm companies, mlm company, multi level marketing, multi level marketers">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">




        <?php include("head-links.php"); ?>

    </head>
    <!-- head end -->

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!--Page Preloder -->


    <!-- header start -->
    <?php include("header.php") ?>
    <!-- header end -->


    <!-- Left Menu + Slider Start -->
    <?php include("left-menu.php") ?>
    <!-- Left Menu + Slider End -->





    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 order-md-1 order-1">



                    <div class="blog__details__text">

                        <img src="images/blog/<?php echo $image; ?>" alt="Blog Image">
                        <h2><?php echo $title; ?></h2>

                        <?php echo $body ?>

                    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Related Blog Section Begin -->
    <section class="relaog">

    </section>
    <!-- Related Blog Section End -->




    <!-- Footer Section Begin -->

    <?php include("footer2.php") ?>

    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="js/main5.js"></script>





</body>

</html>