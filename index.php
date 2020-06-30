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

        <title>Home</title>

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

    <!-- Middle Section Begin -->
    <section class="categories border h-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pt-12 text-center">
                    <h1> Middle Section</h1>
                </div>

            </div>
        </div>
    </section>
    <!-- Middle Section End -->


    <!-- Testimonial Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">

                    <?php


                    $query = $conn->prepare("SELECT * FROM moving_img_tb");
                    $query->execute();

                    while ($result = $query->fetch(PDO::FETCH_ASSOC)) {


                    ?>

                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="images/product/<?php echo $result['image'];  ?>">
                                <h5><a href="#"><?php echo ucwords($result['caption']);  ?></a></h5>
                            </div>
                        </div>


                    <?php } ?>





                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Middle Section Begin -->
    <section class="categories border h-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="pt-5"> Similiar Services</h1>
                </div>

            </div>
        </div>
    </section>
    <!-- Middle Section End -->


    <!-- accordian start -->

    <!-- Page Conttent -->
    <section class="page-content" style="padding:60px 0;">
        <div class=" container">
            <h3 class="text-center mb-4">Expandable FAQ:</h3>

            <div class="accordion_head" data-node="#1">1. How should we recruit people?
                <div class="plusminus"><i class="fas fa-plus-square" style="color: #7fad39;"></i></div>
            </div>
            <div class="accordion_body hide">
                <p>You should build a team initially by talking with the people you already know are a right fit for the MLM Business.
                    Most people have a a circle of known contacts between 100 to 1000 people.
                    Sometimes, you will be able to sponsor some deserving contacts to start your team.
                    Over time as you get successful, you can use online marketing, paid advertising,
                    and further networking to find new aspirants.
                </p>
            </div>

            <div class="accordion_head" data-node="#1">2. How do does one many money in MLM?
                <div class="plusminus"><i class="fas fa-plus-square" style="color: #7fad39;"></i></div>
            </div>
            <div class="accordion_body hide">
                <p>You earn money from retail profits of your personal sales.
                    And you earn commissions and bonuses from your team’s sales.
                    So basically , you are an independent business person working
                    in the sales force for the MLM Company.
                    Every compensation plan is different, but you are normally paid
                    a good commission and percentage from your entire organization’s sales.
                </p>
            </div>

            <div class="accordion_head" data-node="#1">3. Is MLM legal?<div class="plusminus"><i class="fas fa-plus-square" style="color: #7fad39;"></i></div>
            </div>
            <div class="accordion_body hide">
                <p>Of course Yes!
                    Network marketing or MLM is legal in the United States and almost every other country.
                    In 1979 Amway fought the Federal Trade Commission and won a huge victory for the network marketing industry.
                    The essence in being legal is that, distributors must focus on selling actual products
                    and not focus on getting paid for “recruiting” or building a downline of people.</p>
            </div>

            <div class="accordion_head" data-node="#1">4. What is the best company in MLM to join?<div class="plusminus"><i class="fas fa-plus-square" style="color: #7fad39;"></i></div>
            </div>
            <div class="accordion_body hide">
                <p>That really depends on what suits you and the integrity of the company.
                    We tell people to find a company having products and services that they themselves
                    are passionate about. The prices should be reasonable so it is a good deal to the retail customer.
                    If the products are priced well for customers, then the company may be a hit.
                    You should try to work with a company having a good reputation,
                    a decent compensation plan and good leadership. We can guide you on
                    the best company that will suit you. Feel free to Contact us using
                    the inquiry form or email address given.</p>
            </div>

            <div class="accordion_head" data-node="#1">5. Is this site or information for my city/country?<div class="plusminus"><i class="fas fa-plus-square" style="color: #7fad39;"></i></div>
            </div>
            <div class="accordion_body hide">
                <p>Yes. Most MLM's work worldwide. Most of the information we offer
                    is about companies that can work in all the major countries of the world.
                    If you have any question or doubt about something listed on our pages or
                    would like to list with us, feel free to contact us.</p>
            </div>


        </div>

        <br>

    </section>



    <!-- accordian end -->


    <!-- google map section start -->

    <section class="pb-5">

        <div class="container">
            <!-- <img style="width:100%; margin: 30px 0;" src="images\footer.jpg" alt=""> -->
            <div class="row">

                <div class="col-lg-12">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.6929204689986!2d68.81694891438502!3d27.726766031246626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3935d4af0e0f6721%3A0x6a57455ae708c7b!2sSukkur%20IBA%20University!5e0!3m2!1sen!2s!4v1567797719891!5m2!1sen!2s" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


                </div>

            </div>

        </div>

    </section>

    <!-- google map section end -->




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