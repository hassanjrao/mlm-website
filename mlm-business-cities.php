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

        <title><?php echo "MLM Business in $city. Amway vs other MLM companies" ?></title>

        <meta name="description" content="<?php echo "MLM business in $city United States. Which are the top 100 MLM and fastest growing MLM companies & business models in 2020-2021? " ?>">
        <meta name="keywords" content="<?php echo "mlm business, mlm business usa, amway mlm, mlm organization, top 100 network marketing companies, mlm wlw, mlm business model, mlm examples" ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php include("head-links.php") ?>

        <script type="text/javascript">
            window._mNHandle = window._mNHandle || {};
            window._mNHandle.queue = window._mNHandle.queue || [];
            medianet_versionId = "3121199";
        </script>
        <script src="https://contextual.media.net/dmedianet.js?cid=8CUP1B0G1" async="async"></script>

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


                        <article class="mt-0">
                            <span>
                                <h1>MLM Business in <?php echo $city ?></h1><br>
                                <p>(Tips to ensure success with MLM Business)</p>
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
                                When you start your own MLM business, you will come across the need to figure out how to ensure success with it. That’s because you are expecting to receive maximum returns out of the investment you make. Otherwise, all the time and effort you spend on Multi Level Marketing would be in vain. Here are some of the most useful and effective tips that you can follow in order to ensure success with MLM. You need to make sure that you are sticking to these tips at all times to generate the best revenues out of your MLM business.
                            </p>

                        </article>



                        <article class="pb-3">

                            <span>
                                <h1 style="font-weight:350;">Fastest growing MLM Company </h1><br>
                                <p>(Join accordingly)</p>
                            </span>

                            <p class="mt-3">
                                As the very first thing, you need to make sure that you are joining the fastest growing MLM Company that exists out there. That’s because it can determine the amount of opportunities that you are exposed to. You should check how old the company is. Then you can check the number of services or products offered by the company. It is a good idea to select few direct sell companies and do a cross comparison in between what they offer. Then you can locate the best company out of all.
                            </p>
                            <p>
                                At the time of selecting a direct sell company, reputation matters a lot. Reputation is something that is not easy to earn. When you locate a reputed MLM company, you can see how well they have been doing in the past. Based on that, you can make the decision to move forward. You will not just be able to use that reputation with your MLM business. You can also get your hands on numerous other excellent tools, such as a comprehensive training system.
                            </p>
                        </article>

                        <article class="pb-3">

                            <span>
                                <h2>Direct sell companies </h2>
                                <p>(Practice what is taught to you by them)</p>
                            </span>

                            <p class="mt-3">
                                The MLM Company you select will provide you with a comprehensive training. You need to make sure that you go through it and improve your chances of ensuring success. In other words, you should be in a position to listen to the mentors and learn from them. MLM industry is structured in a way, so that the best veterans in the industry can help newcomers like you to success. In fact, they are willing to provide all the training that you need to ensure success as well. You just need to follow their guidance and ensure your success at the end of the day. If you can follow the advices shared with you by experts, you will never go wrong with your business.
                            </p>
                            <p>
                                Evaluate the upline
                            </p>
                            <p>
                                It is better if you can evaluate the upline before you join. You need to make sure that you are doing this even before you join the fastest growing MLM Company that exists out there. During the evaluation process, you must check how supportive your upline is. The upline should call you on a regular basis and deliver much-needed assistance to you. Moreover, the upline should also be in a position to help you with putting a plan in place.
                            </p>
                            <p>
                                On top of that, you should also ensure that the upline is committed to deliver support and assistance you need to ensure your success. Once you join such an opportunity, you will be able to refrain from numerous stress causing factors. When you need assistance, it will be there.
                            </p>
                            <p>
                                Take lead with the downline
                            </p>
                            <p>
                                Similar to how you are being dependent on your upline, you need to understand that there are people who depend on your support in your downline as well. Therefore, you must go ahead and take the lead with your downline at all times. Your downline will contribute heavily towards the revenue that you can generate. Hence, you should be in a position to provide support and assistance to your downline at all times.
                            </p>
                            <p>
                                You need to have time allocated on a daily basis to deliver support to the downline. It is better if you can spend around 30 days like that to support a new person who comes into the industry. You should provide a comprehensive training and support him until he is fully confident to proceed on his own. If you are willing to do that, you can end up with securing the best returns while working for a MLM business.
                            </p>
                            <p>
                                Get the most out of internet
                            </p>
                            <p>
                                As a marketer who is working with direct selling companies, you need to make sure that you are getting the most out of internet. That’s because you will come across lots of resources on the internet, which can benefit you with network marketing. For example, you can discover autoresponders, which can nurture the leads that you generate.
                            </p>
                            <p>
                                If you want to get the most out of your MLM business, you should have the skill to follow up. This is where you can get the help of an autoresponder or any other automation tool. You can make your life easy with following up the people. However, you need to make sure that you are never using the internet for spamming.


                            </p>

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
                            <h3>Take good care of your MLM business </h3>
                            <p class="pt-3">
                                MLM business is another type of business at the end of the day. This fact is true even if you join a fastest growing MLM company. Therefore, you should come up with appropriate measures to take good care of your business. You should analyze the outcomes of something you do, before you commit to it. You should also get involved with your business at all times.
                            </p>
                            <p>
                                It is important for you to set up a good team around you. This is where you can think about seeking the assistance of lawyers who are working with network marketing. That’s because the lawyers are experts in working with law. Likewise, you should also get the help of an accountant, who has a good background knowledge about the MLM business as well.
                            </p>
                            <p>
                                Conclusion
                            </p>
                            <p>
                                Now you are aware of how to ensure your success while joining the fastest growing MLM Company. Stick to these tips at all times and you will never regret about the returns that you can receive at the end of the day.
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

                    </div>

                    <div class="col-lg-12 mb-5">

                        <div class="services-links">

                            <h3 class="text-center mb-4">MLM Business in</h3>

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
                                            <li><a href=<?php echo "mlm-business-in-" . strtolower($ct); ?>><?php echo ucwords($city) ?></a></li>

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
                                            <li><a href=<?php echo "mlm-business-in-" . strtolower($ct); ?>><?php echo ucwords($city) ?></a></li>


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
                                            <li><a href=<?php echo "mlm-business-in-" . strtolower($ct); ?>><?php echo ucwords($city); ?></a></li>

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
                                            <li><a href=<?php echo "mlm-business-in-" . strtolower($ct); ?>><?php echo ucwords($city); ?></a></li>

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


    <!-- ---------------------------- -->

    <script type="text/javascript" src="//ptewarin.net/afu.php?zoneid=3417692"></script>

    <!-- ---------------------------------------------------------- -->
    <script type="text/javascript">
        var infolinks_pid = 3271549;
        var infolinks_wsid = 0;
    </script>
    <script type="text/javascript" src="//resources.infolinks.com/js/infolinks_main.js"></script>

    <!-- ----------------------------------------------- -->


    <div id="403953953">
        <script type="text/javascript">
            try {
                window._mNHandle.queue.push(function() {
                    window._mNDetails.loadTag("403953953", "728x90", "403953953");
                });
            } catch (error) {}
        </script>
    </div>




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