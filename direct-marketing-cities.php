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

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="description" content="direct marketing">
        <meta name="keywords" content=<?php echo "direct-marketing-in-$city" ?>>

        <title><?php echo "Direct Marketing in $city" ?></title>

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
                    <div class="col-lg-6">

                        <article class="pb-3 pt-0">

                            <span>
                                <h1>Direct Marketing </h1><br>
                                <p>(Everything you need to know about it)</p>
                            </span>

                            <p class="mt-4">
                                A large number of home based business opportunities are available for the people to consider. Out of those business opportunities, direct marketing has received lots of positive attention in the recent past. Hence, it is worthy to take a look at this business opportunity and figure out what comes along with it. Then you can go ahead and experience the benefits that come out of it as well.
                            </p>

                            <p>
                                What exactly is direct marketing?
                            </p>
                            <p>
                                As the very first thing, let’s take a look at the definition of direct marketing. Direct marketing is the process where you are selling products directly to your customers. You will be doing this within a non-retail environment. That’s because the sales don’t take place at work, home, online or any other location where there isn’t a store.
                            </p>
                            <p>
                                One of the best things about direct marketing is that it can helps to eliminate middlemen. Therefore, product distribution can be done in a better way. There are no wholesalers or regional distribution centers. The products manufactured within a company will go directly into the direct sales company, the sales representative or the distributor. Then they will pass the products to the consumers.
                            </p>


                        </article>
                    </div>

                    <div class="col-lg-6">

                        <div class="pb-3" style="width: 620px; height: 450px" id="mapContainer">

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <article class="pb-3">


                            <h1 style="font-weight:350;">Direct selling industry </h1>

                            <p class="mt-4">
                                The products that are being sold through direct marketing aren’t usually available for purchase through retail locations. This makes the direct selling industry more exciting. The sales representative or the distributor will be the only person, who should be contacted in order to purchase the services or products that are available.
                            </p>
                            <p>
                                It is also possible for you to find how direct selling business model is linked with network marketing and part planning companies. This can be considered as another variation of direct selling, which you can find within the direct selling industry. Likewise, it is also possible for you to discover how a large number of B2B companies use direct selling to get the products delivered to end customers. For example, there are companies selling office supplies, who send out the representatives directly into the stores and start using the services.
                            </p>

                            <p>
                                Different direct marketing types available in the direct selling industry
                            </p>

                            <p>
                                Direct selling industry is a massive one. When you deep dive and take a look at the industry, you will be able to discover many different business models. Here are some of the most prominent business models that you can find in there.
                            </p>

                            <span>
                                <p>- Single level direct sales </p>
                                <p>Single level direct sales is the most basic type of direct marketing. This is where one on one marketing is done. Door to door marketing efforts fall under this category. Likewise, you can also classify in-person presentations into this category as well. In here, you are provided with the freedom to make sales online or via catalogs. The income you earn out of here is generally made out of commissions. In the meantime, it is possible to generate bonuses as well.</p>
                            </span>

                            <span>
                                <p>- Party plan sales </p>
                                <p>Party plan sales are taking place within groups. It is associated with a sales representative or a distributor, who is conducting a presentation at his own home or in the home of another person. In some of the rare instances, companies associated with this would sell to individuals within the business as well. </p>
                                <p>Let’s take a look at a sales representative who is promoting a real estate software. He can do direct marketing through a group sales presentation. This group can be a set of realtors. Then he will be able to earn a commission via sales. Moreover, recruitment of other representatives can also help to generate an income.</p>
                            </span>

                            <span>
                                <p>- Multi level marketing </p>
                                <p>
                                    Multi level marketing, which is also known as MLM is one of the most prominent business models that you can find within the direct selling industry. People who are associated with this sales model are provided with the chance to earn a revenue through many different methods. It includes both single presentations and party presentations. Income can also be earned through catalogs and online stores.
                                </p>
                                <p>
                                    The main method of income generation in the MLM business model is sales commission. In addition to that, a person will be able to earn an income based on the sales that are made by new sales representatives, who are recruited under him into the company.
                                </p>
                                <p>
                                    In most of the instances, direct marketing is known as network marketing and MLM. It is true that both network marketing and MLM are types of direct sales. However, not all the direct sales belong into this.
                                </p>
                            </span>
                        </article>

                        <article class="pb-3">
                            <span>
                                <h2>Matrix Plan</h2>
                                <p class="">(Calculating the income through Matrix Plan)</p>
                            </span>

                            <p>

                                When you are engaged with MLM direct marketing, you will come across the need to make more money with the sales representatives that you are recruiting under you. This is where matrix plan will be able to deliver support and assistance to you with.
                            </p>
                            <p>
                                A matrix plan can simply be considered as a pyramid structure, which has a fixed number of columns and rows. This will restrict the total number of distributors that you will be able to sponsor within the very first level. When the width is reduced by the matrix plan, it is possible to motivate and hire additional members within the downline.
                            </p>
                            <p>
                                One of the most prominent aspects that you can find in matrix plan is the restricted width. This is quite different from the MLM compensation plans. That’s because the matrix would restrict the total number of distributors that you will be able to sponsor within the very first level. This will usually be under 5. Then you can grow the depth of the tree under you. Along with that, it is possible for you to increase the overall revenue that you generate while reducing the efforts that you spend.
                            </p>
                            <p>
                                Final words
                            </p>
                            <p>
                                Keep these facts in your mind and get started with MLM or direct marketing. You will appreciate all the benefits that it can provide you with. It is one of the most exciting home based business models available for you to consider as of now as well. Just get your hands on it and experience the amazing benefits offered.
                            </p>
                        </article>



                    </div>


                    <div class="col-lg-12 mb-5">

                        <div class="services-links">

                            <h3 class="text-center mb-4">Direct Marketing in</h3>

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

                                <div class="col-lg-3">

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
                                            <li><a href=<?php echo "direct-marketing-in-" . strtolower($ct); ?>><?php echo ucwords($city) ?></a></li>

                                        <?php
                                        }


                                        ?>


                                    </ul>

                                </div>

                                <div class="col-lg-3">

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
                                            <li><a href=<?php echo "direct-marketing-in-" . strtolower($ct); ?>><?php echo ucwords($city) ?></a></li>


                                        <?php }
                                        // var_dump($done_cities);
                                        // var_dump($done_ids);
                                        ?>

                                    </ul>


                                </div>

                                <div class="col-lg-3">

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
                                            <li><a href=<?php echo "direct-marketing-in-" . strtolower($ct); ?>><?php echo ucwords($city); ?></a></li>

                                        <?php }
                                        //  var_dump($done_cities);
                                        //  var_dump($done_ids);
                                        ?>

                                    </ul>

                                </div>

                                <div class="col-lg-3">
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
                                            <li><a href=<?php echo "direct-marketing-in-" . strtolower($ct); ?>><?php echo ucwords($city); ?></a></li>

                                        <?php }
                                        //  var_dump($done_cities);
                                        //  var_dump($done_ids);
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