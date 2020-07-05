<?php include("database/db.php");
session_start();

$ct = $_GET["city"];


if (strpos($ct, "tekirda") !== false) {
    $ct = "tekirda" . "&#x0011F";
}

if (!isset($_SESSION[$ct])) {

    $query = $conn->prepare("SELECT * FROM cities_tb");
    $query->execute();
    while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
        $cti = preg_replace('/\s+/', '-', $result["city"]);
        $_SESSION[strtolower($cti)] = $result["id"];
    }
}



$id = $_SESSION[$ct];


$query = $conn->prepare("SELECT * FROM cities_tb WHERE id='$id'");
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

$city = ucwords($result["city"]);
$email = $result["email"];
$phone = $result["phone"];
$url = $result["url"];



?>


<!DOCTYPE html>
<html lang="zxx">


<body onload="getMap()">

    <!-- head start -->

    <!-- Title: Direct selling companies in "city". Direct sales works. Know more
         Description: Direct selling companies in "city" United States. Find a direct selling company near you or the top 100 direct selling companies.
         KeyWords : direct selling companies, direct selling company, direct sale company, direct sales company, direct sales, top 100 direct selling companies 2020 -->

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="description" content="<?php echo "Direct selling companies in $city United States. Find a direct selling company near you or the top 100 direct selling companies." ?>">
        <meta name="keywords" content="<?php echo "direct selling companies, direct selling company, direct sale company, direct sales company, direct sales, top 100 direct selling companies 2020" ?>">

        <title><?php echo "Direct Selling Companies in $city. Direct sales works. Know more" ?></title>

        <?php include("head-links.php") ?>

    </head>
    <!-- head end -->

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Page Preloder -->


    <!-- header start -->
    <?php include("header.php") ?>
    <!-- header end -->


    <!-- Left Menu + Slider Start -->
    <?php include("left-menu.php") ?>
    <!-- Left Menu + Slider End -->


    <main class="pt-5">
        <div class="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">


                        <article class="pt-0">
                            <span>
                                <h1>Direct selling companies in <?php echo $city ?> </h1>
                            </span>


                            <div class="cities-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="#info" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">More Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="#email" data-toggle="tab" href="#email" role="tab" aria-controls="email" aria-selected="false">Email</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="#phone" data-toggle="tab" href="#phone" role="tab" aria-controls="phone" aria-selected="false">Phone</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="#web" data-toggle="tab" href="#web" role="tab" aria-controls="web" aria-selected="false">Website</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info">Lorem Ipsum</div>
                                    <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="email"><?php echo $email; ?></div>
                                    <div class="tab-pane fade" id="phone" role="tabpanel" aria-labelledby="phone"><?php echo $phone; ?></div>
                                    <div class="tab-pane fade" id="web" role="tabpanel" aria-labelledby="web"><?php echo $url; ?></div>
                                </div>
                            </div>

                            <p class="mt-5">
                                MLM businesses, or Multi Level Marketing businesses are quite popular among people in today’s world. That’s because these companies deliver a hassle-free method for the interested people to generate a revenue. If you start working with one of the direct selling companies, you will get the opportunity to have your own home based business. On top of that, you can start working from anywhere as well.
                            </p>
                            <p>
                                While planning to work with a direct selling business, it is worthy to take a look at the best direct selling companies. Here is a list of top 10 MLM company 2020 options that you can find around the world.
                            </p>

                        </article>



                        <article class="pb-3">
                            <h1 style="font-weight:350;">Top 10 MLM Company 2020 list</h1>
                            <span>
                                <p class="mt-5">- doTterra</p>
                                <p>DoTterra is one of the most popular MLM companies that you can find. This company helps the representatives to receive benefits that are associated with natural healthcare products. There is a trend to obtain natural healthcare products. As a result, doTterra could find its way into the best MLM companies. Within the very first five years in business, doTterra was able to generate a revenue of five million dollars. As of now, doTterra is selling numerous wellness products, including essential oils.</p>
                            </span>

                            <span>
                                <p>- Modere</p>
                                <p>Modere is one of the oldest direct selling companies, but it was rebranded recently. This was able to get into the list of top 10 MLM company 2020 with the eco-friendly products that are offered to the market. These eco-friendly products were designed for both home and health. In the meantime, people who worked as representatives for Modere were called as social marketers as well. The selling structure behind Modere was heavily dependent on the bonuses. However, it was possible to get a commission for recruiting other social marketers and selling products as well.</p>
                            </span>

                            <span>
                                <p>- Dagcoin</p>
                                <p>Dagcoin is promoted as the most usable cryptocurrency in the entire universe. In fact, this cryptocurrency received a faster growth when compared to Bitcoin. It was created by a European investor. It is important to keep in mind that Dagcoin is not selling any products to customers. However, it working on a mission to make cryptocurrencies available for people by the end of 2020. A network marketing commission of 10% is offered to all the people who go ahead and invest on Dagcoin as well.</p>
                            </span>

                            <span>
                                <p>- Senegence</p>
                                <p>Senegence MLM Company is quite popular for LipSense lipstick product offered to the market. Sellers are provided with some excellent discounts on purchasing the products. On top of that, the sellers can receive a 50% commission on the sales. Due to these exciting offers, it was able to become one of the most prominent entities in the direct selling business model. However, you should also keep in mind that new network marketers have to make a big investment before they start making money with direct selling. </p>
                            </span>

                            <span>
                                <p>- Total Life Changes</p>
                                <p>Total Life Changes is one of the most prominent direct selling companies that you can find in the health and fitness niche. This company was rebranded recently. The product offerings of Total Life Changes can be divided into three main categories. They include Iso café, Skin care and nutrition. Among the products offered by Total Life Changes, the outstanding detox tea made out of herbs has received lots of attention. In addition to that, Total Life Changes is offering many other amazing healthy products. Therefore, direct sellers who work with Total Life Changes have some exciting options to promote with ease.</p>
                            </span>


                            <div class="cities-tabs">
                                <ul class="nav nav-tabs" id="myTab1" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="#info1" data-toggle="tab" href="#info1" role="tab" aria-controls="info1" aria-selected="true">More Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="#email1" data-toggle="tab" href="#email1" role="tab" aria-controls="email1" aria-selected="false">Email</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="#phone1" data-toggle="tab" href="#phone1" role="tab" aria-controls="phone1" aria-selected="false">Phone</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="#web1" data-toggle="tab" href="#web1" role="tab" aria-controls="web1" aria-selected="false">Website</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent1">
                                    <div class="tab-pane fade show active" id="info1" role="tabpanel" aria-labelledby="info1">Lorem Ipsum</div>
                                    <div class="tab-pane fade" id="email1" role="tabpanel" aria-labelledby="email1"><?php echo $email; ?></div>
                                    <div class="tab-pane fade" id="phone1" role="tabpanel" aria-labelledby="phone1"><?php echo $phone; ?></div>
                                    <div class="tab-pane fade" id="web1" role="tabpanel" aria-labelledby="web1"><?php echo $url; ?></div>
                                </div>
                            </div>


                            <h2 class="pb-3 text-center">Find us in: </h2>

                            <div class="pb-3" style="width: 100%; height: 450px" id="mapContainer">

                            </div>



                            <span>
                                <p>- Vasayo</p>
                                <p>Vasayo is a direct selling business that is available for all the aspiring network marketers to use. It focuses on promoting nutritional supplements. You will be able to join the company and promote a variety of nutritional supplements. They are in a position to help people refrain from a variety of negative health issues. The products offered under Vasayo are heavily recommended for people who are dealing with weight management and sleep issues.</p>
                            </span>

                            <span>
                                <p>- My Daily Choice </p>
                                <p>My Daily Choice is among the most trending direct selling companies. The company has been able to overcome most of the overhead expenses that it has to deal with. As a result, people who join the business are provided with numerous exciting offers to promote. As a network marketer of My Daily Choice, you will have to go ahead with promoting CBD products. Since there is a hype for CBD products, you will find it as an easy task to go ahead with your marketing efforts as well.</p>
                            </span>

                            <span>
                                <p>- New U Life</p>
                                <p>New U Life is a mastermind MLM company. It offers a wide range of anti-aging products. All these anti-aging products are based upon healthy ingredients, which can deliver positive changes to people by making healthy changes to hormones. Hence, New U Life products are quite popular among people. Consultants are provided with the freedom to get their hands on New U Life as well. In the meantime, network marketers have the chance to get the maximum returns offered by their direct selling business.</p>
                            </span>

                            <span>
                                <p>- Valentus</p>
                                <p>Valentus is offering a magical coffee, which can deliver guaranteed results with losing weight. This company was discovered five years ago. All the network marketers who join Valentus will be able to earn an impressive commission of up to 25%. In addition to that, it is also possible to find a large number of amazing bonuses available.</p>
                            </span>

                            <span>
                                <p>- Young Living</p>
                                <p>Young Living is a network marketing company that encourages people to get all the benefits that are associated with essential oils and start living a happier life. The products offered under the company are known to deliver positive results. Therefore, you can call this as an exciting network marketing opportunity available to consider. It provides outstanding commissions as well.</p>
                            </span>

                            <p>
                                Final words
                            </p>
                            <p>
                                Now you have a clear understanding about the best direct selling companies that exist out there. If you are planning to get into a direct selling business or if you are already working for MLM business, but need to make a company change, you can take a look at these 10 options and move forward.
                            </p>


                        </article>

                        <div class="cities-tabs">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="#info2" data-toggle="tab" href="#info2" role="tab" aria-controls="info2" aria-selected="true">More Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="#email2" data-toggle="tab" href="#email2" role="tab" aria-controls="email2" aria-selected="false">Email</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="#phone2" data-toggle="tab" href="#phone2" role="tab" aria-controls="phone2" aria-selected="false">Phone</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="#web2" data-toggle="tab" href="#web2" role="tab" aria-controls="web2" aria-selected="false">Website</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="info2" role="tabpanel" aria-labelledby="info2">Lorem Ipsum</div>
                                <div class="tab-pane fade" id="email2" role="tabpanel" aria-labelledby="email2"><?php echo $email; ?></div>
                                <div class="tab-pane fade" id="phone2" role="tabpanel" aria-labelledby="phone2"><?php echo $phone; ?></div>
                                <div class="tab-pane fade" id="web2" role="tabpanel" aria-labelledby="web2"><?php echo $url; ?></div>
                            </div>
                        </div>



                        </div1>

                        <div class="col-lg-12 mb-5">

                            <div class="services-links">

                                <h3 class="text-center mb-4">Direct Selling Companies in</h3>

                                <?php
                                $ind = 0;
                                $cts = array();
                                $ids = array();
                                $z = 0;
                                $done_cities = array();
                                $done_ids = array();

                                $query = $conn->prepare("SELECT * FROM cities_tb");
                                $query->execute();

                                while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
                                    $cities[$ind] = $result["city"];
                                    $ids[$ind] = $result["id"];
                                    $ind++;
                                }

                                $totalCities = count($cities);

                                $n = range(0, $totalCities - 1);
                                shuffle($n);


                                ?>

                                <div class="row">

                                    <div class="col-lg-3 col-md-3 col-sm-6">

                                        <ul>
                                            <?php

                                            for ($x = 0; $x < 5; $x++) {
                                                $i = $n[$x];

                                                $city = $cities[$i];
                                                $id = $ids[$i];


                                                $done_cities[$z] = $city;
                                                $done_ids[$z] = $id;
                                                $z++;


                                                $ct = preg_replace('/\s+/', '-', $city);
                                                $_SESSION[$ct] = $id;
                                            ?>
                                                <li><a href=<?php echo "direct-selling-companies-in-" . strtolower($ct); ?>><?php echo ucwords($city) ?></a></li>

                                            <?php
                                            }


                                            ?>


                                        </ul>

                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-6">

                                        <ul>

                                            <?php

                                            $left = array_diff($cities, $done_cities);
                                            $leftCities = array_values($left);

                                            $l_ids = array_diff($ids, $done_ids);
                                            $leftIds = array_values($l_ids);


                                            $totalLeftCities = count($leftCities);

                                            $n = range(0, $totalLeftCities - 1);
                                            shuffle($n);

                                            for ($x = 0; $x < 5; $x++) {
                                                $i = $n[$x];

                                                $city = $leftCities[$i];
                                                $done_cities[$z] = $city;

                                                $id = $leftIds[$i];
                                                $done_ids[$z] = $id;

                                                $z++;

                                                $ct = preg_replace('/\s+/', '-', $city);
                                                $_SESSION[$ct] = $id;
                                            ?>
                                                <li><a href=<?php echo "direct-selling-companies-in-" . strtolower($ct); ?>><?php echo ucwords($city) ?></a></li>


                                            <?php }

                                            ?>

                                        </ul>


                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-6">

                                        <ul>

                                            <?php

                                            $left = array_diff($cities, $done_cities);

                                            $leftCities = array_values($left);

                                            $l_ids = array_diff($ids, $done_ids);
                                            $leftIds = array_values($l_ids);


                                            $totalLeftCities = count($leftCities);

                                            $n = range(0, $totalLeftCities - 1);
                                            shuffle($n);

                                            for ($x = 0; $x < 5; $x++) {
                                                $i = $n[$x];

                                                $city = $leftCities[$i];
                                                $done_cities[$z] = $city;


                                                $id = $leftIds[$i];
                                                $done_ids[$z] = $id;

                                                $z++;


                                                $ct = preg_replace('/\s+/', '-', $city);
                                                $_SESSION["$ct"] = $id;
                                            ?>
                                                <li><a href=<?php echo "direct-selling-companies-in-" . strtolower($ct); ?>><?php echo ucwords($city); ?></a></li>

                                            <?php }

                                            ?>

                                        </ul>

                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <ul>

                                            <?php

                                            $left = array_diff($cities, $done_cities);

                                            $leftCities = array_values($left);

                                            $l_ids = array_diff($ids, $done_ids);
                                            $leftIds = array_values($l_ids);


                                            $totalLeftCities = count($leftCities);

                                            $n = range(0, $totalLeftCities - 1);
                                            shuffle($n);

                                            for ($x = 0; $x < 5; $x++) {
                                                $i = $n[$x];

                                                $city = $leftCities[$i];
                                                $done_cities[$z] = $city;


                                                $id = $leftIds[$i];
                                                $done_ids[$z] = $id;

                                                $z++;


                                                $ct = preg_replace('/\s+/', '-', $city);
                                                $_SESSION["$ct"] = $id;
                                            ?>
                                                <li><a href=<?php echo "direct-selling-companies-in-" . strtolower($ct); ?>><?php echo ucwords($city); ?></a></li>

                                            <?php }

                                            ?>

                                        </ul>


                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
    </main>

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
    <script src="js/main5.js"></script>




