<?php include("database/db.php");
session_start();
?>

<!DOCTYPE html>
<html lang="zxx">


<body>

    <!-- head start -->

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="description" content="home">
        <meta name="keywords" content="mlm">

        <title>Blogs</title>

        <?php include("head-links.php"); ?>

    </head>
    <!-- head end -->

    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div>-->
    <!--Page Preloder -->


    <!-- header start -->
    <?php include("header.php") ?>
    <!-- header end -->


    <!-- Left Menu + Slider Start -->
    <?php include("left-menu.php") ?>
    <!-- Left Menu + Slider End -->





    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="row">

                        <?php

                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        } else {
                            $page = 1;
                        }
                        $no_of_records_per_page = 10;
                        $offset = ($page - 1) * $no_of_records_per_page;


                        $total_pages_sql = $conn->prepare("SELECT COUNT(*) AS num FROM blog_tb");
                        $total_pages_sql->execute();

                        $row = $total_pages_sql->fetch(PDO::FETCH_ASSOC);

                        $total_rows=$row["num"];

                      
                        $total_pages = ceil($total_rows / $no_of_records_per_page);



                        $query = $conn->prepare("SELECT * FROM blog_tb LIMIT $offset, $no_of_records_per_page");
                        $query->execute();

                        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {

                            $id = $result["id"];

                        ?>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__item">
                                    <div class="blog__item__pic">
                                        <img src="images/blog/<?php echo $result['image'];  ?>" alt="Blog Image">
                                    </div>
                                    <div class="blog__item__text">
                                        <h5><a href="#"><?php echo $result["title"]; ?></a></h5>


                                        <a href=<?php echo "blog-details.php?blog=$id"  ?> class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                    </div>
                                </div>
                            </div>

                        <?php
                        }
                        ?>

                        <div class="col-lg-12 ">


                            <ul class="pagination text-center">
                                <li class="page-item"><a class="page-link" href="<?php if ($page <= 1) {
                                                                                        echo '#';
                                                                                    } else {
                                                                                        echo "blog-list.php?page=" . ($page - 1);
                                                                                    } ?>">Previous</a></li>

                                <?php
                                for ($pg = 1; $pg <= $total_pages; $pg++) {
                                ?>
                                    <li class="page-item"><a class="page-link" href="blog-list.php?page=<?php echo $pg ?>"><?php echo $pg ?></a></li>
                                <?php
                                }
                                ?>

                                <li class="page-item"><a class="page-link" href="<?php if ($page >= $total_pages) {
                                                                                        echo '#';
                                                                                    } else {
                                                                                        echo "blog-list.php?page=" . ($page + 1);
                                                                                    } ?>">Next</a></li>
                            </ul>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->







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