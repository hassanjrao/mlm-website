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




            <div class="accordion_head" data-node="#1">1. Eligibility:<div class="plusminus"><img src="img/accordian/plus.png" /></div>
            </div>
            <div class="accordion_body hide">
                <p>The members eligible for Insurance benefit are the present and future cardholders of the Participant who have fulfilled all the requirements set out by the Participant for subscribing under its discount card membership scheme and are within the Eligibility Age range defined in the Participant's Specific Schedule.</p>
            </div>

            <div class="accordion_head" data-node="#1">2. Lorem ipsum:<div class="plusminus"><img src="img/accordian/plus.png" /></div>
            </div>
            <div class="accordion_body hide">
                <p>Subject to the participation requirements as set out in clause 8 hereof, each Eligible Member��s coverage will not become effective until the coverage has been approved by the Insurance Operator in writing.</p>
            </div>

            <div class="accordion_head" data-node="#1">3. Courses:<div class="plusminus"><img src="img/accordian/plus.png" /></div>
            </div>
            <div class="accordion_body hide">
                <p>The members eligible for Insurance benefit are the present and future cardholders of the Participant who have fulfilled all the requirements set out by the Participant for subscribing under its discount card membership scheme and are within the Eligibility Age range defined in the Participant's Specific Schedule.</p>
            </div>

            <div class="accordion_head" data-node="#1">4. Software Engineering:<div class="plusminus"><img src="img/accordian/plus.png" /></div>
            </div>
            <div class="accordion_body hide">
                <p>Subject to the participation requirements as set out in clause 8 hereof, each Eligible Member��s coverage will not become effective until the coverage has been approved by the Insurance Operator in writing.</p>
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

    <?php include("footer.php") ?>

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
    <script src="js/main.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.slider23').slick({
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                speed: 1000,
                adaptiveHeight: true,
                fade: true,
                easing: 'ease-in-out',
                dots: true,
                arrows: true,
                prevArrow: '<span class="slider-navigation-arrow slider-navigation-prev"><i class="ion ion-ios-arrow-back"></i></span>',
                nextArrow: '<span class="slider-navigation-arrow slider-navigation-next"><i class="ion ion-ios-arrow-forward"></i></span>',

            });


            $(document).ready(function() {
                if (document.cookie.indexOf('collapsed_Nodes') >= 0) {
                    var getCollapsed = Cookies.get('collapsed_Nodes');
                    var checkCollapsed = getCollapsed.split('|');
                    var arrayLength = checkCollapsed.length;
                    for (var i = 0; i < arrayLength; i++) {
                        $('[data-node="#' + checkCollapsed[i] + '"]').next('.accordion_body').addClass('hide');
                        $('[data-node="#' + checkCollapsed[i] + '"]').children('.plusminus').children('img').attr('src', 'img/accordian/plus.svg');
                    }
                }

                var adjustCookie = function() {
                    var tags = [];
                    $('.accordion_container .hide').each(function() {
                        var tag = $(this).prev('.accordion_head').data('node');
                        tags.push(tag.replace('#', ''));
                    });

                    if (tags.length) {
                        Cookies.set('collapsed_Nodes', tags.join('|'), {
                            expires: 7,
                            path: window.location.pathname
                        });
                    } else {
                        Cookies.remove('collapsed_Nodes', {
                            path: window.location.pathname
                        });
                    }
                }

                $('.accordion_head').click(function() {
                    if ($(this).next('.accordion_body').is(':visible')) {
                        $(this).next('.accordion_body').slideUp(300);
                        $(this).next('.accordion_body').addClass('hide');
                        $(this).children('.plusminus').children('img').attr('src', 'img/accordian/plus.png');
                    } else {
                        $(this).next('.accordion_body').slideDown(300);
                        $(this).next('.accordion_body').removeClass('hide');
                        $(this).children('.plusminus').children('img').attr('src', 'img/accordian/minus.png');
                    }
                    adjustCookie();
                });
            });
        });
    </script>



</body>

</html>