</body>

</html>


<script>
    function getMap() {
        var citi = '<?php echo $_GET["city"]; ?>';

        if (citi.includes("tekirda")) {
            citi = "Tekirdağ"
        }
        console.log(citi);
        $.ajax({
            url: 'https://geocoder.ls.hereapi.com/6.2/geocode.json?apiKey=F8AWLo4qe51rnLMUknCs8HPYGwl7Q7p_5TNVahy0a8s&gen=9&searchtext=' + citi,
            type: 'GET',
            data: citi,
            success: function(result) {
                console.log(result);

                var longt = result["Response"]["View"][0]["Result"][0]["Location"]["DisplayPosition"]["Longitude"];
                var latit = result["Response"]["View"][0]["Result"][0]["Location"]["DisplayPosition"]["Latitude"];


                var platform = new H.service.Platform({
                    'apikey': 'F8AWLo4qe51rnLMUknCs8HPYGwl7Q7p_5TNVahy0a8s'
                });

                // Obtain the default map types from the platform object
                var maptypes = platform.createDefaultLayers();

                // Instantiate (and display) a map object:
                var map = new H.Map(
                    document.getElementById('mapContainer'),
                    maptypes.vector.normal.map, {
                        zoom: 10,
                        center: {
                            lng: longt,
                            lat: latit
                        }
                    });

            }
        });
    }
</script>