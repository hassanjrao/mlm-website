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
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title><?php echo "Multi Level Marketers in $city. Find out MLM organization contacts" ?></title>

        <meta name="description" content="<?php echo "Multi level marketers in $city United States. The best MLM companies and fastest growing marketer business teams." ?>">
        <meta name="keywords" content="<?php echo "multi level marketers, best mlm companies to join, mlm organization, top 100 network marketing companies, mlm examples" ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
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

                        <article class="pb-3 mt-0">

                            <span>
                                <h1>Multi level marketers in <?php echo $city ?></h1><br>
                                <p>(Understanding the basics of MLM)</p>
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

                            <p class="mt-4">
                                MLM, which is also known as Multi-Level Marketing is a direct sales business model. Inside the business model, you can see how independent representatives are selling services and products obtained from a company to end customers. In the meantime, the representatives have the chance to recruit more representatives under them and provide an appropriate training to start their own businesses. In return, it is possible to receive a commission from the sales made out of them. This is where the multi-level aspect comes into play.
                            </p>
                            <p>
                                Multi level marketers can earn revenue out of MLM business model in two different ways. The first method is to earn a commission on the sales that you are personally making. On the other hand, it is also possible for you to get a commission from the sales generated by reps under you.
                            </p>

                        </article>






                        <article class="pb-3">
                            <span>
                                <h1 style="font-weight:350;">Top network marketing companies </h1>
                                <p class="ml-3">(Understanding the basics of MLM)</p>
                            </span>

                            <span>
                                <p class="pt-3">- The plan</p>
                                <p>The MLM representatives use the word “plan” to call their program. This outlines the marketing plan as well as the compensation plan.</p>
                            </span>

                            <span>
                                <p>- Sponsor </p>
                                <p>Sponsor is the person who is recruiting new representatives into the affiliate business. If you recruit a new member, you will be the sponsor. You will also have the responsibility to provide a training for the member that you recruit.</p>
                            </span>

                            <span>
                                <p>- Recruit </p>
                                <p>Recruit will be the person who joins the affiliate program under a sponsor. .You will get the training needed to proceed from the person who recruits you.</p>
                            </span>

                            <span>
                                <p>- Downline </p>
                                <p>The downline is made out of recruits who are under you. This includes the new members that you have recruited as well as the members who are recruited by your recruits. </p>
                            </span>

                            <span>
                                <p>- Upline</p>
                                <p>Upline is made out of the representatives who have sponsored you as well as your sponsors.</p>
                            </span>

                            <span>
                                <p>- Compensation plan </p>
                                <p>Compensation plan clearly outlines the way on how you will be able to make money. </p>
                            </span>
                        </article>
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

                        <article class="pb-3">
                            <h2>Top 100 network marketing companies </h2>
                            <p class="mt-4">If you can join with one of them, you can find an excellent compensation plan. It will clearly define how you will be able to make money and how much you can generate.</p>

                            <p>Is it legal to do MLM with top 100 network marketing companies? </p>

                            <p>Before joining top network marketing companies, most of the people wonder whether it is legal do engage with MLM or not. This is where you should have a strong understanding about the misconceptions and myths that are associated with it. </p>

                            <p>MLM is a legal business model. You don’t need to worry about anything when you are engaged with it. However, you need to make sure that you are offering a quality product or a service for the people. In addition to that, you need to make sure that you are earning an income based on the sale of services and products. The main focus of MLM should be to generate sales. If you are focusing only on recruitment, you are not doing it correct.</p>

                            <p>There are MLM programs, where you cannot find a quality product. There are even affiliate programs that don’t offer a quality product at all. They just focus on generating a revenue on the recruitments. These are illegal pyramid methods. You need to try your best to refrain from such illegal pyramid methods. That’s why it is always a good idea to join one of the top 100 network marketing companies and start your career in MLM.</p>

                            <p>Can you become successful with MLM?</p>
                            <p>Yes, it is possible for you to be successful with MLM business model. All you have to do is to learn the basics and stick to them at all times. Then you can reduce the chances associated with failure at all times. </p>

                            <p>MLM business is similar to all the other businesses. You need to apply the same principles in MLM business as well. Then you can figure out what you will have to do in order to remain stable and make money. It is true that the top network marketing companies have their own strategies. Multi level marketers who work for them will have to follow the marketing strategies and be successful. If you can stick to tested methods to ensure your success with MLM, you will not have to worry too much about the negative effects that would come on your way. </p>

                            <p>How to ensure success among multi level marketers?</p>

                            <p>If you want to be successful in MLM, you need to make sure that you are selecting a reputed company. It can contribute heavily towards the positive results that you can end up with. It is better if you can locate a company that has obtained the membership of Direct Selling Association. It should require all the members to have a code of ethics as well. </p>

                            <p>Before joining the company, it is worthy to take a quick look at the history of the company as well. Then you can figure out how the company has been performing in the past. Along with that, you need to take a look at the compensation plan of the company. You should also figure out money is being made for the recommendations that are done.</p>

                            <p>Secondly, you should select a service or a product that people are keen to purchase. You should also get the enthusiasm about promoting the product along with others. It should be something that benefits people at all times. Then you will be able to get your hands on the best offer at the end of the day.</p>

                            <p>You will need to treat all the MLM efforts that you do as a business of your own. You cannot consider it as a method, which can help you to get rich overnight. You should clearly define the target market, approach the prospects and then generate sales. While you are doing that, you should have a sponsor to guide you. </p>
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

                    </div>

                    <div class="col-lg-12 mb-5">

                        <div class="services-links">

                            <h3 class="text-center mb-4">Multi Level Marketers in</h3>

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
                                            <li><a href=<?php echo "multi-level-marketers-in-" . strtolower($ct); ?>><?php echo ucwords($city) ?></a></li>

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
                                            <li><a href=<?php echo "multi-level-marketers-in-" . strtolower($ct); ?>><?php echo ucwords($city) ?></a></li>


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
                                            <li><a href=<?php echo "multi-level-marketers-in-" . strtolower($ct); ?>><?php echo ucwords($city); ?></a></li>

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
                                            <li><a href=<?php echo "multi-level-marketers-in-" . strtolower($ct); ?>><?php echo ucwords($city); ?></a></li>

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
    <script src="js/main6.js"></script>


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